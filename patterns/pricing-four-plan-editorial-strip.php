<?php
/**
 * Title: Pricing Four Plan Editorial Strip
 * Slug: shadcn/pricing-four-plan-editorial-strip
 * Categories: shadcn, pricing
 * Description: A left-aligned heading and segmented billing toggle above one bordered strip divided by hairlines into four plan columns, each with a price, a checklist and a call to action.
 * AI Hint: Four-tier pricing set as a single newspaper-style rate table instead of four separate cards: a left-aligned H2, a supporting line and a segmented Monthly/Yearly toggle sit above one bordered container split by vertical hairlines into four equal columns, each holding a plan name, a large price that follows the toggle, a rule, a short "What you get" checklist and a full-width button pinned to the bottom; the columns become stacked bands on narrow screens; reach for it when four closely related tiers should read as one comparable price list rather than as competing cards.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:shadcn/pricing {"align":"","intervals":[{"key":"monthly","label":"Monthly"},{"key":"yearly","label":"Yearly"}],"defaultInterval":"monthly","style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-fluid-5-xl-font-size">Plans that scale with the work</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Four tiers on one bill. Move up when the team grows, and back down when the season ends.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/pricing-switch {"variant":"segmented","justification":"left"} /-->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid"},"color":{"background":"var:preset|color|border"},"spacing":{"blockGap":"1px"}},"layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
<div class="wp-block-group has-border-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;background-color:var(--wp--preset--color--border)"><!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|5","bottom":"var:preset|spacing|6","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|6"}},"backgroundColor":"background","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group has-background-background-color has-background" style="min-height:100%;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size" style="font-weight:500">Starter</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing-price {"prices":[{"key":"monthly","amount":"0","period":"/mo"}],"style":{"typography":{"fontSize":"1.15rem"}}} /-->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500">What you get</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Two active projects</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Community forum access</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Weekly build minutes</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>500 MB of asset storage</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Basic usage charts</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Start free</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|5","bottom":"var:preset|spacing|6","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|6"}},"backgroundColor":"background","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group has-background-background-color has-background" style="min-height:100%;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size" style="font-weight:500">Studio</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing-price {"prices":[{"key":"monthly","amount":"24","period":"/mo"},{"key":"yearly","amount":"19","period":"/mo"}],"style":{"typography":{"fontSize":"1.15rem"}}} /-->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500">What you get</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Unlimited projects</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Email answers within a day</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Nightly builds</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>25 GB of asset storage</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Shared component library</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#">Choose Studio</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|5","bottom":"var:preset|spacing|6","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|6"}},"backgroundColor":"background","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group has-background-background-color has-background" style="min-height:100%;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size" style="font-weight:500">Scale</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing-price {"prices":[{"key":"monthly","amount":"79","period":"/mo"},{"key":"yearly","amount":"64","period":"/mo"}],"style":{"typography":{"fontSize":"1.15rem"}}} /-->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500">What you get</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Everything in Studio</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>A named support engineer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Builds on demand</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Unmetered asset storage</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Custom integrations</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Choose Scale</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|5","bottom":"var:preset|spacing|6","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|6"}},"backgroundColor":"background","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group has-background-background-color has-background" style="min-height:100%;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size" style="font-weight:500">Enterprise</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing-price {"prices":[{"key":"monthly","amount":"210","period":"/mo"},{"key":"yearly","amount":"175","period":"/mo"}],"style":{"typography":{"fontSize":"1.15rem"}}} /-->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500">What you get</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Single sign-on and audit trail</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Regional data residency</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rollout help from our team</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Reporting against your SLA</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Quarterly architecture review</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Talk to sales</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/pricing --></div>
<!-- /wp:group -->
