<?php
/**
 * Select block render.
 *
 * Same field anatomy as the Input block; the control is a native <select>
 * (theme styles it at element level). The placeholder renders as a disabled,
 * selected, empty-value first option — required + empty value fails native
 * validation, which is exactly the "please pick one" behavior wanted.
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
$options     = isset( $attributes['options'] ) && is_array( $attributes['options'] ) ? $attributes['options'] : array();

$options = array_values(
	array_filter(
		array_map(
			static function ( $option ) {
				return trim( wp_strip_all_tags( (string) $option ) );
			},
			$options
		),
		static function ( $option ) {
			return '' !== $option;
		}
	)
);

// A select with nothing to choose renders nothing on the frontend; the editor
// shows a visible "add options" hint so this is caught while writing.
if ( empty( $options ) ) {
	return;
}

$plain_label = wp_strip_all_tags( $label );
if ( '' === $field_name ) {
	$field_name = sanitize_title( $plain_label );
}

$field_id = wp_unique_id( 'shadcn-field-' );

$wrapper_attributes = get_block_wrapper_attributes(
	array( 'class' => 'wp-block-shadcn-select' . ( $required ? ' is-required' : '' ) )
);

$control_attributes = array(
	'id'    => $field_id,
	'class' => 'wp-block-shadcn-select__control',
);
if ( '' !== $field_name ) {
	$control_attributes['name'] = $field_name;
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

$control_html = '<select';
foreach ( $control_attributes as $attr_name => $attr_value ) {
	$control_html .= sprintf( ' %s="%s"', $attr_name, esc_attr( $attr_value ) );
}
$control_html .= '>';

if ( '' !== $placeholder ) {
	$control_html .= sprintf(
		'<option value="" disabled selected>%s</option>',
		esc_html( $placeholder )
	);
}
foreach ( $options as $option ) {
	$control_html .= sprintf( '<option value="%1$s">%1$s</option>', esc_attr( $option ) );
}
$control_html .= '</select>';

$label_html = '';
if ( '' !== $plain_label ) {
	$label_html = sprintf(
		'<label class="wp-block-shadcn-select__label" for="%s">%s</label>',
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
