<?php
/**
 * Title: Stats Countdown CTA
 * Slug: shadcn/stats-countdown-cta
 * Categories: shadcn, stats
 * Description: A muted panel counting down to the end of an offer, with three supporting figures and a pair of buttons beneath.
 * AI Hint: Deadline panel — a centred eyebrow and heading over a live countdown in boxed digits, a hairline-divided row of three supporting figures and a primary and outline button side by side; reach for it when an offer has a published end date and the reader needs to see how long is left; the countdown block labels itself "Offer ends" for screen readers, so keep the surrounding copy about an offer.
 *
 * The countdown target is computed on render because the block hides itself
 * once its date passes, which a hard-coded date would do the day after it
 * was written.
 */

$shadcn_countdown_target = ( new DateTimeImmutable( '+21 days', wp_timezone() ) )->format( 'Y-m-d\TH:i:s' );

?>
<!-- wp:group {"metadata":{"categories":["shadcn","stats"],"patternName":"shadcn/stats-countdown-cta","name":"Stats Countdown CTA"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|5","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"align":"wide","style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|6","bottom":"var:preset|spacing|9","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|7"}},"backgroundColor":"muted","layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignwide has-muted-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.12em;text-transform:uppercase">Limited offer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontWeight":"600"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-4-xl-font-size" style="font-weight:600">Founding member pricing ends in</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:shadcn/countdown {"targetDate":"<?php echo esc_attr( $shadcn_countdown_target ); ?>","showDays":true,"showSeconds":true,"showLabels":true,"className":"is-style-boxed","style":{"typography":{"fontWeight":"700"}},"fontSize":"2-xl"} /-->

<!-- wp:group {"className":"is-style-shadcn-divided","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-shadcn-divided"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}}} -->
<div class="wp-block-column"><!-- wp:shadcn/counter {"endValue":32,"style":{"typography":{"fontWeight":"600","textAlign":"center"}},"fontSize":"2-xl"} /-->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size">Places left at this rate</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}}} -->
<div class="wp-block-column"><!-- wp:shadcn/counter {"endValue":12,"suffix":" weeks","style":{"typography":{"fontWeight":"600","textAlign":"center"}},"fontSize":"2-xl"} /-->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size">Months of support included</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}}} -->
<div class="wp-block-column"><!-- wp:shadcn/counter {"endValue":94,"suffix":"%","style":{"typography":{"fontWeight":"600","textAlign":"center"}},"fontSize":"2-xl"} /-->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size">Renewed after year one</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"md"} -->
<div class="wp-block-button is-size-md"><a class="wp-block-button__link wp-element-button" href="#">Claim the founding rate</a></div>
<!-- /wp:button -->

<!-- wp:button {"size":"md","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline is-size-md"><a class="wp-block-button__link wp-element-button" href="#">Compare the plans</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
