<?php
/**
 * Title: CTA Gradient Pricing Split
 * Slug: shadcn/cta-gradient-pricing-split
 * Categories: shadcn, call-to-action
 * Description: A dark gradient panel split by a hairline rule, with the pitch and two buttons on the left and a live headline price above three ticked inclusions on the right.
 * AI Hint: Closing call to action that carries the number as well as the argument — a rounded full-bleed gradient panel with a dotted texture, a large white heading, a short paragraph and a light primary plus outline secondary button in the left cell, and in the right cell a real Pricing Price figure with its period caption stacked underneath and a short ticked list of what the price includes; reach for it at the foot of a product or pricing page where the visitor already understands the offer and only needs the cost and one last push.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","call-to-action"],"patternName":"shadcn/cta-gradient-pricing-split","name":"CTA Gradient Pricing Split"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"align":"wide","className":"is-style-shadcn-on-dark","style":{"border":{"radius":"20px"},"color":{"text":"#ffffff","gradient":"radial-gradient(rgba(255,255,255,0.07) 1px,rgba(0,0,0,0) 1px) 0 0/22px 22px,linear-gradient(115deg,rgb(10,10,11) 0%,rgb(33,33,37) 55%,rgb(63,63,70) 100%)"},"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|9"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide is-style-shadcn-on-dark has-text-color has-background" style="border-radius:20px;color:#ffffff;background:radial-gradient(rgba(255,255,255,0.07) 1px,rgba(0,0,0,0) 1px) 0 0/22px 22px,linear-gradient(115deg,rgb(10,10,11) 0%,rgb(33,33,37) 55%,rgb(63,63,70) 100%);padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--9)"><!-- wp:shadcn/pricing {"align":"","intervals":[{"key":"seat","label":"Per seat"}],"layout":{"type":"default"}} -->
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|9"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"blockGap":"var:preset|spacing|5"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:heading {"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"700","letterSpacing":"-0.03em"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-text-color has-fluid-4-xl-font-size" style="color:#ffffff;font-weight:700;letter-spacing:-0.03em">Move money without the middleware</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Connect one account and settle everywhere. Balances, payouts and reconciliation share a single ledger, so finance stops stitching exports together at the end of every month.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"iconName":"arrow-right","iconPosition":"right","style":{"color":{"text":"#0a0a0a","background":"#ffffff"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="#" style="color:#0a0a0a;background-color:#ffffff">Start for free</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"#ffffff"}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" href="#" style="color:#ffffff">Get a demo</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"left":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|6"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-left:var(--wp--preset--spacing--8);flex-basis:45%"><!-- wp:shadcn/pricing-price {"periodPlacement":"below","prices":[{"key":"seat","amount":"29.99","period":"per user, per month"}],"style":{"color":{"text":"#ffffff"}},"fontSize":"xl"} /-->

<!-- wp:list {"className":"is-style-shadcn-check","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Everything in the free tier, uncapped</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Reconciliation that runs itself overnight</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Seats for the whole finance team</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:shadcn/pricing --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
