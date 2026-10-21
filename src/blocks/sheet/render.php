<?php
/**
 * Sheet block render.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (inner blocks).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'block_shadcn_sheet_render' ) ) {
	/**
	 * Render callback for the Sheet block.
	 *
	 * @param array    $attributes Block attributes.
	 * @param string   $content    Block content.
	 * @param WP_Block $block      Block instance.
	 *
	 * @return string
	 */
	function block_shadcn_sheet_render( $attributes, $content, $block ) {
		$unique_id = wp_unique_id( 'shadcn-sheet-' );

		$dismissible = isset( $attributes['dismissible'] ) ? $attributes['dismissible'] : false;
		$direction   = isset( $attributes['direction'] ) ? sanitize_text_field( $attributes['direction'] ) : 'right';
		if ( ! in_array( $direction, array( 'top', 'right', 'bottom', 'left', 'center' ), true ) ) {
			$direction = 'right';
		}

		$trigger_html = '';
		$panel_html   = '';

		$inner_blocks = ( $block && isset( $block->parsed_block['innerBlocks'] ) )
			? $block->parsed_block['innerBlocks']
			: array();

		foreach ( $inner_blocks as $inner_block ) {
			$name = $inner_block['blockName'] ?? '';

			if ( 'shadcn/sheet-trigger' === $name ) {
				$trigger_html .= render_block( $inner_block );
				continue;
			}

			if ( $name ) {
				$panel_html .= render_block( $inner_block );
			}
		}

		$button_found = false;
		
		if ( ! $trigger_html ) {
			$trigger_html = sprintf(
				'<button class="wp-block-shadcn-sheet__fallback-button" type="button" data-wp-on--click="actions.toggle" data-wp-bind--aria-expanded="state.isOpen" aria-controls="%s-content">%s</button>',
				esc_attr( $unique_id ),
				'center' === $direction ? esc_html__( 'Open Dialog', 'yaycommerce-blocks-for-shadcn-ui' ) : esc_html__( 'Open Sheet', 'yaycommerce-blocks-for-shadcn-ui' )
			);
			$button_found = true;
		} else {
			// Process trigger HTML to add click handler to button elements
			if ( class_exists( 'WP_HTML_Tag_Processor' ) ) {
				$tags = new WP_HTML_Tag_Processor( $trigger_html );
				// Find all button elements (could be inside buttons block or single button)
				while ( $tags->next_tag( array( 'tag_name' => 'button' ) ) ) {
					$button_found = true;
					$tags->set_attribute( 'data-wp-on--click', 'actions.toggle' );
					$tags->set_attribute( 'data-wp-bind--aria-expanded', 'state.isOpen' );
					$tags->set_attribute( 'aria-controls', $unique_id . '-content' );
					// Also add type="button" if not present to prevent form submission
					if ( ! $tags->get_attribute( 'type' ) ) {
						$tags->set_attribute( 'type', 'button' );
					}
				}
				if ( $button_found ) {
					$trigger_html = $tags->get_updated_html();
				}
			}
		}

		// Process panel HTML to add close handler to Cancel buttons
		if ( ! empty( $panel_html ) ) {
			// Simple regex: match button tags containing "Cancel" (case-insensitive)
			// This handles buttons with nested HTML like <button><span>Cancel</span></button>
			$panel_html = preg_replace_callback(
				'/<button([^>]*)>(.*?[Cc]ancel.*?)<\/button>/is',
				function ( $matches ) {
					$attrs = trim( $matches[1] );
					$content = $matches[2];
					
					// Skip if already has data-wp-on--click
					if ( strpos( $attrs, 'data-wp-on--click' ) !== false ) {
						return $matches[0];
					}
					
					// Add data-wp-on--click="actions.close"
					$attrs = $attrs . ( $attrs ? ' ' : '' ) . 'data-wp-on--click="actions.close"';
					
					// Ensure type="button" to prevent form submission
					if ( strpos( $attrs, 'type=' ) === false ) {
						$attrs = $attrs . ' type="button"';
					}
					
					return '<button ' . trim( $attrs ) . '>' . $content . '</button>';
				},
				$panel_html
			);

			// Add close button to drawer-header when dismissible is enabled
			if ( $dismissible ) {
				$close_button = sprintf(
					'<button type="button" class="wp-block-shadcn-sheet__close" aria-label="%s" data-wp-on--click="actions.close">%s</button>',
					esc_attr__( 'Close', 'yaycommerce-blocks-for-shadcn-ui' ),
					'<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M11.7816 4.03157C12.0062 3.80702 12.0062 3.44295 11.7816 3.2184C11.5571 2.99385 11.193 2.99385 10.9685 3.2184L7.50005 6.68682L4.03164 3.2184C3.80708 2.99385 3.44301 2.99385 3.21846 3.2184C2.99391 3.44295 2.99391 3.80702 3.21846 4.03157L6.68688 7.49999L3.21846 10.9684C2.99391 11.193 2.99391 11.557 3.21846 11.7816C3.44301 12.0061 3.80708 12.0061 4.03164 11.7816L7.50005 8.31316L10.9685 11.7816C11.193 12.0061 11.5571 12.0061 11.7816 11.7816C12.0062 11.557 12.0062 11.193 11.7816 10.9684L8.31322 7.49999L11.7816 4.03157Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>'
				);

				// Try to inject into drawer-header if it exists
				if ( class_exists( 'WP_HTML_Tag_Processor' ) ) {
					$tags = new WP_HTML_Tag_Processor( $panel_html );
					$found_header = false;
					
					// Find drawer-header wrapper div
					if ( $tags->next_tag( array( 'class_name' => 'wp-block-shadcn-sheet-header' ) ) ) {
						$found_header = true;
					}

					if ( $found_header ) {
						// Insert close button after opening tag of drawer-header
						$current_html = $tags->get_updated_html();
						$panel_html   = preg_replace(
							'/(<div[^>]*class="[^"]*wp-block-shadcn-sheet-header[^"]*"[^>]*>)/',
							'$1' . $close_button,
							$panel_html,
							1
						);
					}
				}

				// If drawer-header not found or injection failed, add close button at the start of panel
				if ( strpos( $panel_html, 'wp-block-shadcn-sheet__close' ) === false ) {
					$panel_html = $close_button . $panel_html;
				}
			}
		}

		// Label the panel by the first heading in the header, giving it an id if needed.
		$title_id = '';
		$tags     = new WP_HTML_Tag_Processor( $panel_html );
		if ( $tags->next_tag( array( 'class_name' => 'wp-block-shadcn-sheet-header' ) ) ) {
			// Stop at the header's closing </div>; count nested divs to find it.
			$depth = 0;
			while ( $tags->next_tag( array( 'tag_closers' => 'visit' ) ) ) {
				if ( 'DIV' === $tags->get_tag() ) {
					$depth += $tags->is_tag_closer() ? -1 : 1;
					if ( $depth < 0 ) {
						break;
					}
					continue;
				}
				if ( ! $tags->is_tag_closer() && in_array( $tags->get_tag(), array( 'H1', 'H2', 'H3', 'H4', 'H5', 'H6' ), true ) ) {
					$title_id = $tags->get_attribute( 'id' );
					if ( ! is_string( $title_id ) || '' === $title_id ) {
						$title_id = $unique_id . '-title';
						$tags->set_attribute( 'id', $title_id );
						$panel_html = $tags->get_updated_html();
					}
					break;
				}
			}
		}

		$context = array(
			'open'        => false,
			'drawerId'    => $unique_id,
			'dismissible' => $dismissible,
		);

		$wrapper_attributes = get_block_wrapper_attributes(
			array(
				'class' => 'wp-block-shadcn-sheet',
			)
		);

		$panel_classes = array( 'wp-block-shadcn-sheet__panel' );
		if ( $direction ) {
			$panel_classes[] = 'wp-block-shadcn-sheet__panel--' . esc_attr( $direction );
		}
		$panel_class = implode( ' ', $panel_classes );

		ob_start();
		?>
		<div 
			<?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			data-wp-interactive="shadcn/sheet"
			<?php echo wp_interactivity_data_wp_context( $context, 'shadcn/sheet' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			data-wp-watch="callbacks.syncBodyScroll"
			data-wp-watch--focus="callbacks.syncFocus"
			data-wp-on-window--keydown="actions.handleEscape"
		>
			<div 
				class="wp-block-shadcn-sheet__trigger"
				<?php if ( ! $button_found && ! empty( $trigger_html ) ) : ?>
					data-wp-on--click="actions.toggle"
					role="button"
					tabindex="0"
					aria-controls="<?php echo esc_attr( $unique_id ); ?>-content"
					data-wp-bind--aria-expanded="state.isOpen"
				<?php endif; ?>
			>
				<?php echo $trigger_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			</div>

			<div
				class="wp-block-shadcn-sheet__portal wp-block-shadcn-sheet__portal--<?php echo esc_attr( $direction ); ?>"
				data-wp-bind--data-open="state.isOpen"
				data-wp-class--is-open="state.isOpen"
				data-wp-bind--inert="!state.isOpen"
			>
				<div
					class="wp-block-shadcn-sheet__overlay"
					data-wp-on--click="actions.handleOverlayClick"
					aria-hidden="true"
				></div>

				<div
					class="<?php echo esc_attr( $panel_class ); ?>"
					id="<?php echo esc_attr( $unique_id ); ?>-content"
					role="dialog"
					aria-modal="true"
					<?php if ( $title_id ) : ?>
						aria-labelledby="<?php echo esc_attr( $title_id ); ?>"
					<?php else : ?>
						aria-label="<?php echo 'center' === $direction ? esc_attr__( 'Dialog', 'yaycommerce-blocks-for-shadcn-ui' ) : esc_attr__( 'Sheet', 'yaycommerce-blocks-for-shadcn-ui' ); ?>"
					<?php endif; ?>
					tabindex="-1"
					data-wp-bind--aria-hidden="!state.isOpen"
					data-wp-on--keydown="actions.handleKeydown"
					data-wp-on--click="actions.handlePanelClick"
				>
					<?php echo $panel_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				</div>
			</div>
		</div>
		<?php

		return ob_get_clean();
	}
}

echo block_shadcn_sheet_render( $attributes ?? array(), $content ?? '', $block ?? null ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
