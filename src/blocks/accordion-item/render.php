<?php
/**
 * Render callback for the accordion-item block.
 *
 * @param array  $attributes Block attributes.
 * @param string $content    Block content.
 * @return string Rendered block HTML.
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'block_shadcn_accordion_item_render' ) ) {
	function block_shadcn_accordion_item_render( $attributes, $content ) {
		if ( ! $content ) {
			return $content;
		}

		$tags         = new WP_HTML_Tag_Processor( $content );
		$unique_id = wp_unique_id( 'shadcn-accordion-item-' );

		// Initialize the state of the item on the server using a closure,
		// since we need to get derived state based on the current context.
		wp_interactivity_state(
			'shadcn/accordion',
			array(
				'isOpen' => function () {
					$context = wp_interactivity_get_context();
					return $context['isOpen'];
				},
			)
		);

		if ( $tags->next_tag( array( 'class_name' => 'wp-block-shadcn-accordion-item' ) ) ) {
			$is_open = ( ! empty( $attributes['isOpen'] ) ) ? 'true' : 'false';
			$tags->set_attribute( 'data-wp-context', '{ "id": "' . $unique_id . '", "isOpen": ' . $is_open . ' }' );
			$tags->set_attribute( 'data-wp-class--is-open', 'state.isOpen' );
			$tags->set_attribute( 'data-wp-init', 'callbacks.initAccordionItems' );
			$tags->set_attribute( 'data-wp-on-window--hashchange', 'callbacks.hashChange' );

			if ( $tags->next_tag( array( 'class_name' => 'wp-block-shadcn-accordion-trigger' ) ) ) {
				$tags->set_attribute( 'data-wp-on--click', 'actions.toggle' );
				$tags->set_attribute( 'data-wp-on--keydown', 'actions.handleKeyDown' );
				$tags->set_attribute( 'id', $unique_id );
				$tags->set_attribute( 'aria-controls', $unique_id . '-item' );
				$tags->set_attribute( 'data-wp-bind--aria-expanded', 'state.isOpen' );

				if ( $tags->next_tag( array( 'class_name' => 'wp-block-shadcn-accordion-content' ) ) ) {
					$tags->set_attribute( 'id', $unique_id . '-item' );
					$tags->set_attribute( 'aria-labelledby', $unique_id );
					$tags->set_attribute( 'data-wp-bind--inert', '!state.isOpen' );

					// Only modify content if all directives have been set.
					$content = $tags->get_updated_html();
				}
			}
		}

		return $content;
	}
}

// Call the render function and output the result
echo block_shadcn_accordion_item_render( $attributes ?? array(), $content ?? '' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
