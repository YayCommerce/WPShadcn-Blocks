<?php
/**
 * Title: Pricing Two Plan Offset Cards
 * Slug: shadcn/pricing-two-plan-offset-cards
 * Categories: shadcn, pricing
 * Description: Two plan cards deliberately knocked out of alignment, the recommended one riding higher than its neighbour, under a centred heading and segmented billing control.
 * AI Hint: Two-plan pricing section where the cards are vertically staggered rather than sharing a baseline, the entry plan dropped by a step so the recommended plan sits proud of it; each card carries the plan name, an oversized price with the billing period captioned underneath, a short description, a check list of features and a full-width action button, and a segmented control above swaps every figure between monthly and yearly; reach for it when a flat row of equal cards feels too static and the eye needs steering to one tier.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:shadcn/pricing {"align":"wide","intervals":[{"key":"monthly","label":"Monthly"},{"key":"yearly","label":"Yearly"}],"defaultInterval":"monthly","style":{"spacing":{"blockGap":"var:preset|spacing|7"}},"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"textAlign":"center"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size">Two ways to build</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Both plans cover unlimited projects. Change billing whenever it suits your finance team.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/pricing-switch {"variant":"segmented","justification":"center"} /-->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"0.75rem"},"spacing":{"margin":{"top":"var:preset|spacing|8"},"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:0.75rem;margin-top:var(--wp--preset--spacing--8);padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size" style="font-weight:600">Open</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"periodPlacement":"below","prices":[{"key":"monthly","amount":"0","period":"free forever"}],"style":{"typography":{"fontSize":"1.15rem"}}} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">For prototypes and weekend projects</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>One editor seat</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Base component set</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Public project hosting</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Community support</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Start building</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"color":"var:preset|color|primary","width":"2px","style":"solid","radius":"0.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--primary);border-style:solid;border-width:2px;border-radius:0.75rem;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size" style="font-weight:600">Practice</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"periodPlacement":"below","prices":[{"key":"monthly","amount":"45","period":"per month, billed monthly"},{"key":"yearly","amount":"432","period":"per year, two months free"}],"style":{"typography":{"fontSize":"1.15rem"}}} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">For studios with clients waiting</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Five editor seats</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Full library plus section blocks</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Private project hosting</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brand theming and tokens</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Guided migration from your old kit</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Answers in under a day</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#">Choose Practice</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:shadcn/pricing --></div>
<!-- /wp:group -->
