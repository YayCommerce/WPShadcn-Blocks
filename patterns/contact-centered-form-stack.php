<?php
/**
 * Title: Contact Centered Form Stack
 * Slug: shadcn/contact-centered-form-stack
 * Categories: shadcn, contact
 * Description: A narrow centred column holding a single heading above a plain full-width contact form with no card or supporting copy.
 * AI Hint: Minimal centred contact form capped at 600px: one centred heading sits above a stacked form asking for first name, last name, email, phone and a message, every field full width with its label above it and a full-width submit closing the column; reach for it when the page already explained itself and the form should be the only thing left to do.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|6"}},"layout":{"type":"constrained","contentSize":"600px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:heading {"textAlign":"center","level":2,"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-4-xl-font-size">Get in touch</h2>
<!-- /wp:heading -->

<!-- wp:shadcn/form {"formName":"Contact"} -->
<!-- wp:shadcn/input {"label":"First name","required":true,"placeholder":"Ada"} /-->

<!-- wp:shadcn/input {"label":"Last name","required":true,"placeholder":"Okafor"} /-->

<!-- wp:shadcn/input {"label":"Email","type":"email","required":true,"placeholder":"ada@example.com"} /-->

<!-- wp:shadcn/input {"label":"Phone","type":"tel","placeholder":"+1 555 000 1234"} /-->

<!-- wp:shadcn/textarea {"label":"Message","required":true,"rows":5,"placeholder":"Tell us what you need"} /-->

<!-- wp:shadcn/form-submit {"label":"Submit","width":100} /-->
<!-- /wp:shadcn/form --></div>
<!-- /wp:group -->
