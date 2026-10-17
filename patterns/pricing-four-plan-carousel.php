<?php
/**
 * Title: Pricing Four Plan Carousel
 * Slug: shadcn/pricing-four-plan-carousel
 * Categories: shadcn, pricing
 * Description: A centred headline over a two-option billing control, with four soft-bordered plan cards riding a carousel that shows all four on desktop and swipes one at a time on smaller screens.
 * AI Hint: Four-tier pricing carousel — a centred H2, a Monthly/Yearly segmented control, then a carousel of bordered cards, four abreast on desktop and swipeable below, each carrying the plan name, an oversized interval-aware price, a short cadence line, a two-line description, a full-width call to action, a hairline rule under a small Features label and a check list, with the recommended tier marked by a heavier border and a filled button; reach for it when the plans must stay readable on a phone without collapsing into a very long column.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size">Four ways to work with us</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:shadcn/pricing {"align":"","intervals":[{"key":"monthly","label":"Monthly"},{"key":"yearly","label":"Yearly"}],"defaultInterval":"monthly","style":{"spacing":{"blockGap":"var:preset|spacing|7"}},"layout":{"type":"default"}} -->
<!-- wp:shadcn/pricing-switch {"variant":"segmented","justification":"center"} /-->

<!-- wp:shadcn/carousel {"loop":false,"showArrows":true,"showDots":true,"slidesPerView":1,"slidesPerViewTablet":2,"slidesPerViewDesktop":4,"gap":"1.5rem"} -->
<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"16px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:16px;min-height:100%;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size">Starter</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"currencyPlacement":"superscript","prices":[{"key":"monthly","amount":"0","period":""}],"style":{"typography":{"fontSize":"3rem","fontWeight":"700","lineHeight":"1.1"}}} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">/ Per month</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Ideal for one person getting a first idea onto a page. No card needed to open the account.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Start for free</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size">Features</p>
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
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"border":{"color":"var:preset|color|foreground","width":"2px","style":"solid","radius":"16px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--foreground);border-style:solid;border-width:2px;border-radius:16px;min-height:100%;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size">Growth</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"currencyPlacement":"superscript","prices":[{"key":"monthly","amount":"22","period":""},{"key":"yearly","amount":"18","period":""}],"style":{"typography":{"fontSize":"3rem","fontWeight":"700","lineHeight":"1.1"}}} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">/ Per month</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">For a team that has outgrown one workspace. Add seats as the roster changes, no renegotiation.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#">Choose Growth</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size">Features</p>
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
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"16px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:16px;min-height:100%;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size">Advanced</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"currencyPlacement":"superscript","prices":[{"key":"monthly","amount":"78","period":""},{"key":"yearly","amount":"64","period":""}],"style":{"typography":{"fontSize":"3rem","fontWeight":"700","lineHeight":"1.1"}}} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">/ Per month</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">For a larger group running several products at once. Requests jump the queue and stay tracked.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Buy Advanced</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size">Features</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Everything in Growth</li>
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
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"16px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:16px;min-height:100%;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size">Enterprise</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"currencyPlacement":"superscript","prices":[{"key":"monthly","amount":"205","period":""},{"key":"yearly","amount":"172","period":""}],"style":{"typography":{"fontSize":"3rem","fontWeight":"700","lineHeight":"1.1"}}} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">/ Per month</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">For organisations with a security bar to clear. Legal review and procurement handled before rollout.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Contact sales</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size">Features</p>
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
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->
<!-- /wp:shadcn/carousel -->
<!-- /wp:shadcn/pricing --></div>
<!-- /wp:group -->
