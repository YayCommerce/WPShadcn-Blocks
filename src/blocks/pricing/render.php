<?php
/**
 * Pricing block render.
 *
 * Carries the selected billing interval and nothing else. The choice lives as
 * `interval` on this block's context, so any Pricing Switch or Pricing Price
 * nested anywhere below — at any depth, inside any layout — reads the same
 * value. Deliberately imposes no structure of its own: pricing layouts differ
 * in almost every respect except that one shared value.
 *
 * The interval is a key rather than a monthly/yearly boolean so a site can
 * offer as many periods as it sells — quarterly, lifetime, and so on.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (inner blocks).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'block_shadcn_pricing_render' ) ) {
	/**
	 * Render callback for the Pricing block.
	 *
	 * @param array    $attributes Block attributes.
	 * @param string   $content    Rendered inner blocks.
	 * @param WP_Block $block      Block instance.
	 *
	 * @return string
	 */
	function block_shadcn_pricing_render( $attributes, $content, $block ) {
		if ( '' === trim( (string) $content ) ) {
			return '';
		}

		$intervals = shadcn_pricing_intervals( $attributes['intervals'] ?? array() );

		// Fall back to the first declared interval so a page never loads with
		// no period selected and therefore no prices showing.
		$default = isset( $attributes['defaultInterval'] ) ? (string) $attributes['defaultInterval'] : '';
		$keys    = wp_list_pluck( $intervals, 'key' );

		if ( '' === $default || ! in_array( $default, $keys, true ) ) {
			$default = $keys ? $keys[0] : '';
		}

		$context = array(
			'interval' => $default,
		);

		$wrapper_attributes = get_block_wrapper_attributes(
			array(
				'class' => 'wp-block-shadcn-pricing',
			)
		);

		ob_start();
		?>
		<div
			<?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			data-wp-interactive="shadcn/pricing"
			<?php echo wp_interactivity_data_wp_context( $context, 'shadcn/pricing' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		>
			<?php echo $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</div>
		<?php

		return ob_get_clean();
	}
}

echo block_shadcn_pricing_render( $attributes ?? array(), $content ?? '', $block ?? null ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
