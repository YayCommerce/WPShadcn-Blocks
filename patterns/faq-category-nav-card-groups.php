<?php
/**
 * Title: FAQ Category Nav Card Groups
 * Slug: shadcn/faq-category-nav-card-groups
 * Categories: shadcn, faq
 * Description: A centred heading and two-line standfirst above a two-column layout that sets a narrow list of category labels beside a stack of rounded tinted cards, each holding its own group of questions.
 * AI Hint: Indexed FAQ — a centred heading with a short two-line lead, then a narrow left column listing five topic labels with the current one in bold and a wide right column stacking four rounded muted cards of three questions each, the first card opening on an answer so the reader sees what an expanded row looks like; reach for it on a long support page where a visible topic index helps the reader place themselves before scrolling.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|5","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained","contentSize":"960px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained","contentSize":"620px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.02em"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-4-xl-font-size" style="font-weight:700;letter-spacing:-0.02em">We've got answers</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">Sending, deliverability, billing and the small print, grouped by the part of the product they belong to. If none of it fits, the support inbox is answered by the people who wrote the API.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|7"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"26%","style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column" style="flex-basis:26%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">Support</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">Account</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">Sending</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">Security</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">Other</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"74%","style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-column" style="flex-basis:74%"><!-- wp:shadcn/accordion {"headingLevel":3,"openFirst":true,"backgroundColor":"muted","style":{"border":{"radius":"16px"}}} -->
<!-- wp:shadcn/accordion-item {"title":"Is there a free tier?","style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">The free tier covers three thousand messages a month on a shared sending pool, which is enough to build against and to run a small side project on. Paid plans add a dedicated address, longer log retention and a signed uptime figure.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"How quickly does support reply?","style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Within one working day on every plan, and within two hours on the business plan for anything that stops mail leaving. Replies come from engineers, so you rarely have to explain the problem twice.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"What counts as an outage?","style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Any period where the send endpoint refuses valid requests, measured from our own probes and published on the status page. Queue delays are reported there too, even when nothing has technically failed.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion -->

<!-- wp:shadcn/accordion {"headingLevel":3,"backgroundColor":"muted","style":{"border":{"radius":"16px"}}} -->
<!-- wp:shadcn/accordion-item {"title":"How do I change the billing address on an invoice?","style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Edit the billing profile and the next invoice picks it up. Invoices already issued can be reissued once with the new details, which keeps your accounts team from chasing a credit note.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Can more than one person own the account?","style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Yes, and we recommend at least two. Owners can add teammates, rotate keys and close the account, while members keep read access to logs without being able to change how mail is sent.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"What happens if I forget my password?","style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">A reset link goes to your address and expires in fifteen minutes. If two-factor is on, you will also need a code or one of the recovery codes issued when you turned it on.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion -->

<!-- wp:shadcn/accordion {"headingLevel":3,"backgroundColor":"muted","style":{"border":{"radius":"16px"}}} -->
<!-- wp:shadcn/accordion-item {"title":"Do I need my own sending domain?","style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Not to start, but mail from your own domain lands better and looks like you rather than like us. The setup screen prints the exact records to add and checks them every few minutes until they resolve.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"How long are message logs kept?","style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Seven days on the free tier and thirty on paid plans, with the subject line and the delivery result rather than the full body. Anything longer is better handled by streaming events into your own store.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Can I send from more than one region?","style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Pick a region per API key and messages stay in it end to end, including the logs. Keys can sit side by side in one account, so a European tenant and an American one never share a queue.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion -->

<!-- wp:shadcn/accordion {"headingLevel":3,"backgroundColor":"muted","style":{"border":{"radius":"16px"}}} -->
<!-- wp:shadcn/accordion-item {"title":"How are API keys stored?","style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Only a hash is kept, so a key is shown once and never again. Losing one is not a crisis: revoke it, issue another, and the dashboard shows which key sent what right up to the moment it was cut off.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Is two-factor authentication available?","style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Authenticator apps and hardware keys are both supported, and an owner can require it for everyone on the account. Recovery codes are issued at setup and can be regenerated at any time.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Who can read the contents of a message?","style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Message bodies are dropped once delivery is confirmed, and access before that is limited to the on-call engineer investigating a named incident. Every such access is logged and visible to you.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
