<?php
/**
 * Title: Contact Channel Tiles Form Split
 * Slug: shadcn/contact-channel-tiles-form-split
 * Categories: shadcn, contact
 * Description: A centred heading over a two-column split — four tinted channel tiles on the left, a bordered message form on the right, closed by a wide muted panel of office hours and contact details.
 * AI Hint: Channel-tile contact split: a centred "Contact Us" heading and muted lead sit above a narrow left column of four rounded secondary tiles, each pairing a line-art icon with a bold channel label, a one-line muted explanation and the address, number or location in bold, while the wider right column is a bordered card-background form asking for name, email, company and a message, with a consent line naming the Terms of Service and Privacy Policy and a full-width submit; a wide muted panel underneath repeats office hours and contact information in two columns, so reach for it when the page must show every way to reach you and still put the form in front of the reader.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|5","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|9"}},"layout":{"type":"constrained","contentSize":"1120px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.02em"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-4-xl-font-size" style="font-weight:700;letter-spacing:-0.02em">Contact Us</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Pick whichever route suits the question — a person reads every message that lands here. Nothing waits in a queue overnight, and nothing gets answered by a template.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%","style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"secondary","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:0.75rem;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:image {"svgCode":"\u003Csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002220\u0022 height=\u002220\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003E\u003Crect x=\u00222\u0022 y=\u00224\u0022 width=\u002220\u0022 height=\u002216\u0022 rx=\u00222\u0022 fill=\u0022none\u0022/\u003E\u003Cpath d=\u0022m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7\u0022 fill=\u0022none\u0022/\u003E\u003C/svg\u003E","svgColor":"currentColor","svgSize":"20px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600">Email</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">A reply lands inside one working day</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">hello@example.com</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"secondary","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:0.75rem;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:image {"svgCode":"\u003Csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002220\u0022 height=\u002220\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003E\u003Cpath d=\u0022M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z\u0022 fill=\u0022none\u0022/\u003E\u003C/svg\u003E","svgColor":"currentColor","svgSize":"20px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600">Live Chat</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Staffed by engineers, not a script</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Weekdays, 9:00 to 18:00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"secondary","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:0.75rem;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:image {"svgCode":"\u003Csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002220\u0022 height=\u002220\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003E\u003Cpath d=\u0022M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.12 4.2 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.9.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z\u0022 fill=\u0022none\u0022/\u003E\u003C/svg\u003E","svgColor":"currentColor","svgSize":"20px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600">Phone</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Best for anything urgent or contractual</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">+1 555 0142 880</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"secondary","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:0.75rem;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:image {"svgCode":"\u003Csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002220\u0022 height=\u002220\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003E\u003Cpath d=\u0022M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z\u0022 fill=\u0022none\u0022/\u003E\u003Ccircle cx=\u002212\u0022 cy=\u002210\u0022 r=\u00223\u0022 fill=\u0022none\u0022/\u003E\u003C/svg\u003E","svgColor":"currentColor","svgSize":"20px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600">Office</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Coffee is on us if you book ahead</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">14 Ardenwood Lane, Portland, OR</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"0.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:0.75rem;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size" style="font-weight:700">Send us a message</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Sketch out what you are trying to build and we will point it at whoever knows the answer. No shared inbox, no ticket number, no chasing.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/form {"formName":"Contact message"} -->
<!-- wp:shadcn/input {"label":"Name","required":true,"placeholder":"Ada Okafor"} /-->

<!-- wp:shadcn/input {"label":"Email","type":"email","required":true,"placeholder":"ada@example.com"} /-->

<!-- wp:shadcn/input {"label":"Company","placeholder":"Where you work"} /-->

<!-- wp:shadcn/textarea {"label":"Message","required":true,"rows":5,"placeholder":"What are you trying to solve?"} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">I agree to the <strong>Terms of Service</strong> and <strong>Privacy Policy</strong>.</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/form-submit {"label":"Send message","width":100} /-->
<!-- /wp:shadcn/form --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:0.75rem;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Office Hours</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Monday to Thursday — 9:00 to 18:00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Friday — 9:00 to 15:00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Saturday and Sunday — closed, but urgent tickets still page someone</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Contact Information</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">General enquiries — hello@example.com</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Existing customers — support@example.com</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">14 Ardenwood Lane, Portland, OR 97209</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
