<?php
/**
 * Title: Promo Banner Order Within Countdown
 * Slug: shadcn/promo-banner-order-within-countdown
 * Categories: shadcn, banner
 * Description: A slim full-width bar reading as one sentence, with a live countdown to the daily dispatch cut-off sitting inside it.
 * AI Hint: Delivery cut-off bar for a shop — a clock icon opens a sentence that runs "order within" a ticking hours-minutes-seconds countdown "for delivery by" a named date. The countdown is inline in the copy rather than set apart, so it suits a same-day dispatch promise; use the flash sale bar when the timer itself is the headline. The countdown starts eight hours out and the author sets the real cut-off.
 */

defined( 'ABSPATH' ) || exit;

// The countdown needs a real instant, and a date hard-coded into a pattern file
// is wrong the day after it is written: too far out and the preview reads
// "38277 hours", past and the block hides itself entirely. Computing it as the
// pattern is inserted gives the author a sensible starting deadline to edit
// rather than a number to puzzle over.
$shadcn_countdown_target = ( new DateTimeImmutable( '+8 hours', wp_timezone() ) )->format( 'Y-m-d\TH:i:s' );

?>
<!-- wp:group {"align":"full","className":"is-style-shadcn-on-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3","left":"var:preset|spacing|4","right":"var:preset|spacing|4"}}},"backgroundColor":"primary","textColor":"primary-foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-shadcn-on-dark has-primary-foreground-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--4)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Order within","variant":"ghost","iconName":"clock"} /-->

<!-- wp:shadcn/countdown {"targetDate":"<?php echo esc_attr( $shadcn_countdown_target ); ?>","showDays":false,"style":{"typography":{"fontWeight":"700"}},"fontSize":"sm"} /-->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">for delivery before the weekend</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
