<?php
/**
 * Title: FAQ Inset Panel Accordion
 * Slug: shadcn/faq-inset-panel-accordion
 * Categories: shadcn, faq
 * Description: A short centred heading above one bordered card that insets eight tinted accordion rows, each carrying a bold question and a chevron.
 * AI Hint: Panelled FAQ built as a single bordered rounded card holding eight tinted accordion rows rather than a bare list — a very short heavy centred H2 sits above the card, and every row inside is a shaded band with a small bold question, a chevron pinned right and a muted answer that opens beneath it; reach for it when the FAQ needs to read as one contained object on a plain page, such as a support page or the tail of a pricing page.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|4","bottom":"var:preset|spacing|9","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|7"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--4)"><!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontWeight":"800","letterSpacing":"-0.03em"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size" style="font-weight:800;letter-spacing:-0.03em">FAQs</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|3","bottom":"var:preset|spacing|3","left":"var:preset|spacing|3"}}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--3)"><!-- wp:group {"fontSize":"sm","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-sm-font-size"><!-- wp:shadcn/accordion {"headingLevel":3} -->
<!-- wp:shadcn/accordion-item {"title":"Can you move an existing site across for me?","backgroundColor":"muted","style":{"spacing":{"padding":{"right":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Send us the login and we handle the move, including the database and the mail records. Most sites are copied, tested and switched over inside a day, and the old host stays live until you are happy.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"How many sites does one plan cover?","backgroundColor":"muted","style":{"spacing":{"padding":{"right":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">The starter plan runs one site, and every plan above it runs ten. Each site keeps its own certificate, its own backups and its own set of users.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Are backups part of the price?","backgroundColor":"muted","style":{"spacing":{"padding":{"right":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Yes. A full copy is taken nightly and kept for thirty days, and you can restore any of them yourself from the dashboard without opening a ticket.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"What happens if traffic spikes?","backgroundColor":"muted","style":{"spacing":{"padding":{"right":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Short bursts are absorbed at no extra cost; nothing is throttled and no page is taken offline. If the higher level holds for a fortnight we get in touch about the next plan up rather than billing you by surprise.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Do you provide staging environments?","backgroundColor":"muted","style":{"spacing":{"padding":{"right":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Every site gets one staging copy, created from the live version in a couple of minutes and pushed back the same way once the work is signed off.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Is email hosting included?","backgroundColor":"muted","style":{"spacing":{"padding":{"right":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Mailboxes are not, deliberately, since a dedicated mail provider does that job better. We do configure your records for whichever provider you use, and forwarding addresses are included.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Can I upgrade partway through a term?","backgroundColor":"muted","style":{"spacing":{"padding":{"right":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">At any point. The change takes effect immediately and we charge only the difference for the days left on the term. Moving back down happens at renewal.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"How is support handled out of hours?","backgroundColor":"muted","style":{"spacing":{"padding":{"right":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Anything affecting a live site reaches an engineer at once, whatever the hour. Everything else waits for the next working morning, and the ticket tells you which of the two it has been treated as.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
