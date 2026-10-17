<?php
/**
 * Title: Pricing Two Plan Developer Mono
 * Slug: shadcn/pricing-two-plan-developer-mono
 * Categories: shadcn, pricing
 * Description: Two dashed-border plan cards on a muted band, with monospace prices, plan-code badges and a footnote about billing identifiers.
 * AI Hint: Developer-facing two-plan pricing on a muted full-width band with a terminal feel — a centred sans-serif heading and lead over a billing toggle, then two dashed-outline cards where prices, plan-code badges and feature rows are set in a monospace stack, the recommended card swapping the dashed rule for a solid primary border plus a small default badge, and a monospace footnote under the pair; reach for it on API, infrastructure and developer-tool sites where the pricing table should read like documentation rather than marketing.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|3"}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-muted-background-color has-background" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:heading {"style":{"typography":{"textAlign":"center"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size">Plans</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Metered where it matters, flat where it should be. Every tier ships the same API.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|5"} -->
<div style="height:var(--wp--preset--spacing--5)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:shadcn/pricing {"align":"wide","intervals":[{"key":"monthly","label":"Monthly"},{"key":"yearly","label":"Yearly"}],"style":{"spacing":{"blockGap":"var:preset|spacing|7"}},"layout":{"type":"default"}} -->
<!-- wp:shadcn/pricing-switch {"variant":"segmented","fontSize":"sm"} /-->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"dashed","radius":"12px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:dashed;border-width:1px;border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"plan_sandbox","variant":"outline"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">Sandbox</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"periodPlacement":"below","prices":[{"key":"monthly","amount":"0","period":"Per month"}],"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","fontSize":"2.5rem","fontWeight":"700","lineHeight":"1.1"}}} /-->

<!-- wp:paragraph {"style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"bottom":"var:preset|spacing|4"}}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--4)">For local builds and throwaway prototypes.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-shadcn-check","style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace"><!-- wp:list-item -->
<li>1 project</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>10k requests / month</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Community issues only</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>7-day log retention</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Create a key</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"color":"var:preset|color|primary","width":"1px","style":"solid","radius":"12px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--primary);border-style:solid;border-width:1px;border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"plan_team","variant":"outline"} /-->

<!-- wp:shadcn/badge {"text":"default"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">Team</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"periodPlacement":"below","prices":[{"key":"monthly","amount":"49","period":"Per month"},{"key":"yearly","amount":"39","period":"Per month, billed yearly"}],"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","fontSize":"2.5rem","fontWeight":"700","lineHeight":"1.1"}}} /-->

<!-- wp:paragraph {"style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"bottom":"var:preset|spacing|4"}}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--4)">For services running in front of real traffic.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-shadcn-check","style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace"><!-- wp:list-item -->
<li>Unlimited projects</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>2M requests / month</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Staging and production keys</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Webhook replay and audit trail</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>90-day log retention</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Support within one business day</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#">Upgrade to Team</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center","fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace">Plan codes are the identifiers the billing API and the test fixtures use.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/pricing --></div>
<!-- /wp:group -->
