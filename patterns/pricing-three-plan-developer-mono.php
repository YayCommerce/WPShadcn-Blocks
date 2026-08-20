<?php
/**
 * Title: Pricing Three Plan Developer Mono
 * Slug: shadcn/pricing-three-plan-developer-mono
 * Categories: shadcn, pricing
 * Description: Three dashed-border plan columns on a muted band, with monospace prices and feature rows, tier-code badges and a billing toggle.
 * AI Hint: Developer-facing three-plan pricing on a muted full-width band that reads like documentation — a centred sans-serif heading and lead sit above a segmented monthly/yearly control, then three equal columns each led by an uppercase tier-code badge, a plan name, a monospace price with its period underneath, one supporting line closed by a hairline, a dense monospace check list and a full-width button pinned to the bottom edge; the recommended column trades the dashed outline for a solid primary one and carries a small default badge, and a monospace footnote under the grid explains that the codes are stable identifiers. Reach for it on API, infrastructure and developer-tool sites where buyers want the numbers plainly rather than a glossy marketing table.
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|3"}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-muted-background-color has-background" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:heading {"style":{"typography":{"textAlign":"center"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size">Pricing you can read like a spec</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Every tier serves the same endpoints. Throughput, retention and response times are what move.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|5"} -->
<div style="height:var(--wp--preset--spacing--5)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:shadcn/pricing {"align":"wide","intervals":[{"key":"monthly","label":"Monthly"},{"key":"yearly","label":"Yearly"}],"style":{"spacing":{"blockGap":"var:preset|spacing|7"}},"layout":{"type":"default"}} -->
<!-- wp:shadcn/pricing-switch {"variant":"segmented","fontSize":"sm"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"grid","minimumColumnWidth":"22rem"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"dashed","radius":"12px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:dashed;border-width:1px;border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace"},"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace"><!-- wp:shadcn/badge {"text":"tier_local","variant":"outline"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">Local</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"periodPlacement":"below","prices":[{"key":"monthly","amount":"0","period":"Per month"}],"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","fontSize":"2.5rem","fontWeight":"700","lineHeight":"1.1"}}} /-->

<!-- wp:paragraph {"style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"bottom":"var:preset|spacing|4"}}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--4)">Run it on a laptop and hand the key to nobody.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-shadcn-check","style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace"},"spacing":{"blockGap":"var:preset|spacing|2"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace"><!-- wp:list-item -->
<li>50k calls each month</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>2 keys, no expiry</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Forum and issue tracker</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>3-day request logs</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Status page webhooks</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Grab a key</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|primary","width":"1px","style":"solid","radius":"12px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--primary);border-style:solid;border-width:1px;border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace"},"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace"><!-- wp:shadcn/badge {"text":"tier_ship","variant":"outline"} /-->

<!-- wp:shadcn/badge {"text":"default"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">Ship</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"periodPlacement":"below","prices":[{"key":"monthly","amount":"59","period":"Per month"},{"key":"yearly","amount":"47","period":"Per month, billed yearly"}],"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","fontSize":"2.5rem","fontWeight":"700","lineHeight":"1.1"}}} /-->

<!-- wp:paragraph {"style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"bottom":"var:preset|spacing|4"}}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--4)">Where most services land once the traffic is real.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-shadcn-check","style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace"},"spacing":{"blockGap":"var:preset|spacing|2"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace"><!-- wp:list-item -->
<li>5M calls each month</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Unlimited keys and scopes</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Replay any webhook for 30 days</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>45-day request logs</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Answers inside one business day</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#">Move to Ship</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"dashed","radius":"12px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:dashed;border-width:1px;border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace"},"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace"><!-- wp:shadcn/badge {"text":"tier_region","variant":"outline"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">Region</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/pricing-price {"periodPlacement":"below","prices":[{"key":"monthly","amount":"189","period":"Per month"},{"key":"yearly","amount":"155","period":"Per month, billed yearly"}],"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","fontSize":"2.5rem","fontWeight":"700","lineHeight":"1.1"}}} /-->

<!-- wp:paragraph {"style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"bottom":"var:preset|spacing|4"}}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--4)">For platforms with latency budgets and auditors.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-shadcn-check","style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace"},"spacing":{"blockGap":"var:preset|spacing|2"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace"><!-- wp:list-item -->
<li>60M calls each month</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Edge routing in four regions</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Shared channel with our engineers</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>13-month request logs</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>SSO, SCIM and an audit trail</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Book a walkthrough</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center","fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace">Tier codes stay put across releases, so tests and billing hooks can key off them.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/pricing --></div>
<!-- /wp:group -->
