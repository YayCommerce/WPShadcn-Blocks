<?php
/**
 * Counter block render.
 *
 * Prints the final value so the number is correct without JavaScript; view.js
 * rewinds it to the start value and animates when the block scrolls into view.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (unused, dynamic render).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

$shadcn_start_value = isset( $attributes['startValue'] ) ? (float) $attributes['startValue'] : 0;
$shadcn_end_value   = isset( $attributes['endValue'] ) ? (float) $attributes['endValue'] : 100;
$shadcn_duration    = isset( $attributes['duration'] ) ? max( 0, (int) $attributes['duration'] ) : 2000;
$shadcn_decimals    = isset( $attributes['decimals'] ) ? min( 4, max( 0, (int) $attributes['decimals'] ) ) : 0;
$shadcn_separator   = ! empty( $attributes['separator'] );
$shadcn_suffix      = isset( $attributes['suffix'] ) ? $attributes['suffix'] : '';

$shadcn_formatted = number_format( $shadcn_end_value, $shadcn_decimals, '.', $shadcn_separator ? ',' : '' );

$shadcn_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class'          => 'wp-block-shadcn-counter',
		'data-start'     => (string) $shadcn_start_value,
		'data-end'       => (string) $shadcn_end_value,
		'data-duration'  => (string) $shadcn_duration,
		'data-decimals'  => (string) $shadcn_decimals,
		'data-separator' => $shadcn_separator ? '1' : '0',
	)
);

// The number lives in its own span so view.js can rewrite it without touching
// the suffix.
$shadcn_suffix_html = '' !== $shadcn_suffix
	? sprintf( '<span class="counter-suffix">%s</span>', esc_html( $shadcn_suffix ) )
	: '';

printf(
	'<div %1$s><span class="counter-value">%2$s</span>%3$s</div>',
	$shadcn_wrapper_attributes, // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	esc_html( $shadcn_formatted ),
	$shadcn_suffix_html // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
);
