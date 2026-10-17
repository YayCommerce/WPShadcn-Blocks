<?php
/**
 * Title: Contact Dark Underline Form
 * Slug: shadcn/contact-dark-underline-form
 * Categories: shadcn, contact
 * Description: A full-width near-black contact band splitting an oversized "Get in Touch" headline and inline phone and email details on the left against a light form panel on the right.
 * AI Hint: Editorial dark contact band: a full-bleed inverted section with tall padding holds two columns — the left opens on an enormous heading closed by a raised asterisk, then a muted three-line paragraph and a row of two inline icon items pairing a phone glyph with a number and an envelope glyph with an address; the right carries a light rounded panel wrapping a name, email and message form whose submit label ends in an arrow; reach for it when the contact section should read as a bold typographic statement rather than a utility form.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"className":"is-style-shadcn-on-dark","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|4","right":"var:preset|spacing|4"}}},"backgroundColor":"primary","textColor":"primary-foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-shadcn-on-dark has-primary-foreground-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--4)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|9"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"52%"} -->
<div class="wp-block-column" style="flex-basis:52%"><!-- wp:heading {"level":2,"style":{"color":{"text":"#fafafa"},"typography":{"fontWeight":"600","lineHeight":"1.02"}},"fontSize":"fluid-7-xl"} -->
<h2 class="wp-block-heading has-text-color has-fluid-7-xl-font-size" style="color:#fafafa;font-weight:600;line-height:1.02">Get in Touch<sup>*</sup></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|8"}}},"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size" style="margin-top:var(--wp--preset--spacing--8)">Tell us what you are building and who it is for. We read every note ourselves, reply within one working day, and never hand you off to a queue. Briefs, budgets and half-formed ideas are all welcome.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|7","margin":{"top":"var:preset|spacing|7"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--7)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"svgCode":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002218\u0022 height=\u002218\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003e\u003cpath d=\u0022M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z\u0022 fill=\u0022none\u0022/\u003e\u003c/svg\u003e","svgColor":"currentColor","svgSize":"18px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"fontSize":"base"} -->
<p class="has-base-font-size">+1 555 0193 220</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"svgCode":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002218\u0022 height=\u002218\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003e\u003crect width=\u002220\u0022 height=\u002216\u0022 x=\u00222\u0022 y=\u00224\u0022 rx=\u00222\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7\u0022 fill=\u0022none\u0022/\u003e\u003c/svg\u003e","svgColor":"currentColor","svgSize":"18px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"fontSize":"base"} -->
<p class="has-base-font-size"><a href="mailto:hello@example.com">hello@example.com</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"48%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%"><!-- wp:group {"style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-card-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:shadcn/form {"formName":"Get in touch"} -->
<!-- wp:shadcn/input {"label":"Your name","required":true,"placeholder":"Ada Okafor"} /-->

<!-- wp:shadcn/input {"label":"Email address","type":"email","required":true,"placeholder":"ada@example.com"} /-->

<!-- wp:shadcn/textarea {"label":"Message","required":true,"rows":5,"placeholder":"What would you like to build?"} /-->

<!-- wp:shadcn/form-submit {"label":"Send message →","width":100} /-->
<!-- /wp:shadcn/form --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
