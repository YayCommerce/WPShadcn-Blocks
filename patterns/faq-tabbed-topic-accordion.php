<?php
/**
 * Title: FAQ Tabbed Topic Accordion
 * Slug: shadcn/faq-tabbed-topic-accordion
 * Categories: shadcn, faq
 * Description: A two-column split pairing a badge, an oversized heading and a short lead with a three-label topic strip above five collapsed questions.
 * AI Hint: FAQ with a topic strip — a small outlined badge, an oversized heading and a two-line muted lead fill the left column, while the right column runs three evenly spaced topic labels across a hairline, the first marked current with a thicker dark rule, and drops a five-row collapsed accordion beneath them; reach for it when the questions belong to distinct areas of the product and the first area deserves to be the one on show.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|4","bottom":"var:preset|spacing|10","left":"var:preset|spacing|4"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--4)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|9"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"32%","style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column" style="flex-basis:32%"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"9999px"},"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem","left":"0.75rem","right":"0.75rem"}},"typography":{"fontWeight":"600"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-border-color has-muted-foreground-color has-text-color has-xs-font-size" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:9999px;padding-top:0.25rem;padding-right:0.75rem;padding-bottom:0.25rem;padding-left:0.75rem;font-weight:600">FAQ</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.02em"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-fluid-4-xl-font-size" style="font-weight:700;letter-spacing:-0.02em">Before you switch</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">The questions new teams ask most often about the shared inbox, from what a seat costs to who can see a conversation.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"68%","style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-column" style="flex-basis:68%"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"grid","columnCount":3}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"border":{"bottom":{"color":"var:preset|color|foreground","width":"2px","style":"solid"}},"spacing":{"padding":{"bottom":"var:preset|spacing|3"}},"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-text-align-center has-sm-font-size" style="border-bottom-color:var(--wp--preset--color--foreground);border-bottom-style:solid;border-bottom-width:2px;padding-bottom:var(--wp--preset--spacing--3);font-weight:600">Inbox</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"bottom":"var:preset|spacing|3"}},"typography":{"fontWeight":"500"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--3);font-weight:500">Billing</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"bottom":"var:preset|spacing|3"}},"typography":{"fontWeight":"500"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--3);font-weight:500">Security</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/accordion {"headingLevel":3} -->
<!-- wp:shadcn/accordion-item {"title":"Can two people reply to the same conversation?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">They can, and they will see each other doing it. An indicator shows who else has the thread open, and unsent drafts are visible to the whole team before anything leaves the inbox.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Does it work with the mailbox we already have?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Connect the mailbox and mail keeps flowing through your existing provider. Nothing is forwarded to a new address, so your customers never see a change of sender.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Can I set up routing rules without a developer?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Rules are built from plain conditions in the settings screen, such as sender, subject, tag or time of day, and every one of them can be switched off again in a single click.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Is there a mobile app?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Apps for both phone platforms cover replying, assigning and snoozing, with push notifications per inbox. Reporting and account settings stay on the web.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"How far back does search go?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Across the whole history of the mailbox, including conversations archived long before you moved in, with filters for assignee, tag, customer and date range.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
