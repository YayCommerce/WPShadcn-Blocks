<?php
/**
 * Title: Pricing Comparison Table Switch
 * Slug: shadcn/pricing-comparison-table-switch
 * Categories: shadcn, pricing
 * Description: A centred heading above a bordered three-tier comparison table whose first column carries the billing switch and whose plan columns are divided by hairline rules.
 * AI Hint: Three-tier pricing comparison table on one bordered card: a centred H2 and supporting line, then a table whose first column holds a Billing label with a monthly/yearly switch and whose three plan columns each carry a tier name, a one-line blurb, a price that follows the switch and a full-width call-to-action, followed by named groups of feature rows marked with a tick or a dash per tier; best when visitors need to compare what each tier includes before choosing.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","pricing"],"patternName":"shadcn/pricing-comparison-table-switch","name":"Pricing Comparison Table Switch"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|8"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":2,"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size">Pick the plan that fits</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Every tier ships the same editor. What changes is how much work you can push through it.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/pricing {"align":"","intervals":[{"key":"monthly","label":"Monthly"},{"key":"yearly","label":"Yearly"}],"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"0.75rem"},"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:0.75rem"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"bottom","width":"28%","style":{"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|5","bottom":"var:preset|spacing|6","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--5);flex-basis:28%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Billing</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing-switch {"variant":"switch","justification":"left"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|5","bottom":"var:preset|spacing|6","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-text-align-center has-xl-font-size">Solo</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">For one person shipping side projects.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/pricing-price {"currencyPlacement":"inline","periodPlacement":"below","prices":[{"key":"monthly","amount":"0","period":""}],"style":{"typography":{"fontSize":"2.5rem","fontWeight":"700"}}} /--></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#">Start free</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|5","bottom":"var:preset|spacing|6","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-text-align-center has-xl-font-size">Studio</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">For small teams building in the open.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/pricing-price {"currencyPlacement":"inline","periodPlacement":"below","prices":[{"key":"monthly","amount":"12","period":"/month"},{"key":"yearly","amount":"9","period":"/month"}],"style":{"typography":{"fontSize":"2.5rem","fontWeight":"700"}}} /--></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#">Choose Studio</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|5","bottom":"var:preset|spacing|6","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-text-align-center has-xl-font-size">Agency</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">For studios juggling client work.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/pricing-price {"currencyPlacement":"inline","periodPlacement":"below","prices":[{"key":"monthly","amount":"24","period":"/month"},{"key":"yearly","amount":"19","period":"/month"}],"style":{"typography":{"fontSize":"2.5rem","fontWeight":"700"}}} /--></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#">Choose Agency</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"28%","style":{"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:28%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<h3 class="wp-block-heading has-sm-font-size" style="font-weight:600">Core tools</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"28%","style":{"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:28%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Shared workspaces</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"><!-- wp:paragraph {"align":"center","fontSize":"sm"} -->
<p class="has-text-align-center has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"><!-- wp:paragraph {"align":"center","fontSize":"sm"} -->
<p class="has-text-align-center has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"><!-- wp:paragraph {"align":"center","fontSize":"sm"} -->
<p class="has-text-align-center has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"28%","style":{"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:28%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Unlimited pages</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"><!-- wp:paragraph {"align":"center","fontSize":"sm"} -->
<p class="has-text-align-center has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"><!-- wp:paragraph {"align":"center","fontSize":"sm"} -->
<p class="has-text-align-center has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"><!-- wp:paragraph {"align":"center","fontSize":"sm"} -->
<p class="has-text-align-center has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"28%","style":{"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:28%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Custom roles</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"><!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">—</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"><!-- wp:paragraph {"align":"center","fontSize":"sm"} -->
<p class="has-text-align-center has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"><!-- wp:paragraph {"align":"center","fontSize":"sm"} -->
<p class="has-text-align-center has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"28%","style":{"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:28%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Client handover</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"><!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">—</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"><!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">—</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"><!-- wp:paragraph {"align":"center","fontSize":"sm"} -->
<p class="has-text-align-center has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"28%","style":{"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:28%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<h3 class="wp-block-heading has-sm-font-size" style="font-weight:600">Insight</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"28%","style":{"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:28%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Weekly summary</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"><!-- wp:paragraph {"align":"center","fontSize":"sm"} -->
<p class="has-text-align-center has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"><!-- wp:paragraph {"align":"center","fontSize":"sm"} -->
<p class="has-text-align-center has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"><!-- wp:paragraph {"align":"center","fontSize":"sm"} -->
<p class="has-text-align-center has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"28%","style":{"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:28%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Funnel breakdown</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"><!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">—</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"><!-- wp:paragraph {"align":"center","fontSize":"sm"} -->
<p class="has-text-align-center has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"><!-- wp:paragraph {"align":"center","fontSize":"sm"} -->
<p class="has-text-align-center has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"28%","style":{"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|7","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--5);flex-basis:28%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Export API</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|7","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"><!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">—</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|7","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"><!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">—</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"24%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|5","bottom":"var:preset|spacing|7","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--5);flex-basis:24%"><!-- wp:paragraph {"align":"center","fontSize":"sm"} -->
<p class="has-text-align-center has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/pricing --></div>
<!-- /wp:group -->
