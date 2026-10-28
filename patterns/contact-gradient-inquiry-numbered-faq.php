<?php
/**
 * Title: Contact Gradient Inquiry Numbered FAQ
 * Slug: shadcn/contact-gradient-inquiry-numbered-faq
 * Categories: shadcn, contact, faq
 * Description: A contact page body with a rounded warm-gradient panel holding a centred heading, a three-column office, email and social strip and a dashed-ruled inquiry form, followed by a centred FAQ of four numbered questions.
 * AI Hint: Contact page body in two parts: first an inset panel with rounded corners and a soft amber-to-background top gradient, carrying a centred "Contact us" heading and one-line muted subtitle, a three-column strip of corporate office address, email contacts and three social glyphs, then a dashed rule above an "Inquiries" heading and a single-column form for full name, work email, company, headcount and message with a right-aligned submit; then a centred FAQ block with a dark pill badge, a large heading, a muted lead and four questions each led by a small numbered square; reach for it when a contact page should answer the obvious questions right under the form.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"10px","right":"16px","left":"16px"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-top:10px;padding-right:16px;padding-left:16px"><!-- wp:group {"style":{"color":{"gradient":"linear-gradient(180deg,color-mix(in oklab, #fbbf24 8%, var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbackground)) 0%,var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbackground) 50%)"},"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"36px","bottomRight":"36px"}},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"608px"}} -->
<div class="wp-block-group has-background" style="border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:36px;border-bottom-right-radius:36px;background:linear-gradient(180deg,color-mix(in oklab, #fbbf24 8%, var(--wp--preset--color--background)) 0%,var(--wp--preset--color--background) 50%);padding-top:32px;padding-right:var(--wp--preset--spacing--5);padding-bottom:32px;padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"textAlign":"center","fontWeight":"600","letterSpacing":"-0.025em","lineHeight":"1"}},"fontSize":"5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-5-xl-font-size" style="font-weight:600;letter-spacing:-0.025em;line-height:1">Contact us</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center","fontWeight":"500","lineHeight":"1.375"}},"textColor":"muted-foreground"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color" style="font-weight:500;line-height:1.375">Hopefully this form gets through our spam filters.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"80px"},"blockGap":"48px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="margin-top:80px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"1.5"}},"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size" style="font-weight:600;line-height:1.5">Corporate office</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color" style="line-height:1.5">1 Carlsberg Close<br>1260 Hillview, Australia</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"1.5"}},"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size" style="font-weight:600;line-height:1.5">Email us</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}}} -->
<p style="line-height:1.5">Careers</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color" style="line-height:1.5">support@example.com</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"1.5"}},"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size" style="font-weight:600;line-height:1.5">Follow us</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"svgCode":"\u003Csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002220\u0022 height=\u002220\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003E\u003Cpath d=\u0022M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z\u0022 fill=\u0022none\u0022/\u003E\u003C/svg\u003E","svgColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dmuted-foreground)","svgSize":"20px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"svgCode":"\u003Csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002220\u0022 height=\u002220\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003E\u003Cpath d=\u0022M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z\u0022 fill=\u0022none\u0022/\u003E\u003C/svg\u003E","svgColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dmuted-foreground)","svgSize":"20px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"svgCode":"\u003Csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002220\u0022 height=\u002220\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003E\u003Cpath d=\u0022M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z\u0022 fill=\u0022none\u0022/\u003E\u003Crect width=\u00224\u0022 height=\u002212\u0022 x=\u00222\u0022 y=\u00229\u0022 fill=\u0022none\u0022/\u003E\u003Ccircle cx=\u00224\u0022 cy=\u00224\u0022 r=\u00222\u0022 fill=\u0022none\u0022/\u003E\u003C/svg\u003E","svgColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dmuted-foreground)","svgSize":"20px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|muted-foreground","style":"dashed","width":"1px"}},"spacing":{"padding":{"top":"48px"},"margin":{"top":"48px"},"blockGap":"var:preset|spacing|7"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--muted-foreground);border-top-style:dashed;border-top-width:1px;margin-top:48px;padding-top:48px"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Inquiries</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/form {"formName":"Inquiry"} -->
<!-- wp:shadcn/input {"label":"Full name","required":true,"placeholder":"First and last name"} /-->

<!-- wp:shadcn/input {"label":"Work email address","type":"email","required":true,"placeholder":"me@company.com","style":{"spacing":{"margin":{"top":"var:preset|spacing|5"}}}} /-->

<!-- wp:shadcn/input {"label":"Company name","placeholder":"Company name","style":{"spacing":{"margin":{"top":"var:preset|spacing|5"}}}} /-->

<!-- wp:shadcn/input {"label":"Number of employees","placeholder":"e.g. 10-50","style":{"spacing":{"margin":{"top":"var:preset|spacing|5"}}}} /-->

<!-- wp:shadcn/textarea {"label":"Your message","required":true,"rows":7,"placeholder":"Write your message","style":{"spacing":{"margin":{"top":"var:preset|spacing|5"}}}} /-->

<!-- wp:shadcn/form-submit {"label":"Submit","alignment":"right","style":{"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} /-->
<!-- /wp:shadcn/form --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"32px","bottom":"32px"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"960px"}} -->
<div class="wp-block-group" style="padding-top:32px;padding-bottom:32px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"FAQ"} /-->

<!-- wp:heading {"style":{"typography":{"textAlign":"center","fontWeight":"600","lineHeight":"1.11"}},"fontSize":"4-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-4-xl-font-size" style="font-weight:600;line-height:1.11">Common Questions &amp; Answers</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center","fontWeight":"500","lineHeight":"1.5"},"spacing":{"margin":{"top":"var:preset|spacing|2"}}},"textColor":"muted-foreground"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color" style="margin-top:var(--wp--preset--spacing--2);font-weight:500;line-height:1.5">Find out all the essential details about our platform and how it can serve your needs.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"56px"},"blockGap":"var:preset|spacing|7"}},"layout":{"type":"constrained","contentSize":"576px"}} -->
<div class="wp-block-group" style="margin-top:56px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"4px"},"dimensions":{"minHeight":"24px"},"spacing":{"padding":{"top":"0","right":"10.4px","bottom":"0","left":"10.4px"}},"layout":{"selfStretch":"fixed","flexSize":"24px"}},"backgroundColor":"secondary","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:4px;min-height:24px;padding-top:0;padding-right:10.4px;padding-bottom:0;padding-left:10.4px"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","lineHeight":"1"}},"fontSize":"xs"} -->
<p class="has-xs-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace;line-height:1">1</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500","lineHeight":"1.5"}},"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size" style="font-weight:500;line-height:1.5">What is a FAQ and why is it important?</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.43"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="line-height:1.43">FAQ stands for Frequently Asked Questions. It is a list that provides answers to common questions people may have about a specific product, service, or topic.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"4px"},"dimensions":{"minHeight":"24px"},"spacing":{"padding":{"top":"0","right":"10.4px","bottom":"0","left":"10.4px"}},"layout":{"selfStretch":"fixed","flexSize":"24px"}},"backgroundColor":"secondary","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:4px;min-height:24px;padding-top:0;padding-right:10.4px;padding-bottom:0;padding-left:10.4px"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","lineHeight":"1"}},"fontSize":"xs"} -->
<p class="has-xs-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace;line-height:1">2</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500","lineHeight":"1.5"}},"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size" style="font-weight:500;line-height:1.5">Why should I use a FAQ on my website or app?</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.43"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="line-height:1.43">Utilizing a FAQ section on your website or app is a practical way to offer instant assistance to your users or customers. Instead of waiting for customer support responses, they can find quick answers to commonly asked questions.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"4px"},"dimensions":{"minHeight":"24px"},"spacing":{"padding":{"top":"0","right":"10.4px","bottom":"0","left":"10.4px"}},"layout":{"selfStretch":"fixed","flexSize":"24px"}},"backgroundColor":"secondary","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:4px;min-height:24px;padding-top:0;padding-right:10.4px;padding-bottom:0;padding-left:10.4px"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","lineHeight":"1"}},"fontSize":"xs"} -->
<p class="has-xs-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace;line-height:1">3</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500","lineHeight":"1.5"}},"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size" style="font-weight:500;line-height:1.5">How do I effectively create a FAQ section?</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.43"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="line-height:1.43">Creating a FAQ section starts with gathering the most frequent questions you receive from your users or customers. Once you have a list, you need to write clear, detailed, and helpful answers to each question.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"4px"},"dimensions":{"minHeight":"24px"},"spacing":{"padding":{"top":"0","right":"10.4px","bottom":"0","left":"10.4px"}},"layout":{"selfStretch":"fixed","flexSize":"24px"}},"backgroundColor":"secondary","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:4px;min-height:24px;padding-top:0;padding-right:10.4px;padding-bottom:0;padding-left:10.4px"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","lineHeight":"1"}},"fontSize":"xs"} -->
<p class="has-xs-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace;line-height:1">4</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500","lineHeight":"1.5"}},"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size" style="font-weight:500;line-height:1.5">What are the benefits of having a well-maintained FAQ section?</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.43"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="line-height:1.43">There are numerous advantages to maintaining a robust FAQ section. Firstly, it provides immediate answers to common queries, which improves the user experience.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
