<?php
/**
 * Title: Pricing Single Plan Inverted Band
 * Slug: shadcn/pricing-single-plan-inverted-band
 * Categories: shadcn, pricing
 * Description: A full-width inverted band carrying a left-aligned heading above one wide plan card that pairs the price with a call to action and a two-column feature list.
 * AI Hint: Single-plan pricing on an inverted full-width band: the section is painted in the primary colour with primary-foreground text for the left-aligned H2 and its supporting line, then one wide rounded card on the neutral card surface holds the plan name, a large price with its period, a short qualifying line and a right-aligned button, followed by a hairline rule and a two-column check list; best when one offer has to carry a whole section and you want it to interrupt a pale page.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","pricing"],"patternName":"shadcn/pricing-single-plan-inverted-band","name":"Pricing Single Plan Inverted Band"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"backgroundColor":"primary","textColor":"primary-foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-foreground-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"textColor":"primary-foreground","fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-primary-foreground-color has-text-color has-fluid-5-xl-font-size">One plan, priced in the open</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"primary-foreground","fontSize":"lg"} -->
<p class="has-primary-foreground-color has-text-color has-lg-font-size">Everything we build, on one licence. No tiers to compare, no quote to chase.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|6"}},"backgroundColor":"card","textColor":"card-foreground","layout":{"type":"default"}} -->
<div class="wp-block-group has-card-foreground-color has-card-background-color has-text-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--8)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"68%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:68%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Studio</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing {"align":"","intervals":[{"key":"monthly","label":"Monthly"}],"layout":{"type":"default"}} -->
<!-- wp:shadcn/pricing-price {"currencyPlacement":"superscript","prices":[{"key":"monthly","amount":"49","period":"/month"}],"style":{"typography":{"fontSize":"3.5rem","fontWeight":"700","lineHeight":"1.05"}}} /-->
<!-- /wp:shadcn/pricing -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">For small product teams shipping real interfaces every week.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"32%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:32%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Start building</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|3","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Five editor seats included</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Unlimited projects and drafts</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Shared workspace history</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>The full component library</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Answers by email inside a day</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Export to clean, unbranded markup</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
