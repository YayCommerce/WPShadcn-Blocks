<?php
/**
 * Drawer block render.
 *
 * @package WpShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (inner blocks).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'block_wpshadcn_drawer_render' ) ) {
	/**
	 * Render callback for the Drawer block.
	 *
	 * @param array    $attributes Block attributes.
	 * @param string   $content    Block content.
	 * @param WP_Block $block      Block instance.
	 *
	 * @return string
	 */
	function block_wpshadcn_drawer_render( $attributes, $content, $block ) {
		$unique_id = wp_unique_id( 'wpshadcn-drawer-' );

		$trigger_html = '';
		$panel_html   = '';

		$inner_blocks = ( $block && isset( $block->parsed_block['innerBlocks'] ) )
			? $block->parsed_block['innerBlocks']
			: array();

		foreach ( $inner_blocks as $inner_block ) {
			$name = $inner_block['blockName'] ?? '';

			if ( 'wpshadcn/drawer-trigger' === $name ) {
				$trigger_html .= render_block( $inner_block );
				continue;
			}

			if ( $name ) {
				$panel_html .= render_block( $inner_block );
			}
		}

		if ( ! $trigger_html ) {
			$trigger_html = sprintf(
				'<button class="wp-block-wpshadcn-drawer__fallback-button" type="button">%s</button>',
				esc_html__( 'Open Drawer', 'wpshadcn-blocks' )
			);
		}

		$context = wp_json_encode(
			array(
				'open'     => false,
				'drawerId' => $unique_id,
			)
		);

		$wrapper_attributes = get_block_wrapper_attributes(
			array(
				'class'                => 'wp-block-wpshadcn-drawer',
				'data-wp-interactive'  => 'wpshadcn/drawer',
				'data-wp-context'      => $context,
				'data-wp-watch'        => 'callbacks.syncBodyScroll',
				'data-wp-on-window--keydown' => 'actions.handleEscape',
			)
		);

		ob_start();
		?>
		<div <?php echo $wrapper_attributes; ?>>
			<div
				class="wp-block-wpshadcn-drawer__trigger"
				data-wp-on--click="actions.toggle"
				data-wp-bind--aria-expanded="state.isOpen"
				aria-controls="<?php echo esc_attr( $unique_id ); ?>-content"
			>
				<?php echo $trigger_html; ?>
			</div>

			<div
				class="wp-block-wpshadcn-drawer__portal"
				data-wp-bind--data-open="state.isOpen"
				data-wp-class--is-open="state.isOpen"
				data-wp-bind--inert="!state.isOpen"
			>
				<div
					class="wp-block-wpshadcn-drawer__overlay"
					data-wp-on--click="actions.close"
					aria-hidden="true"
				></div>

				<div
					class="wp-block-wpshadcn-drawer__panel"
					id="<?php echo esc_attr( $unique_id ); ?>-content"
					role="dialog"
					aria-modal="true"
					aria-label="<?php echo esc_attr__( 'Drawer panel', 'wpshadcn-blocks' ); ?>"
					tabindex="-1"
					data-wp-bind--aria-hidden="!state.isOpen"
					data-wp-on--keydown="actions.handleKeydown"
				>
					<?php echo $panel_html; ?>
				</div>
			</div>
		</div>
		<?php

		return ob_get_clean();
	}
}

echo block_wpshadcn_drawer_render( $attributes ?? array(), $content ?? '', $block ?? null );
