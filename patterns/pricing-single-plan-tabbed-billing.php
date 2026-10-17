<?php
/**
 * Title: Pricing Single Plan Tabbed Billing
 * Slug: shadcn/pricing-single-plan-tabbed-billing
 * Categories: shadcn, pricing
 * Description: A centred heading above one narrow plan card whose billing period is chosen by a segmented tab pair, with a shared feature list and call to action beneath.
 * AI Hint: Single-plan pricing card with tabbed billing: a centred H2 and supporting line, then one bordered card holding a two-tab segmented control that swaps the plan name, the price figure and the plan blurb between a monthly and a yearly rate, with a hairline rule under it and one shared check list plus a full-width button that stay put whichever tab is open; best for a product sold on a single plan where the only decision is how often to pay.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","pricing"],"patternName":"shadcn/pricing-single-plan-tabbed-billing","name":"Pricing Single Plan Tabbed Billing"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:heading {"textAlign":"center","fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size">Pricing that stays simple</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">One plan, two ways to pay. Pick the rhythm that suits your team.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|6"} -->
<div style="height:var(--wp--preset--spacing--6)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"520px"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:shadcn/tabs {"defaultTab":0,"fitted":true} -->
<!-- wp:shadcn/tab {"label":"Monthly"} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<p class="has-lg-font-size" style="font-weight:600">Studio</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing {"align":"","intervals":[{"key":"monthly","label":"Monthly"}],"layout":{"type":"default"}} -->
<!-- wp:shadcn/pricing-price {"currencyPlacement":"superscript","prices":[{"key":"monthly","amount":"49","period":"/month"}],"style":{"typography":{"fontSize":"3rem","fontWeight":"700"}}} /-->
<!-- /wp:shadcn/pricing -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Billed every month. Cancel whenever the project ends.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/tab -->

<!-- wp:shadcn/tab {"label":"Yearly — save 20%"} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<p class="has-lg-font-size" style="font-weight:600">Studio</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing {"align":"","intervals":[{"key":"yearly","label":"Yearly"}],"layout":{"type":"default"}} -->
<!-- wp:shadcn/pricing-price {"currencyPlacement":"superscript","prices":[{"key":"yearly","amount":"39","period":"/month"}],"style":{"typography":{"fontSize":"3rem","fontWeight":"700"}}} /-->
<!-- /wp:shadcn/pricing -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Charged once a year at $468. Two months land on us.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/tab -->
<!-- /wp:shadcn/tabs -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Two editor seats included</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Unlimited projects and drafts</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The full component library</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Design files kept in step with the code</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Answers by email inside one working day</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Export to clean, unbranded markup</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#">Start building</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
