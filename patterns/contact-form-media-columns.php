<?php
/**
 * Title: Contact Form Media Columns
 * Slug: shadcn/contact-form-media-columns
 * Categories: shadcn, contact
 * Description: A plain two-column contact section with the heading, lead and enquiry form on the left and a single rounded photograph on the right.
 * AI Hint: Form-first contact split that mirrors the usual arrangement — the left column carries a large "Start a Conversation" heading, a two-line muted lead and a stacked form of name, email, a subject dropdown, a message textarea and a full-width submit, while the right column holds one square rounded photograph on the plain page background with no card, panel or border around either side, both columns vertically centred on an ordinary gutter; reach for it when the contact section should stay quiet and let the form lead.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|9"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"52%","style":{"spacing":{"blockGap":"var:preset|spacing|5"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52%"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.02em"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-fluid-4-xl-font-size" style="font-weight:700;letter-spacing:-0.02em">Start a Conversation</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Pick the subject that fits best and give us the short version. A real person reads the inbox each morning and answers before the day is out.</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/form {"formName":"Contact conversation"} -->
<!-- wp:shadcn/input {"label":"Name","required":true,"placeholder":"Ada Okafor"} /-->

<!-- wp:shadcn/input {"label":"Email","type":"email","required":true,"placeholder":"ada@example.com"} /-->

<!-- wp:shadcn/select {"label":"Subject","placeholder":"What is this about?","options":["New project enquiry","Partnership","Press and speaking","Careers","Something else"]} /-->

<!-- wp:shadcn/textarea {"label":"Message","required":true,"rows":5,"placeholder":"Tell us a little about it"} /-->

<!-- wp:shadcn/form-submit {"label":"Send message","width":100} /-->
<!-- /wp:shadcn/form --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"48%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%"><!-- wp:image {"aspectRatio":"1/1","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Two colleagues talking over a table of sketches and swatches" style="border-radius:16px;aspect-ratio:1/1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
