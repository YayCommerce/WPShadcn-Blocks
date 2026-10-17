<?php
/**
 * Title: FAQ Sidebar Topic Accordion
 * Slug: shadcn/faq-sidebar-topic-accordion
 * Categories: shadcn, faq
 * Description: An oversized two-line heading over a vertical list of four topic labels, set beside a labelled column of five collapsed questions.
 * AI Hint: FAQ with a topic sidebar — the narrow left column carries an oversized two-line heading above four stacked category labels, the current one sitting in a rounded tinted block, and the wide right column repeats that category as a muted label over five hairline-separated collapsed accordion rows; reach for it when a help section has four or more topics and the reader needs to see the whole map before picking one.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|4","bottom":"var:preset|spacing|10","left":"var:preset|spacing|4"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--4)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|9"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"30%","style":{"spacing":{"blockGap":"var:preset|spacing|7"}}} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.02em","lineHeight":"1.1"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-fluid-4-xl-font-size" style="font-weight:700;letter-spacing:-0.02em;line-height:1.1">Answers to the usual questions</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|4","bottom":"var:preset|spacing|3","left":"var:preset|spacing|4"}},"typography":{"fontWeight":"600"}},"backgroundColor":"muted","fontSize":"sm"} -->
<p class="has-muted-background-color has-background has-sm-font-size" style="border-radius:8px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--4);font-weight:600">Getting started</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|4","bottom":"var:preset|spacing|3","left":"var:preset|spacing|4"}},"typography":{"fontWeight":"500"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--4);font-weight:500">Plans and billing</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|4","bottom":"var:preset|spacing|3","left":"var:preset|spacing|4"}},"typography":{"fontWeight":"500"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--4);font-weight:500">Security</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|4","bottom":"var:preset|spacing|3","left":"var:preset|spacing|4"}},"typography":{"fontWeight":"500"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--4);font-weight:500">Integrations</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%","style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size" style="font-weight:500">Getting started</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/accordion {"headingLevel":3} -->
<!-- wp:shadcn/accordion-item {"title":"What do I need before sending the first document?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">A file and an email address for each signer. Signature and date fields are dragged onto the page after you upload, so nothing has to be prepared in advance.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Do signers have to create an account?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">No. They open a link, sign in the browser and receive the completed copy by email. Accounts exist only for the people on your side who send documents out.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Can I change a document after it has gone out?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Not the file itself once signing has begun. You void the request and send a corrected version instead, and anyone who already signed is told automatically why it was replaced.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"How do I know a document has been opened?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Every send carries an audit trail recording when the link was opened, from which network, and the moment each field was completed. It downloads with the signed copy.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Is a signature made here legally binding?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">In most jurisdictions yes, provided the signer agreed to sign electronically. That consent is captured and stored in the audit trail alongside the signature itself.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
