<?php
/**
 * Title: Contact Paired Form Card Detail Strip
 * Slug: shadcn/contact-paired-form-card-detail-strip
 * Categories: shadcn, contact
 * Description: A muted contact section with a left-aligned heading and lead over a one-third rail of office, contact and social details and a two-thirds inquiry form, split by a vertical hairline.
 * AI Hint: Contact page body on a muted background: a large left-aligned "Contact Us" heading and two-line muted lead sit above a one-third / two-thirds split divided by a vertical hairline, the narrow rail stacking a corporate office address, three muted icon rows for phone, email and website, and a row of Facebook, X and LinkedIn glyphs, the wide column carrying an "Inquiries" heading over a single-column form for full name, work email, company, headcount and message closed by a right-aligned submit; reach for it as the whole body of a contact page.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8rem","right":"var:preset|spacing|5","bottom":"8rem","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|10"}},"backgroundColor":"muted","layout":{"type":"constrained","contentSize":"960px"}} -->
<div class="wp-block-group alignfull has-muted-background-color has-background" style="padding-top:8rem;padding-right:var(--wp--preset--spacing--5);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained","contentSize":"600px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.02em"}},"fontSize":"5-xl"} -->
<h2 class="wp-block-heading has-5-xl-font-size" style="font-weight:600;letter-spacing:-0.02em">Contact Us</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xl"} -->
<p class="has-muted-foreground-color has-text-color has-xl-font-size">Building with shadcn/ui and Tailwind? Ask us about blocks, components, or copy-paste sections—we read every message.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"320px","style":{"spacing":{"blockGap":"var:preset|spacing|8"}}} -->
<div class="wp-block-column" style="flex-basis:320px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Corporate office</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">1200 Framework Boulevard<br>San Francisco, CA 94102, United States</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Get in touch</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-muted-foreground-color has-text-color"><!-- wp:image {"svgCode":"\u003Csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002220\u0022 height=\u002220\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003E\u003Cpath d=\u0022M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.12 4.2 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.9.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z\u0022 fill=\u0022none\u0022/\u003E\u003C/svg\u003E","svgColor":"currentColor","svgSize":"20px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>+1 (555) 010-2400</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-muted-foreground-color has-text-color"><!-- wp:image {"svgCode":"\u003Csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002220\u0022 height=\u002220\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003E\u003Crect x=\u00222\u0022 y=\u00224\u0022 width=\u002220\u0022 height=\u002216\u0022 rx=\u00222\u0022 fill=\u0022none\u0022/\u003E\u003Cpath d=\u0022m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7\u0022 fill=\u0022none\u0022/\u003E\u003C/svg\u003E","svgColor":"currentColor","svgSize":"20px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>hello@example.com</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-muted-foreground-color has-text-color"><!-- wp:image {"svgCode":"\u003Csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002220\u0022 height=\u002220\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003E\u003Ccircle cx=\u002212\u0022 cy=\u002212\u0022 r=\u002210\u0022 fill=\u0022none\u0022/\u003E\u003Cpath d=\u0022M2 12h20\u0022 fill=\u0022none\u0022/\u003E\u003Cpath d=\u0022M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z\u0022 fill=\u0022none\u0022/\u003E\u003C/svg\u003E","svgColor":"currentColor","svgSize":"20px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>example.com</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Follow us</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"textColor":"muted-foreground","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-muted-foreground-color has-text-color"><!-- wp:image {"svgCode":"\u003Csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002224\u0022 height=\u002224\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003E\u003Cpath d=\u0022M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z\u0022 fill=\u0022none\u0022/\u003E\u003C/svg\u003E","svgColor":"currentColor","svgSize":"24px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"svgCode":"\u003Csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002224\u0022 height=\u002224\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003E\u003Cpath d=\u0022M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z\u0022 fill=\u0022none\u0022/\u003E\u003C/svg\u003E","svgColor":"currentColor","svgSize":"24px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"svgCode":"\u003Csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002224\u0022 height=\u002224\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003E\u003Cpath d=\u0022M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z\u0022 fill=\u0022none\u0022/\u003E\u003Crect width=\u00224\u0022 height=\u002212\u0022 x=\u00222\u0022 y=\u00229\u0022 fill=\u0022none\u0022/\u003E\u003Ccircle cx=\u00224\u0022 cy=\u00224\u0022 r=\u00222\u0022 fill=\u0022none\u0022/\u003E\u003C/svg\u003E","svgColor":"currentColor","svgSize":"24px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"left":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|5"}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-left:var(--wp--preset--spacing--8)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Inquiries</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/form {"formName":"Inquiry"} -->
<!-- wp:shadcn/input {"label":"Full name","required":true,"placeholder":"Jordan Rivera"} /-->

<!-- wp:shadcn/input {"label":"Work email address","type":"email","required":true,"placeholder":"you@company.com","style":{"spacing":{"margin":{"top":"var:preset|spacing|4"}}}} /-->

<!-- wp:shadcn/input {"label":"Company name","placeholder":"Optional","style":{"spacing":{"margin":{"top":"var:preset|spacing|4"}}}} /-->

<!-- wp:shadcn/input {"label":"Number of employees","placeholder":"e.g. 10–50","style":{"spacing":{"margin":{"top":"var:preset|spacing|4"}}}} /-->

<!-- wp:shadcn/textarea {"label":"Your message","required":true,"rows":6,"placeholder":"Tell us what you are building…","style":{"spacing":{"margin":{"top":"var:preset|spacing|4"}}}} /-->

<!-- wp:shadcn/form-submit {"label":"Send message","alignment":"right","style":{"spacing":{"margin":{"top":"var:preset|spacing|4"}}}} /-->
<!-- /wp:shadcn/form --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
