<?php
/**
 * Title: Pricing Single Plan Discount Dual CTA
 * Slug: shadcn/pricing-single-plan-discount-dual-cta
 * Categories: shadcn, pricing
 * Description: One wide horizontal plan card on a muted band, pairing a discount badge and a two-column feature grid with a stacked primary and outline button on the right.
 * AI Hint: Single-plan pricing section built as one wide landscape card on a muted full-width band: the plan name sits beside a coloured discount badge, an oversized price with a billing note under it runs above a hairline rule, a labelled two-column check grid lists what is included, and a narrow right-hand column stacks a filled primary button over an outline secondary one; reach for it when the offer is a single plan with a promotion running and the visitor needs both a buy path and a talk-to-us path.
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|4","bottom":"var:preset|spacing|10","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|7"}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-muted-background-color has-background" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--4)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"600","lineHeight":"1.15"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-4-xl-font-size" style="font-weight:600;line-height:1.15">One plan, priced for the whole team</h2>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing {"align":"wide","intervals":[{"key":"yearly","label":"Yearly"}],"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|6"}},"backgroundColor":"card","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--8)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|7","left":"var:preset|spacing|9"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"64%","style":{"spacing":{"blockGap":"var:preset|spacing|5"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:64%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size" style="font-weight:600">Pro</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"color":{"background":"#dcfce7","text":"#166534"},"spacing":{"padding":{"top":"0.25rem","right":"0.625rem","bottom":"0.25rem","left":"0.625rem"}}},"fontSize":"xs"} -->
<p class="has-text-color has-background has-xs-font-size" style="border-radius:9999px;color:#166534;background-color:#dcfce7;padding-top:0.25rem;padding-right:0.625rem;padding-bottom:0.25rem;padding-left:0.625rem">Two months free</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/pricing-price {"currencyPlacement":"superscript","periodPlacement":"below","prices":[{"key":"yearly","amount":"390","period":"per seat, billed once a year"}],"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.03em","fontSize":"3.25rem"}}} /-->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.08em;text-transform:uppercase">Every seat includes</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"grid","minimumColumnWidth":"20rem"}} -->
<div class="wp-block-group"><!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Unlimited projects and revisions</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Version history kept for a full year</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Single sign-on for your whole domain</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Live handoff for developers</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Audit trail on every published change</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Priority replies from a named engineer</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"32%","style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:32%"><!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"primary-foreground","width":100,"style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:8px">Claim the offer</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"secondary","textColor":"secondary-foreground","width":100,"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"8px"}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-secondary-foreground-color has-secondary-background-color has-text-color has-background has-border-color wp-element-button" href="#" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:8px">Book a walkthrough</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size">Offer holds until the end of the quarter. Seats can be added at any time.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/pricing --></div>
<!-- /wp:group -->
