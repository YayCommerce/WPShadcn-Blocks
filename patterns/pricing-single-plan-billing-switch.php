<?php
/**
 * Title: Pricing Single Plan Billing Switch
 * Slug: shadcn/pricing-single-plan-billing-switch
 * Categories: shadcn, pricing
 * Description: A centred heading and a monthly/yearly billing switch above one bordered plan card whose price follows the selected interval.
 * AI Hint: Single-plan pricing section built around a live billing toggle: centred H2 and supporting line, a Monthly/Yearly switch, then one narrow card holding the plan name, a price that swaps with the chosen interval, a positioning line, a rule, an included-features check list and two side-by-side buttons; reach for it when one plan is sold on two billing periods and the annual discount is the main argument.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:heading {"style":{"typography":{"textAlign":"center"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size">Straightforward pricing</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Every feature sits behind the same price. Move to annual billing whenever the yearly rhythm suits your budget better.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|6"} -->
<div style="height:var(--wp--preset--spacing--6)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:shadcn/pricing {"align":"","intervals":[{"key":"monthly","label":"Monthly"},{"key":"yearly","label":"Yearly (save 20%)"}],"defaultInterval":"monthly","style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"constrained","contentSize":"420px"}} -->
<!-- wp:shadcn/pricing-switch {"variant":"switch","justification":"center"} /-->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"0.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:0.75rem;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Studio</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing-price {"prices":[{"key":"monthly","amount":"39","period":"/month"},{"key":"yearly","amount":"31","period":"/month"}],"fontSize":"5-xl"} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Everything a small product team needs to design, build and ship inside the same week.</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Included</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Unlimited private projects</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Component library with version history</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Figma and repository sync</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Role-based access for ten seats</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Weekly usage digest by email</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Same-day answers from the build team</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":50} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50"><a class="wp-block-button__link wp-element-button" href="#">Start free trial</a></div>
<!-- /wp:button -->

<!-- wp:button {"width":50,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Book a walkthrough</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/pricing --></div>
<!-- /wp:group -->
