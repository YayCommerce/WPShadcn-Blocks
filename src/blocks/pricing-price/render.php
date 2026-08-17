<?php
/**
 * Pricing Price block render.
 *
 * One figure is emitted per priced interval and the ancestor Pricing block's
 * `interval` context decides which is shown. Rendering them all keeps the swap
 * instant and means the correct price is already in the HTML before any script
 * runs.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (unused).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'block_shadcn_pricing_price_figure' ) ) {
	/**
	 * Build one price figure.
	 *
	 * @param string $currency  Currency symbol.
	 * @param string $amount    Price amount.
	 * @param string $period    Period caption.
	 * @param string $directive Interactivity attributes for this figure, if any.
	 *
	 * @return string
	 */
	function block_shadcn_pricing_price_figure( $currency, $amount, $period, $directive ) {
		$parts = '';

		if ( '' !== $currency ) {
			$parts .= '<span class="wp-block-shadcn-pricing-price__currency">' . esc_html( $currency ) . '</span>';
		}

		$parts .= '<span class="wp-block-shadcn-pricing-price__amount">' . esc_html( $amount ) . '</span>';

		if ( '' !== $period ) {
			$parts .= '<span class="wp-block-shadcn-pricing-price__period">' . esc_html( $period ) . '</span>';
		}

		return '<span class="wp-block-shadcn-pricing-price__figure" ' . $directive . '>' . $parts . '</span>';
	}
}

if ( ! function_exists( 'block_shadcn_pricing_price_render' ) ) {
	/**
	 * Render callback for the Pricing Price block.
	 *
	 * @param array    $attributes Block attributes.
	 * @param string   $content    Block content (unused).
	 * @param WP_Block $block      Block instance.
	 *
	 * @return string
	 */
	function block_shadcn_pricing_price_render( $attributes, $content, $block ) {
		$currency = isset( $attributes['currency'] ) ? (string) $attributes['currency'] : '';
		$prices   = isset( $attributes['prices'] ) && is_array( $attributes['prices'] ) ? $attributes['prices'] : array();

		// Keep only entries that name an interval and carry an amount.
		$priced = array();
		foreach ( $prices as $price ) {
			if ( ! is_array( $price ) || empty( $price['key'] ) ) {
				continue;
			}
			if ( '' === trim( (string) ( $price['amount'] ?? '' ) ) ) {
				continue;
			}
			$priced[] = $price;
		}

		if ( ! $priced ) {
			return '';
		}

		$currency_placement = isset( $attributes['currencyPlacement'] ) ? $attributes['currencyPlacement'] : 'inline';
		$period_placement   = isset( $attributes['periodPlacement'] ) ? $attributes['periodPlacement'] : 'inline';

		if ( ! in_array( $currency_placement, array( 'inline', 'superscript' ), true ) ) {
			$currency_placement = 'inline';
		}
		if ( ! in_array( $period_placement, array( 'inline', 'below' ), true ) ) {
			$period_placement = 'inline';
		}

		// A plan that costs the same whatever the interval needs only one
		// figure, which must then stay visible for every interval.
		$single = 1 === count( $priced );

		$figures = '';
		foreach ( $priced as $price ) {
			$directive = '';

			if ( ! $single ) {
				$directive = wp_interactivity_data_wp_context(
					array( 'intervalKey' => (string) $price['key'] ),
					'shadcn/pricing'
				) . ' data-wp-bind--hidden="!state.isActive"';
			}

			$figures .= block_shadcn_pricing_price_figure(
				$currency,
				(string) $price['amount'],
				(string) ( $price['period'] ?? '' ),
				$directive
			);
		}

		$classes = 'wp-block-shadcn-pricing-price'
			. ' is-currency-' . $currency_placement
			. ' is-period-' . $period_placement;

		$wrapper_attributes = get_block_wrapper_attributes( array( 'class' => $classes ) );

		return '<p ' . $wrapper_attributes . '>' . $figures . '</p>';
	}
}

echo block_shadcn_pricing_price_render( $attributes ?? array(), $content ?? '', $block ?? null ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
