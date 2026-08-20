<?php
/**
 * Title: Pricing Single Plan Premium Spotlight
 * Slug: shadcn/pricing-single-plan-premium-spotlight
 * Categories: shadcn, pricing
 * Description: A centred launch-style intro above one dark inverted plan card carrying the price, five benefit lines and a full-width light button.
 * AI Hint: Single-plan pricing section given the spotlight treatment: a small outlined uppercase pill, a large centred headline and a muted supporting line introduce one narrow card painted in the inverted dark surface, which stacks the plan name, an oversized price with its billing note beneath, a hairline rule, a five-line check list and a full-width light button; reach for it when a premium or lifetime offer is the only thing on the page and the card itself has to read as the product.
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|4","bottom":"var:preset|spacing|10","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--4)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"9999px"},"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem","left":"0.75rem","right":"0.75rem"}}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-border-color has-muted-foreground-color has-text-color has-xs-font-size" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:9999px;padding-top:0.25rem;padding-right:0.75rem;padding-bottom:0.25rem;padding-left:0.75rem">Membership</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"600","letterSpacing":"-0.02em","lineHeight":"1.1"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size" style="font-weight:600;letter-spacing:-0.02em;line-height:1.1">Join once, keep it for good</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">One payment opens the whole library, every future release included.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|7"} -->
<div style="height:var(--wp--preset--spacing--7)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:shadcn/pricing {"align":"","intervals":[{"key":"lifetime","label":"Lifetime"}],"layout":{"type":"constrained","contentSize":"520px"}} -->
<!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"foreground","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-color has-foreground-background-color has-text-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--8)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"textColor":"background","fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-background-color has-text-color has-2-xl-font-size" style="font-weight:600">Founding membership</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"background","fontSize":"sm"} -->
<p class="has-background-color has-text-color has-sm-font-size">Limited to the first five hundred members.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/pricing-price {"currencyPlacement":"superscript","periodPlacement":"below","prices":[{"key":"lifetime","amount":"249","period":"paid once, yours for life"}],"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.03em","fontSize":"4rem"}}} /-->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"background","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-background-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>The complete library, downloaded or copied in place</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Every section added from here on</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>A licence that covers client work</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Private channel with the people who build it</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Early access to anything still in draft</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"foreground","width":100,"style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:8px">Become a member</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"align":"center","textColor":"background","fontSize":"xs"} -->
<p class="has-text-align-center has-background-color has-text-color has-xs-font-size">Invoiced in your own currency. Refunded within fourteen days, no questions.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/pricing --></div>
<!-- /wp:group -->
