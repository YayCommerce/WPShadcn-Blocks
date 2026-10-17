<?php
/**
 * Title: Pricing Two Plan Editorial Grid
 * Slug: shadcn/pricing-two-plan-editorial-grid
 * Categories: shadcn, pricing
 * Description: A left-aligned display heading and segmented billing control above a hairline-framed two-column rate table with oversized price figures.
 * AI Hint: Editorial two-plan pricing laid out like a printed rate card — a left-aligned oversized H2 with a lead paragraph on a narrow measure, a segmented monthly/yearly control beneath them, then one thin-ruled frame split down the middle by a vertical hairline, each half carrying a muted tier label, a very large price figure, a one-line positioning statement above a rule, a check list of inclusions and a full-width call to action; reach for it when the brand favours restrained typographic hierarchy over cards, shadows and colour.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained","contentSize":"620px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"letterSpacing":"-0.03em"}},"fontSize":"fluid-7-xl"} -->
<h2 class="wp-block-heading has-fluid-7-xl-font-size" style="letter-spacing:-0.03em">Plans and rates</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Two ways to work with the library. Move between them the week your team changes shape.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|4"} -->
<div style="height:var(--wp--preset--spacing--4)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:shadcn/pricing {"align":"","intervals":[{"key":"monthly","label":"Monthly"},{"key":"yearly","label":"Yearly"}],"style":{"spacing":{"blockGap":"var:preset|spacing|7"}},"layout":{"type":"default"}} -->
<!-- wp:shadcn/pricing-switch {"variant":"segmented","justification":"left","fontSize":"sm"} /-->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|7"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"bottom":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--5)"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Starter</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing-price {"prices":[{"key":"monthly","amount":"0","period":"/mo"}],"style":{"typography":{"fontSize":"3.75rem","fontWeight":"700","lineHeight":"1","letterSpacing":"-0.045em"}}} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">For one designer shipping side projects.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"base"} -->
<p class="has-base-font-size">Features included</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>One editor seat</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Core component set</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Community forum access</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>1 GB of asset storage</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Start for free</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"left":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|7"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"bottom":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--5)"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Studio</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing-price {"prices":[{"key":"monthly","amount":"49","period":"/mo"},{"key":"yearly","amount":"39","period":"/mo"}],"style":{"typography":{"fontSize":"3.75rem","fontWeight":"700","lineHeight":"1","letterSpacing":"-0.045em"}}} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">For a product team running one shared system.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"base"} -->
<p class="has-base-font-size">Features included</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Five editor seats</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Full component and pattern library</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Shared brand tokens</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Same-day support replies</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>20 GB of asset storage</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#">Choose Studio</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/pricing --></div>
<!-- /wp:group -->
