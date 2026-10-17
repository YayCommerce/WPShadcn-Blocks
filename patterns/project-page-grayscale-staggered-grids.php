<?php
/**
 * Title: Project Page Grayscale Staggered Grids
 * Slug: shadcn/project-page-grayscale-staggered-grids
 * Categories: shadcn, portfolio
 * Description: A single-project case study page — a centred uppercase title over two columns of duotone images at deliberately mismatched heights, a wide metadata row, a short essay and a closing hero.
 * AI Hint: Grayscale case study page — a centred uppercase project title above a two-column image grid whose pictures carry deliberately different pixel heights so the two columns never line up row to row, every photograph pushed to black-and-white by the core duotone filter, followed by a wide metadata row of discipline, client and year, a short body essay held to a readable measure, and a full-width closing photograph; reach for it when one photographic or editorial project needs a quiet monochrome page of its own.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","portfolio"],"patternName":"shadcn/project-page-grayscale-staggered-grids","name":"Project Page Grayscale Staggered Grids"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|5","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600","letterSpacing":"0.16em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.16em;text-transform:uppercase">Case study</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontWeight":"500","letterSpacing":"0.06em","lineHeight":"1.1","textTransform":"uppercase"}},"fontSize":"fluid-5-xl"} -->
<h1 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size" style="font-weight:500;letter-spacing:0.06em;line-height:1.1;text-transform:uppercase">Salt Flat Interval</h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}}} -->
<div class="wp-block-column"><!-- wp:image {"width":"100%","height":"600px","scale":"cover","sizeSlug":"large","style":{"color":{"duotone":["#000000","#ffffff"]}}} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A dry lake bed cracked into plates, running flat to the horizon" style="object-fit:cover;width:100%;height:600px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"100%","height":"360px","scale":"cover","sizeSlug":"large","style":{"color":{"duotone":["#000000","#ffffff"]}}} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A surveyor's tripod standing alone on the salt, shadow stretched long" style="object-fit:cover;width:100%;height:360px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}}} -->
<div class="wp-block-column"><!-- wp:image {"width":"100%","height":"360px","scale":"cover","sizeSlug":"large","style":{"color":{"duotone":["#000000","#ffffff"]}}} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Wind ridging the salt crust into low parallel lines" style="object-fit:cover;width:100%;height:360px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"100%","height":"600px","scale":"cover","sizeSlug":"large","style":{"color":{"duotone":["#000000","#ffffff"]}}} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A field vehicle parked at dusk with its rear doors open onto camera cases" style="object-fit:cover;width:100%;height:600px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.14em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="letter-spacing:0.14em;text-transform:uppercase">Category</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">Landscape photography</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.14em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="letter-spacing:0.14em;text-transform:uppercase">Client</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">Hollow Ridge Press</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.14em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="letter-spacing:0.14em;text-transform:uppercase">Format</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">96-page monograph</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.14em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="letter-spacing:0.14em;text-transform:uppercase">Year</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">2025</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"lg"} -->
<p class="has-lg-font-size">The brief asked for eleven days on a lake bed that has held no water since the winter before last, and for pictures that would survive being printed at the size of a hand. Colour was the first thing to go. Stripped of it, the salt stops reading as a novelty and starts reading as a surface — plates, ridges, the shallow seams where the crust has lifted and set again.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"lg"} -->
<p class="has-lg-font-size">We worked either side of the middle of the day, when the light is flat enough that the ground carries the whole frame and the horizon does almost nothing. The sequence in the book alternates a long exposure with a close one for the same reason this page does: two heights that refuse to line up keep the eye moving down instead of settling into rows.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"align":"wide","width":"100%","height":"620px","scale":"cover","sizeSlug":"large","style":{"color":{"duotone":["#000000","#ffffff"]}}} -->
<figure class="wp-block-image alignwide size-large is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="The salt flat photographed end to end at last light, a single track crossing it" style="object-fit:cover;width:100%;height:620px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
