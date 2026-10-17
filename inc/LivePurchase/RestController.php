<?php
/**
 * Public REST route serving the Live Purchase feed.
 *
 * The route is open to logged-out visitors, so the trust boundary is:
 * per-IP rate limit -> signature check -> allowlist and clamp -> OrderFeed.
 *
 * The signature is the load-bearing part. Which fields the toast shows is a
 * block setting, and a block setting reaching a public endpoint is just a
 * query parameter — an attacker would simply ask for every field. So
 * render.php stamps an HMAC of the config next to it, and this class refuses
 * any config whose signature does not match. Same idiom as
 * Form\RestController::recipient_signature(), which stops a visitor
 * redirecting a form to their own address.
 *
 * A valid signature proves origin, not sanity: an author could still have
 * saved batchSize 500. So every number is clamped after verification.
 *
 * @package ShadcnBlocks
 * @since 1.0.0
 */

namespace ShadcnBlocks\LivePurchase;

use ShadcnBlocks\Traits\SingletonTrait;

defined( 'ABSPATH' ) || exit;

/**
 * Live Purchase feed endpoint.
 */
class RestController {
	use SingletonTrait;

	/**
	 * Requests allowed per IP per window. A reader's tab makes roughly two
	 * per window; this is headroom for them and a wall for a sampler.
	 */
	const RATE_LIMIT = 20;

	/**
	 * Rate-limit window, seconds.
	 */
	const RATE_WINDOW = 600;

	/**
	 * Config keys that may cross the wire, with their clamps. Anything not
	 * listed here is dropped even when correctly signed, so adding an
	 * attribute to the block cannot widen the endpoint by accident.
	 */
	const BOOL_KEYS = array( 'showName', 'showLocation', 'showProduct', 'showImage', 'showTime' );

	/**
	 * Numeric config keys as [min, max, default].
	 */
	const INT_KEYS = array(
		'batchSize'    => array( 1, 20, 10 ),
		'minOrders'    => array( 0, 100, 8 ),
		'lookbackDays' => array( 1, 365, 30 ),
	);

	/**
	 * Rate limiter.
	 *
	 * @var RateLimiter
	 */
	private $rate_limiter;

	/**
	 * Wire the route and the cache invalidation.
	 */
	protected function __construct() {
		$this->rate_limiter = new RateLimiter( 'shadcn_lp_rl_', self::RATE_LIMIT, self::RATE_WINDOW );

		add_action( 'rest_api_init', array( $this, 'register_route' ) );

		// Any status transition can add or remove an eligible order, so the
		// whole cached family is retired rather than reasoned about.
		add_action( 'woocommerce_order_status_changed', array( OrderFeed::class, 'flush' ) );

		// The simulated pool is built from the catalogue, so it is the
		// catalogue that invalidates it.
		add_action( 'woocommerce_update_product', array( SimulatedFeed::class, 'flush' ) );
		add_action( 'woocommerce_new_product', array( SimulatedFeed::class, 'flush' ) );
		add_action( 'woocommerce_delete_product', array( SimulatedFeed::class, 'flush' ) );
	}

	/**
	 * Register the feed route.
	 */
	public function register_route() {
		register_rest_route(
			'shadcn/v1',
			'/live-purchase',
			array(
				'methods'             => 'GET',
				'callback'            => array( $this, 'handle_feed' ),
				'permission_callback' => '__return_true',
				'args'                => array(
					'c' => array(
						'required'          => true,
						'type'              => 'string',
						'validate_callback' => array( $this, 'validate_config_param' ),
					),
					's' => array(
						'required'          => true,
						'type'              => 'string',
						'validate_callback' => array( $this, 'validate_signature_param' ),
					),
				),
			)
		);
	}

	/**
	 * The config parameter must look like base64url of a small JSON object
	 * before anything tries to decode it.
	 *
	 * @param mixed $value Raw parameter.
	 *
	 * @return bool
	 */
	public function validate_config_param( $value ) {
		return is_string( $value )
			&& '' !== $value
			&& strlen( $value ) <= 1024
			&& (bool) preg_match( '/^[A-Za-z0-9_-]+$/', $value );
	}

	/**
	 * The signature is a sha256 HMAC in hex.
	 *
	 * @param mixed $value Raw parameter.
	 *
	 * @return bool
	 */
	public function validate_signature_param( $value ) {
		return is_string( $value ) && (bool) preg_match( '/^[a-f0-9]{64}$/', $value );
	}

