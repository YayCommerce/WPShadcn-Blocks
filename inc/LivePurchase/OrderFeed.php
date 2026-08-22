<?php
/**
 * Recent-orders feed for the Live Purchase block.
 *
 * Turns WooCommerce orders into the smallest set of strings a toast can show,
 * and nothing more. The reduction happens here, before the payload ever
 * reaches the REST layer, so a field the block did not ask for has no path to
 * the wire — it is never built, rather than built and hidden.
 *
 * Everything goes through wc_get_orders(), the CRUD API, which reads whichever
 * storage WooCommerce is configured for. Direct wp_posts/postmeta SQL would be
 * faster and would break the moment a shop enables High-Performance Order
 * Storage, so it is not used.
 *
 * @package ShadcnBlocks
 * @since 1.0.0
 */

namespace ShadcnBlocks\LivePurchase;

defined( 'ABSPATH' ) || exit;

/**
 * Reads recent orders and reduces them for public display.
 */
class OrderFeed {

	/**
	 * How long a shaped payload is reused. Short enough that the toast still
	 * feels current, long enough that a burst of visitors costs one query.
	 */
	const CACHE_TTL = 60;

	/**
	 * Option holding a counter that is bumped whenever an order changes
	 * status. It is part of every cache key, so bumping it retires the whole
	 * family of cached payloads at once — which matters because the keys
	 * include a config hash and are therefore not enumerable.
	 */
	const VERSION_OPTION = 'shadcn_lp_feed_version';

	/**
	 * Statuses a purchase notification may draw from.
	 *
	 * An allowlist rather than an exclusion list: a future WooCommerce or a
	 * shop plugin adding a status must not silently become eligible. In
	 * particular this keeps refunded, cancelled, failed, pending and draft
	 * orders out — announcing a refunded order is worse than announcing
	 * nothing.
	 */
	const ELIGIBLE_STATUSES = array( 'wc-processing', 'wc-completed' );

	/**
	 * Fetch the shaped, cached feed for a config.
	 *
	 * @param array $config Effective config, already verified and clamped by
	 *                      RestController. Keys: showName, showLocation,
	 *                      showProduct, showImage, showTime, batchSize,
	 *                      minOrders, lookbackDays.
	 *
	 * @return array<int,array<string,mixed>> Entries, possibly empty.
	 */
	public static function get( array $config ) {
		$key    = self::cache_key( $config );
		$cached = get_transient( $key );

		if ( is_array( $cached ) ) {
			return $cached;
		}

		$entries = self::build( $config );

		set_transient( $key, $entries, self::CACHE_TTL );

		return $entries;
	}

	/**
	 * Query and reduce. No caching concerns in here.
	 *
	 * @param array $config Effective config.
	 *
	 * @return array<int,array<string,mixed>>
	 */
	private static function build( array $config ) {
		if ( ! function_exists( 'wc_get_orders' ) ) {
			return array();
		}

		$batch     = (int) $config['batchSize'];
		$minimum   = (int) $config['minOrders'];
		$lookback  = (int) $config['lookbackDays'];

		// One query serves both the threshold test and the batch: ask for
		// whichever is larger, then decide. A separate COUNT would double the
		// cost of the common case for no benefit.
		$limit = max( $batch, $minimum );

		$orders = wc_get_orders(
			array(
				'limit'        => $limit,
				'status'       => self::ELIGIBLE_STATUSES,
				'orderby'      => 'date_created',
				'order'        => 'DESC',
				'date_created' => '>' . ( time() - $lookback * DAY_IN_SECONDS ),
				'return'       => 'objects',
			)
		);

		if ( ! is_array( $orders ) ) {
			return array();
		}

		// A shop with a handful of orders would replay the same few people all
		// day, which reads as less credible than showing nothing. Staying
		// quiet below the threshold is the point of the setting.
		if ( count( $orders ) < $minimum ) {
			return array();
		}

		$entries = array();

		foreach ( array_slice( $orders, 0, $batch ) as $order ) {
			$entry = self::shape( $order, $config );

			if ( ! empty( $entry ) ) {
				$entries[] = $entry;
			}
		}

		return $entries;
	}

