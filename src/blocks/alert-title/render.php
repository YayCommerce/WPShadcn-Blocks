<?php
/**
 * Alert Title block render.
 *
 * @package WpShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (saved HTML from save function).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

// The content already includes the wrapper div from save(), so we just add our classes
// Remove any existing wrapper and add our block wrapper
if ( ! empty( $content ) ) {
	// Get wrapper attributes
	$wrapper_attributes = get_block_wrapper_attributes(
		array(
			'class' => 'wp-block-wpshadcn-alert-title alert-title',
		)
	);
	
	// Wrap the content with our block wrapper
	// The content from save() is already in a div.alert-title, so we replace or wrap it
	echo '<div ' . $wrapper_attributes . '>' . $content . '</div>';
} else {
	// Fallback if no content
	$wrapper_attributes = get_block_wrapper_attributes(
		array(
			'class' => 'wp-block-wpshadcn-alert-title alert-title',
		)
	);
	echo '<div ' . $wrapper_attributes . '></div>';
}
