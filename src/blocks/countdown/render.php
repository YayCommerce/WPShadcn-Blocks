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

$shadcn_target_raw = isset( $attributes['targetDate'] ) ? trim( (string) $attributes['targetDate'] ) : '';

// An unconfigured countdown renders nothing rather than a permanent 00:00:00,
// which on a live page reads as a broken promotion. The editor shows a visible
// "set an end date" placeholder so this is caught while writing, not after
// publishing.
if ( '' === $shadcn_target_raw ) {
	return;
}

try {
	// A naive value ("2026-12-31T23:59:59") is read in the site's timezone,
	// which is what the author picked in the editor. A value carrying its own
	// offset keeps that offset.
	$shadcn_target = new DateTimeImmutable( $shadcn_target_raw, wp_timezone() );
} catch ( Exception $e ) {
	return;
}

$shadcn_show_days     = ! isset( $attributes['showDays'] ) || (bool) $attributes['showDays'];
$shadcn_show_seconds  = ! isset( $attributes['showSeconds'] ) || (bool) $attributes['showSeconds'];
$shadcn_show_labels   = ! empty( $attributes['showLabels'] );
$shadcn_pulse         = ! empty( $attributes['pulseSeparator'] );
$shadcn_on_expire     = isset( $attributes['onExpire'] ) ? (string) $attributes['onExpire'] : 'hide';
$shadcn_expired_text  = isset( $attributes['expiredMessage'] ) ? (string) $attributes['expiredMessage'] : '';
$shadcn_separator     = isset( $attributes['separator'] ) ? (string) $attributes['separator'] : ':';
$shadcn_separator     = '' === $shadcn_separator ? '' : mb_substr( $shadcn_separator, 0, 3 );

if ( ! in_array( $shadcn_on_expire, array( 'hide', 'zeros', 'message' ), true ) ) {
	$shadcn_on_expire = 'hide';
}

$shadcn_remaining = max( 0, $shadcn_target->getTimestamp() - time() );
$shadcn_expired   = 0 === $shadcn_remaining;

if ( $shadcn_expired && 'hide' === $shadcn_on_expire ) {
	return;
}

if ( $shadcn_expired && 'message' === $shadcn_on_expire ) {
	if ( '' === trim( $shadcn_expired_text ) ) {
		return;
	}

	printf(
		'<div %1$s>%2$s</div>',
		get_block_wrapper_attributes( array( 'class' => 'wp-block-shadcn-countdown is-expired' ) ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		esc_html( $shadcn_expired_text )
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
$shadcn_parts = array();

if ( $shadcn_show_days ) {
	$shadcn_parts['days'] = (int) floor( $shadcn_remaining / DAY_IN_SECONDS );
	$shadcn_parts['hours'] = (int) floor( ( $shadcn_remaining % DAY_IN_SECONDS ) / HOUR_IN_SECONDS );
} else {
	$shadcn_parts['hours'] = (int) floor( $shadcn_remaining / HOUR_IN_SECONDS );
}

$shadcn_parts['minutes'] = (int) floor( ( $shadcn_remaining % HOUR_IN_SECONDS ) / MINUTE_IN_SECONDS );

if ( $shadcn_show_seconds ) {
	$shadcn_parts['seconds'] = (int) ( $shadcn_remaining % MINUTE_IN_SECONDS );
}

$shadcn_labels = array(
	'days'    => __( 'Days', 'yaycommerce-blocks-for-shadcn-ui' ),
	'hours'   => __( 'Hrs', 'yaycommerce-blocks-for-shadcn-ui' ),
	'minutes' => __( 'Min', 'yaycommerce-blocks-for-shadcn-ui' ),
	'seconds' => __( 'Sec', 'yaycommerce-blocks-for-shadcn-ui' ),
);

$shadcn_units_html = '';
$shadcn_first      = true;

foreach ( $shadcn_parts as $shadcn_key => $shadcn_value ) {
	if ( ! $shadcn_first && '' !== $shadcn_separator ) {
		$shadcn_units_html .= sprintf(
			'<span class="countdown-separator%1$s" aria-hidden="true">%2$s</span>',
			$shadcn_pulse ? ' is-pulsing' : '',
			esc_html( $shadcn_separator )
		);
	}

	$shadcn_units_html .= sprintf(
		'<span class="countdown-unit" data-unit="%1$s"><span class="countdown-value">%2$s</span>%3$s</span>',
		esc_attr( $shadcn_key ),
		esc_html( str_pad( (string) $shadcn_value, 2, '0', STR_PAD_LEFT ) ),
		$shadcn_show_labels ? sprintf( '<span class="countdown-label">%s</span>', esc_html( $shadcn_labels[ $shadcn_key ] ) ) : ''
	);

	$shadcn_first = false;
}

$shadcn_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class'        => 'wp-block-shadcn-countdown',
		'data-target'  => $shadcn_target->setTimezone( new DateTimeZone( 'UTC' ) )->format( 'Y-m-d\TH:i:s\Z' ),
		'data-days'    => $shadcn_show_days ? '1' : '0',
		'data-seconds' => $shadcn_show_seconds ? '1' : '0',
		'data-expire'  => $shadcn_on_expire,
	)
);

// The ticking digits are hidden from assistive technology and replaced by one
// static sentence. A live region updating every second would otherwise talk
// over everything else on the page, and the deadline itself is the only part a
// screen reader user needs.
printf(
	'<div %1$s><span class="screen-reader-text">%2$s</span><span class="countdown-units" aria-hidden="true">%3$s</span>%4$s</div>',
	$shadcn_wrapper_attributes, // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	esc_html(
		sprintf(
			/* translators: %s: formatted end date and time. */
			__( 'Offer ends %s', 'yaycommerce-blocks-for-shadcn-ui' ),
			wp_date( get_option( 'date_format' ) . ' ' . get_option( 'time_format' ), $shadcn_target->getTimestamp() )
		)
	),
	$shadcn_units_html, // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	'message' === $shadcn_on_expire && '' !== trim( $shadcn_expired_text )
		? sprintf( '<span class="countdown-expired-message" hidden>%s</span>', esc_html( $shadcn_expired_text ) )
		: ''
);
