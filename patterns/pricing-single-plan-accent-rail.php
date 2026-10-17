<?php
/**
 * Title: Pricing Single Plan Accent Rail
 * Slug: shadcn/pricing-single-plan-accent-rail
 * Categories: shadcn, pricing
 * Description: One square-cornered plan card marked by a thick coloured rail down its left edge, with the billing switch sitting in a muted strip across the top of the card.
 * AI Hint: Single-plan pricing section whose card is defined by a heavy primary-coloured border down its left edge: a centred H2 and supporting line, then a card opening with a muted strip that holds the Monthly/Yearly switch, followed by the plan name beside a recommendation pill, a short description, an interval-aware price, a rule, a plain feature list and one full-width button; reach for it when a single offer needs a strong visual anchor without a second column to compare against.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:heading {"style":{"typography":{"textAlign":"center"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size">The only tier we sell</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">A flat rate covering the whole workspace, with two months back when the year is paid up front.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|6"} -->
<div style="height:var(--wp--preset--spacing--6)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:shadcn/pricing {"align":"","intervals":[{"key":"monthly","label":"Monthly"},{"key":"yearly","label":"Yearly"}],"defaultInterval":"monthly","layout":{"type":"constrained","contentSize":"480px"}} -->
<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","style":"solid","width":"1px"},"right":{"color":"var:preset|color|border","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"},"left":{"color":"var:preset|color|primary","style":"solid","width":"4px"}},"spacing":{"blockGap":"0"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-card-background-color has-background" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;border-right-color:var(--wp--preset--color--border);border-right-style:solid;border-right-width:1px;border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;border-left-color:var(--wp--preset--color--primary);border-left-style:solid;border-left-width:4px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|6","bottom":"var:preset|spacing|4","left":"var:preset|spacing|6"}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--6)"><!-- wp:shadcn/pricing-switch {"variant":"switch","justification":"left"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<p class="has-lg-font-size" style="font-weight:600">Workshop</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"9999px"},"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem","left":"0.75rem","right":"0.75rem"}}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-border-color has-muted-foreground-color has-text-color has-xs-font-size" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:9999px;padding-top:0.25rem;padding-right:0.75rem;padding-bottom:0.25rem;padding-left:0.75rem">Recommended</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">For studios that bill by the project and want one predictable line on every invoice.</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing-price {"prices":[{"key":"monthly","amount":"59","period":"/month"},{"key":"yearly","amount":"49","period":"/month"}],"fontSize":"5-xl"} /-->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:list {"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Client workspaces without a cap</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>White-label review links</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Estimate and contract templates</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Automatic time rollups per project</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Two-factor sign-in for the whole studio</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ninety days of version history</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#">Claim the workspace</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/pricing --></div>
<!-- /wp:group -->
