<?php
/**
 * Form Submit Button block render.
 *
 * A real <button type="submit"> — not a styled anchor like core/button — so
 * Enter-to-submit and native required validation work, and view.js can flip
 * `disabled` while a request is in flight. The spinner span is always in the
 * markup; the parent form's .is-pending class shows it and hides the label.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (unused, dynamic render).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

$shadcn_label = isset( $attributes['label'] ) ? trim( (string) $attributes['label'] ) : '';

// Width mirrors core/button: a percentage of the form's width from a fixed
// menu (25/50/75/100). Unset, the form's grid stretches the button full
// width — unless an alignment is chosen, which switches it to hug the label.
$shadcn_width = isset( $attributes['width'] ) ? (int) $attributes['width'] : 0;
if ( ! in_array( $shadcn_width, array( 25, 50, 75, 100 ), true ) ) {
	$shadcn_width = 0;
}

// Alignment positions the button inside the form's grid track
// (justify-self via the is-align-* classes in style.scss).
$shadcn_alignment = isset( $attributes['alignment'] ) ? (string) $attributes['alignment'] : '';
if ( ! in_array( $shadcn_alignment, array( 'left', 'center', 'right' ), true ) ) {
	$shadcn_alignment = '';
}

if ( '' === wp_strip_all_tags( $shadcn_label ) ) {
	$shadcn_label = __( 'Submit', 'yaycommerce-blocks-for-shadcn-ui' );
}

$shadcn_button_attributes = array(
	'class' => 'wp-block-shadcn-form-submit wp-element-button' . ( '' !== $shadcn_alignment ? ' is-align-' . $shadcn_alignment : '' ),
	'type'  => 'submit',
);
if ( $shadcn_width > 0 ) {
	$shadcn_button_attributes['style'] = 'width:' . $shadcn_width . '%';
}

$shadcn_wrapper_attributes = get_block_wrapper_attributes( $shadcn_button_attributes );

printf(
	'<button %1$s><span class="wp-block-shadcn-form-submit__label">%2$s</span><span class="wp-block-shadcn-form-submit__spinner" aria-hidden="true"></span></button>',
	$shadcn_wrapper_attributes, // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	wp_kses_post( $shadcn_label )
);
