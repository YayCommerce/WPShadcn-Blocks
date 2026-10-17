<?php
/**
 * Title: Contact Detail Rail Inquiry Form
 * Slug: shadcn/contact-detail-rail-inquiry-form
 * Categories: shadcn, contact
 * Description: A muted full-width section pairing a left rail of office, contact and social details with an inquiry form on the right, the two divided by a vertical hairline.
 * AI Hint: Detail-rail contact section on a muted background: a left-aligned "Contact Us" heading and two-line lead sit above two columns split by a vertical hairline running down the gutter, with the narrow left rail stacking a corporate office address, three icon-and-text rows for phone, email and website, and a row of generic social glyphs, while the wider right column carries an "Inquiries" heading and a form for full name, work email, company, headcount and message closed by a right-aligned submit; reach for it when the company facts deserve equal billing with the form and the page wants a calmer, tinted treatment.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|5","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|8"}},"backgroundColor":"muted","layout":{"type":"constrained","contentSize":"1120px"}} -->
<div class="wp-block-group alignfull has-muted-background-color has-background" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.02em"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-fluid-4-xl-font-size" style="font-weight:700;letter-spacing:-0.02em">Contact Us</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Everything you might need to reach us sits on the left; the form on the right lands in the same place. Whichever you pick, the same three people read it.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|9"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"38%","style":{"spacing":{"blockGap":"var:preset|spacing|7"}}} -->
<div class="wp-block-column" style="flex-basis:38%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600">Corporate office</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Fernwick Works, 14 Ardenwood Lane</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Portland, OR 97209, United States</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600">Get in touch</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"svgCode":"\u003Csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002218\u0022 height=\u002218\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003E\u003Cpath d=\u0022M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.12 4.2 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.9.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z\u0022 fill=\u0022none\u0022/\u003E\u003C/svg\u003E","svgColor":"currentColor","svgSize":"18px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">+1 555 0142 880</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"svgCode":"\u003Csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002218\u0022 height=\u002218\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003E\u003Crect x=\u00222\u0022 y=\u00224\u0022 width=\u002220\u0022 height=\u002216\u0022 rx=\u00222\u0022 fill=\u0022none\u0022/\u003E\u003Cpath d=\u0022m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7\u0022 fill=\u0022none\u0022/\u003E\u003C/svg\u003E","svgColor":"currentColor","svgSize":"18px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">hello@example.com</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"svgCode":"\u003Csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002218\u0022 height=\u002218\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003E\u003Ccircle cx=\u002212\u0022 cy=\u002212\u0022 r=\u002210\u0022 fill=\u0022none\u0022/\u003E\u003Cpath d=\u0022M2 12h20\u0022 fill=\u0022none\u0022/\u003E\u003Cpath d=\u0022M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z\u0022 fill=\u0022none\u0022/\u003E\u003C/svg\u003E","svgColor":"currentColor","svgSize":"18px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">fernwick.example.com</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600">Follow us</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","justifyContent":"left","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"svgCode":"\u003Csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002218\u0022 height=\u002218\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003E\u003Ccircle cx=\u002212\u0022 cy=\u002212\u0022 r=\u00224\u0022 fill=\u0022none\u0022/\u003E\u003Cpath d=\u0022M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94\u0022 fill=\u0022none\u0022/\u003E\u003C/svg\u003E","svgColor":"currentColor","svgSize":"18px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"svgCode":"\u003Csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002218\u0022 height=\u002218\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003E\u003Ccircle cx=\u002218\u0022 cy=\u00225\u0022 r=\u00223\u0022 fill=\u0022none\u0022/\u003E\u003Ccircle cx=\u00226\u0022 cy=\u002212\u0022 r=\u00223\u0022 fill=\u0022none\u0022/\u003E\u003Ccircle cx=\u002218\u0022 cy=\u002219\u0022 r=\u00223\u0022 fill=\u0022none\u0022/\u003E\u003Cpath d=\u0022m8.59 13.51 6.83 3.98\u0022 fill=\u0022none\u0022/\u003E\u003Cpath d=\u0022m15.41 6.51-6.82 3.98\u0022 fill=\u0022none\u0022/\u003E\u003C/svg\u003E","svgColor":"currentColor","svgSize":"18px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"svgCode":"\u003Csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002218\u0022 height=\u002218\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003E\u003Cpath d=\u0022M4 11a9 9 0 0 1 9 9\u0022 fill=\u0022none\u0022/\u003E\u003Cpath d=\u0022M4 4a16 16 0 0 1 16 16\u0022 fill=\u0022none\u0022/\u003E\u003Ccircle cx=\u00225\u0022 cy=\u002219\u0022 r=\u00221\u0022 fill=\u0022currentColor\u0022/\u003E\u003C/svg\u003E","svgColor":"currentColor","svgSize":"18px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"62%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"left":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|6"}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-left:var(--wp--preset--spacing--9);flex-basis:62%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size" style="font-weight:700">Inquiries</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/form {"formName":"Inquiry"} -->
<!-- wp:shadcn/input {"label":"Full name","required":true,"placeholder":"Ada Okafor"} /-->

<!-- wp:shadcn/input {"label":"Work email address","type":"email","required":true,"placeholder":"ada@example.com"} /-->

<!-- wp:shadcn/input {"label":"Company name","placeholder":"Ardenwood Supply Co."} /-->

<!-- wp:shadcn/select {"label":"Number of employees","placeholder":"Choose a range","options":["1–10","11–50","51–200","201–1,000","1,000+"]} /-->

<!-- wp:shadcn/textarea {"label":"Message","required":true,"rows":5,"placeholder":"Tell us what you need and by when"} /-->

<!-- wp:shadcn/form-submit {"label":"Send inquiry","alignment":"right"} /-->
<!-- /wp:shadcn/form --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
