<?php
/**
 * Title: FAQ Support Contact Accordion
 * Slug: shadcn/faq-support-contact-accordion
 * Categories: shadcn, faq
 * Description: A named support contact with avatar, a short reassurance and an arrow link pinned to the bottom of the left column, beside a short heading and an accordion whose first answer is already open.
 * AI Hint: Two-column FAQ with a human on the left — a small round avatar next to a name and role, a bold "Still have questions?" line, a paragraph of reassurance and an underlined arrow contact link pushed to the foot of the column, set against a short heading and five hairline-divided accordion rows whose first item opens on load to show an answer immediately; reach for it when the questions are about starting a service and the reader needs to see who will be looking after them.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|5","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5"}}},"layout":{"type":"constrained","contentSize":"1120px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|9"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"34%","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Priya Raghavan","size":"md","fallback":"PR"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Priya Raghavan</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Onboarding Lead, Payroll</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Still have questions?</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Every migration looks straightforward until someone mentions a legacy pension scheme. If your setup has a wrinkle that is not covered below, describe it in a sentence or two and we will tell you honestly how long it will take to unpick before your first pay run.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500"><a href="#">Contact us ↗</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66%","style":{"spacing":{"blockGap":"var:preset|spacing|7"}}} -->
<div class="wp-block-column" style="flex-basis:66%"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.02em"}},"fontSize":"5-xl"} -->
<h2 class="wp-block-heading has-5-xl-font-size" style="font-weight:600;letter-spacing:-0.02em">FAQ</h2>
<!-- /wp:heading -->

<!-- wp:shadcn/accordion {"headingLevel":3,"openFirst":true} -->
<!-- wp:shadcn/accordion-item {"title":"What does onboarding actually involve?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">We take your last three pay runs, rebuild them inside the platform and compare the numbers line by line until they match to the penny. Only then do we move you across, so the first live run is a repeat of something we have already proved rather than a leap of faith.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"How long before we run our first payroll?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Three weeks for a straightforward company under a hundred people, five or six if there are multiple entities or a pension provider that still trades in spreadsheets. You will have a dated plan in the first session, and we tell you the moment a date is at risk.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Who moves the historical data across?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">We do. Export whatever your current provider gives you, however untidy, and our team maps it. The only thing we need from you is a person who can answer questions about the odd cases, usually an hour a week for the length of the setup.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Does support continue after we go live?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Your onboarding lead stays with you through the first three pay runs, then hands over to the support team with notes on everything specific to your company. There is no separate charge for it and no queue to join when a deadline is hours away.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"What if we need to leave later on?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">You can export every record, in a format other providers accept, at any point and without asking us first. We would rather earn the renewal than hold your payroll history hostage, and the export is available on every plan including the smallest.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
