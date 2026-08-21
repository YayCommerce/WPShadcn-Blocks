<?php
/**
 * Title: Contact Image Half Details
 * Slug: shadcn/contact-image-half-details
 * Categories: shadcn, contact
 * Description: A full-bleed split with contact details and a text link on one half and a single edge-to-edge photograph filling the other.
 * AI Hint: Formless full-width contact split with no gutter and square corners: the left half is vertically centred inside generous padding and stacks a very large two-line heading, a muted three-line paragraph, an arrow-glyph text link and then, after a wide gap, a phone number and an email address set large and bold; the right half is one photograph running edge to edge at full height. Reach for it when a contact page should feel like a magazine spread and the details themselves, not a form, are the call to action.
 */

?>
<!-- wp:group {"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|9","bottom":"var:preset|spacing|10","left":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|5"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--9)"><!-- wp:heading {"level":2,"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-fluid-5-xl-font-size">Stay<br>Connected</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">The studio is open from nine until six, Monday to Friday. Call the desk if it is urgent, write if it can wait a day, and either way a person reads it. We answer every enquiry, including the ones that turn out not to be for us.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"base"} -->
<p class="has-base-font-size"><a href="#">Get in touch →</a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2","margin":{"top":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--9)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"2-xl"} -->
<p class="has-2-xl-font-size" style="font-weight:600">+44 113 496 0182</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"2-xl"} -->
<p class="has-2-xl-font-size" style="font-weight:600">studio@example.com</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"width":"100%","height":"680px","scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Late afternoon light across the studio's back staircase" style="object-fit:cover;width:100%;height:680px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
