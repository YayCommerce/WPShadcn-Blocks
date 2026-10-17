<?php
/**
 * Title: Pricing Four Plan Coverflow Carousel
 * Slug: shadcn/pricing-four-plan-coverflow-carousel
 * Categories: shadcn, pricing
 * Description: A centred heading and billing switch above four plan cards riding a looping 3D coverflow carousel, with the centre card upright and its neighbours tilted away.
 * AI Hint: Four-tier pricing presented as a looping coverflow carousel rather than a static row: a centred H2, supporting line and Monthly/Yearly switch sit above a perspective track where the middle plan card stands upright and full size while the cards either side rotate and recede; each card carries the plan name, a price that follows the switch with the cadence stacked below it, a short pitch, a full-width call to action, a Features rule and a tick list; arrows and dots drive the track, and it collapses to one card per view on phones; reach for it when four plans deserve equal weight and the section should feel like a shelf you browse.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:shadcn/pricing {"align":"","intervals":[{"key":"monthly","label":"Monthly"},{"key":"yearly","label":"Yearly"}],"defaultInterval":"monthly","style":{"spacing":{"blockGap":"var:preset|spacing|7"}},"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":2,"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size">Browse the plans</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Four tiers, one bill and no lock-in. Slide through them and stop where the numbers make sense.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/pricing-switch {"variant":"segmented","justification":"center"} /-->

<!-- wp:shadcn/carousel {"loop":true,"showArrows":true,"showDots":true,"slidesPerView":1,"slidesPerViewTablet":2,"slidesPerViewDesktop":3,"gap":"1.5rem","orientation":"horizontal","effect":"coverflow"} -->
<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|6","bottom":"var:preset|spacing|7","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:500">Starter</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing-price {"periodPlacement":"below","prices":[{"key":"monthly","amount":"0","period":"Per month"}],"style":{"typography":{"fontSize":"1.15rem"}}} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">For one person testing an idea. No card needed to begin.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Start free</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size" style="letter-spacing:0.12em;text-transform:uppercase">Features</p>
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
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"border":{"color":"var:preset|color|primary","width":"2px","style":"solid","radius":"12px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|6","bottom":"var:preset|spacing|7","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--primary);border-style:solid;border-width:2px;border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:500">Studio</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing-price {"periodPlacement":"below","prices":[{"key":"monthly","amount":"24","period":"Per month"},{"key":"yearly","amount":"19","period":"Per month"}],"style":{"typography":{"fontSize":"1.15rem"}}} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">For a small team shipping every week. Starts with a thirty-day trial.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#">Start the trial</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size" style="letter-spacing:0.12em;text-transform:uppercase">Features</p>
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
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|6","bottom":"var:preset|spacing|7","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:500">Scale</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing-price {"periodPlacement":"below","prices":[{"key":"monthly","amount":"79","period":"Per month"},{"key":"yearly","amount":"64","period":"Per month"}],"style":{"typography":{"fontSize":"1.15rem"}}} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">For product teams with review, staging and release gates in the way.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Choose Scale</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size" style="letter-spacing:0.12em;text-transform:uppercase">Features</p>
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
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|6","bottom":"var:preset|spacing|7","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:500">Enterprise</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing-price {"periodPlacement":"below","prices":[{"key":"monthly","amount":"210","period":"Per month"},{"key":"yearly","amount":"175","period":"Per month"}],"style":{"typography":{"fontSize":"1.15rem"}}} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">For companies with procurement, security review and a rollout plan.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Talk to sales</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size" style="letter-spacing:0.12em;text-transform:uppercase">Features</p>
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
<!-- /wp:shadcn/carousel-item -->
<!-- /wp:shadcn/carousel -->
<!-- /wp:shadcn/pricing --></div>
<!-- /wp:group -->
