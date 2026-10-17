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

$shadcn_label       = isset( $attributes['label'] ) ? trim( (string) $attributes['label'] ) : '';
$type        = isset( $attributes['type'] ) ? (string) $attributes['type'] : 'text';
$shadcn_placeholder = isset( $attributes['placeholder'] ) ? (string) $attributes['placeholder'] : '';
$shadcn_required    = ! empty( $attributes['required'] );
$shadcn_field_name  = isset( $attributes['fieldName'] ) ? trim( (string) $attributes['fieldName'] ) : '';

if ( ! in_array( $type, array( 'text', 'email', 'tel' ), true ) ) {
	$type = 'text';
}

// The POST key: explicit fieldName wins; otherwise derived from the label so
// authors never have to think about it. A field with neither renders unnamed
// and is skipped by the form serializer rather than posting an empty key.
$shadcn_plain_label = wp_strip_all_tags( $shadcn_label );
if ( '' === $shadcn_field_name ) {
	$shadcn_field_name = sanitize_title( $shadcn_plain_label );
}

$shadcn_field_id = wp_unique_id( 'shadcn-field-' );

$shadcn_wrapper_attributes = get_block_wrapper_attributes(
	array( 'class' => 'wp-block-shadcn-input' . ( $shadcn_required ? ' is-required' : '' ) )
);

$shadcn_control_attributes = array(
	'type'  => $type,
	'id'    => $shadcn_field_id,
	'class' => 'wp-block-shadcn-input__control',
);
if ( '' !== $shadcn_field_name ) {
	$shadcn_control_attributes['name'] = $shadcn_field_name;
}
if ( '' !== $shadcn_placeholder ) {
	$shadcn_control_attributes['placeholder'] = $shadcn_placeholder;
}
// A label-less field (e.g. a lone newsletter email box) still needs an
// accessible name; the placeholder is the only text available for it.
if ( '' === $shadcn_plain_label && '' !== $shadcn_placeholder ) {
	$shadcn_control_attributes['aria-label'] = $shadcn_placeholder;
}
if ( $shadcn_required ) {
	$shadcn_control_attributes['required']      = 'required';
	$shadcn_control_attributes['aria-required'] = 'true';
}
// The label text is what the mail body prints for this field (see the form
// submit serializer); carried as data so nested markup never confuses it.
if ( '' !== $shadcn_plain_label ) {
	$shadcn_control_attributes['data-field-label'] = $shadcn_plain_label;
}

$shadcn_control_html = '<input';
foreach ( $shadcn_control_attributes as $shadcn_attr_name => $shadcn_attr_value ) {
	$shadcn_control_html .= sprintf( ' %s="%s"', $shadcn_attr_name, esc_attr( $shadcn_attr_value ) );
}
$shadcn_control_html .= '/>';

$shadcn_label_html = '';
if ( '' !== $shadcn_plain_label ) {
	$shadcn_label_html = sprintf(
		'<label class="wp-block-shadcn-input__label" for="%s">%s</label>',
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
