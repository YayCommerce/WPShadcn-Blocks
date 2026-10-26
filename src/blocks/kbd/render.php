<?php
/**
 * Kbd block render.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (unused, dynamic render).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

$shadcn_text = isset( $attributes['text'] ) ? $attributes['text'] : '';

// Optional icon (shared picker). Empty/unknown slug => no icon.
$shadcn_icon_name     = isset( $attributes['iconName'] ) ? $attributes['iconName'] : '';
$shadcn_icon_position = ( isset( $attributes['iconPosition'] ) && 'right' === $attributes['iconPosition'] ) ? 'right' : 'left';
$shadcn_icon_size     = isset( $attributes['iconSize'] ) ? $attributes['iconSize'] : '';
$shadcn_icon_html     = \ShadcnBlocks\Icons::render_icon( $shadcn_icon_name, $shadcn_icon_size );

// Icon-only keys are valid (arrow keys); nothing to show without either.
if ( '' === $shadcn_icon_html && '' === trim( wp_strip_all_tags( $shadcn_text ) ) ) {
	return;
}

$shadcn_wrapper_classes = array( 'kbd' );

if ( '' !== $shadcn_icon_html ) {
	// Shared class contract (single source: Icons::icon_classes()).
	$shadcn_wrapper_classes = array_merge(
		$shadcn_wrapper_classes,
		explode( ' ', \ShadcnBlocks\Icons::icon_classes( $shadcn_icon_name, $shadcn_icon_position ) )
	);
}

$shadcn_wrapper_attributes = get_block_wrapper_attributes(
	array( 'class' => implode( ' ', $shadcn_wrapper_classes ) )
);

// $shadcn_icon_html is already sanitized by Icons::render_icon().
$shadcn_text_html = wp_kses_post( $shadcn_text );

// The SVG is aria-hidden, so an icon-only key ("arrow-up") is named by its slug.
if ( '' === trim( wp_strip_all_tags( $shadcn_text ) ) ) {
	$shadcn_text_html = '<span class="screen-reader-text">' . esc_html( str_replace( '-', ' ', $shadcn_icon_name ) ) . '</span>';
}

$shadcn_inner_html = ( 'right' === $shadcn_icon_position )
	? $shadcn_text_html . $shadcn_icon_html
	: $shadcn_icon_html . $shadcn_text_html;

printf(
	'<kbd %1$s>%2$s</kbd>',
	$shadcn_wrapper_attributes, // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	$shadcn_inner_html // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
);
