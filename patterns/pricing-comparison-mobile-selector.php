<?php
/**
 * Title: Pricing Comparison Mobile Selector
 * Slug: shadcn/pricing-comparison-mobile-selector
 * Categories: shadcn, pricing
 * Description: A cardless three-plan feature comparison whose plan headers sit above ruled category groups, collapsing to one plan per screen on narrow viewports.
 * AI Hint: Three-plan feature comparison with no cards or panels: a header row pairing a Billing label and segmented switch with three plan columns of name, price and an outline button, then category headings ruled off from hairline-divided feature rows whose cells pair a tick with a written value; best for a plain, scan-friendly comparison that stacks to a single column on phones.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","pricing"],"patternName":"shadcn/pricing-comparison-mobile-selector","name":"Pricing Comparison Mobile Selector"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|8"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained","contentSize":"620px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-fluid-4-xl-font-size">What each plan covers</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Three plans, one price list. Every line below is included from the tier it first appears on.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/pricing {"align":"","intervals":[{"key":"monthly","label":"Monthly"},{"key":"yearly","label":"Yearly"}],"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"31%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:31%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Billing</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing-switch {"variant":"segmented","justification":"left"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"23%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:23%"><!-- wp:heading {"level":3,"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size">Free</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"currencyPlacement":"inline","periodPlacement":"inline","prices":[{"key":"monthly","amount":"0","period":""}],"style":{"typography":{"fontSize":"1.5rem","fontWeight":"700"}}} /-->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"sm","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline is-size-sm"><a class="wp-block-button__link wp-element-button" href="#">Get started</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"23%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:23%"><!-- wp:heading {"level":3,"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size">Growth</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"currencyPlacement":"inline","periodPlacement":"inline","prices":[{"key":"monthly","amount":"24","period":"/mo"},{"key":"yearly","amount":"19","period":"/mo"}],"style":{"typography":{"fontSize":"1.5rem","fontWeight":"700"}}} /-->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"sm","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline is-size-sm"><a class="wp-block-button__link wp-element-button" href="#">Get started</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"23%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:23%"><!-- wp:heading {"level":3,"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size">Enterprise</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"currencyPlacement":"inline","periodPlacement":"inline","prices":[{"key":"monthly","amount":"96","period":"/mo"},{"key":"yearly","amount":"79","period":"/mo"}],"style":{"typography":{"fontSize":"1.5rem","fontWeight":"700"}}} /-->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"sm","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline is-size-sm"><a class="wp-block-button__link wp-element-button" href="#">Book a demo</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Usage</h3>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-shadcn-divided","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-shadcn-divided"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|2","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"31%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:31%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Seats</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:list {"className":"is-style-shadcn-check","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-sm-font-size"><!-- wp:list-item -->
<li>Unlimited</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:list {"className":"is-style-shadcn-check","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-sm-font-size"><!-- wp:list-item -->
<li>Unlimited</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:list {"className":"is-style-shadcn-check","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-sm-font-size"><!-- wp:list-item -->
<li>Unlimited</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|2","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"31%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:31%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Monthly runs</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:list {"className":"is-style-shadcn-check","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-sm-font-size"><!-- wp:list-item -->
<li>250</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:list {"className":"is-style-shadcn-check","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-sm-font-size"><!-- wp:list-item -->
<li>Unlimited</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:list {"className":"is-style-shadcn-check","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-sm-font-size"><!-- wp:list-item -->
<li>Unlimited</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|2","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"31%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:31%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Workspaces</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:list {"className":"is-style-shadcn-check","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-sm-font-size"><!-- wp:list-item -->
<li>2</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:list {"className":"is-style-shadcn-check","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-sm-font-size"><!-- wp:list-item -->
<li>Unlimited</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:list {"className":"is-style-shadcn-check","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-sm-font-size"><!-- wp:list-item -->
<li>Unlimited</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Features</h3>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-shadcn-divided","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-shadcn-divided"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|2","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"31%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:31%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Reports</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|2","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"31%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:31%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Dashboards</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|2","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"31%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:31%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Bulk import and export</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|2","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"31%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:31%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">App connections</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|2","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"31%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:31%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Assisted drafting</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">—</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|2","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"31%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:31%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Role controls</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">—</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">—</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|2","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"31%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:31%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Change history</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">—</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">—</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/pricing --></div>
<!-- /wp:group -->
