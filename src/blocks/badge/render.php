<?php
/**
 * Badge block render.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (unused, dynamic render).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

$text = isset( $attributes['text'] ) ? $attributes['text'] : '';

// Nothing to show without a label.
if ( '' === trim( wp_strip_all_tags( $text ) ) ) {
	return;
}

$variant     = isset( $attributes['variant'] ) && '' !== $attributes['variant'] ? $attributes['variant'] : 'default';
$url         = isset( $attributes['url'] ) ? $attributes['url'] : '';
$link_target = isset( $attributes['linkTarget'] ) ? $attributes['linkTarget'] : '';
$rel         = isset( $attributes['rel'] ) ? $attributes['rel'] : '';

// Optional icon (shared picker). Empty/unknown slug => no icon, unchanged output.
$icon_name     = isset( $attributes['iconName'] ) ? $attributes['iconName'] : '';
$icon_position = ( isset( $attributes['iconPosition'] ) && 'right' === $attributes['iconPosition'] ) ? 'right' : 'left';
$icon_size     = isset( $attributes['iconSize'] ) ? $attributes['iconSize'] : '';
$icon_html     = \ShadcnBlocks\Icons::render_icon( $icon_name, $icon_size );
$has_icon      = '' !== $icon_html;

$is_link = '' !== $url;
$tag     = $is_link ? 'a' : 'span';

$wrapper_classes = array(
	'wp-block-shadcn-badge',
	'badge',
	'badge-' . $variant,
);

if ( $has_icon ) {
	// Shared class contract (single source: Icons::icon_classes()).
	$wrapper_classes = array_merge(
		$wrapper_classes,
		explode( ' ', \ShadcnBlocks\Icons::icon_classes( $icon_name, $icon_position ) )
	);
}

$extra_attributes = array(
	'class' => implode( ' ', array_map( 'esc_attr', $wrapper_classes ) ),
);

if ( $is_link ) {
	// get_block_wrapper_attributes() runs esc_attr() on each value; href still
	// needs esc_url() to strip unsafe protocols.
	$extra_attributes['href'] = esc_url( $url );
	if ( '' !== $link_target ) {
		$extra_attributes['target'] = $link_target;
	}
	if ( '' !== $rel ) {
		$extra_attributes['rel'] = $rel;
	}
}

$wrapper_attributes = get_block_wrapper_attributes( $extra_attributes );

// Compose inner content. Without an icon, output is byte-identical to before
// (bare sanitized text). With an icon, prepend/append in DOM order; the icon
// and text sit as flex items in the inline-flex badge ('right' = icon after).
// $icon_html is already sanitized by Icons::render_icon().
$text_html = wp_kses_post( $text );
if ( $has_icon ) {
	$inner_html = ( 'right' === $icon_position )
		? $text_html . $icon_html
		: $icon_html . $text_html;
} else {
	$inner_html = $text_html;
}

printf(
	'<%1$s %2$s>%3$s</%1$s>',
	tag_escape( $tag ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	$wrapper_attributes, // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	$inner_html // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
);
