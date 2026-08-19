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

$start_value = isset( $attributes['startValue'] ) ? (float) $attributes['startValue'] : 0;
$end_value   = isset( $attributes['endValue'] ) ? (float) $attributes['endValue'] : 100;
$duration    = isset( $attributes['duration'] ) ? max( 0, (int) $attributes['duration'] ) : 2000;
$decimals    = isset( $attributes['decimals'] ) ? min( 4, max( 0, (int) $attributes['decimals'] ) ) : 0;
$separator   = ! empty( $attributes['separator'] );
$suffix      = isset( $attributes['suffix'] ) ? $attributes['suffix'] : '';

$formatted = number_format( $end_value, $decimals, '.', $separator ? ',' : '' );

$wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class'          => 'wp-block-shadcn-counter',
		'data-start'     => (string) $start_value,
		'data-end'       => (string) $end_value,
		'data-duration'  => (string) $duration,
		'data-decimals'  => (string) $decimals,
		'data-separator' => $separator ? '1' : '0',
	)
);

// The number lives in its own span so view.js can rewrite it without touching
// the suffix.
$suffix_html = '' !== $suffix
	? sprintf( '<span class="counter-suffix">%s</span>', esc_html( $suffix ) )
	: '';

printf(
	'<div %1$s><span class="counter-value">%2$s</span>%3$s</div>',
	$wrapper_attributes, // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	esc_html( $formatted ),
	$suffix_html // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
);
