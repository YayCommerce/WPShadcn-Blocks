<?php
/**
 * Title: Pricing Comparison Matrix Sticky
 * Slug: shadcn/pricing-comparison-matrix-sticky
 * Categories: shadcn, pricing
 * Description: A left-aligned intro above a four-plan feature matrix whose row of plan cards pins to the top of the viewport while the feature rows scroll past it.
 * AI Hint: Four-plan pricing comparison matrix with a pinned header: a left-aligned H2 and supporting line, then a sticky row pairing a Billing label and segmented monthly/yearly control with four small bordered plan cards carrying name, price and a register button, then named feature groups whose hairline-divided rows give a written value or a tick per plan and a caveat line underneath; best for a long feature list where the plan names must stay in view while reading.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","pricing"],"patternName":"shadcn/pricing-comparison-matrix-sticky","name":"Pricing Comparison Matrix Sticky"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|8"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained","contentSize":"620px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-fluid-4-xl-font-size">Pricing plans</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Four ways to run the platform. Compare them line by line, then take the one that matches your volume.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/pricing {"align":"","intervals":[{"key":"monthly","label":"Monthly"},{"key":"yearly","label":"Yearly"}],"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-shadcn-sticky","style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"background"} -->
<div class="wp-block-group is-style-shadcn-sticky has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5)"><!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-columns are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:30%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Billing</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing-switch {"variant":"segmented","justification":"left"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:17.5%"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"0.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:0.75rem;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:heading {"level":3,"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size">Starter</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"currencyPlacement":"inline","periodPlacement":"inline","prices":[{"key":"monthly","amount":"9","period":"/mo"},{"key":"yearly","amount":"7","period":"/mo"}],"style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}}} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Register</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:17.5%"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"0.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:0.75rem;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:heading {"level":3,"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size">Team</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"currencyPlacement":"inline","periodPlacement":"inline","prices":[{"key":"monthly","amount":"29","period":"/mo"},{"key":"yearly","amount":"24","period":"/mo"}],"style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}}} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Register</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:17.5%"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"0.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:0.75rem;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:heading {"level":3,"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size">Business</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"currencyPlacement":"inline","periodPlacement":"inline","prices":[{"key":"monthly","amount":"79","period":"/mo"},{"key":"yearly","amount":"64","period":"/mo"}],"style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}}} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#">Register</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:17.5%"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"0.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:0.75rem;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:heading {"level":3,"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size">Enterprise</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"currencyPlacement":"inline","periodPlacement":"inline","prices":[{"key":"monthly","amount":"149","period":"/mo"},{"key":"yearly","amount":"119","period":"/mo"}],"style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}}} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Register</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size">Overview</h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"is-style-shadcn-divided","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-shadcn-divided"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Projects</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">1</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">5</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">25</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Unlimited</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Monthly builds</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">500</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">10,000</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">100,000</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Unlimited</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Editor seats</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">1</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">8</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">30</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Unlimited</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">History retained</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">7 days</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">90 days</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">1 year</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Unbounded</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size">Everything else</h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"is-style-shadcn-divided","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-shadcn-divided"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Draft previews</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Change history</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">—</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Single sign-on</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">—</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">—</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|3","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Named support contact</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">—</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">—</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">—</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.5%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">✓</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Prices exclude local tax. Yearly billing is charged once for twelve months.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/pricing --></div>
<!-- /wp:group -->
