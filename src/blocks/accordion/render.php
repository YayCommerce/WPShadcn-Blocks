<?php
/**
 * Render callback for the accordion block.
 *
 * @param array  $attributes Block attributes.
 * @param string $content    Block content.
 * @return string Rendered block HTML.
 */
if ( ! function_exists( 'render_block_wpshadcn_accordion' ) ) {
	function render_block_wpshadcn_accordion( $attributes, $content ) {
		if ( ! $content ) {
			return $content;
		}

		$tags         = new WP_HTML_Tag_Processor( $content );
		$autoclose = ( ! empty( $attributes['autoclose'] ) ) ? 'true' : 'false';

	if ( $tags->next_tag( array( 'class_name' => 'wp-block-wpshadcn-accordion' ) ) ) {
		$tags->set_attribute( 'data-wp-interactive', 'wpshadcn/accordion' );
		$tags->set_attribute( 'data-wp-context', '{ "autoclose": ' . $autoclose . ', "accordionItems": [] }' );

		// Only modify content if directives have been set.
		$content = $tags->get_updated_html();
	}

	return $content;
	}
}

// Call the render function and output the result
echo render_block_wpshadcn_accordion( $attributes ?? array(), $content ?? '' );
