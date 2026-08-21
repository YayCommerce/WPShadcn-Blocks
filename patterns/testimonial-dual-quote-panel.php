<?php
/**
 * Title: Testimonial Dual Quote Panel
 * Slug: shadcn/testimonial-dual-quote-panel
 * Categories: shadcn, testimonials
 * Description: Two centred testimonials sharing one dashed-outlined panel, split down the middle by a dashed divider.
 * AI Hint: Two testimonials set side by side inside a single dashed-outlined panel with a dashed rule between them — each half centres a short quote with one phrase in bold, then an avatar beside the author's name and title on one line. Best when two customer voices should carry equal weight in a quiet, understated band.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"align":"wide","style":{"border":{"color":"var:preset|color|border","width":"1px","style":"dashed"},"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-border-color" style="border-color:var(--wp--preset--color--border);border-style:dashed;border-width:1px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"border":{"right":{"color":"var:preset|color|border","width":"1px","style":"dashed"}},"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|7","bottom":"var:preset|spacing|8","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|5"}}} -->
<div class="wp-block-column" style="border-right-color:var(--wp--preset--color--border);border-right-style:dashed;border-right-width:1px;padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--7)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"500"}},"fontSize":"xl"} -->
<p class="has-text-align-center has-xl-font-size" style="font-weight:500">“We went in cautious and came out with a shorter release cycle than we had planned for all year — <strong>the numbers speak for themselves.</strong>”</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"56px","height":"56px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Noor Rahimi" style="border-radius:9999px;object-fit:cover;width:56px;height:56px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}}} -->
<p style="font-weight:500">Noor Rahimi, Director of Operations</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|7","bottom":"var:preset|spacing|8","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|5"}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--7)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"500"}},"fontSize":"xl"} -->
<p class="has-text-align-center has-xl-font-size" style="font-weight:500">“Every question we sent landed with someone who had already read the thread — <strong>the support alone was worth it.</strong>”</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"56px","height":"56px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Callum Wexford" style="border-radius:9999px;object-fit:cover;width:56px;height:56px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}}} -->
<p style="font-weight:500">Callum Wexford, Head of Platform</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
