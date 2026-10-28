<?php
/**
 * Title: Contact Icon List Muted Form Card
 * Slug: shadcn/contact-icon-list-muted-form-card
 * Categories: shadcn, contact
 * Description: A two-column contact section with a large heading, lead and three icon contact rows on the left and a softly tinted rounded card holding a message form on the right.
 * AI Hint: Contact page body on a plain background: the left half carries an oversized "Contact Us" heading, a three-line muted lead and three muted-icon rows for phone, email and website, while the right half holds a borderless, faintly tinted rounded card with a "Send us a message" heading, a one-line reply-time note and a form pairing first and last name side by side above email, subject and message fields and a full-width submit; reach for it when a contact page needs a calm, form-forward layout without a sidebar of office details.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8rem","right":"var:preset|spacing|5","bottom":"8rem","left":"var:preset|spacing|5"}}},"layout":{"type":"constrained","contentSize":"960px"}} -->
<div class="wp-block-group alignfull" style="padding-top:8rem;padding-right:var(--wp--preset--spacing--5);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--5)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|10","left":"6rem"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.025em","lineHeight":"1"}},"fontSize":"6-xl"} -->
<h2 class="wp-block-heading has-6-xl-font-size" style="font-weight:600;letter-spacing:-0.025em;line-height:1">Contact Us</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xl"} -->
<p class="has-muted-foreground-color has-text-color has-xl-font-size">Building with shadcn/ui and Tailwind? Shadcnblocks ships copy-paste React sections—drop us a line if you need help picking blocks or wiring forms.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"svgCode":"\u003Csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002220\u0022 height=\u002220\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003E\u003Cpath d=\u0022M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.12 4.2 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.9.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z\u0022 fill=\u0022none\u0022/\u003E\u003C/svg\u003E","svgColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dmuted-foreground)","svgSize":"20px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}}} -->
<p style="line-height:1.5">+1 (555) 010-2400</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"svgCode":"\u003Csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002220\u0022 height=\u002220\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003E\u003Crect x=\u00222\u0022 y=\u00224\u0022 width=\u002220\u0022 height=\u002216\u0022 rx=\u00222\u0022 fill=\u0022none\u0022/\u003E\u003Cpath d=\u0022m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7\u0022 fill=\u0022none\u0022/\u003E\u003C/svg\u003E","svgColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dmuted-foreground)","svgSize":"20px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}}} -->
<p style="line-height:1.5">hello@example.com</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"svgCode":"\u003Csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002220\u0022 height=\u002220\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003E\u003Ccircle cx=\u002212\u0022 cy=\u002212\u0022 r=\u002210\u0022 fill=\u0022none\u0022/\u003E\u003Cpath d=\u0022M2 12h20\u0022 fill=\u0022none\u0022/\u003E\u003Cpath d=\u0022M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z\u0022 fill=\u0022none\u0022/\u003E\u003C/svg\u003E","svgColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dmuted-foreground)","svgSize":"20px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}}} -->
<p style="line-height:1.5">example.com</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"color":{"background":"color-mix(in oklab, var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dmuted) 50%, transparent)"},"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|6"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-background" style="border-radius:12px;background-color:color-mix(in oklab, var(--wp--preset--color--muted) 50%, transparent);padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--8)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.025em"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size" style="font-weight:600;letter-spacing:-0.025em">Send us a message</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">We usually reply within one business day.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/form {"formName":"Contact"} -->
<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:shadcn/input {"label":"First Name","required":true,"placeholder":"Jordan"} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:shadcn/input {"label":"Last Name","required":true,"placeholder":"Kim"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:shadcn/input {"label":"Email","type":"email","required":true,"placeholder":"you@company.com","style":{"spacing":{"margin":{"top":"var:preset|spacing|4"}}}} /-->

<!-- wp:shadcn/input {"label":"Subject","required":true,"placeholder":"Question about blocks","style":{"spacing":{"margin":{"top":"var:preset|spacing|4"}}}} /-->

<!-- wp:shadcn/textarea {"label":"Message","required":true,"rows":3,"placeholder":"Tell us what you are building…","style":{"spacing":{"margin":{"top":"var:preset|spacing|4"}}}} /-->

<!-- wp:shadcn/form-submit {"label":"Send message","width":100,"style":{"spacing":{"margin":{"top":"var:preset|spacing|2"}}}} /-->
<!-- /wp:shadcn/form --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
