<?php
/**
 * Title: Industries Featured Panel Rail
 * Slug: shadcn/industries-featured-panel-rail
 * Categories: shadcn, industries
 * Description: A bordered rail in which one sector is opened out with a photo, a summary and a link, while the remaining sectors stay as narrow labelled columns beside it.
 * AI Hint: Opened-panel sector rail — one outlined box divided by vertical hairlines into a wide featured cell carrying a sector name at its head with a summary and a text link at its foot, a full-height photograph next to it, and two narrow cells holding only a name; reach for it when a page should show a set of sectors while giving one of them the whole argument, in the resting state of an expanding panel.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","industries"],"patternName":"shadcn/industries-featured-panel-rail","name":"Industries Featured Panel Rail"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|5","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|7"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"500"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-fluid-4-xl-font-size" style="font-weight:500">Powering the renewable build-out</h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"4px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:4px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"38%","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6);flex-basis:38%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:700">Hydro</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">Smarter dam management, from turbine scheduling to flow forecasting across a whole catchment.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500"><a href="#">Learn more →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"27%"} -->
<div class="wp-block-column" style="flex-basis:27%"><!-- wp:image {"width":"100%","height":"400px","scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A hydroelectric dam seen from above" style="object-fit:cover;width:100%;height:400px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"17.5%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6);flex-basis:17.5%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:700">Wind</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"17.5%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6);flex-basis:17.5%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:700">Solar</h3>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
