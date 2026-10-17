<?php
/**
 * Title: Pricing Two Plan Switch Cards
 * Slug: shadcn/pricing-two-plan-switch-cards
 * Categories: shadcn, pricing
 * Description: A centred heading and subtitle above a monthly/yearly billing switch and two side-by-side plan cards, the paid one outlined in the primary colour.
 * AI Hint: Classic two-tier pricing section — a centred H2 with a supporting line, a Monthly/Yearly toggle beneath them, then two equal-height cards each holding a plan name, a large price that follows the toggle, a one-line audience note, a hairline rule, a ticked feature list and a full-width call-to-action pinned to the card foot, with the paid card marked out by a thicker primary border; best for a product sold as a free tier plus one paid tier.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","pricing"],"patternName":"shadcn/pricing-two-plan-switch-cards","name":"Pricing Two Plan Switch Cards"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|8"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size">Pricing built for steady growth</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Two plans, no hidden line items. Start where you are, move up when the team does, and pay yearly to trim two months off the bill.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/pricing {"align":"","intervals":[{"key":"monthly","label":"Monthly"},{"key":"yearly","label":"Yearly"}],"defaultInterval":"monthly","style":{"spacing":{"blockGap":"var:preset|spacing|7"}},"layout":{"type":"default"}} -->
<!-- wp:shadcn/pricing-switch {"variant":"switch","justification":"center"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"grid","minimumColumnWidth":"28rem"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|6"}},"backgroundColor":"card","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Starter</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"prices":[{"key":"monthly","amount":"0","period":"/per month"},{"key":"yearly","amount":"0","period":"/per year"}]} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">For solo makers shipping a first release</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:list {"className":"is-style-shadcn-check","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>One editor seat</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Core block library</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Community forum access</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>1 GB of asset storage</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Start for free</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|primary","width":"2px","style":"solid","radius":"12px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|6"}},"backgroundColor":"card","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--primary);border-style:solid;border-width:2px;border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Studio</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"prices":[{"key":"monthly","amount":"49","period":"/per month"},{"key":"yearly","amount":"490","period":"/per year"}]} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">For teams putting work in front of customers weekly</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:list {"className":"is-style-shadcn-check","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Up to five editor seats</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Full block and pattern library</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Priority email support</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>25 GB of asset storage</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Shared review links</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Custom theme tokens</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#">Choose Studio</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/pricing --></div>
<!-- /wp:group -->
