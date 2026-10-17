<?php
/**
 * Title: Pricing Four Plan Social Proof Tabs
 * Slug: shadcn/pricing-four-plan-social-proof-tabs
 * Categories: shadcn, pricing
 * Description: A centred heading over an avatar trust strip and a two-option billing control, with four bordered plan cards each holding a price, a one-line audience note, a full-width button and a checked feature list.
 * AI Hint: Four-tier pricing wall led by social proof — a centred H2, a row of overlapping avatars beside two short reassurance lines, a Monthly/Yearly segmented billing control that swaps every figure in place, then a four-column grid of bordered cards carrying the plan name (with a "Most chosen" badge on the highlighted tier), an oversized interval-aware price, an audience line, a full-width call to action and a check list under a small Features label, closing with a centred secure-payment note; reach for it when the plans need reassurance around them as much as they need numbers.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size">Straightforward plans, no surprises</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/avatar-group {"maxVisible":3} -->
<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Iris Nakamura","size":"sm","fallback":"IN"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Tomas Ferreira","size":"sm","fallback":"TF"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Delphine Roy","size":"sm","fallback":"DR"} /-->
<!-- /wp:shadcn/avatar-group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Fifty thousand builders ship on it</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Stop any month from your own dashboard</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:shadcn/pricing {"align":"","intervals":[{"key":"monthly","label":"Monthly"},{"key":"yearly","label":"Yearly · save 20%"}],"defaultInterval":"monthly","style":{"spacing":{"blockGap":"var:preset|spacing|7"}},"layout":{"type":"default"}} -->
<!-- wp:shadcn/pricing-switch {"variant":"segmented","justification":"center"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"grid","minimumColumnWidth":"17rem"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">Launch</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"currencyPlacement":"superscript","prices":[{"key":"monthly","amount":"0","period":"forever"}],"style":{"typography":{"fontSize":"2.75rem","fontWeight":"700","lineHeight":"1.1"}}} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">For one person shipping side projects</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Start for free</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"xs"} -->
<p class="has-xs-font-size" style="font-weight:600">Features</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Five saved layouts</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Community forum answers</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Weekly release notes</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>200MB of asset storage</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Basic usage charts</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|foreground","width":"2px","style":"solid","radius":"12px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--foreground);border-style:solid;border-width:2px;border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">Studio</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/badge {"text":"Most chosen","variant":"default"} /--></div>
<!-- /wp:group -->

<!-- wp:shadcn/pricing-price {"currencyPlacement":"superscript","prices":[{"key":"monthly","amount":"24","period":"/month"},{"key":"yearly","amount":"19","period":"/month"}],"style":{"typography":{"fontSize":"2.75rem","fontWeight":"700","lineHeight":"1.1"}}} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">For a small team with one shared roadmap</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#">Choose Studio</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"xs"} -->
<p class="has-xs-font-size" style="font-weight:600">Features</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Unlimited saved layouts</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Same-day email replies</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Daily release notes</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>20GB of asset storage</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Shared component presets</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">Scale</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"currencyPlacement":"superscript","prices":[{"key":"monthly","amount":"79","period":"/month"},{"key":"yearly","amount":"63","period":"/month"}],"style":{"typography":{"fontSize":"2.75rem","fontWeight":"700","lineHeight":"1.1"}}} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">For a product group running many surfaces</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Buy Scale</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"xs"} -->
<p class="has-xs-font-size" style="font-weight:600">Features</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Everything in Studio</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>A named support contact</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Live release feed</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Unmetered asset storage</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Custom integrations</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">Enterprise</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"currencyPlacement":"superscript","prices":[{"key":"monthly","amount":"199","period":"/month"},{"key":"yearly","amount":"159","period":"/month"}],"style":{"typography":{"fontSize":"2.75rem","fontWeight":"700","lineHeight":"1.1"}}} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">For regulated teams with review gates</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Talk to sales</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"xs"} -->
<p class="has-xs-font-size" style="font-weight:600">Features</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Single sign-on and audit trails</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>A choice of data regions</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>A dedicated success lead</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Custom reporting and response times</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Automated approval flows</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/pricing -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Secure payment","variant":"ghost","iconName":"lock"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
