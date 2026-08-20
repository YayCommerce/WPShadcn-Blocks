<?php
/**
 * Title: Promo Banner Flash Sale Countdown
 * Slug: shadcn/promo-banner-flash-sale-countdown
 * Categories: shadcn, banner
 * Description: A slim full-width bar with a lead-in line, a boxed hours-minutes-seconds countdown, and the offer spelled out after it.
 * AI Hint: Timed sale bar — a short "ends in" lead-in, then the remaining hours, minutes and seconds each sitting in its own tinted chip, then a line naming the discount. Best for a sale measured in hours rather than days; the labelled countdown bar suits a multi-day campaign and the order-within bar suits a dispatch cut-off. The countdown starts eighteen hours out and the author sets the real deadline.
 */

// The countdown needs a real instant, and a date hard-coded into a pattern file
// is wrong the day after it is written: too far out and the preview reads
// "38277 hours", past and the block hides itself entirely. Computing it as the
// pattern is inserted gives the author a sensible starting deadline to edit
// rather than a number to puzzle over.
$shadcn_countdown_target = ( new DateTimeImmutable( '+18 hours', wp_timezone() ) )->format( 'Y-m-d\TH:i:s' );

?>
<!-- wp:group {"align":"full","className":"is-style-shadcn-on-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3","left":"var:preset|spacing|4","right":"var:preset|spacing|4"}}},"backgroundColor":"primary","textColor":"primary-foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-shadcn-on-dark has-primary-foreground-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--4)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Flash sale ends in</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/countdown {"targetDate":"<?php echo esc_attr( $shadcn_countdown_target ); ?>","showDays":false,"className":"is-style-boxed","style":{"typography":{"fontWeight":"700"}},"fontSize":"lg"} /-->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Half off everything in the outlet</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
