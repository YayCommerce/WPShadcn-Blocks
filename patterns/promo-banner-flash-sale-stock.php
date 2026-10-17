<?php
/**
 * Title: Promo Banner Flash Sale Stock
 * Slug: shadcn/promo-banner-flash-sale-stock
 * Categories: shadcn, banner
 * Description: A slim full-width bar putting a blinking countdown beside a remaining-stock count.
 * AI Hint: Flash sale bar that pairs two pressures — a countdown whose separators blink, and the number of items left stated beside it. Use it only where that figure is real and kept current, since it is copy an author types rather than live inventory; the plain flash sale bar is the honest choice when only the deadline is genuine. The countdown starts six hours out and the author sets the real deadline.
 */

defined( 'ABSPATH' ) || exit;

// The countdown needs a real instant, and a date hard-coded into a pattern file
// is wrong the day after it is written: too far out and the preview reads
// "38277 hours", past and the block hides itself entirely. Computing it as the
// pattern is inserted gives the author a sensible starting deadline to edit
// rather than a number to puzzle over.
$shadcn_countdown_target = ( new DateTimeImmutable( '+6 hours', wp_timezone() ) )->format( 'Y-m-d\TH:i:s' );

?>
<!-- wp:group {"align":"full","className":"is-style-shadcn-on-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3","left":"var:preset|spacing|4","right":"var:preset|spacing|4"}}},"backgroundColor":"primary","textColor":"primary-foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-shadcn-on-dark has-primary-foreground-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--4)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Flash sale","variant":"ghost","iconName":"zap"} /-->

<!-- wp:shadcn/countdown {"targetDate":"<?php echo esc_attr( $shadcn_countdown_target ); ?>","showDays":false,"pulseSeparator":true,"style":{"typography":{"fontWeight":"700"}},"fontSize":"base"} /-->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><strong>27</strong> left at this price</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
