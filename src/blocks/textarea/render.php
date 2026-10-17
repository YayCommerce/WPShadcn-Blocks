<?php
/**
 * Textarea block render.
 *
 * Same field anatomy as the Input block (label + control, generated for/id
 * pair, label-derived POST key); the control is a multi-line textarea.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (unused, dynamic render).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

$shadcn_label       = isset( $attributes['label'] ) ? trim( (string) $attributes['label'] ) : '';
$shadcn_placeholder = isset( $attributes['placeholder'] ) ? (string) $attributes['placeholder'] : '';
$shadcn_required    = ! empty( $attributes['required'] );
$shadcn_field_name  = isset( $attributes['fieldName'] ) ? trim( (string) $attributes['fieldName'] ) : '';
$shadcn_rows        = isset( $attributes['rows'] ) ? (int) $attributes['rows'] : 4;
$shadcn_rows        = max( 2, min( 20, $shadcn_rows ) );

$shadcn_plain_label = wp_strip_all_tags( $shadcn_label );
if ( '' === $shadcn_field_name ) {
	$shadcn_field_name = sanitize_title( $shadcn_plain_label );
}

$shadcn_field_id = wp_unique_id( 'shadcn-field-' );

$shadcn_wrapper_attributes = get_block_wrapper_attributes(
	array( 'class' => 'wp-block-shadcn-textarea' . ( $shadcn_required ? ' is-required' : '' ) )
);

$shadcn_control_attributes = array(
	'id'    => $shadcn_field_id,
	'class' => 'wp-block-shadcn-textarea__control',
	'rows'  => (string) $shadcn_rows,
);
if ( '' !== $shadcn_field_name ) {
	$shadcn_control_attributes['name'] = $shadcn_field_name;
}
if ( '' !== $shadcn_placeholder ) {
	$shadcn_control_attributes['placeholder'] = $shadcn_placeholder;
}
if ( '' === $shadcn_plain_label && '' !== $shadcn_placeholder ) {
	$shadcn_control_attributes['aria-label'] = $shadcn_placeholder;
}
if ( $shadcn_required ) {
	$shadcn_control_attributes['required']      = 'required';
	$shadcn_control_attributes['aria-required'] = 'true';
}
if ( '' !== $shadcn_plain_label ) {
	$shadcn_control_attributes['data-field-label'] = $shadcn_plain_label;
}

$shadcn_control_html = '<textarea';
foreach ( $shadcn_control_attributes as $shadcn_attr_name => $shadcn_attr_value ) {
	$shadcn_control_html .= sprintf( ' %s="%s"', $shadcn_attr_name, esc_attr( $shadcn_attr_value ) );
}
$shadcn_control_html .= '></textarea>';

$shadcn_label_html = '';
if ( '' !== $shadcn_plain_label ) {
	$shadcn_label_html = sprintf(
		'<label class="wp-block-shadcn-textarea__label" for="%s">%s</label>',
		esc_attr( $shadcn_field_id ),
		wp_kses_post( $shadcn_label )
	);
}

printf(
	'<div %1$s>%2$s%3$s</div>',
	$shadcn_wrapper_attributes, // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	$shadcn_label_html, // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	$shadcn_control_html // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
);
