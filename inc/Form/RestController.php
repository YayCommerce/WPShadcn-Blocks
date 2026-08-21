<?php
/**
 * REST route for the Form block: fields in, one email out.
 *
 * Public and nonce-free by design: the route serves logged-out visitors, and
 * a cookie nonce baked into a full-page-cached response expires inside the
 * cached HTML. The trust boundary is instead: per-IP rate limit → honeypot →
 * shape/size validation → the `shadcn_form_validate` filter (site owners can
 * bolt on a captcha) → wp_mail. Nothing is stored.
 *
 * @package ShadcnBlocks
 * @since 1.0.0
 */

namespace ShadcnBlocks\Form;

use ShadcnBlocks\Traits\SingletonTrait;

class RestController {
	use SingletonTrait;

	/**
	 * Field-count and length caps: a contact form has no business carrying
	 * more, and unbounded input is a mail-bomb amplifier.
	 */
	const MAX_FIELDS       = 30;
	const MAX_LABEL_CHARS  = 200;
	const MAX_VALUE_CHARS  = 5000;

	private $rate_limiter;

	protected function __construct() {
		$this->rate_limiter = new RateLimiter();

		add_action( 'rest_api_init', array( $this, 'register_route' ) );
	}

	public function register_route() {
		register_rest_route(
			'shadcn/v1',
			'/form/submit',
			array(
				'methods'             => 'POST',
				'callback'            => array( $this, 'handle_submit' ),
				'permission_callback' => '__return_true',
			)
		);
	}

	/**
	 * @param \WP_REST_Request $request The submit request.
	 * @return \WP_REST_Response|\WP_Error
	 */
	public function handle_submit( \WP_REST_Request $request ) {
		// REMOTE_ADDR only — forwarding headers are client-controlled, and a
		// spoofable key would turn the limiter into a bypass.
		$ip = isset( $_SERVER['REMOTE_ADDR'] ) ? (string) $_SERVER['REMOTE_ADDR'] : '';
		if ( ! $this->rate_limiter->is_allowed( $ip ) ) {
			return new \WP_Error(
				'rate_limited',
				__( 'Too many submissions. Please try again later.', 'shadcn-blocks' ),
				array( 'status' => 429 )
			);
		}

		// A filled honeypot gets the same generic response as malformed
		// input — revealing which trap fired teaches the bot which to avoid.
		$honeypot = $request->get_param( 'website' );
		$honeypot = is_string( $honeypot ) ? $honeypot : 'nonstring';
		$fields   = $request->get_param( 'fields' );

		if ( '' !== $honeypot || ! is_array( $fields ) || empty( $fields ) || count( $fields ) > self::MAX_FIELDS ) {
			return $this->invalid();
		}

		$lines       = array();
		$reply_to    = '';
		foreach ( $fields as $field ) {
			if ( ! is_array( $field )
				|| ! isset( $field['label'], $field['value'] )
				|| ! is_string( $field['label'] )
				|| ! is_string( $field['value'] )
			) {
				return $this->invalid();
			}

			$field_label = sanitize_text_field( $field['label'] );
			$field_value = sanitize_textarea_field( $field['value'] );

			if ( mb_strlen( $field_label ) > self::MAX_LABEL_CHARS || mb_strlen( $field_value ) > self::MAX_VALUE_CHARS ) {
				return $this->invalid();
			}

			// First valid email value becomes Reply-To so the recipient can
			// answer the submitter directly. is_email() also guarantees a
			// single-line value, closing header injection through this path.
			if ( '' === $reply_to && is_email( $field_value ) ) {
				$reply_to = $field_value;
			}

			$lines[] = $field_label . ': ' . $field_value;
		}

		// Site-owner extension point (documented in readme.txt): return a
		// WP_Error to block the submission — e.g. a captcha verification.
		$veto = apply_filters( 'shadcn_form_validate', null, $request );
		if ( is_wp_error( $veto ) ) {
			return $veto;
		}

		$form_name = $request->get_param( 'formName' );
		$form_name = is_string( $form_name ) ? sanitize_text_field( $form_name ) : '';
		if ( '' === $form_name ) {
			$form_name = __( 'Contact', 'shadcn-blocks' );
		}

		// The recipient must be one an editor saved into the form, not one the
		// visitor typed into the request: render.php signs the attribute value
		// (see recipient_signature()) and the pair is verified here. Anything
		// unsigned or forged falls back to the admin — otherwise this public
		// route would relay mail to arbitrary addresses under the site's name.
		$recipient = $request->get_param( 'recipient' );
		$recipient = is_string( $recipient ) ? sanitize_email( $recipient ) : '';
		$signature = $request->get_param( 'recipientSig' );
		if (
			'' === $recipient
			|| ! is_email( $recipient )
			|| ! is_string( $signature )
			|| ! hash_equals( self::recipient_signature( $recipient ), $signature )
		) {
			$recipient = get_option( 'admin_email' );
		}

		$lines[] = '';
		$lines[] = sprintf(
			/* translators: 1: page URL the form was submitted from. */
			__( 'Sent from: %s', 'shadcn-blocks' ),
			esc_url_raw( (string) $request->get_header( 'referer' ) )
		);

		$subject = sprintf( '[%s] %s', get_bloginfo( 'name' ), $form_name );
		$headers = array();
		if ( '' !== $reply_to ) {
			$headers[] = 'Reply-To: ' . $reply_to;
		}

		$sent = wp_mail( $recipient, $subject, implode( "\n", $lines ), $headers );

		if ( ! $sent ) {
			return new \WP_Error(
				'mail_failed',
				__( 'The message could not be sent.', 'shadcn-blocks' ),
				array( 'status' => 500 )
			);
		}

		return rest_ensure_response( array( 'success' => true ) );
	}

	/**
	 * HMAC binding a recipient address to this site's salt. render.php stamps
	 * it next to the address; handle_submit() verifies the pair. Cache-safe
	 * (deterministic, no expiry) unlike a nonce, and it keeps the visitor from
	 * substituting their own recipient.
	 *
	 * @param string $recipient The recipient email address.
	 * @return string
	 */
	public static function recipient_signature( $recipient ) {
		return hash_hmac( 'sha256', 'shadcn-form-recipient|' . $recipient, wp_salt( 'auth' ) );
	}

	/**
	 * The one generic 400 for every kind of bad input.
	 *
	 * @return \WP_Error
	 */
	private function invalid() {
		return new \WP_Error(
			'invalid',
			__( 'Invalid submission.', 'shadcn-blocks' ),
			array( 'status' => 400 )
		);
	}
}