	/**
	 * Serve the feed.
	 *
	 * @param \WP_REST_Request $request The request.
	 *
	 * @return \WP_REST_Response|\WP_Error
	 */
	public function handle_feed( \WP_REST_Request $request ) {
		// REMOTE_ADDR only — forwarding headers are client-controlled, and a
		// spoofable key would turn the limiter into a bypass.
		$ip = isset( $_SERVER['REMOTE_ADDR'] ) ? (string) $_SERVER['REMOTE_ADDR'] : '';

		if ( ! $this->rate_limiter->is_allowed( $ip ) ) {
			return new \WP_Error(
				'rate_limited',
				__( 'Too many requests.', 'yaycommerce-blocks-for-shadcn-ui' ),
				array( 'status' => 429 )
			);
		}

		if ( ! shadcn_blocks_woo_active() ) {
			// Woo was deactivated since the page was cached. Nothing to serve,
			// but nothing went wrong either.
			return rest_ensure_response( array( 'entries' => array() ) );
		}

		$encoded   = (string) $request->get_param( 'c' );
		$signature = (string) $request->get_param( 's' );

		if ( ! hash_equals( self::sign( $encoded ), $signature ) ) {
			return $this->invalid();
		}

		$decoded = json_decode( self::base64url_decode( $encoded ), true );

		if ( ! is_array( $decoded ) ) {
			return $this->invalid();
		}

		$config = self::normalize( $decoded );

		// A feed that would show nothing has no reason to run a query.
		if ( empty( $config['showName'] ) && empty( $config['showProduct'] ) && empty( $config['showLocation'] ) ) {
			return rest_ensure_response( array( 'entries' => array() ) );
		}

		return rest_ensure_response( array( 'entries' => OrderFeed::get( $config ) ) );
	}

	/**
	 * Rebuild the config from an allowlist, clamping every number.
	 *
	 * The decoded array is never used directly. A signature proves the block
	 * produced these values; it says nothing about whether they are sensible,
	 * and it says nothing about keys the block never had.
	 *
	 * @param array $decoded Decoded config.
	 *
	 * @return array<string,mixed>
	 */
	public static function normalize( array $decoded ) {
		$config = array();

		foreach ( self::BOOL_KEYS as $key ) {
			$config[ $key ] = ! empty( $decoded[ $key ] );
		}

		foreach ( self::INT_KEYS as $key => $bounds ) {
			list( $min, $max, $default ) = $bounds;

			$value = isset( $decoded[ $key ] ) && is_numeric( $decoded[ $key ] )
				? (int) $decoded[ $key ]
				: $default;

			$config[ $key ] = (int) max( $min, min( $max, $value ) );
		}

		return $config;
	}

	/**
	 * Encode a config for the query string.
	 *
	 * Base64url rather than raw JSON so the value survives query-string
	 * handling, caching layers and log scrubbers without escaping games. It is
	 * not secrecy — the signature is what makes it tamper-evident.
	 *
	 * @param array $config Config to send.
	 *
	 * @return string
	 */
	public static function encode( array $config ) {
		$normalized = self::normalize( $config );

		// Sorted so the same settings always produce the same string, and
		// therefore the same signature and the same cache key.
		ksort( $normalized );

		return self::base64url_encode( (string) wp_json_encode( $normalized ) );
	}

	/**
	 * HMAC binding an encoded config to this site's salt.
	 *
	 * Deterministic and unexpiring, unlike a nonce, so a page cached for a day
	 * still carries a signature the endpoint accepts.
	 *
	 * @param string $encoded Base64url-encoded config.
	 *
	 * @return string
	 */
	public static function sign( $encoded ) {
		return hash_hmac( 'sha256', 'shadcn-live-purchase|' . $encoded, wp_salt( 'auth' ) );
	}

	/**
	 * @param string $data Raw bytes.
	 *
	 * @return string
	 */
	private static function base64url_encode( $data ) {
		return rtrim( strtr( base64_encode( $data ), '+/', '-_' ), '=' );
	}

	/**
	 * @param string $data Base64url string.
	 *
	 * @return string Empty string when the input is not decodable.
	 */
	private static function base64url_decode( $data ) {
		$decoded = base64_decode( strtr( $data, '-_', '+/' ), true );

		return false === $decoded ? '' : $decoded;
	}

	/**
	 * One generic rejection for every kind of bad input, so the response does
	 * not tell a prober which part they got wrong.
	 *
	 * @return \WP_Error
	 */
	private function invalid() {
		return new \WP_Error(
			'invalid',
			__( 'Invalid request.', 'yaycommerce-blocks-for-shadcn-ui' ),
			array( 'status' => 400 )
		);
	}
}
