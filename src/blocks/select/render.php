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

$shadcn_label       = isset( $attributes['label'] ) ? trim( (string) $attributes['label'] ) : '';
$shadcn_placeholder = isset( $attributes['placeholder'] ) ? (string) $attributes['placeholder'] : '';
$shadcn_required    = ! empty( $attributes['required'] );
$shadcn_field_name  = isset( $attributes['fieldName'] ) ? trim( (string) $attributes['fieldName'] ) : '';
$shadcn_options     = isset( $attributes['options'] ) && is_array( $attributes['options'] ) ? $attributes['options'] : array();

$shadcn_options = array_values(
	array_filter(
		array_map(
			static function ( $shadcn_option ) {
				return trim( wp_strip_all_tags( (string) $shadcn_option ) );
			},
			$shadcn_options
		),
		static function ( $shadcn_option ) {
			return '' !== $shadcn_option;
		}
	)
);

// A select with nothing to choose renders nothing on the frontend; the editor
// shows a visible "add options" hint so this is caught while writing.
if ( empty( $shadcn_options ) ) {
	return;
}

$shadcn_plain_label = wp_strip_all_tags( $shadcn_label );
if ( '' === $shadcn_field_name ) {
	$shadcn_field_name = sanitize_title( $shadcn_plain_label );
}

$shadcn_field_id = wp_unique_id( 'shadcn-field-' );

$shadcn_wrapper_attributes = get_block_wrapper_attributes(
	array( 'class' => 'wp-block-shadcn-select' . ( $shadcn_required ? ' is-required' : '' ) )
);

$shadcn_control_attributes = array(
	'id'    => $shadcn_field_id,
	'class' => 'wp-block-shadcn-select__control',
);
if ( '' !== $shadcn_field_name ) {
	$shadcn_control_attributes['name'] = $shadcn_field_name;
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

$shadcn_control_html = '<select';
foreach ( $shadcn_control_attributes as $shadcn_attr_name => $shadcn_attr_value ) {
	$shadcn_control_html .= sprintf( ' %s="%s"', $shadcn_attr_name, esc_attr( $shadcn_attr_value ) );
}
$shadcn_control_html .= '>';

if ( '' !== $shadcn_placeholder ) {
	$shadcn_control_html .= sprintf(
		'<option value="" disabled selected>%s</option>',
		esc_html( $shadcn_placeholder )
	);
}
foreach ( $shadcn_options as $shadcn_option ) {
	$shadcn_control_html .= sprintf( '<option value="%1$s">%1$s</option>', esc_attr( $shadcn_option ) );
}
$shadcn_control_html .= '</select>';

$shadcn_label_html = '';
if ( '' !== $shadcn_plain_label ) {
	$shadcn_label_html = sprintf(
		'<label class="wp-block-shadcn-select__label" for="%s">%s</label>',
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
