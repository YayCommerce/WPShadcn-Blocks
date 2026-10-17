<?php
/**
 * Title: Pricing Two Plan Dashed Features
 * Slug: shadcn/pricing-two-plan-dashed-features
 * Categories: shadcn, pricing
 * Description: A left-aligned heading sharing a row with the billing control, above two compact plan cards whose feature lists sit underneath, ruled off by dashed lines.
 * AI Hint: Two-plan pricing section that puts the heading on the left and a segmented monthly-yearly control on the right of the same row, then two compact cards holding only the plan name, price, one-line description and a full-width action button, with each plan's check list placed below its card and every feature row parted from the next by a dashed rule for a ledger-like rhythm; reach for it when the top of the section must stay short and the features should read as a receipt rather than as part of the card.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:shadcn/pricing {"align":"wide","intervals":[{"key":"monthly","label":"Monthly"},{"key":"yearly","label":"Yearly"}],"defaultInterval":"monthly","style":{"spacing":{"blockGap":"var:preset|spacing|7"}},"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-fluid-4-xl-font-size">Straight pricing</h2>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-switch {"variant":"segmented","justification":"right"} /--></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"0.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:0.75rem;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Base</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"prices":[{"key":"monthly","amount":"0","period":"/forever"}],"style":{"typography":{"fontSize":"1rem"}}} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">For trying the system out</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Take the free plan</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item {"style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"dashed"}},"spacing":{"margin":{"bottom":"var:preset|spacing|3"},"padding":{"bottom":"var:preset|spacing|3"}}}} -->
<li style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:dashed;border-bottom-width:1px;margin-bottom:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)">One editor seat</li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"dashed"}},"spacing":{"margin":{"bottom":"var:preset|spacing|3"},"padding":{"bottom":"var:preset|spacing|3"}}}} -->
<li style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:dashed;border-bottom-width:1px;margin-bottom:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)">Core component set</li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"dashed"}},"spacing":{"margin":{"bottom":"var:preset|spacing|3"},"padding":{"bottom":"var:preset|spacing|3"}}}} -->
<li style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:dashed;border-bottom-width:1px;margin-bottom:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)">Docs and worked examples</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Community help channel</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:0.75rem;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Signature</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"prices":[{"key":"monthly","amount":"58","period":"/month"},{"key":"yearly","amount":"588","period":"/year"}],"style":{"typography":{"fontSize":"1rem"}}} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">For teams with a roadmap to keep</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#">Choose Signature</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item {"style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"dashed"}},"spacing":{"margin":{"bottom":"var:preset|spacing|3"},"padding":{"bottom":"var:preset|spacing|3"}}}} -->
<li style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:dashed;border-bottom-width:1px;margin-bottom:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)">Up to eight editor seats</li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"dashed"}},"spacing":{"margin":{"bottom":"var:preset|spacing|3"},"padding":{"bottom":"var:preset|spacing|3"}}}} -->
<li style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:dashed;border-bottom-width:1px;margin-bottom:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)">Every component and section block</li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"dashed"}},"spacing":{"margin":{"bottom":"var:preset|spacing|3"},"padding":{"bottom":"var:preset|spacing|3"}}}} -->
<li style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:dashed;border-bottom-width:1px;margin-bottom:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)">Theme builder and token export</li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"dashed"}},"spacing":{"margin":{"bottom":"var:preset|spacing|3"},"padding":{"bottom":"var:preset|spacing|3"}}}} -->
<li style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:dashed;border-bottom-width:1px;margin-bottom:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)">Private component registry</li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"dashed"}},"spacing":{"margin":{"bottom":"var:preset|spacing|3"},"padding":{"bottom":"var:preset|spacing|3"}}}} -->
<li style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:dashed;border-bottom-width:1px;margin-bottom:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)">Usage analytics per project</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>A named support contact</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:shadcn/pricing --></div>
<!-- /wp:group -->
