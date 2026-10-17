<?php
/**
 * Title: Contact Tinted Header Inquiry Form
 * Slug: shadcn/contact-tinted-header-inquiry-form
 * Categories: shadcn, contact
 * Description: A full-width tinted band carrying a centred heading and a three-column strip of office, email and social details, with a narrow centred inquiry form on plain background underneath.
 * AI Hint: Tinted-header contact section: the upper band runs edge to edge on a muted background with a centred "Contact us" heading, one small muted line beneath it and a three-column strip of details — corporate office address, two email addresses and a row of generic social glyphs — while the lower half drops back to the page background for a narrow six-hundred-pixel column holding an "Inquiries" heading and a form asking for full name, work email, company, headcount and a message; reach for it when the contact page should read as a masthead of company facts first and a form second.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|5","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|8"}},"backgroundColor":"muted","layout":{"type":"constrained","contentSize":"1120px"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.02em"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-4-xl-font-size" style="font-weight:700;letter-spacing:-0.02em">Contact us</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color">Everything you need to reach the right desk, without guessing at a switchboard.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}}} -->
<p class="has-text-align-center" style="font-weight:600">Corporate office</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">Fernwick Works, 14 Ardenwood Lane</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">Portland, OR 97209, United States</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}}} -->
<p class="has-text-align-center" style="font-weight:600">Email us</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">New work — hello@example.com</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">Existing accounts — support@example.com</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}}} -->
<p class="has-text-align-center" style="font-weight:600">Follow us</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
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
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|5","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|6"}},"layout":{"type":"constrained","contentSize":"600px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"700"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-text-align-center has-2-xl-font-size" style="font-weight:700">Inquiries</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/form {"formName":"Inquiry"} -->
<!-- wp:shadcn/input {"label":"Full name","required":true,"placeholder":"Ada Okafor"} /-->

<!-- wp:shadcn/input {"label":"Work email address","type":"email","required":true,"placeholder":"ada@example.com"} /-->

<!-- wp:shadcn/input {"label":"Company name","placeholder":"Ardenwood Supply Co."} /-->

<!-- wp:shadcn/select {"label":"Number of employees","placeholder":"Choose a range","options":["1–10","11–50","51–200","201–1,000","1,000+"]} /-->

<!-- wp:shadcn/textarea {"label":"Message","required":true,"rows":5,"placeholder":"Tell us what you need and by when"} /-->

<!-- wp:shadcn/form-submit {"label":"Send inquiry","width":100} /-->
<!-- /wp:shadcn/form --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
