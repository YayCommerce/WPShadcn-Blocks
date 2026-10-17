<?php
/**
 * Sonner (Toast) block render.
 *
 * Renders the trigger button. On click, `actions.show` pushes this button's
 * toast config onto the shared `state.toasts` array, which the footer toaster
 * renders via `data-wp-each`. The toaster itself is printed once in the footer
 * (see ShadcnBlocks\Plugin::render_sonner_toaster) when this flag is set.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (unused; dynamic block).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'block_shadcn_sonner_render' ) ) {
	/**
	 * Render callback for the Sonner block.
	 *
	 * @param array    $attributes Block attributes.
	 * @param string   $content    Block content.
	 * @param WP_Block $block      Block instance.
	 *
	 * @return string
	 */
	function block_shadcn_sonner_render( $attributes, $content, $block ) {
		// Signal the footer to print the shared toaster + enqueue the view module.
		$GLOBALS['shadcn_sonner_present'] = true;

		$allowed_types = array( 'default', 'success', 'error', 'warning', 'info' );
		$type          = isset( $attributes['toastType'] ) ? (string) $attributes['toastType'] : 'default';
		if ( ! in_array( $type, $allowed_types, true ) ) {
			$type = 'default';
		}

		$label       = isset( $attributes['buttonLabel'] ) && '' !== $attributes['buttonLabel']
			? (string) $attributes['buttonLabel']
			: __( 'Show Toast', 'yaycommerce-blocks-for-shadcn-ui' );
		$title       = isset( $attributes['toastTitle'] ) ? (string) $attributes['toastTitle'] : '';
		$description = isset( $attributes['toastDescription'] ) ? (string) $attributes['toastDescription'] : '';

		$context = array(
			'type'        => $type,
			'title'       => $title,
			'description' => $description,
		);

		$wrapper_attributes = get_block_wrapper_attributes(
			array(
				'class' => 'wp-block-shadcn-sonner',
			)
		);

		ob_start();
		?>
		<div
			<?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			data-wp-interactive="shadcn/sonner"
			<?php echo wp_interactivity_data_wp_context( $context, 'shadcn/sonner' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		>
			<button
				type="button"
				class="wp-block-shadcn-sonner__trigger"
				data-wp-on--click="actions.show"
			>
				<?php echo esc_html( $label ); ?>
			</button>
		</div>
		<?php

		return ob_get_clean();
	}
}

echo block_shadcn_sonner_render( $attributes ?? array(), $content ?? '', $block ?? null ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
