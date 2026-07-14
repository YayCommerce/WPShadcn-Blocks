<?php
/**
 * Accordion block render.
 *
 * Renders the interactive root. Each child accordion-item inherits the
 * `openId` context; a single item is open at a time (exclusive), and the
 * open item can be closed (collapsible). Nothing is open on initial load.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (inner blocks).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'block_shadcn_accordion_render' ) ) {
	/**
	 * Render callback for the Accordion block.
	 *
	 * @param array    $attributes Block attributes.
	 * @param string   $content    Block content (rendered inner blocks).
	 * @param WP_Block $block      Block instance.
	 *
	 * @return string
	 */
	function block_shadcn_accordion_render( $attributes, $content, $block ) {
		// Nothing to show without items.
		if ( '' === trim( (string) $content ) ) {
			return '';
		}

		$allow_multiple = ! empty( $attributes['allowMultiple'] );
		$outlined       = ! empty( $attributes['outlined'] );

		$context = array(
			'openId'   => null,
			'multiple' => $allow_multiple,
		);

		$classes = 'wp-block-shadcn-accordion';
		if ( $outlined ) {
			$classes .= ' is-outlined';
		}

		$wrapper_attributes = get_block_wrapper_attributes(
			array(
				'class' => $classes,
			)
		);

		ob_start();
		?>
		<div
			<?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			data-wp-interactive="shadcn/accordion"
			<?php echo wp_interactivity_data_wp_context( $context, 'shadcn/accordion' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		>
			<?php echo $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</div>
		<?php

		return ob_get_clean();
	}
}

echo block_shadcn_accordion_render( $attributes ?? array(), $content ?? '', $block ?? null ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
