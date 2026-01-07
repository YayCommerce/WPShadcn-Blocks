<?php
add_action( 'init', 'register_block_wpshadcn_accordion' );

function register_block_wpshadcn_accordion() {
	register_block_type_from_metadata(
		__DIR__ . '/accordion',
		array(
			'render_callback' => 'render_block_wpshadcn_accordion',
		)
	);
}

function render_block_wpshadcn_accordion( $attributes, $content ) {
	if ( ! $content ) {
		return $content;
	}

	$tags         = new WP_HTML_Tag_Processor( $content );
	$autoclose = $attributes['autoclose'] ? 'true' : 'false';

	if ( $tags->next_tag( array( 'class_name' => 'wp-block-wpshadcn-accordion' ) ) ) {
		$tags->set_attribute( 'data-wp-interactive', 'wpshadcn/accordion' );
		$tags->set_attribute( 'data-wp-context', '{ "autoclose": ' . $autoclose . ', "accordionItems": [] }' );

		// Only modify content if directives have been set.
		$content = $tags->get_updated_html();
	}

	return $content;
}
