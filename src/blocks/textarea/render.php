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

$label       = isset( $attributes['label'] ) ? trim( (string) $attributes['label'] ) : '';
$placeholder = isset( $attributes['placeholder'] ) ? (string) $attributes['placeholder'] : '';
$required    = ! empty( $attributes['required'] );
$field_name  = isset( $attributes['fieldName'] ) ? trim( (string) $attributes['fieldName'] ) : '';
$rows        = isset( $attributes['rows'] ) ? (int) $attributes['rows'] : 4;
$rows        = max( 2, min( 20, $rows ) );

$plain_label = wp_strip_all_tags( $label );
if ( '' === $field_name ) {
	$field_name = sanitize_title( $plain_label );
}

$field_id = wp_unique_id( 'shadcn-field-' );

$wrapper_attributes = get_block_wrapper_attributes(
	array( 'class' => 'wp-block-shadcn-textarea' . ( $required ? ' is-required' : '' ) )
);

$control_attributes = array(
	'id'    => $field_id,
	'class' => 'wp-block-shadcn-textarea__control',
	'rows'  => (string) $rows,
);
if ( '' !== $field_name ) {
	$control_attributes['name'] = $field_name;
}
if ( '' !== $placeholder ) {
	$control_attributes['placeholder'] = $placeholder;
}
if ( '' === $plain_label && '' !== $placeholder ) {
	$control_attributes['aria-label'] = $placeholder;
}
if ( $required ) {
	$control_attributes['required']      = 'required';
	$control_attributes['aria-required'] = 'true';
}
if ( '' !== $plain_label ) {
	$control_attributes['data-field-label'] = $plain_label;
}

$control_html = '<textarea';
foreach ( $control_attributes as $attr_name => $attr_value ) {
	$control_html .= sprintf( ' %s="%s"', $attr_name, esc_attr( $attr_value ) );
}
$control_html .= '></textarea>';

$label_html = '';
if ( '' !== $plain_label ) {
	$label_html = sprintf(
		'<label class="wp-block-shadcn-textarea__label" for="%s">%s</label>',
		esc_attr( $field_id ),
		wp_kses_post( $label )
	);
}

printf(
	'<div %1$s>%2$s%3$s</div>',
	$wrapper_attributes, // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	$label_html, // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	$control_html // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
);
