<?php
/**
 * Title: FAQ Bordered Card Accordion
 * Slug: shadcn/faq-bordered-card-accordion
 * Categories: shadcn, faq
 * Description: A hairline-bounded header band carrying an icon badge, a large heading and a linked one-liner, above a narrow centred stack of bordered rounded accordion cards.
 * AI Hint: Card-per-question FAQ — a header band ruled top and bottom holds a small outlined pill badge with an icon, a large heading and one muted line containing an underlined inline link, and below it six separately bordered rounded rows sit centred in a narrow column, each a one-item accordion whose question and chevron stay on a single line until it is opened; reach for it when the questions are short product qualifiers and each one should read as its own tappable object rather than a row in a list.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|9"}},"layout":{"type":"constrained","contentSize":"1120px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","width":"1px","style":"solid"},"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|5","bottom":"var:preset|spacing|8","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"FAQ","variant":"outline","iconName":"message-circle","iconPosition":"left"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.03em"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-fluid-4-xl-font-size" style="font-weight:600;letter-spacing:-0.03em">Everything worth asking before you sign up</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Want the long version instead? Read the <a href="#">product handbook</a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:shadcn/accordion {"headingLevel":3,"outlined":true} -->
<!-- wp:shadcn/accordion-item {"title":"Is there a free tier?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Yes, and it does not expire. You get one workspace, unlimited notes and full text search across all of them, forever, with no card on file. Paid plans add shared workspaces, version history and the larger monthly allowance of assisted drafts.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion -->

<!-- wp:shadcn/accordion {"headingLevel":3,"outlined":true} -->
<!-- wp:shadcn/accordion-item {"title":"Which tools does it connect to?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Calendars, the two big cloud drives, the usual chat apps and anything else you can reach through our API. Connections are read-only until you grant write access explicitly, and each one can be revoked from a single screen.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion -->

<!-- wp:shadcn/accordion {"headingLevel":3,"outlined":true} -->
<!-- wp:shadcn/accordion-item {"title":"How does the assisted drafting work?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">It reads only the notes you point it at, never the whole workspace, and it shows you which ones it used underneath every suggestion. Nothing is rewritten in place without you accepting it first, so the original text is always recoverable.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion -->

<!-- wp:shadcn/accordion {"headingLevel":3,"outlined":true} -->
<!-- wp:shadcn/accordion-item {"title":"Can a whole team use one workspace?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">From the team plan upwards. Everyone edits at once, changes are attributed by name, and each note can be private, shared with a group or open to the workspace. Guests can be invited to a single note without taking a seat.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion -->

<!-- wp:shadcn/accordion {"headingLevel":3,"outlined":true} -->
<!-- wp:shadcn/accordion-item {"title":"How is my writing kept private?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Everything is encrypted on the way to us and while it sits on disk, backed up hourly to a second region. We do not train models on your notes and we do not sell anything to advertisers; the subscription is the entire business model.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion -->

<!-- wp:shadcn/accordion {"headingLevel":3,"outlined":true} -->
<!-- wp:shadcn/accordion-item {"title":"Where do I change or cancel my plan?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Under Settings then Plan, in two clicks and with no phone call. Cancelling drops you back to the free tier at the end of the paid period rather than locking you out, so your notes stay exactly where you left them.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
