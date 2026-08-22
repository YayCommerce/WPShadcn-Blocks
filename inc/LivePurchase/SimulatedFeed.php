<?php
/**
 * Product pool for the Live Purchase block's simulated mode.
 *
 * Simulated mode announces that "someone" bought something, drawing the
 * something from the shop's own catalogue. No buyer is invented: there is no
 * name and no location, only a product, so the block never puts words in a
 * fictional person's mouth.
 *
 * This class only assembles the pool. The picking and the timestamps happen in
 * view.js, on purpose: a server-generated sequence would be baked into the
 * page cache, so every visitor would see the same "purchases" in the same
 * order with times that drift further from reality the longer the cache lives.
 * Shipping a pool and choosing from it per visitor costs no extra request and
 * keeps both the selection and the clock fresh.
 *
 * @package ShadcnBlocks
 * @since 1.0.0
 */

namespace ShadcnBlocks\LivePurchase;

defined( 'ABSPATH' ) || exit;

/**
 * Builds the catalogue pool that simulated mode draws from.
 */
class SimulatedFeed {

	/**
	 * How long a built pool is reused. Longer than the order feed's window
	 * because a catalogue changes far less often than an order list.
	 */
	const CACHE_TTL = 900;

	/**
	 * Option holding the invalidation counter, bumped when a product changes.
	 * Same technique as OrderFeed: the keys carry a config hash and cannot be
	 * enumerated, so the counter is part of the key instead.
	 */
	const VERSION_OPTION = 'shadcn_lp_pool_version';

	/**
	 * Pool size. Larger than any batch so the client has room to vary its
	 * picks between rounds instead of cycling the same handful.
	 */
	const POOL_SIZE = 24;

	/**
	 * Get the product pool for a config.
	 *
	 * @param array $config Effective block config. Only `showImage` changes
	 *                      the shape of the result.
	 *
	 * @return array<int,array<string,string>> Each item: product, image.
	 */
	public static function get( array $config ) {
		$want_image = ! empty( $config['showImage'] );
		$key        = 'shadcn_lp_pool_' . self::version() . '_' . ( $want_image ? 'img' : 'txt' );

		$cached = get_transient( $key );

		if ( is_array( $cached ) ) {
			return $cached;
		}

		$pool = self::build( $want_image );

		set_transient( $key, $pool, self::CACHE_TTL );

		return $pool;
	}

	/**
	 * Query the catalogue.
	 *
	 * Best sellers first. A shop with sales history then advertises what
	 * actually moves, which is both more plausible and more useful; a new shop
	 * has every total_sales at zero, so WooCommerce falls back to its own
	 * secondary ordering and the pool is effectively arbitrary — which is the
	 * right outcome rather than an error.
	 *
	 * @param bool $want_image Whether to resolve thumbnails.
	 *
	 * @return array<int,array<string,string>>
	 */
	private static function build( $want_image ) {
		if ( ! function_exists( 'wc_get_products' ) ) {
			return array();
		}

		$products = wc_get_products(
			array(
				'limit'        => self::POOL_SIZE,
				'status'       => 'publish',
				'orderby'      => 'popularity',
				'order'        => 'DESC',
				'stock_status' => 'instock',
				'return'       => 'objects',
			)
		);

		if ( ! is_array( $products ) ) {
			return array();
		}

		$pool = array();

		foreach ( $products as $product ) {
			if ( ! is_a( $product, 'WC_Product' ) ) {
				continue;
			}

			// Hidden and search-only products are not on display anywhere
			// else, so announcing them would be odd.
			if ( ! in_array( $product->get_catalog_visibility(), array( 'visible', 'catalog' ), true ) ) {
				continue;
			}

			$name = trim( (string) $product->get_name() );

			if ( '' === $name ) {
				continue;
			}

			$item = array( 'product' => $name );

			if ( $want_image ) {
				$image_id = $product->get_image_id();
				$src      = $image_id ? wp_get_attachment_image_url( $image_id, 'thumbnail' ) : '';

				if ( $src ) {
					$item['image'] = (string) $src;
				}
			}

			$pool[] = $item;
		}

		return $pool;
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
	 * Retire every cached pool.
	 *
	 * Hooked to product saves and deletions.
	 */
	public static function flush() {
		update_option( self::VERSION_OPTION, self::version() + 1, false );
	}
}
