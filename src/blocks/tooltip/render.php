<?php
/**
 * Tooltip block render.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (inner blocks).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'block_shadcn_tooltip_render' ) ) {
	/**
	 * Render callback for the Tooltip block.
	 *
	 * @param array    $attributes Block attributes.
	 * @param string   $content    Block content.
	 * @param WP_Block $block      Block instance.
	 *
	 * @return string
	 */
	function block_shadcn_tooltip_render( $attributes, $content, $block ) {
		$unique_id = wp_unique_id( 'shadcn-tooltip-' );
		
		$side = isset( $attributes['side'] ) ? sanitize_text_field( $attributes['side'] ) : 'top';
		$action = isset( $attributes['action'] ) ? sanitize_text_field( $attributes['action'] ) : 'hover';

		$trigger_html = '';
		$content_html = '';

		$inner_blocks = ( $block && isset( $block->parsed_block['innerBlocks'] ) )
			? $block->parsed_block['innerBlocks']
			: array();

		foreach ( $inner_blocks as $inner_block ) {
			$name = $inner_block['blockName'] ?? '';

			if ( 'shadcn/tooltip-trigger' === $name ) {
				$trigger_html .= render_block( $inner_block );
				continue;
			}

			if ( 'shadcn/tooltip-content' === $name ) {
				$content_html .= render_block( $inner_block );
				continue;
			}
		}

		// Process trigger HTML to add hover/focus/click handlers based on action
		// First, try to find and add handlers to buttons/links inside
		if ( ! empty( $trigger_html ) && class_exists( 'WP_HTML_Tag_Processor' ) ) {
			$tags = new WP_HTML_Tag_Processor( $trigger_html );
			$found = false;
			// Find buttons or links first
			while ( $tags->next_tag( array( 'tag_name' => array( 'button', 'a' ) ) ) ) {
				$found = true;
				$tags->set_attribute( 'aria-describedby', $unique_id . '-content' );
				
				if ( $action === 'click' ) {
					// For click action, add click handler
					$tags->set_attribute( 'data-wp-on--click', 'actions.handleClick' );
					$tags->set_attribute( 'data-wp-bind--aria-expanded', 'state.isOpen' );
					// Also add type="button" if not present to prevent form submission
					if ( ! $tags->get_attribute( 'type' ) && $tags->get_attribute( 'tag_name' ) === 'button' ) {
						$tags->set_attribute( 'type', 'button' );
					}
				} else {
					// For hover action, add hover and focus handlers
					$tags->set_attribute( 'data-wp-on--mouseenter', 'actions.handleMouseEnter' );
					$tags->set_attribute( 'data-wp-on--mouseleave', 'actions.handleMouseLeave' );
					$tags->set_attribute( 'data-wp-on--focus', 'actions.handleFocus' );
					$tags->set_attribute( 'data-wp-on--blur', 'actions.handleBlur' );
				}
			}
			if ( $found ) {
				$trigger_html = $tags->get_updated_html();
			}
		}

		// Process content HTML to add data attributes to the existing tooltip-content div
		if ( ! empty( $content_html ) && class_exists( 'WP_HTML_Tag_Processor' ) ) {
			$tags = new WP_HTML_Tag_Processor( $content_html );
			// Find the tooltip-content div
			if ( $tags->next_tag( array( 'class_name' => 'wp-block-shadcn-tooltip-content' ) ) ) {
				$tags->set_attribute( 'id', $unique_id . '-content' );
				$tags->set_attribute( 'role', 'tooltip' );
				$tags->set_attribute( 'data-side', $side ? $side : 'top' );
				$tags->set_attribute( 'data-wp-bind--data-open', 'state.isOpen' );
				$tags->set_attribute( 'data-wp-class--is-open', 'state.isOpen' );
				
				// Only add hover handlers if action is hover
				if ( $action === 'hover' ) {
					$tags->set_attribute( 'data-wp-on--mouseenter', 'actions.handleMouseEnter' );
					$tags->set_attribute( 'data-wp-on--mouseleave', 'actions.handleMouseLeave' );
				} else {
					// For click action, prevent clicks inside tooltip from closing it
					$tags->set_attribute( 'data-wp-on--click', 'actions.handleClickInside' );
				}
				
				$content_html = $tags->get_updated_html();
			}
		}

		$context = array(
			'open' => false,
			'tooltipId' => $unique_id,
			'action' => $action,
		);

		$wrapper_attributes = get_block_wrapper_attributes(
			array(
				'class' => 'wp-block-shadcn-tooltip',
			)
		);

		ob_start();
		?>
		<div 
			<?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped?>
			data-wp-interactive="shadcn/tooltip"
			<?php echo wp_interactivity_data_wp_context( $context, 'shadcn/tooltip' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped?>
			<?php if ( $action === 'click' ) : ?>
				data-wp-on-window--click="actions.handleClickOutside"
				data-wp-on-window--keydown="actions.handleEscape"
			<?php else : ?>
				data-wp-on--mouseenter="actions.handleMouseEnter"
				data-wp-on--mouseleave="actions.handleMouseLeave"
				data-wp-on--focusin="actions.handleFocus"
				data-wp-on--focusout="actions.handleBlur"
			<?php endif; ?>
		>
			<div 
				class="wp-block-shadcn-tooltip-trigger"
				<?php if ( $action === 'hover' ) : ?>
					data-wp-on--mouseenter="actions.handleMouseEnter"
					data-wp-on--mouseleave="actions.handleMouseLeave"
					data-wp-on--focusin="actions.handleFocus"
					data-wp-on--focusout="actions.handleBlur"
				<?php else : ?>
					data-wp-on--click="actions.handleClick"
					data-wp-bind--aria-expanded="state.isOpen"
				<?php endif; ?>
			>
				<?php echo $trigger_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped?>
			</div>
			<?php echo $content_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped?>
		</div>
		<?php

		return ob_get_clean();
	}
}

echo block_shadcn_tooltip_render( $attributes ?? array(), $content ?? '', $block ?? null ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
