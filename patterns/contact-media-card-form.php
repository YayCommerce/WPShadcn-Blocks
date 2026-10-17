<?php
/**
 * Title: Contact Media Card Form
 * Slug: shadcn/contact-media-card-form
 * Categories: shadcn, contact
 * Description: A rounded two-panel contact card — a photograph filling the left half flush to the rounded corners, a tinted right half holding the heading, lead and enquiry form.
 * AI Hint: Media-and-form contact card: one wide rounded panel split into two equal halves with no gutter between them, the left half a cover-cropped photograph bleeding into the panel's rounded left corners and the right half a muted-background pane with generous inner padding carrying a bold "Get in Touch" heading, a two-line muted lead and a stacked form of name, email, company, message and a full-width submit that emails the site owner; reach for it when the contact section should read as a single self-contained card rather than as two loose columns on the page.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","width":"100%","sizeSlug":"large","style":{"border":{"radius":{"topLeft":"16px","bottomLeft":"16px"}}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A studio manager taking notes at a bright reception desk" style="border-top-left-radius:16px;border-bottom-left-radius:16px;aspect-ratio:3/4;object-fit:cover;width:100%"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","style":{"border":{"radius":{"topRight":"16px","bottomRight":"16px"}},"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"muted"} -->
<div class="wp-block-column has-muted-background-color has-background" style="border-top-right-radius:16px;border-bottom-right-radius:16px;padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--8);flex-basis:50%"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.02em"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-fluid-4-xl-font-size" style="font-weight:700;letter-spacing:-0.02em">Get in Touch</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Tell us what you are building and we will put the right person on it. Every message reaches the studio inbox and is answered within one working day.</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/form {"formName":"Contact card"} -->
<!-- wp:shadcn/input {"label":"Name","required":true,"placeholder":"Ada Okafor"} /-->

<!-- wp:shadcn/input {"label":"Email","type":"email","required":true,"placeholder":"ada@example.com"} /-->

<!-- wp:shadcn/input {"label":"Company","placeholder":"Larkfield Studio"} /-->

<!-- wp:shadcn/textarea {"label":"Message","required":true,"rows":5,"placeholder":"A sentence or two about the work"} /-->

<!-- wp:shadcn/form-submit {"label":"Send message","width":100} /-->
<!-- /wp:shadcn/form --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
