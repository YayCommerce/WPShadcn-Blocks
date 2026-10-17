<?php
/**
 * Title: Pricing Usage Tier Cards
 * Slug: shadcn/pricing-usage-tier-cards
 * Categories: shadcn, pricing
 * Description: A framed header naming five monthly volume tiers as a row of static cards, with the quoted tier marked, above three plan cards priced for that volume.
 * AI Hint: Usage-based pricing section for metered products: a bordered header panel carries an oversized centred headline, a line naming the metric being priced and a five-across row of volume-tier cards with the quoted tier filled in the primary colour, then a three-column grid of plan cards each holding a name with an optional badge, a short description, the price for that tier, a usage footnote, its own call to action and an "Includes" tick list; reach for it when one volume control drives several plan quotes at once rather than a simple monthly-or-yearly toggle.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|6"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"metadata":{"name":"Volume header"},"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|7","bottom":"var:preset|spacing|8","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--7)"><!-- wp:heading {"style":{"typography":{"textAlign":"center","fontWeight":"700","letterSpacing":"-0.02em"}},"fontSize":"fluid-7-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-7-xl-font-size" style="font-weight:700;letter-spacing:-0.02em">Size the platform to your traffic</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Every plan is quoted against a monthly band of model inference calls.</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|3","left":"var:preset|spacing|3"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|3","bottom":"var:preset|spacing|3","left":"var:preset|spacing|3"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--3)"><!-- wp:paragraph {"style":{"typography":{"textAlign":"center","fontWeight":"600"}}} -->
<p class="has-text-align-center" style="font-weight:600">5K</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size">calls a month</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|3","bottom":"var:preset|spacing|3","left":"var:preset|spacing|3"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--3)"><!-- wp:paragraph {"style":{"typography":{"textAlign":"center","fontWeight":"600"}}} -->
<p class="has-text-align-center" style="font-weight:600">25K</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size">calls a month</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"color":"var:preset|color|primary","width":"2px","style":"solid","radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|3","bottom":"var:preset|spacing|3","left":"var:preset|spacing|3"},"blockGap":"0"}},"backgroundColor":"primary","textColor":"primary-foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-primary-foreground-color has-primary-background-color has-text-color has-background" style="border-color:var(--wp--preset--color--primary);border-style:solid;border-width:2px;border-radius:10px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--3)"><!-- wp:paragraph {"style":{"typography":{"textAlign":"center","fontWeight":"600"}}} -->
<p class="has-text-align-center" style="font-weight:600">100K</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"xs"} -->
<p class="has-text-align-center has-xs-font-size">quoted below</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|3","bottom":"var:preset|spacing|3","left":"var:preset|spacing|3"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--3)"><!-- wp:paragraph {"style":{"typography":{"textAlign":"center","fontWeight":"600"}}} -->
<p class="has-text-align-center" style="font-weight:600">500K</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size">calls a month</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|3","bottom":"var:preset|spacing|3","left":"var:preset|spacing|3"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--3)"><!-- wp:paragraph {"style":{"typography":{"textAlign":"center","fontWeight":"600"}}} -->
<p class="has-text-align-center" style="font-weight:600">2M+</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size">calls a month</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">Ask us for a quote on any other band; the three plans below are priced at 100K.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/pricing {"align":"","intervals":[{"key":"monthly","label":"Monthly"}],"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"grid","minimumColumnWidth":"22rem"}} -->
<!-- wp:group {"metadata":{"name":"Plan card"},"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size" style="font-weight:700">Tinkerer</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Side projects and weekend experiments.</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing-price {"periodPlacement":"inline","prices":[{"key":"monthly","amount":"89","period":"/month"}],"style":{"typography":{"fontWeight":"700"}},"fontSize":"3-xl"} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Covers up to 100,000 inference calls a month.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"size":"md"} -->
<div class="wp-block-button is-size-md"><a class="wp-block-button__link wp-element-button" href="#">Start building</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="font-weight:600">Includes</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Two weeks of full access, free</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Fifty ready-trained models</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Answers from the community forum</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Light fine-tuning on your own data</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>99.0% uptime commitment</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Plan card"},"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size" style="font-weight:700">Studio</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Built for product teams shipping every week.</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing-price {"periodPlacement":"inline","prices":[{"key":"monthly","amount":"249","period":"/month"}],"style":{"typography":{"fontWeight":"700"}},"fontSize":"3-xl"} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Then one cent for every call past the band.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"size":"md","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline is-size-md"><a class="wp-block-button__link wp-element-button" href="#">Try it free</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="font-weight:600">Includes</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Everything in Tinkerer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Two hundred premium models</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Support with a response target</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Deeper fine-tuning controls</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Per-key rate limiting</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>99.5% uptime commitment</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Plan card"},"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size" style="font-weight:700">Foundry</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/badge {"text":"New","variant":"secondary"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Dedicated capacity for regulated workloads.</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing-price {"currency":"","periodPlacement":"inline","prices":[{"key":"monthly","amount":"Custom","period":""}],"style":{"typography":{"fontWeight":"700"}},"fontSize":"3-xl"} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Unmetered calls with volume pricing agreed up front.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"size":"md","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline is-size-md"><a class="wp-block-button__link wp-element-button" href="#">Book a demo</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="font-weight:600">Includes</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Everything in Studio</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Isolated inference hardware</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Models trained on your corpus</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Response times written into the contract</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Round-the-clock engineering support</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Audit logging and compliance review</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/pricing --></div>
<!-- /wp:group -->
