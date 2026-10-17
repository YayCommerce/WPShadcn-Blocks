<?php
/**
 * Title: Hero Wide Media Left Copy Right
 * Slug: shadcn/hero-wide-media-left-copy-right
 * Categories: shadcn, hero
 * Description: An off-balance hero giving two thirds of the row to a bordered screenshot frame and the last third to a compact headline and button pair.
 * AI Hint: Asymmetric split hero where a wide bordered rounded frame carries a single tall product screenshot across roughly two thirds of the row and a narrow right column holds a fluid h1, a muted three-line lead and a filled arrow button beside an outline arrow button; reach for it when the interface needs room to be legible at a glance and the pitch can be reduced to one sentence and two choices.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"64%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:64%"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"16px"},"dimensions":{"minHeight":"520px"},"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|8"}}},"backgroundColor":"muted","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group has-border-color has-muted-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:16px;min-height:520px;padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--8)"><!-- wp:image {"width":"300px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Groundline dispatch board with live runs, drivers and delays on one timeline" style="width:300px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"36%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:36%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"fontSize":"fluid-4-xl"} -->
<h1 class="wp-block-heading has-fluid-4-xl-font-size">Run the whole fleet off one board</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Groundline puts every run, driver and delay on a single timeline that keeps itself current, so the yard, the office and the customer are all reading the same story at the same minute.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"primary-foreground","style":{"border":{"radius":"8px"}},"iconName":"arrow-right","iconPosition":"right"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:8px">Book a route demo</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline","iconName":"arrow-right","iconPosition":"right"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Read the dispatch guide</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