	/**
	 * Reduce one order to the fields the config allows.
	 *
	 * Never emits order ID, order total, customer ID, email address, street
	 * or postcode. None are needed to say that someone bought something, and
	 * each is a disclosure the shop owner did not ask to publish.
	 *
	 * @param \WC_Order $order  The order.
	 * @param array     $config Effective config.
	 *
	 * @return array<string,mixed> Empty when nothing displayable survives.
	 */
	private static function shape( $order, array $config ) {
		if ( ! is_a( $order, 'WC_Order' ) ) {
			return array();
		}

		$entry = array();

		if ( ! empty( $config['showName'] ) ) {
			$entry['name'] = self::display_name( $order );
		}

		if ( ! empty( $config['showLocation'] ) ) {
			$location = self::display_location( $order );

			if ( '' !== $location ) {
				$entry['location'] = $location;
			}
		}

		$items = $order->get_items();

		if ( ! empty( $config['showProduct'] ) ) {
			$product_label = self::display_product( $items );

			if ( '' === $product_label ) {
				// A purchase notification with no purchase in it is noise.
				return array();
			}

			$entry['product'] = $product_label;
		}

		if ( ! empty( $config['showImage'] ) ) {
			$image = self::display_image( $items );

			if ( '' !== $image ) {
				$entry['image'] = $image;
			}
		}

		if ( ! empty( $config['showTime'] ) ) {
			$created = $order->get_date_created();

			if ( $created ) {
				// A timestamp, not a rendered "2 minutes ago". The payload is
				// cached, and a pre-rendered string would freeze at the moment
				// the cache was written; the client formats it at display time.
				$entry['time'] = (int) $created->getTimestamp();
			}
		}

		return $entry;
	}

	/**
	 * First name plus last initial, or a neutral stand-in.
	 *
	 * Guest checkouts routinely have no billing name. The fallback is a fixed
	 * phrase rather than anything derived from the order — deriving a name
	 * from the email local part would leak more than the shop chose to show,
	 * not less.
	 *
	 * @param \WC_Order $order The order.
	 *
	 * @return string
	 */
	private static function display_name( $order ) {
		$first = trim( (string) $order->get_billing_first_name() );
		$last  = trim( (string) $order->get_billing_last_name() );

		if ( '' === $first ) {
			return __( 'Someone', 'shadcn-blocks' );
		}

		if ( '' === $last ) {
			return $first;
		}

		// mb_substr so a multi-byte initial is not cut mid-character.
		$initial = function_exists( 'mb_substr' ) ? mb_substr( $last, 0, 1 ) : substr( $last, 0, 1 );

		/* translators: 1: first name, 2: last-name initial. */
		return sprintf( __( '%1$s %2$s.', 'shadcn-blocks' ), $first, $initial );
	}

	/**
	 * City and state. Never street, never postcode.
	 *
	 * @param \WC_Order $order The order.
	 *
	 * @return string Empty when the order has no city.
	 */
	private static function display_location( $order ) {
		$city  = trim( (string) $order->get_billing_city() );
		$state = trim( (string) $order->get_billing_state() );

		if ( '' === $city ) {
			return '';
		}

		if ( '' === $state ) {
			return $city;
		}

		/* translators: 1: city, 2: state or region code. */
		return sprintf( __( '%1$s, %2$s', 'shadcn-blocks' ), $city, $state );
	}

	/**
	 * The first line item's name, with a count for the rest.
	 *
	 * Listing every product would turn a one-line toast into a receipt, and a
	 * long order would say more about the customer than the shop intended.
	 *
	 * @param array $items Order line items.
	 *
	 * @return string
	 */
	private static function display_product( $items ) {
		$first = null;

		foreach ( $items as $item ) {
			$first = $item;
			break;
		}

		if ( null === $first ) {
			return '';
		}

		$name = trim( (string) $first->get_name() );

		if ( '' === $name ) {
			return '';
		}

		$extra = count( $items ) - 1;

		if ( $extra < 1 ) {
			return $name;
		}

		return sprintf(
			/* translators: 1: product name, 2: number of additional items. */
			_n( '%1$s and %2$d more item', '%1$s and %2$d more items', $extra, 'shadcn-blocks' ),
			$name,
			$extra
		);
	}

	/**
	 * Thumbnail URL of the first line item's product.
	 *
	 * @param array $items Order line items.
	 *
	 * @return string Empty when there is no image.
	 */
	private static function display_image( $items ) {
		foreach ( $items as $item ) {
			$product = is_callable( array( $item, 'get_product' ) ) ? $item->get_product() : null;

			if ( ! $product ) {
				return '';
			}

			$image_id = $product->get_image_id();

			if ( ! $image_id ) {
				return '';
			}

			$src = wp_get_attachment_image_url( $image_id, 'thumbnail' );

			return $src ? (string) $src : '';
		}

		return '';
	}

	/**
	 * Cache key for a config, scoped by the invalidation counter.
	 *
	 * @param array $config Effective config.
	 *
	 * @return string
	 */
	private static function cache_key( array $config ) {
		ksort( $config );

		return 'shadcn_lp_feed_' . self::version() . '_' . substr(
			md5( (string) wp_json_encode( $config ) ),
			0,
			24
		);
	}

	/**
	 * Current invalidation counter.
	 *
	 * @return int
	 */
	private static function version() {
		return (int) get_option( self::VERSION_OPTION, 1 );
	}

	/**
	 * Retire every cached payload.
	 *
	 * Hooked to order status transitions: the keys carry a config hash and
	 * cannot be enumerated, so the counter in the key is bumped instead and
	 * the orphaned transients age out on their own within CACHE_TTL.
	 */
	public static function flush() {
		update_option( self::VERSION_OPTION, self::version() + 1, false );
	}
}
