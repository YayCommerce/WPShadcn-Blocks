<?php
/**
 * Title: CTA Gradient Panel Photo
 * Slug: shadcn/cta-gradient-panel-photo
 * Categories: shadcn, call-to-action
 * Description: A two-panel call to action pairing a softly graded copy panel with a square photograph butted against it, rounded at the outer edges.
 * AI Hint: Gradient-panel split call to action — the left panel is washed with a diagonal gradient built from the theme's own muted, accent and background tokens so it flips with dark mode, carrying an uppercase eyebrow, a fluid headline, a short lead and a primary button beside an outline button, while a square-cropped photograph fills the right panel flush to it; reach for it when a closing invitation needs a little atmosphere without going fully dark.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"56%","style":{"border":{"radius":{"topLeft":"16px","bottomLeft":"16px"}},"color":{"gradient":"linear-gradient(135deg,var(--wp--preset--color--muted) 0%,var(--wp--preset--color--accent) 45%,var(--wp--preset--color--background) 100%)"},"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"stretch"}} -->
<div class="wp-block-column has-background" style="border-top-left-radius:16px;border-bottom-left-radius:16px;background:linear-gradient(135deg,var(--wp--preset--color--muted) 0%,var(--wp--preset--color--accent) 45%,var(--wp--preset--color--background) 100%);padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--9);flex-basis:56%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.12em;text-transform:uppercase">Ready when you are</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"textColor":"foreground","fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-foreground-color has-text-color has-fluid-5-xl-font-size">Book the room, not the whole afternoon</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Take an hour, pay for the hour, and let the door code arrive by text an hour before you turn up. Every Ravenscourt room is lit, tuned and cleaned between sessions.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"lg","backgroundColor":"primary","textColor":"primary-foreground","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button is-size-lg"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:8px">See available rooms</a></div>
<!-- /wp:button -->

<!-- wp:button {"size":"lg","className":"is-style-outline"} -->
<div class="wp-block-button is-size-lg is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Take a tour first</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"44%"} -->
<div class="wp-block-column" style="flex-basis:44%"><!-- wp:image {"aspectRatio":"1/1","scale":"cover","width":"100%","sizeSlug":"large","style":{"border":{"radius":{"topRight":"16px","bottomRight":"16px"}}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Late daylight falling across an empty rehearsal room with an upright piano" style="border-top-right-radius:16px;border-bottom-right-radius:16px;aspect-ratio:1/1;object-fit:cover;width:100%"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
