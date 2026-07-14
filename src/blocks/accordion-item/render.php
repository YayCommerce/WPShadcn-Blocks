<?php
/**
 * Accordion Item block render.
 *
 * Renders a single collapsible section. Inherits `openId` from the parent
 * accordion context and contributes its own `id`. Open state is derived by
 * the store (`state.isOpen` = openId === id).
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (rendered inner blocks = panel).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'block_shadcn_accordion_item_render' ) ) {
	/**
	 * Render callback for the Accordion Item block.
	 *
	 * @param array    $attributes Block attributes.
	 * @param string   $content    Rendered inner blocks (panel content).
	 * @param WP_Block $block      Block instance.
	 *
	 * @return string
	 */
	function block_shadcn_accordion_item_render( $attributes, $content, $block ) {
		$item_id     = wp_unique_id( 'shadcn-accordion-item-' );
		$trigger_id  = $item_id . '-trigger';
		$panel_id    = $item_id . '-panel';
		$title       = isset( $attributes['title'] ) ? (string) $attributes['title'] : '';
		$disabled    = ! empty( $attributes['disabled'] );

		// Heading level from parent context; clamp to h2–h6, default h3.
		$level = 3;
		if ( $block && isset( $block->context['shadcn/headingLevel'] ) ) {
			$level = (int) $block->context['shadcn/headingLevel'];
		}
		$level = max( 2, min( 6, $level ) );
		$tag   = 'h' . $level;

		// `open` holds this item's local state used only in multiple mode.
		$context = array(
			'id'   => $item_id,
			'open' => false,
		);

		$item_classes = 'wp-block-shadcn-accordion-item';
		if ( $disabled ) {
			$item_classes .= ' is-disabled';
		}

		$wrapper_attributes = get_block_wrapper_attributes(
			array(
				'class' => $item_classes,
			)
		);

		$chevron = '<svg class="wp-block-shadcn-accordion-item__chevron" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg>';

		ob_start();
		?>
		<div
			<?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			<?php echo wp_interactivity_data_wp_context( $context, 'shadcn/accordion' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		>
			<<?php echo esc_attr( $tag ); ?> class="wp-block-shadcn-accordion-item__heading">
				<button
					type="button"
					class="wp-block-shadcn-accordion-item__trigger"
					id="<?php echo esc_attr( $trigger_id ); ?>"
					aria-controls="<?php echo esc_attr( $panel_id ); ?>"
					<?php echo $disabled ? 'disabled' : ''; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					data-wp-on--click="actions.toggle"
					data-wp-bind--aria-expanded="state.isOpen"
					data-wp-class--is-open="state.isOpen"
				>
					<span class="wp-block-shadcn-accordion-item__title"><?php echo esc_html( $title ); ?></span>
					<?php echo $chevron; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				</button>
			</<?php echo esc_attr( $tag ); ?>>
			<div
				class="wp-block-shadcn-accordion-item__panel"
				id="<?php echo esc_attr( $panel_id ); ?>"
				role="region"
				aria-labelledby="<?php echo esc_attr( $trigger_id ); ?>"
				data-wp-class--is-open="state.isOpen"
				data-wp-bind--inert="!state.isOpen"
			>
				<div class="wp-block-shadcn-accordion-item__panel-inner">
					<?php echo $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				</div>
			</div>
		</div>
		<?php

		return ob_get_clean();
	}
}

echo block_shadcn_accordion_item_render( $attributes ?? array(), $content ?? '', $block ?? null ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
