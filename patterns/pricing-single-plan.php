<?php
/**
 * Title: Pricing Single Plan
 * Slug: shadcn/pricing-single-plan
 * Categories: shadcn, pricing
 * Description: A centred heading and subtitle above one narrow price card on a muted band, with a grid of included features listed beneath it.
 * AI Hint: Single-plan pricing section on a muted full-width background: centred H2 and supporting line, one narrow white card holding just the price and a full-width call-to-action button, then an "Includes" heading above a three-column check list of features; best for a product sold on one plan where the choice is whether to buy, not which tier to pick.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-muted-background-color has-background" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:heading {"style":{"typography":{"textAlign":"center"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size">Our Pricing</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-muted-foreground-color has-text-color","style":{"typography":{"textAlign":"center"}},"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">One plan with the tools you need to ship interfaces faster.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|7"} -->
<div style="height:var(--wp--preset--spacing--7)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:shadcn/pricing {"align":"","intervals":[{"key":"monthly","label":"Monthly"}],"layout":{"type":"constrained","contentSize":"340px"}} -->
<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"0.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:0.75rem;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/pricing-price {"currencyPlacement":"superscript","prices":[{"key":"monthly","amount":"49","period":"/month"}],"style":{"typography":{"fontSize":"1.5rem"}}} /--></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#">Get started</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/pricing -->

<!-- wp:spacer {"height":"var:preset|spacing|7"} -->
<div style="height:var(--wp--preset--spacing--7)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":3,"style":{"typography":{"textAlign":"center"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-text-align-center has-lg-font-size">Includes</h3>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color"><!-- wp:list-item -->
<li>Up to 5 team members</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>2GB storage space</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color"><!-- wp:list-item -->
<li>Advanced components library</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Team collaboration</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color"><!-- wp:list-item -->
<li>Priority support</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Custom branding</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->