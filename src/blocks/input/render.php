<?php
/**
 * Input block render.
 *
 * A labeled single-line control. The `for`/`id` pair is generated per render
 * with wp_unique_id() — it only needs to be unique within one page, so a
 * cached page staying on old ids is harmless.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (unused, dynamic render).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

$label       = isset( $attributes['label'] ) ? trim( (string) $attributes['label'] ) : '';
$type        = isset( $attributes['type'] ) ? (string) $attributes['type'] : 'text';
$placeholder = isset( $attributes['placeholder'] ) ? (string) $attributes['placeholder'] : '';
$required    = ! empty( $attributes['required'] );
$field_name  = isset( $attributes['fieldName'] ) ? trim( (string) $attributes['fieldName'] ) : '';

if ( ! in_array( $type, array( 'text', 'email', 'tel' ), true ) ) {
	$type = 'text';
}

// The POST key: explicit fieldName wins; otherwise derived from the label so
// authors never have to think about it. A field with neither renders unnamed
// and is skipped by the form serializer rather than posting an empty key.
$plain_label = wp_strip_all_tags( $label );
if ( '' === $field_name ) {
	$field_name = sanitize_title( $plain_label );
}

$field_id = wp_unique_id( 'shadcn-field-' );

$wrapper_attributes = get_block_wrapper_attributes(
	array( 'class' => 'wp-block-shadcn-input' . ( $required ? ' is-required' : '' ) )
);

$control_attributes = array(
	'type'  => $type,
	'id'    => $field_id,
	'class' => 'wp-block-shadcn-input__control',
);
if ( '' !== $field_name ) {
	$control_attributes['name'] = $field_name;
}
if ( '' !== $placeholder ) {
	$control_attributes['placeholder'] = $placeholder;
}
// A label-less field (e.g. a lone newsletter email box) still needs an
// accessible name; the placeholder is the only text available for it.
if ( '' === $plain_label && '' !== $placeholder ) {
	$control_attributes['aria-label'] = $placeholder;
}
if ( $required ) {
	$control_attributes['required']      = 'required';
	$control_attributes['aria-required'] = 'true';
}
// The label text is what the mail body prints for this field (see the form
// submit serializer); carried as data so nested markup never confuses it.
if ( '' !== $plain_label ) {
	$control_attributes['data-field-label'] = $plain_label;
}

$control_html = '<input';
foreach ( $control_attributes as $attr_name => $attr_value ) {
	$control_html .= sprintf( ' %s="%s"', $attr_name, esc_attr( $attr_value ) );
}
$control_html .= '/>';

$label_html = '';
if ( '' !== $plain_label ) {
	$label_html = sprintf(
		'<label class="wp-block-shadcn-input__label" for="%s">%s</label>',
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
