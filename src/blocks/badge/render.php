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

$is_link = '' !== $url;
$tag     = $is_link ? 'a' : 'span';

$wrapper_classes = array(
	'wp-block-shadcn-badge',
	'badge',
	'badge-' . $variant,
);

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

printf(
	'<%1$s %2$s>%3$s</%1$s>',
	tag_escape( $tag ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	$wrapper_attributes, // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	wp_kses_post( $text )
);
