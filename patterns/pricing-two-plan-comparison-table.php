<?php
/**
 * Title: Pricing Two Plan Comparison Table
 * Slug: shadcn/pricing-two-plan-comparison-table
 * Categories: shadcn, pricing
 * Description: Two plan summaries sharing one bordered panel split by a hairline, with a full feature comparison table underneath carrying a row per capability.
 * AI Hint: Documentation-style pricing comparison — a centred H2 and two-line intro, one bordered panel divided down the middle into two centred plan summaries (name, tagline, oversized price or a "talk to us" line, price note and a full-width call to action), then a comparison table whose header names the two plans and whose rows list one capability each with the value for both; best when two tiers differ across many granular features and the buyer needs to read the differences rather than skim badges.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","pricing"],"patternName":"shadcn/pricing-two-plan-comparison-table","name":"Pricing Two Plan Comparison Table"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|8"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size">Compare the two plans</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Pick the plan that matches how your team works today. Nothing has to be migrated when you outgrow it.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/pricing {"align":"","intervals":[{"key":"monthly","label":"Monthly"}],"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"}},"backgroundColor":"card","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"border":{"right":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|7","bottom":"var:preset|spacing|8","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-column" style="border-right-color:var(--wp--preset--color--border);border-right-style:solid;border-right-width:1px;padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--7)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-text-align-center has-xl-font-size" style="font-weight:600">Studio</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">For product teams shipping every sprint.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/pricing-price {"prices":[{"key":"monthly","amount":"12","period":""}]} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">per editor, per month</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#">Start a trial</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|7","bottom":"var:preset|spacing|8","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--7)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-text-align-center has-xl-font-size" style="font-weight:600">Enterprise</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">Single sign-on, audit trails and a named contact.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"-0.02em"}},"fontSize":"4-xl"} -->
<p class="has-text-align-center has-4-xl-font-size" style="font-weight:700;letter-spacing:-0.02em">Talk to us</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">We scope the price around your rollout</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Contact sales</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:table {"hasFixedLayout":false,"fontSize":"sm"} -->
<figure class="wp-block-table has-sm-font-size"><table><thead><tr><th scope="col">Capability</th><th scope="col">Studio</th><th scope="col">Enterprise</th></tr></thead><tbody><tr><td>Active projects</td><td>Unlimited</td><td>Unlimited</td></tr><tr><td>Connected integrations</td><td>Unlimited</td><td>Unlimited</td></tr><tr><td>Live co-editing</td><td>Included</td><td>Included</td></tr><tr><td>Custom roles and permissions</td><td>Included</td><td>Included</td></tr><tr><td>Extra members</td><td>$6 each per month</td><td>Volume pricing</td></tr><tr><td>Standard usage reports</td><td>Included</td><td>Included</td></tr><tr><td>Custom report builder</td><td>Not included</td><td>Included</td></tr><tr><td>Single sign-on</td><td>Not included</td><td>Included</td></tr><tr><td>Audit log export</td><td>Not included</td><td>Included</td></tr><tr><td>Support response</td><td>Next business day</td><td>Four-hour target</td></tr><tr><td>Onboarding</td><td>Guided documentation</td><td>Named specialist</td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- /wp:shadcn/pricing --></div>
<!-- /wp:group -->
