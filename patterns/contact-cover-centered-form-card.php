<?php
/**
 * Title: Contact Cover Centered Form Card
 * Slug: shadcn/contact-cover-centered-form-card
 * Categories: shadcn, contact
 * Description: A full-width dimmed photo cover with a compact card floating at its centre holding a short contact form.
 * AI Hint: Full-bleed contact cover: a photographic background sits under a dark dim while a narrow card floats in the middle carrying a centred "Get in touch" heading, a centred muted line and a form asking for name, email, phone and a message under a full-width submit; reach for it when the contact section has to double as a closing hero and the page needs one image doing the atmospheric work.
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","alt":"Sunlight crossing the long table of an empty studio","dimRatio":60,"minHeight":640,"minHeightUnit":"px","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|6","bottom":"var:preset|spacing|9","left":"var:preset|spacing|6"}}},"layout":{"type":"constrained","contentSize":"420px"}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--6);min-height:640px"><img class="wp-block-cover__image-background" alt="Sunlight crossing the long table of an empty studio" src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","textColor":"card-foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-card-foreground-color has-card-background-color has-text-color has-background" style="border-radius:0.75rem;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontWeight":"600"}},"fontSize":"2-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-2-xl-font-size" style="font-weight:600">Get in touch</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">Leave a note and we will be back in touch within a day.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/form {"formName":"Contact"} -->
<!-- wp:shadcn/input {"label":"Name","required":true,"placeholder":"Ada Okafor"} /-->

<!-- wp:shadcn/input {"label":"Email","type":"email","required":true,"placeholder":"ada@example.com"} /-->

<!-- wp:shadcn/input {"label":"Phone","type":"tel","placeholder":"+1 555 000 1234"} /-->

<!-- wp:shadcn/textarea {"label":"Message","required":true,"rows":4,"placeholder":"Tell us a little about it"} /-->

<!-- wp:shadcn/form-submit {"label":"Send message","width":100} /-->
<!-- /wp:shadcn/form --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
