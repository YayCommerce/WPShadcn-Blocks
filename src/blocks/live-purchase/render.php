<?php
/**
 * Live Purchase block render.
 *
 * Prints nothing where the block sits. The toast is a fixed-position element
 * that must escape whatever container the author dropped the block into, so
 * the actual region is printed once in the footer by
 * ShadcnBlocks\Plugin::render_live_purchase_region(). This file hands its
 * resolved config to Plugin::register_live_purchase_config() instead.
 *
 * Only the config travels. In `orders` mode the entries are fetched later over
 * the signed REST route; in `simulated` mode the catalogue pool rides along and
 * the client picks from it.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (unused; dynamic block).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'block_shadcn_live_purchase_clamp' ) ) {
	/**
	 * Clamp a numeric attribute into a sane range.
	 *
	 * The editor already limits these, but an attribute is just text in the
	 * post content and can be hand-edited, so the front end re-checks rather
	 * than trusting what it is handed.
	 *
	 * @param mixed $value   Raw attribute value.
	 * @param int   $min     Lowest allowed value.
	 * @param int   $max     Highest allowed value.
	 * @param int   $default Fallback when the value is not numeric.
	 *
	 * @return int
	 */
	function block_shadcn_live_purchase_clamp( $value, $min, $max, $default ) {
		if ( ! is_numeric( $value ) ) {
			return $default;
		}

		return (int) max( $min, min( $max, (int) $value ) );
	}
}

if ( ! function_exists( 'block_shadcn_live_purchase_render' ) ) {
	/**
	 * Render callback for the Live Purchase block.
	 *
	 * @param array $attributes Block attributes.
	 *
	 * @return string Always empty — the region is printed in the footer.
	 */
	function block_shadcn_live_purchase_render( $attributes ) {
		$source = isset( $attributes['source'] ) ? (string) $attributes['source'] : 'orders';
		if ( ! in_array( $source, array( 'orders', 'simulated' ), true ) ) {
			$source = 'orders';
		}

		$config = array(
			'source'           => $source,
			'showName'         => ! empty( $attributes['showName'] ),
			'showLocation'     => ! empty( $attributes['showLocation'] ),
			'showProduct'      => ! empty( $attributes['showProduct'] ),
			'showImage'        => ! empty( $attributes['showImage'] ),
			'showTime'         => ! empty( $attributes['showTime'] ),
			'rotationInterval' => block_shadcn_live_purchase_clamp( $attributes['rotationInterval'] ?? 12, 4, 120, 12 ),
			'displayDuration'  => block_shadcn_live_purchase_clamp( $attributes['displayDuration'] ?? 6, 2, 60, 6 ),
			'batchSize'        => block_shadcn_live_purchase_clamp( $attributes['batchSize'] ?? 10, 1, 20, 10 ),
			'minOrders'        => block_shadcn_live_purchase_clamp( $attributes['minOrders'] ?? 8, 0, 100, 8 ),
			'lookbackDays'     => block_shadcn_live_purchase_clamp( $attributes['lookbackDays'] ?? 30, 1, 365, 30 ),
			'dismissible'      => ! empty( $attributes['dismissible'] ),
			'hideOnMobile'     => ! empty( $attributes['hideOnMobile'] ),
		);

		// Simulated mode says only that someone bought a product: no buyer is
		// invented, so the name and location toggles do not apply to it.
		if ( 'simulated' === $source ) {
			$config['showName']     = false;
			$config['showLocation'] = false;
		}

		// A toast that shows nothing at all is not worth mounting.
		if ( 'simulated' === $source ) {
			if ( ! $config['showProduct'] ) {
				return '';
			}
		} elseif ( ! $config['showName'] && ! $config['showProduct'] && ! $config['showLocation'] ) {
			return '';
		}

		// Seeded so the view script never writes a key that was absent at
		// hydration — the Interactivity API's reactivity for late-added keys
		// is version-dependent, and this costs one line.
		$config['entries']   = array();
		$config['dismissed'] = false;

		// Simulated mode ships the catalogue pool and lets the client pick from
		// it; `orders` fetches later so nothing about the shop is embedded in
		// the page.
		if ( 'simulated' === $source ) {
			$config['pool'] = \ShadcnBlocks\LivePurchase\SimulatedFeed::get( $config );

			if ( empty( $config['pool'] ) ) {
				// No sellable products, nothing to announce.
				return '';
			}
		} else {
			// The feed endpoint is public, so which fields it may return
			// cannot be a plain query parameter — a caller would just ask for
			// all of them. The config travels signed, and the endpoint
			// refuses any config whose signature does not match.
			$feed_config = \ShadcnBlocks\LivePurchase\RestController::encode( $config );

			$config['feed'] = array(
				'url'       => rest_url( 'shadcn/v1/live-purchase' ),
				'config'    => $feed_config,
				'signature' => \ShadcnBlocks\LivePurchase\RestController::sign( $feed_config ),
			);
		}

		\ShadcnBlocks\Plugin::get_instance()->register_live_purchase_config( $config );

		return '';
	}
}

echo block_shadcn_live_purchase_render( $attributes ?? array() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
