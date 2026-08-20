<?php
/**
 * Title: Promo Banner Holiday Labelled Countdown
 * Slug: shadcn/promo-banner-holiday-labelled-countdown
 * Categories: shadcn, banner
 * Description: A slim full-width bar naming a seasonal campaign beside a four-unit countdown, each number in a chip with its unit written underneath.
 * AI Hint: Multi-day campaign bar — a gift icon and campaign name, then days, hours, minutes and seconds each in a tinted chip with a small caps label beneath. The labels and the days unit make a long run readable, so reach for it when a sale spans a week rather than an afternoon; the flash sale bar is tighter for something ending today. The countdown starts five days out and the author sets the real deadline.
 */

// The countdown needs a real instant, and a date hard-coded into a pattern file
// is wrong the day after it is written: too far out and the preview reads
// "38277 hours", past and the block hides itself entirely. Computing it as the
// pattern is inserted gives the author a sensible starting deadline to edit
// rather than a number to puzzle over.
$shadcn_countdown_target = ( new DateTimeImmutable( '+5 days', wp_timezone() ) )->format( 'Y-m-d\TH:i:s' );

?>
<!-- wp:group {"align":"full","className":"is-style-shadcn-on-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3","left":"var:preset|spacing|4","right":"var:preset|spacing|4"}}},"backgroundColor":"primary","textColor":"primary-foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-shadcn-on-dark has-primary-foreground-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--4)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Midwinter Sale","variant":"ghost","iconName":"gift"} /-->

<!-- wp:shadcn/countdown {"targetDate":"<?php echo esc_attr( $shadcn_countdown_target ); ?>","showLabels":true,"className":"is-style-boxed","style":{"typography":{"fontWeight":"700"}},"fontSize":"base"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
