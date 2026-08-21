<?php
/**
 * Title: FAQ Tinted Accordion Stack
 * Slug: shadcn/faq-tinted-accordion-stack
 * Categories: shadcn, faq
 * Description: A short bold heading above five widely spaced accordion rows, each sitting in its own rounded tinted block with the question in bold and a chevron at the far right.
 * AI Hint: Detached-row FAQ — a one-word heading over a stack of five separate accordions, each rendered as a rounded muted-tinted bar holding a single bold question with a chevron on the right and a generous gap to the next bar; reach for it when a page needs only a handful of questions and the calm, well-spaced rhythm matters more than fitting many rows in a short column.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|5","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|6"}},"layout":{"type":"constrained","contentSize":"960px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.02em"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-fluid-4-xl-font-size" style="font-weight:700;letter-spacing:-0.02em">FAQ</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:shadcn/accordion {"headingLevel":3,"backgroundColor":"muted","style":{"border":{"radius":"12px"}}} -->
<!-- wp:shadcn/accordion-item {"title":"Where is the visitor data stored?","style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">On the server you point the installer at, and nowhere else. Nothing is mirrored to us, so the retention window and the backup schedule are decisions your team makes rather than ones you inherit.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion -->

<!-- wp:shadcn/accordion {"headingLevel":3,"backgroundColor":"muted","style":{"border":{"radius":"12px"}}} -->
<!-- wp:shadcn/accordion-item {"title":"Does the tracking script need a cookie banner?","style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">The default script sets no cookies and stores no identifier that survives the day, so most sites run it without a consent prompt. Check the wording with your own counsel before you remove an existing banner.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion -->

<!-- wp:shadcn/accordion {"headingLevel":3,"backgroundColor":"muted","style":{"border":{"radius":"12px"}}} -->
<!-- wp:shadcn/accordion-item {"title":"How much traffic can one instance take?","style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">A single small server handles roughly ten million events a month with room to spare. Past that, the ingest service scales sideways on its own, and the dashboard keeps reading from the same store.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion -->

<!-- wp:shadcn/accordion {"headingLevel":3,"backgroundColor":"muted","style":{"border":{"radius":"12px"}}} -->
<!-- wp:shadcn/accordion-item {"title":"Can I import history from another tool?","style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Yes, through a comma-separated export of daily totals per page and per source. The importer backfills those days as read-only rows so old numbers sit beside new ones without pretending to be event-level detail.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion -->

<!-- wp:shadcn/accordion {"headingLevel":3,"backgroundColor":"muted","style":{"border":{"radius":"12px"}}} -->
<!-- wp:shadcn/accordion-item {"title":"What happens when my licence lapses?","style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">The version you already run keeps working and keeps collecting. A lapsed licence only stops new updates, and renewing at any point puts you back on the release channel from that day.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
