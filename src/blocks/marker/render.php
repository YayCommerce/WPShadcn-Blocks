<?php
/**
 * Marker block render.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (unused, dynamic render).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

$shadcn_text = isset( $attributes['content'] ) ? $attributes['content'] : '';

// Nothing to show without a label.
if ( '' === trim( wp_strip_all_tags( $shadcn_text ) ) ) {
	return;
}

$shadcn_variant     = isset( $attributes['variant'] ) && '' !== $attributes['variant'] ? $attributes['variant'] : 'default';
$shadcn_shimmer     = ! empty( $attributes['shimmer'] );
$shadcn_url         = isset( $attributes['url'] ) ? $attributes['url'] : '';
$shadcn_link_target = isset( $attributes['linkTarget'] ) ? $attributes['linkTarget'] : '';
$shadcn_rel         = isset( $attributes['rel'] ) ? $attributes['rel'] : '';

$shadcn_is_link = '' !== $shadcn_url;
$tag     = $shadcn_is_link ? 'a' : 'div';

$shadcn_wrapper_classes = array(
	'wp-block-shadcn-marker',
	'marker',
	'marker-' . $shadcn_variant,
);

if ( $shadcn_shimmer ) {
	$shadcn_wrapper_classes[] = 'marker-shimmer';
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

printf(
	'<%1$s %2$s><span class="marker-content">%3$s</span></%1$s>',
	tag_escape( $tag ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	$shadcn_wrapper_attributes, // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	wp_kses_post( $shadcn_text )
);
