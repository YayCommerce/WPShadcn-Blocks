<?php
/**
 * Countdown block render.
 *
 * Prints the remaining time as of render, so the block is correct without
 * JavaScript and shows no empty frame before view.js runs. view.js then
 * recalculates from `data-target` and takes over the ticking.
 *
 * `data-target` is the load-bearing value, not the printed digits: a page
 * served from a full-page cache carries digits frozen at the moment the cache
 * entry was written, which may be hours stale. The target is an absolute
 * instant and stays true however long the HTML is held.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (unused, dynamic render).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

$target_raw = isset( $attributes['targetDate'] ) ? trim( (string) $attributes['targetDate'] ) : '';

// An unconfigured countdown renders nothing rather than a permanent 00:00:00,
// which on a live page reads as a broken promotion. The editor shows a visible
// "set an end date" placeholder so this is caught while writing, not after
// publishing.
if ( '' === $target_raw ) {
	return;
}

try {
	// A naive value ("2026-12-31T23:59:59") is read in the site's timezone,
	// which is what the author picked in the editor. A value carrying its own
	// offset keeps that offset.
	$target = new DateTimeImmutable( $target_raw, wp_timezone() );
} catch ( Exception $e ) {
	return;
}

$show_days     = ! isset( $attributes['showDays'] ) || (bool) $attributes['showDays'];
$show_seconds  = ! isset( $attributes['showSeconds'] ) || (bool) $attributes['showSeconds'];
$show_labels   = ! empty( $attributes['showLabels'] );
$pulse         = ! empty( $attributes['pulseSeparator'] );
$on_expire     = isset( $attributes['onExpire'] ) ? (string) $attributes['onExpire'] : 'hide';
$expired_text  = isset( $attributes['expiredMessage'] ) ? (string) $attributes['expiredMessage'] : '';
$separator     = isset( $attributes['separator'] ) ? (string) $attributes['separator'] : ':';
$separator     = '' === $separator ? '' : mb_substr( $separator, 0, 3 );

if ( ! in_array( $on_expire, array( 'hide', 'zeros', 'message' ), true ) ) {
	$on_expire = 'hide';
}

$remaining = max( 0, $target->getTimestamp() - time() );
$expired   = 0 === $remaining;

if ( $expired && 'hide' === $on_expire ) {
	return;
}

if ( $expired && 'message' === $on_expire ) {
	if ( '' === trim( $expired_text ) ) {
		return;
	}

	printf(
		'<div %1$s>%2$s</div>',
		get_block_wrapper_attributes( array( 'class' => 'wp-block-shadcn-countdown is-expired' ) ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		esc_html( $expired_text )
	);
	return;
}

// Split the remaining span into the units this block shows. Written inline
// rather than as a helper because WordPress includes render.php once per block
// instance, so a function declared here fatals on the second countdown in a
// page. view.js repeats this arithmetic verbatim — the two must agree or the
// digits jump the moment the script takes over.
//
// With days hidden the hours roll up instead of restarting, so a two-day sale
// reads 48 hours rather than silently dropping a day.
$parts = array();

if ( $show_days ) {
	$parts['days'] = (int) floor( $remaining / DAY_IN_SECONDS );
	$parts['hours'] = (int) floor( ( $remaining % DAY_IN_SECONDS ) / HOUR_IN_SECONDS );
} else {
	$parts['hours'] = (int) floor( $remaining / HOUR_IN_SECONDS );
}

$parts['minutes'] = (int) floor( ( $remaining % HOUR_IN_SECONDS ) / MINUTE_IN_SECONDS );

if ( $show_seconds ) {
	$parts['seconds'] = (int) ( $remaining % MINUTE_IN_SECONDS );
}

$labels = array(
	'days'    => __( 'Days', 'shadcn-blocks' ),
	'hours'   => __( 'Hrs', 'shadcn-blocks' ),
	'minutes' => __( 'Min', 'shadcn-blocks' ),
	'seconds' => __( 'Sec', 'shadcn-blocks' ),
);

$units_html = '';
$first      = true;

foreach ( $parts as $key => $value ) {
	if ( ! $first && '' !== $separator ) {
		$units_html .= sprintf(
			'<span class="countdown-separator%1$s" aria-hidden="true">%2$s</span>',
			$pulse ? ' is-pulsing' : '',
			esc_html( $separator )
		);
	}

	$units_html .= sprintf(
		'<span class="countdown-unit" data-unit="%1$s"><span class="countdown-value">%2$s</span>%3$s</span>',
		esc_attr( $key ),
		esc_html( str_pad( (string) $value, 2, '0', STR_PAD_LEFT ) ),
		$show_labels ? sprintf( '<span class="countdown-label">%s</span>', esc_html( $labels[ $key ] ) ) : ''
	);

	$first = false;
}

$wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class'        => 'wp-block-shadcn-countdown',
		'data-target'  => $target->setTimezone( new DateTimeZone( 'UTC' ) )->format( 'Y-m-d\TH:i:s\Z' ),
		'data-days'    => $show_days ? '1' : '0',
		'data-seconds' => $show_seconds ? '1' : '0',
		'data-expire'  => $on_expire,
	)
);

// The ticking digits are hidden from assistive technology and replaced by one
// static sentence. A live region updating every second would otherwise talk
// over everything else on the page, and the deadline itself is the only part a
// screen reader user needs.
printf(
	'<div %1$s><span class="screen-reader-text">%2$s</span><span class="countdown-units" aria-hidden="true">%3$s</span>%4$s</div>',
	$wrapper_attributes, // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	esc_html(
		sprintf(
			/* translators: %s: formatted end date and time. */
			__( 'Offer ends %s', 'shadcn-blocks' ),
			wp_date( get_option( 'date_format' ) . ' ' . get_option( 'time_format' ), $target->getTimestamp() )
		)
	),
	$units_html, // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	'message' === $on_expire && '' !== trim( $expired_text )
		? sprintf( '<span class="countdown-expired-message" hidden>%s</span>', esc_html( $expired_text ) )
		: ''
);
