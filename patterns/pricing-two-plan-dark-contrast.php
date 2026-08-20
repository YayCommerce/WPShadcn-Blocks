<?php
/**
 * Title: Pricing Two Plan Dark Contrast
 * Slug: shadcn/pricing-two-plan-dark-contrast
 * Categories: shadcn, pricing
 * Description: A centred heading and billing toggle above two plan cards, the recommended one inverted so it reads as a dark panel beside the light default card.
 * AI Hint: Two-plan pricing built on a free-versus-paid split, where the recommended card swaps the foreground and background tokens to become an inverted panel — dark against a light page, light against a dark one — while the other keeps the ordinary bordered card surface; both hold a plan name, short positioning line, a price that follows the billing toggle above them, a check list and a full-width button, and the inverted card's button inverts with it; reach for it when one tier should dominate through contrast rather than size or a badge.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:heading {"style":{"typography":{"textAlign":"center"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size">One free tier, one that scales</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">No seat minimums and no setup fee. Switch billing periods whenever it suits the budget.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|5"} -->
<div style="height:var(--wp--preset--spacing--5)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:shadcn/pricing {"align":"wide","intervals":[{"key":"monthly","label":"Monthly"},{"key":"yearly","label":"Yearly"}],"style":{"spacing":{"blockGap":"var:preset|spacing|7"}},"layout":{"type":"default"}} -->
<!-- wp:shadcn/pricing-switch {"fontSize":"sm"} /-->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"14px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|6"}},"backgroundColor":"card","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:14px;min-height:100%;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">Base</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">For getting the first project off the ground.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/pricing-price {"prices":[{"key":"monthly","amount":"0","period":"per month"}],"style":{"typography":{"fontSize":"3rem","fontWeight":"700","lineHeight":"1.1","letterSpacing":"-0.03em"}}} /-->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>One editor</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Two published projects</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Community support</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>1 GB of file storage</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Create an account</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"14px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|6"}},"backgroundColor":"foreground","textColor":"background","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group has-background-color has-foreground-background-color has-text-color has-background" style="border-radius:14px;min-height:100%;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"textColor":"background","fontSize":"xl"} -->
<h3 class="wp-block-heading has-background-color has-text-color has-xl-font-size">Scale</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"background","fontSize":"sm"} -->
<p class="has-background-color has-text-color has-sm-font-size">For a team shipping to customers every week.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/pricing-price {"prices":[{"key":"monthly","amount":"49","period":"per month"},{"key":"yearly","amount":"39","period":"per month"}],"textColor":"background","style":{"typography":{"fontSize":"3rem","fontWeight":"700","lineHeight":"1.1","letterSpacing":"-0.03em"}}} /-->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"background","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-background-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Ten editors included</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Unlimited published projects</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Roles and approval steps</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Custom domains</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>100 GB of file storage</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Priority support</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"backgroundColor":"background","textColor":"foreground"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button" href="#">Upgrade to Scale</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:shadcn/pricing --></div>
<!-- /wp:group -->
