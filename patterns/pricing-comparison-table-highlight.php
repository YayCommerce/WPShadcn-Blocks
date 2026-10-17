<?php
/**
 * Title: Pricing Comparison Table Highlight
 * Slug: shadcn/pricing-comparison-table-highlight
 * Categories: shadcn, pricing
 * Description: A three-plan comparison table where the recommended column sits on a rounded muted band that runs unbroken from the header down to the final feature row.
 * AI Hint: Three-plan pricing comparison table with one steered column: feature names run down the first column, three plan columns hold a name, a price that follows the billing switch and a call-to-action, and the recommended column sits on a rounded muted band running the full height of the table; named category rows break the features into groups and each row is ruled off inside its own column; best when one tier should be visibly recommended without hiding the other two.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","pricing"],"patternName":"shadcn/pricing-comparison-table-highlight","name":"Pricing Comparison Table Highlight"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|8"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained","contentSize":"620px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-fluid-4-xl-font-size">Compare the three tiers</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">The middle tier covers most teams. The other two exist for the edges of that range.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/pricing {"align":"","intervals":[{"key":"monthly","label":"Monthly"},{"key":"yearly","label":"Yearly"}],"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"31%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:31%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Billing</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing-switch {"variant":"switch","justification":"left"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:23%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size">Base</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"currencyPlacement":"inline","periodPlacement":"inline","prices":[{"key":"monthly","amount":"0","period":""}],"style":{"typography":{"fontSize":"1.5rem","fontWeight":"700"}}} /-->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"sm","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline is-size-sm"><a class="wp-block-button__link wp-element-button" href="#">Start free</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","style":{"border":{"radius":{"topLeft":"0.75rem","topRight":"0.75rem"}},"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}},"backgroundColor":"muted","layout":{"type":"default"}} -->
<div class="wp-block-column has-muted-background-color has-background" style="border-top-left-radius:0.75rem;border-top-right-radius:0.75rem;padding-right:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5);flex-basis:23%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size">Plus</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"currencyPlacement":"inline","periodPlacement":"inline","prices":[{"key":"monthly","amount":"18","period":"/mo"},{"key":"yearly","amount":"15","period":"/mo"}],"style":{"typography":{"fontSize":"1.5rem","fontWeight":"700"}}} /-->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"sm"} -->
<div class="wp-block-button is-size-sm"><a class="wp-block-button__link wp-element-button" href="#">Choose Plus</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:23%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size">Scale</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"currencyPlacement":"inline","periodPlacement":"inline","prices":[{"key":"monthly","amount":"42","period":"/mo"},{"key":"yearly","amount":"35","period":"/mo"}],"style":{"typography":{"fontSize":"1.5rem","fontWeight":"700"}}} /-->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"sm","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline is-size-sm"><a class="wp-block-button__link wp-element-button" href="#">Talk to sales</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"31%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:31%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Limits</h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:23%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:spacer {"height":"var:preset|spacing|1"} -->
<div style="height:var(--wp--preset--spacing--1)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}},"backgroundColor":"muted","layout":{"type":"default"}} -->
<div class="wp-block-column has-muted-background-color has-background" style="padding-right:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5);flex-basis:23%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:spacer {"height":"var:preset|spacing|1"} -->
<div style="height:var(--wp--preset--spacing--1)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:23%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:spacer {"height":"var:preset|spacing|1"} -->
<div style="height:var(--wp--preset--spacing--1)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"31%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:31%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Editors</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:23%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:list {"className":"is-style-shadcn-check","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-sm-font-size"><!-- wp:list-item -->
<li>2</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}},"backgroundColor":"muted","layout":{"type":"default"}} -->
<div class="wp-block-column has-muted-background-color has-background" style="padding-right:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5);flex-basis:23%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:list {"className":"is-style-shadcn-check","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-sm-font-size"><!-- wp:list-item -->
<li>25</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:23%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:list {"className":"is-style-shadcn-check","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-sm-font-size"><!-- wp:list-item -->
<li>Unlimited</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"31%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:31%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Monthly builds</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:23%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:list {"className":"is-style-shadcn-check","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-sm-font-size"><!-- wp:list-item -->
<li>100</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}},"backgroundColor":"muted","layout":{"type":"default"}} -->
<div class="wp-block-column has-muted-background-color has-background" style="padding-right:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5);flex-basis:23%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:list {"className":"is-style-shadcn-check","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-sm-font-size"><!-- wp:list-item -->
<li>5,000</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:23%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:list {"className":"is-style-shadcn-check","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-sm-font-size"><!-- wp:list-item -->
<li>Unlimited</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"31%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:31%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Storage</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:23%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:list {"className":"is-style-shadcn-check","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-sm-font-size"><!-- wp:list-item -->
<li>5 GB</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}},"backgroundColor":"muted","layout":{"type":"default"}} -->
<div class="wp-block-column has-muted-background-color has-background" style="padding-right:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5);flex-basis:23%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:list {"className":"is-style-shadcn-check","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-sm-font-size"><!-- wp:list-item -->
<li>200 GB</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:23%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:list {"className":"is-style-shadcn-check","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-sm-font-size"><!-- wp:list-item -->
<li>2 TB</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"31%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:31%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Capabilities</h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:23%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:spacer {"height":"var:preset|spacing|1"} -->
<div style="height:var(--wp--preset--spacing--1)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}},"backgroundColor":"muted","layout":{"type":"default"}} -->
<div class="wp-block-column has-muted-background-color has-background" style="padding-right:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5);flex-basis:23%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:spacer {"height":"var:preset|spacing|1"} -->
<div style="height:var(--wp--preset--spacing--1)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:23%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:spacer {"height":"var:preset|spacing|1"} -->
<div style="height:var(--wp--preset--spacing--1)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"31%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:31%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Draft previews</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:23%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}},"backgroundColor":"muted","layout":{"type":"default"}} -->
<div class="wp-block-column has-muted-background-color has-background" style="padding-right:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5);flex-basis:23%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:23%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"31%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:31%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Scheduled publishing</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:23%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}},"backgroundColor":"muted","layout":{"type":"default"}} -->
<div class="wp-block-column has-muted-background-color has-background" style="padding-right:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5);flex-basis:23%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:23%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"31%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:31%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Branch merging</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:23%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">—</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}},"backgroundColor":"muted","layout":{"type":"default"}} -->
<div class="wp-block-column has-muted-background-color has-background" style="padding-right:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5);flex-basis:23%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:23%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"31%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:31%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Custom domains</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:23%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">—</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}},"backgroundColor":"muted","layout":{"type":"default"}} -->
<div class="wp-block-column has-muted-background-color has-background" style="padding-right:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5);flex-basis:23%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:23%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"31%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:31%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Priority review</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:23%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">—</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","style":{"border":{"radius":{"bottomLeft":"0.75rem","bottomRight":"0.75rem"}},"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}},"backgroundColor":"muted","layout":{"type":"default"}} -->
<div class="wp-block-column has-muted-background-color has-background" style="border-bottom-left-radius:0.75rem;border-bottom-right-radius:0.75rem;padding-right:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5);flex-basis:23%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">—</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:23%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/pricing --></div>
<!-- /wp:group -->
