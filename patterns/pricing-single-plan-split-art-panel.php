<?php
/**
 * Title: Pricing Single Plan Split Art Panel
 * Slug: shadcn/pricing-single-plan-split-art-panel
 * Categories: shadcn, pricing
 * Description: A split pricing section with a tall image panel carrying the plan name and heading on one side and the price, billing switch and feature list on the other.
 * AI Hint: Single-plan pricing section split into an art panel and a details column: a full-height rounded cover image holds an eyebrow and the section heading against the photograph, while the opposite column stacks positioning copy, a bordered strip pairing an interval-aware price with the Monthly/Yearly switch, a description, a rule, a check list and one call-to-action button; reach for it when the plan is being sold on brand feel as much as on features.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:shadcn/pricing {"align":"","intervals":[{"key":"monthly","label":"Monthly"},{"key":"yearly","label":"Yearly (-20%)"}],"defaultInterval":"monthly","layout":{"type":"default"}} -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|7","left":"var:preset|spacing|7"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"44%"} -->
<div class="wp-block-column" style="flex-basis:44%"><!-- wp:cover {"url":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","alt":"Studio desk lit by late afternoon sun","dimRatio":40,"minHeight":520,"minHeightUnit":"px","contentPosition":"bottom left","style":{"border":{"radius":"16px"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:16px;min-height:520px"><img class="wp-block-cover__image-background" alt="Studio desk lit by late afternoon sun" src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"style":{"color":{"text":"#ffffff"}},"fontSize":"sm"} -->
<p class="has-text-color has-sm-font-size" style="color:#ffffff">Workshop plan</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"color":{"text":"#ffffff"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-text-color has-fluid-4-xl-font-size" style="color:#ffffff">Everything in one tier</h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"56%","style":{"spacing":{"blockGap":"var:preset|spacing|5"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:56%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Choose the billing rhythm that suits the year ahead. The feature set does not change either way.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"0.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|5","bottom":"var:preset|spacing|4","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:0.75rem;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--5)"><!-- wp:shadcn/pricing-price {"prices":[{"key":"monthly","amount":"52","period":"/month"},{"key":"yearly","amount":"42","period":"/month"}],"fontSize":"4-xl"} /-->

<!-- wp:shadcn/pricing-switch {"variant":"switch","justification":"right"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">One subscription that covers the studio, every client seat and the whole archive behind them.</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Boards and archives without a limit</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Client seats at no extra cost</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brand kit applied across every export</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Scheduled reports every Monday morning</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Regional data residency on request</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Start the plan</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:shadcn/pricing --></div>
<!-- /wp:group -->
