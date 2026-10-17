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

$shadcn_text = isset( $attributes['text'] ) ? $attributes['text'] : '';

// Nothing to show without a label.
if ( '' === trim( wp_strip_all_tags( $shadcn_text ) ) ) {
	return;
}

$shadcn_variant     = isset( $attributes['variant'] ) && '' !== $attributes['variant'] ? $attributes['variant'] : 'default';
$shadcn_url         = isset( $attributes['url'] ) ? $attributes['url'] : '';
$shadcn_link_target = isset( $attributes['linkTarget'] ) ? $attributes['linkTarget'] : '';
$shadcn_rel         = isset( $attributes['rel'] ) ? $attributes['rel'] : '';

// Optional icon (shared picker). Empty/unknown slug => no icon, unchanged output.
$shadcn_icon_name     = isset( $attributes['iconName'] ) ? $attributes['iconName'] : '';
$shadcn_icon_position = ( isset( $attributes['iconPosition'] ) && 'right' === $attributes['iconPosition'] ) ? 'right' : 'left';
$shadcn_icon_size     = isset( $attributes['iconSize'] ) ? $attributes['iconSize'] : '';
$shadcn_icon_html     = \ShadcnBlocks\Icons::render_icon( $shadcn_icon_name, $shadcn_icon_size );
$shadcn_has_icon      = '' !== $shadcn_icon_html;

$shadcn_is_link = '' !== $shadcn_url;
$tag     = $shadcn_is_link ? 'a' : 'span';

$shadcn_wrapper_classes = array(
	'wp-block-shadcn-badge',
	'badge',
	'badge-' . $shadcn_variant,
);

if ( $shadcn_has_icon ) {
	// Shared class contract (single source: Icons::icon_classes()).
	$shadcn_wrapper_classes = array_merge(
		$shadcn_wrapper_classes,
		explode( ' ', \ShadcnBlocks\Icons::icon_classes( $shadcn_icon_name, $shadcn_icon_position ) )
	);
}

$shadcn_extra_attributes = array(
	'class' => implode( ' ', array_map( 'esc_attr', $shadcn_wrapper_classes ) ),
);

if ( $shadcn_is_link ) {
	// get_block_wrapper_attributes() runs esc_attr() on each value; href still
	// needs esc_url() to strip unsafe protocols.
	$shadcn_extra_attributes['href'] = esc_url( $shadcn_url );
	if ( '' !== $shadcn_link_target ) {
		$shadcn_extra_attributes['target'] = $shadcn_link_target;
	}
	if ( '' !== $shadcn_rel ) {
		$shadcn_extra_attributes['rel'] = $shadcn_rel;
	}
}

$shadcn_wrapper_attributes = get_block_wrapper_attributes( $shadcn_extra_attributes );

// Compose inner content. Without an icon, output is byte-identical to before
// (bare sanitized text). With an icon, prepend/append in DOM order; the icon
// and text sit as flex items in the inline-flex badge ('right' = icon after).
// $shadcn_icon_html is already sanitized by Icons::render_icon().
$shadcn_text_html = wp_kses_post( $shadcn_text );
if ( $shadcn_has_icon ) {
	$shadcn_inner_html = ( 'right' === $shadcn_icon_position )
		? $shadcn_text_html . $shadcn_icon_html
		: $shadcn_icon_html . $shadcn_text_html;
} else {
	$shadcn_inner_html = $shadcn_text_html;
}

printf(
	'<%1$s %2$s>%3$s</%1$s>',
	tag_escape( $tag ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	$shadcn_wrapper_attributes, // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	$shadcn_inner_html // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
);
