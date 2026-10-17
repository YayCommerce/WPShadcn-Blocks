<?php
/**
 * Title: Pricing Two Plan Bordered Section
 * Slug: shadcn/pricing-two-plan-bordered-section
 * Categories: shadcn, pricing
 * Description: One outlined container holding a centred pricing header and billing toggle above two plan columns split by a vertical rule, the second on a muted fill.
 * AI Hint: Two-plan pricing section built as a single rounded outlined surface rather than floating cards — a centred H2, a muted lead line and a segmented monthly/yearly control sit above a hairline, then two columns divided by a vertical rule carry plan name, supporting line, a price that follows the billing interval, a check list and a full-width button, with the recommended column shaded muted; reach for it when a product sells on exactly two tiers and the comparison should read as one dense, contained UI surface.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:shadcn/pricing {"align":"wide","intervals":[{"key":"monthly","label":"Monthly"},{"key":"yearly","label":"Yearly"}],"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"16px"},"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:16px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|6","bottom":"var:preset|spacing|8","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained","contentSize":"620px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"textAlign":"center","fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-4-xl-font-size">Plans that grow with the work</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Begin on the free tier and move up the week your team outgrows it.</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing-switch {"variant":"segmented","justification":"center"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","width":"1px","style":"solid"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"border":{"right":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-column" style="border-right-color:var(--wp--preset--color--border);border-right-style:solid;border-right-width:1px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size">Starter</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">For one person finding a rhythm</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/pricing-price {"prices":[{"key":"monthly","amount":"0","period":"per month"},{"key":"yearly","amount":"0","period":"per year"}],"style":{"typography":{"fontWeight":"700"}},"fontSize":"fluid-4-xl"} /-->

<!-- wp:list {"className":"is-style-shadcn-check","style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>One editor seat</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Three active projects</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Community answers</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>1 GB of asset storage</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Start free</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"radius":{"bottomRight":"15px"}},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"muted"} -->
<div class="wp-block-column has-muted-background-color has-background" style="border-bottom-right-radius:15px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size">Studio</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">For teams shipping something every week</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/pricing-price {"prices":[{"key":"monthly","amount":"39","period":"per month"},{"key":"yearly","amount":"31","period":"per month, billed yearly"}],"style":{"typography":{"fontWeight":"700"}},"fontSize":"fluid-4-xl"} /-->

<!-- wp:list {"className":"is-style-shadcn-check","style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Ten editor seats</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Unlimited projects and drafts</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Shared component library</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>200 GB of asset storage</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Review threads and approvals</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Answers within one business day</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"backgroundColor":"primary","textColor":"primary-foreground","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:8px">Choose Studio</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/pricing --></div>
<!-- /wp:group -->
