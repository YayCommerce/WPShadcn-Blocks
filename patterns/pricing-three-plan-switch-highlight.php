<?php
/**
 * Title: Pricing Three Plan Switch Highlight
 * Slug: shadcn/pricing-three-plan-switch-highlight
 * Categories: shadcn, pricing
 * Description: A centred heading with one shared Monthly and Yearly switch above three plan cards, the middle one lifted onto a muted panel with a heavier border.
 * AI Hint: Three-card pricing section with a centred H2, supporting line and a single shared billing switch that retimes every price at once, then a three-column grid where each card leads with the plan name, an interval-aware price, a full-width button and a check list underneath, and the recommended middle card is picked out with a muted background and a thicker border; reach for it when one tier should be visibly recommended and all plans share the same billing period.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:heading {"style":{"typography":{"textAlign":"center"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size">One switch, three ways to work</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Flip to yearly and every figure below retimes together. Change tier whenever the work changes.</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing {"align":"wide","intervals":[{"key":"monthly","label":"Monthly"},{"key":"yearly","label":"Yearly"}],"style":{"spacing":{"blockGap":"var:preset|spacing|7"}},"layout":{"type":"default"}} -->
<!-- wp:shadcn/pricing-switch {"variant":"switch","justification":"center"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"grid","minimumColumnWidth":"22rem"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"14px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:14px;min-height:100%;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:heading {"level":3,"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size">Starter</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"periodPlacement":"inline","prices":[{"key":"monthly","amount":"0","period":""}],"style":{"typography":{"fontSize":"2rem","fontWeight":"700","lineHeight":"1.2"}}} /-->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Start for nothing</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>One editor seat</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Five saved layouts</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Community forum answers</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>100MB of asset storage</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Basic usage reporting</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|foreground","width":"2px","style":"solid","radius":"14px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-muted-background-color has-background" style="border-color:var(--wp--preset--color--foreground);border-style:solid;border-width:2px;border-radius:14px;min-height:100%;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:heading {"level":3,"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size">Studio</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"periodPlacement":"inline","prices":[{"key":"monthly","amount":"22","period":"per month"},{"key":"yearly","amount":"220","period":"per year"}],"style":{"typography":{"fontSize":"2rem","fontWeight":"700","lineHeight":"1.2"}}} /-->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"backgroundColor":"primary","textColor":"primary-foreground","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:8px">Choose Studio</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Up to ten editor seats</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Unlimited saved layouts</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Same-day email support</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>25GB of asset storage</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Shared team presets</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"14px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:14px;min-height:100%;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:heading {"level":3,"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size">Atelier</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"periodPlacement":"inline","prices":[{"key":"monthly","amount":"78","period":"per month"},{"key":"yearly","amount":"780","period":"per year"}],"style":{"typography":{"fontSize":"2rem","fontWeight":"700","lineHeight":"1.2"}}} /-->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Talk to us first</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Unlimited editor seats</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Client workspaces and handover</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>A named support contact</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Unmetered asset storage</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Quarterly design review call</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/pricing --></div>
<!-- /wp:group -->
