<?php
/**
 * Title: CTA Side Image Split
 * Slug: shadcn/cta-side-image-split
 * Categories: shadcn, call-to-action
 * Description: A rounded two-panel call to action with one square-cropped photograph filling the left half and a headline, lead and single button on a muted panel to the right.
 * AI Hint: Plain image-and-copy call to action — a single rounded card cut down the middle, a four-by-three photograph filling the left half flush to the rounded edge and a muted panel on the right holding a short headline, a two-sentence lead and one primary button; reach for it when a page needs a calm, image-led invitation with no stacked cards, badges or overlay decoration.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","width":"100%","sizeSlug":"large","style":{"border":{"radius":{"topLeft":"16px","bottomLeft":"16px"}}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A joiner checking a cut list on a tablet beside a bench saw" style="border-top-left-radius:16px;border-bottom-left-radius:16px;aspect-ratio:4/3;object-fit:cover;width:100%"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","backgroundColor":"muted","style":{"border":{"radius":{"topRight":"16px","bottomRight":"16px"}},"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"stretch"}} -->
<div class="wp-block-column has-muted-background-color has-background" style="border-top-right-radius:16px;border-bottom-right-radius:16px;padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--9);flex-basis:50%"><!-- wp:heading {"level":2,"textColor":"foreground","fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-foreground-color has-text-color has-fluid-4-xl-font-size">Put the whole job on one page</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Millwright keeps drawings, cut lists and delivery dates in one record that every fitter can open from the workshop floor. No second spreadsheet, and no printed revision that went out of date before the glue dried.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"lg","backgroundColor":"primary","textColor":"primary-foreground","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button is-size-lg"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:8px">Open a free workshop</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
