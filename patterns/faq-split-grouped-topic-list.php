<?php
/**
 * Title: FAQ Split Grouped Topic List
 * Slug: shadcn/faq-split-grouped-topic-list
 * Categories: shadcn, faq
 * Description: A plain two-column split that sets a heading and a short contact line beside three unruled topic labels, each heading a tight stack of collapsed questions.
 * AI Hint: Compact grouped FAQ on the page background — a modest heading and one muted line ending in an underlined support link on the left, and on the right three uppercase topic labels each sitting directly above two or three hairline-separated collapsed accordion rows with no rule of their own; reach for it when the questions are short, the topics are obvious, and the section has to sit quietly between two louder ones.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|4","bottom":"var:preset|spacing|9","left":"var:preset|spacing|4"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--4)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|7","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"36%","style":{"spacing":{"blockGap":"var:preset|spacing|2"}}} -->
<div class="wp-block-column" style="flex-basis:36%"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.01em"}},"fontSize":"4-xl"} -->
<h2 class="wp-block-heading has-4-xl-font-size" style="font-weight:700;letter-spacing:-0.01em">Hosting, answered</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Cannot see what you are after? <a href="#">Ask support</a> and a person picks it up.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"64%","style":{"spacing":{"blockGap":"var:preset|spacing|6"}}} -->
<div class="wp-block-column" style="flex-basis:64%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.08em;text-transform:uppercase">Plans</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/accordion {"headingLevel":3} -->
<!-- wp:shadcn/accordion-item {"title":"What counts as a visit on my plan?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">A unique visitor across a rolling thirty days. Crawlers, uptime checks and your own logged-in admin sessions are filtered out before anything is counted.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Do you throttle a site that goes over?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Never mid-month. You get an email at eighty per cent of the allowance, and only if the overage repeats twice do we suggest moving up a plan.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Is there a discount for paying yearly?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Two months come off the yearly price, and you can switch back to monthly at renewal without losing the rate you originally signed up on.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.08em;text-transform:uppercase">Domains</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/accordion {"headingLevel":3} -->
<!-- wp:shadcn/accordion-item {"title":"Can I keep my domain where it is?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Yes. Point the nameservers at us and leave the registration with your current registrar. Nothing else has to move, and renewals stay where they are.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Are certificates included?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Every domain and subdomain on the account is issued a certificate and renewed automatically, staging subdomains included, at no extra cost.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.08em;text-transform:uppercase">Migrating in</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/accordion {"headingLevel":3} -->
<!-- wp:shadcn/accordion-item {"title":"Who does the migration work?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">We do, once per site, at no cost. Give us read access to the old host and we copy files, database and mailboxes across, then hand you a staging address to check.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"How much downtime should I plan for?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Usually none. The copy runs while the old site is still serving traffic, and the DNS switch happens only after you have signed off the staging copy.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
