<?php
/**
 * Tab block render.
 *
 * Renders only the panel body. The surrounding `role="tabpanel"` wrapper,
 * its id pairing and its interactivity directives are supplied by the parent
 * `shadcn/tabs` block, which is the only place that knows each tab's index.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (inner blocks = panel body).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'block_shadcn_tab_render' ) ) {
	/**
	 * Render callback for the Tab block.
	 *
	 * @param array    $attributes Block attributes.
	 * @param string   $content    Rendered inner blocks (panel body).
	 * @param WP_Block $block      Block instance.
	 *
	 * @return string
	 */
	function block_shadcn_tab_render( $attributes, $content, $block ) {
		// Always render the wrapper, even when empty: the parent has already
		// emitted a trigger for this tab, so dropping it would strand the pair.
		$wrapper_attributes = get_block_wrapper_attributes(
			array(
				'class' => 'wp-block-shadcn-tab',
			)
		);

		ob_start();
		?>
		<div <?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
			<?php echo $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</div>
		<?php

		return ob_get_clean();
	}
}

echo block_shadcn_tab_render( $attributes ?? array(), $content ?? '', $block ?? null ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
