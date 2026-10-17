<?php
/**
 * Title: Hero Impact Statement
 * Slug: shadcn/hero-impact-statement
 * Categories: shadcn, hero
 * Description: A purely typographic hero — one oversized centred statement over a short muted lead and two buttons, closing on a hairline-divided row of three plain figures.
 * AI Hint: The quietest hero in the set and the only one with no image, badge or card: a 900px centred column holding a fluid oversized h1 that runs two or three lines, a one-sentence muted lead, a centred pair of buttons with a filled primary beside an outline, and beneath a hairline a three-across proof strip of bare columns each stacking a semibold figure over a tiny muted caption; reach for it when the sentence itself is the argument and any artwork would only dilute it.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:group {"className":"is-style-shadcn-divided","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-group is-style-shadcn-divided"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"fluid-7-xl"} -->
<h1 class="wp-block-heading has-text-align-center has-fluid-7-xl-font-size">Your roadmap already exists. It is just scattered across nine different tools.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">One surface for the plan, the work and the decisions behind it — with no migration weekend and no new vocabulary to teach anyone.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"lg"} -->
<div class="wp-block-button is-size-lg"><a class="wp-block-button__link wp-element-button" href="#">Start free</a></div>
<!-- /wp:button -->

<!-- wp:button {"size":"lg","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline is-size-lg"><a class="wp-block-button__link wp-element-button" href="#">See how it works</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"fontSize":"2-xl"} -->
<p class="has-text-align-center has-2-xl-font-size" style="font-weight:600">4 min</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size">Median time to move an existing roadmap in</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"fontSize":"2-xl"} -->
<p class="has-text-align-center has-2-xl-font-size" style="font-weight:600">12,000</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size">Teams planning their week here every Monday</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"fontSize":"2-xl"} -->
<p class="has-text-align-center has-2-xl-font-size" style="font-weight:600">99.9%</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size">Uptime measured across the last four quarters</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
