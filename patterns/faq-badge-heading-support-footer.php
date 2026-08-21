<?php
/**
 * Title: FAQ Badge Heading Support Footer
 * Slug: shadcn/faq-badge-heading-support-footer
 * Categories: shadcn, faq
 * Description: A left-aligned badge, heading and lead above a full-width hairline-divided accordion, closed off by a support prompt whose contact link sits opposite a muted line.
 * AI Hint: Long single-column FAQ list — a small solid pill badge over a left-aligned heading and one muted lead line, then eight collapsed accordion rows separated by hairlines, and beneath a rule a "Still have questions?" sub-heading with a reassuring sentence on the left and an arrow contact link pushed to the right of the same row; reach for it when a product has enough recurring billing or account questions to fill a page on its own and the reader should still land somewhere human at the end.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|5","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained","contentSize":"1120px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Billing"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.02em"}},"fontSize":"4-xl"} -->
<h2 class="wp-block-heading has-4-xl-font-size" style="font-weight:700;letter-spacing:-0.02em">Plans, invoices and everything in between</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">The answers our finance team gives most often, written down so you do not have to ask.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/accordion {"headingLevel":3} -->
<!-- wp:shadcn/accordion-item {"title":"When exactly does my card get charged?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">On the same calendar day you first subscribed, every month or every year depending on the term you picked. If that day does not exist in a shorter month we bill on the last day instead, and the receipt lands in your inbox within a few minutes of the charge clearing.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Can I switch between monthly and annual billing?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Yes, from Settings then Billing, and the change takes effect straight away. Moving to annual credits whatever is left of the month you already paid for; moving back to monthly waits until the annual term runs out so you never lose time you have bought.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"What happens when I add someone to the team mid-cycle?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">We prorate the new seat to the day, so a person added two thirds of the way through the month costs a third of a seat on the next invoice. Removing a seat works the same way in reverse and shows as a credit rather than a refund.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Do you take purchase orders and bank transfer?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">On annual plans above ten seats, yes. Send us the purchase order and we will issue an invoice with thirty-day terms, in your own currency where we are able to. Smaller plans stay on card or direct debit because the admin costs more than the difference.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Where do I find past invoices and VAT receipts?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Every document lives under Settings then Billing then History, going back to your first payment. Each one can be downloaded as a PDF, and you can add a company name, address and tax number that will be applied retroactively to documents already issued.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"My payment failed. How long do I have to fix it?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">We retry a declined card three times over ten days and email the account owner after each attempt. Nothing is deleted in that window and your data stays exactly where it is; access pauses only if the tenth day passes with no working card on file.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Is there a refund if I cancel early?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Cancel within fourteen days of a first purchase and we refund it in full, no questions asked. After that a cancellation stops the next renewal rather than clawing back the current term, so you keep the plan until the day it was paid up to.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"What happens to my data if I downgrade or leave?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Downgrading keeps everything and simply hides the features the smaller plan does not include. Closing an account entirely leaves the workspace readable for thirty days, during which a full export is one click away, and after that we delete it from backups too.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"top":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--7)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.01em"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size" style="font-weight:700;letter-spacing:-0.01em">Still have questions?</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">A person on the finance team reads every message and replies inside one working day.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500"><a href="#">Contact support →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
