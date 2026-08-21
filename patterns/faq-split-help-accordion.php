<?php
/**
 * Title: FAQ Split Help Accordion
 * Slug: shadcn/faq-split-help-accordion
 * Categories: shadcn, faq
 * Description: A two-column split with a two-tone heading, a short invitation to get in touch and an outline button on the left, and a hairline-divided accordion on the right.
 * AI Hint: Two-column FAQ split — the left column carries a heading whose second line drops to muted, a two-line paragraph with an underlined inline link to the support team, and one outline button to the full FAQ archive, while the right column holds five collapsed accordion rows separated by hairlines; reach for it when only a handful of questions belong on this page and the real goal is to move the reader towards a conversation.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|5","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5"}}},"layout":{"type":"constrained","contentSize":"1120px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|9"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"42%","style":{"spacing":{"blockGap":"var:preset|spacing|5"}}} -->
<div class="wp-block-column" style="flex-basis:42%"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.02em"}},"fontSize":"4-xl"} -->
<h2 class="wp-block-heading has-4-xl-font-size" style="font-weight:700;letter-spacing:-0.02em">Delivery questions?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.02em"}},"textColor":"muted-foreground","fontSize":"4-xl"} -->
<p class="has-muted-foreground-color has-text-color has-4-xl-font-size" style="font-weight:700;letter-spacing:-0.02em">We answer them all.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Nothing below covering your order? Our <a href="#">delivery team</a> can track a crate down to the depot it is sitting in.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"md","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline is-size-md"><a class="wp-block-button__link wp-element-button" href="#">Read the delivery guide</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"58%"} -->
<div class="wp-block-column" style="flex-basis:58%"><!-- wp:shadcn/accordion {"headingLevel":3} -->
<!-- wp:shadcn/accordion-item {"title":"How long until a sofa actually arrives?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Anything held in the warehouse ships within two working days and reaches most addresses inside a week. Made-to-order frames are built after you buy, so allow six to eight weeks; the confirmation email gives you a firm week rather than a vague range.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Will the crew carry it up three flights of stairs?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Two people deliver every large item and will take it to the room you name, stairs included, at no extra charge. Tell us at checkout if access is tight or a lift is out of service and we will send a third pair of hands.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Can I change the delivery date after ordering?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Up to forty-eight hours before the slot, from the link in your dispatch email. Inside that window the van is already loaded, so call us instead and we will find the nearest free morning rather than sending it back to the depot.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"What if it does not fit through the door?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Every product page lists the packed dimensions so you can measure first. If the worst happens the crew takes it away the same day and you are refunded in full, including the delivery charge, once it is back with us.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"How do returns and collections work?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">You have thirty days from delivery to change your mind on a stocked item. Book a collection online, keep the packaging if you still have it, and the refund clears within five working days of the crate reaching the warehouse.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
