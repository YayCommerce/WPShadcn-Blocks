<?php
/**
 * Tabs block render.
 *
 * Renders the interactive root. The tab list is built here from the child
 * `shadcn/tab` attributes rather than by the children themselves, so the
 * triggers can sit in a single `role="tablist"` above every panel — the DOM
 * order the ARIA tabs pattern requires. Each child is then rendered into a
 * `role="tabpanel"` wrapper whose id pairs with its trigger.
 *
 * Triggers and panels each carry their own `index` context; `activeIndex`
 * lives on the root, so writing it from a trigger re-derives `isSelected` on
 * every trigger and panel at once (same mechanism as the accordion `openId`).
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (inner blocks).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'block_shadcn_tabs_render' ) ) {
	/**
	 * Render callback for the Tabs block.
	 *
	 * @param array    $attributes Block attributes.
	 * @param string   $content    Block content (unused; children are rendered here).
	 * @param WP_Block $block      Block instance.
	 *
	 * @return string
	 */
	function block_shadcn_tabs_render( $attributes, $content, $block ) {
		$inner_blocks = ( $block && isset( $block->parsed_block['innerBlocks'] ) )
			? $block->parsed_block['innerBlocks']
			: array();

		// Only tab children take part; anything else is ignored.
		$tabs = array();
		foreach ( $inner_blocks as $inner_block ) {
			if ( isset( $inner_block['blockName'] ) && 'shadcn/tab' === $inner_block['blockName'] ) {
				$tabs[] = $inner_block;
			}
		}

		// Nothing to show without tabs.
		if ( empty( $tabs ) ) {
			return '';
		}

		block_shadcn_tabs_register_state();

		$count   = count( $tabs );
		$base_id = wp_unique_id( 'shadcn-tabs-' );
		$fitted  = ! empty( $attributes['fitted'] );

		$requested = isset( $attributes['defaultTab'] ) ? (int) $attributes['defaultTab'] : 0;
		$active    = block_shadcn_tabs_resolve_active_index( $tabs, $requested );

		$triggers_html = '';
		$panels_html   = '';

		foreach ( $tabs as $index => $tab_block ) {
			$tab_attributes = isset( $tab_block['attrs'] ) ? $tab_block['attrs'] : array();

			$label = isset( $tab_attributes['label'] ) ? (string) $tab_attributes['label'] : '';
			if ( '' === trim( $label ) ) {
				/* translators: %d: position of the tab within the tab list. */
				$label = sprintf( __( 'Tab %d', 'shadcn-blocks' ), $index + 1 );
			}

			$disabled = ! empty( $tab_attributes['disabled'] );
			$tab_id   = $base_id . '-tab-' . $index;
			$panel_id = $base_id . '-panel-' . $index;

			// Per-item context; inherits activeIndex/count from the root.
			$item_context = wp_interactivity_data_wp_context( array( 'index' => $index ), 'shadcn/tabs' );

			$triggers_html .= sprintf(
				'<button type="button" class="wp-block-shadcn-tabs__trigger" id="%1$s" role="tab" aria-controls="%2$s" %3$s %4$s data-wp-on--click="actions.select" data-wp-bind--aria-selected="state.isSelected" data-wp-bind--tabindex="state.tabIndex" data-wp-class--is-active="state.isSelected">%5$s</button>',
				esc_attr( $tab_id ),
				esc_attr( $panel_id ),
				$item_context,
				$disabled ? 'disabled' : '',
				esc_html( $label )
			);

			$panels_html .= sprintf(
				'<div class="wp-block-shadcn-tabs__panel" id="%1$s" role="tabpanel" aria-labelledby="%2$s" tabindex="0" %3$s data-wp-class--is-active="state.isSelected" data-wp-bind--hidden="!state.isSelected">%4$s</div>',
				esc_attr( $panel_id ),
				esc_attr( $tab_id ),
				$item_context,
				render_block( $tab_block )
			);
		}

		$context = array(
			'activeIndex' => $active,
			'count'       => $count,
		);

		$classes = 'wp-block-shadcn-tabs';
		if ( $fitted ) {
			$classes .= ' is-fitted';
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
			data-wp-interactive="shadcn/tabs"
			<?php echo wp_interactivity_data_wp_context( $context, 'shadcn/tabs' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		>
			<div
				class="wp-block-shadcn-tabs__list"
				role="tablist"
				aria-orientation="horizontal"
				data-wp-on--keydown="actions.handleKeydown"
			>
				<?php echo $triggers_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			</div>
			<?php echo $panels_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</div>
		<?php

		return ob_get_clean();
	}
}

if ( ! function_exists( 'block_shadcn_tabs_register_state' ) ) {
	/**
	 * Register the server-side half of the tabs derived state.
	 *
	 * These mirror the getters in view.js. Without them the directives are
	 * evaluated against an undefined `state` while the page is rendered, so
	 * every panel would come back marked hidden and a visitor without
	 * JavaScript — or anyone looking before hydration — would see a tab list
	 * with no content under it.
	 */
	function block_shadcn_tabs_register_state() {
		static $registered = false;

		if ( $registered ) {
			return;
		}

		$registered = true;

		$is_selected = function () {
			$context = wp_interactivity_get_context( 'shadcn/tabs' );

			return isset( $context['index'], $context['activeIndex'] )
				&& $context['activeIndex'] === $context['index'];
		};

		wp_interactivity_state(
			'shadcn/tabs',
			array(
				'isSelected' => $is_selected,
				'tabIndex'   => function () use ( $is_selected ) {
					return $is_selected() ? 0 : -1;
				},
			)
		);
	}
}

if ( ! function_exists( 'block_shadcn_tabs_resolve_active_index' ) ) {
	/**
	 * Resolve which tab is open on load.
	 *
	 * Falls back to the first enabled tab when the requested one is out of
	 * range or disabled, so a page never loads with no panel visible.
	 *
	 * @param array $tabs      Parsed `shadcn/tab` child blocks.
	 * @param int   $requested Requested tab index from the block attributes.
	 *
	 * @return int Index of the tab to open.
	 */
	function block_shadcn_tabs_resolve_active_index( $tabs, $requested ) {
		$count = count( $tabs );

		if ( $requested < 0 || $requested >= $count ) {
			$requested = 0;
		}

		if ( empty( $tabs[ $requested ]['attrs']['disabled'] ) ) {
			return $requested;
		}

		foreach ( $tabs as $index => $tab_block ) {
			if ( empty( $tab_block['attrs']['disabled'] ) ) {
				return $index;
			}
		}

		// Every tab is disabled; keep the requested one so the panel still shows.
		return $requested;
	}
}

echo block_shadcn_tabs_render( $attributes ?? array(), $content ?? '', $block ?? null ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
