<?php
/**
 * Title: Contact Header Row Underline Form
 * Slug: shadcn/contact-header-row-underline-form
 * Categories: shadcn, contact
 * Description: A contact section opening on a three-column header row of heading, address and phone with an oversized email, then a wide stacked enquiry form beneath it.
 * AI Hint: Header-row contact layout: a three-column band runs across the top — a large "Contact us" heading with a small uppercase muted note, an uppercase "Address" label over a bold two-line address, and an uppercase "Phone" label over a number with an oversized bold email beneath it — and a full-width form area follows with name, email and phone fields, a service dropdown, a tall message field and an uppercase submit; reach for it when the contact details should read as an editorial masthead above the form rather than beside it.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|7","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"44%","style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-column" style="flex-basis:44%"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"600","lineHeight":"1.05"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-fluid-5-xl-font-size" style="font-weight:600;line-height:1.05">Contact us</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.12em;text-transform:uppercase">Norhaven Atelier — studio enquiries<br>Every note is read by the people who do the work</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"28%","style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column" style="flex-basis:28%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.12em;text-transform:uppercase">Address</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","lineHeight":"1.4"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600;line-height:1.4">212 Kestrel Lane, Suite 9<br>Asheville, NC 28801</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"28%","style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column" style="flex-basis:28%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.12em;text-transform:uppercase">Phone — +1 555 0117 402</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","lineHeight":"1.2"}},"fontSize":"2-xl"} -->
<p class="has-2-xl-font-size" style="font-weight:600;line-height:1.2"><a href="mailto:studio@example.com">studio@example.com</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|9"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--9)"><!-- wp:shadcn/form {"formName":"Studio enquiry"} -->
<!-- wp:shadcn/input {"label":"Full name","required":true,"placeholder":"Ada Okafor"} /-->

<!-- wp:shadcn/input {"label":"Email address","type":"email","required":true,"placeholder":"ada@example.com"} /-->

<!-- wp:shadcn/input {"label":"Phone","type":"tel","placeholder":"+1 555 000 1234"} /-->

<!-- wp:shadcn/select {"label":"Service interested in","placeholder":"Choose a service","options":["Brand identity","Interior styling","Product photography","Editorial design","Something else"]} /-->

<!-- wp:shadcn/textarea {"label":"Message","required":true,"rows":6,"placeholder":"Tell us what you have in mind"} /-->

<!-- wp:shadcn/form-submit {"label":"SUBMIT NOW →","alignment":"left"} /-->
<!-- /wp:shadcn/form --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
