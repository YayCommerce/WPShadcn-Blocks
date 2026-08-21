<?php
/**
 * Title: Project Video Panel Stack
 * Slug: shadcn/project-video-panel-stack
 * Categories: shadcn, portfolio
 * Description: Three stacked full-width showreel panels, each a rounded photo cover carrying an uppercase client name at the top, a circled play marker in the middle and the project title with a one-line note at the bottom.
 * AI Hint: Showreel panel stack — three full-width rounded covers laid one under the other, each dimming a still behind white text with a small uppercase client label pinned to the top edge, a circular bordered play marker centred in the panel and the piece title plus a short muted descriptor pinned to the bottom; reach for it on a film, motion or production studio portfolio where a handful of pieces each deserve a full-width frame instead of a grid cell.
 */

?>
<!-- wp:group {"metadata":{"categories":["shadcn","portfolio"],"patternName":"shadcn/project-video-panel-stack","name":"Project Video Panel Stack"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|5","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|6"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:cover {"url":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","alt":"A ferry deck photographed at dawn","dimRatio":50,"minHeight":460,"minHeightUnit":"px","align":"wide","style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|8"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover alignwide" style="border-radius:16px;padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--8);min-height:460px"><img class="wp-block-cover__image-background" alt="A ferry deck photographed at dawn" src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":"380px"},"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="min-height:380px"><!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.08em"}},"fontSize":"xs"} -->
<p class="has-text-color has-xs-font-size" style="color:#ffffff;font-weight:600;letter-spacing:0.08em;text-transform:uppercase">Northlight Ferries</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"#ffffff","width":"1px","style":"solid","radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group has-border-color" style="border-color:#ffffff;border-style:solid;border-width:1px;border-radius:9999px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)"><!-- wp:image {"width":"22px","height":"22px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="" style="width:22px;height:22px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained","contentSize":"620px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"color":{"text":"#ffffff"}},"fontSize":"3-xl"} -->
<h3 class="wp-block-heading has-text-color has-3-xl-font-size" style="color:#ffffff">Crossing at First Light</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#e4e4e7"}},"fontSize":"sm"} -->
<p class="has-text-color has-sm-font-size" style="color:#e4e4e7">A sixty-second brand film cut from three consecutive dawn sailings.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","alt":"A runner on an empty coastal road","dimRatio":50,"minHeight":460,"minHeightUnit":"px","align":"wide","style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|8"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover alignwide" style="border-radius:16px;padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--8);min-height:460px"><img class="wp-block-cover__image-background" alt="A runner on an empty coastal road" src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":"380px"},"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="min-height:380px"><!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.08em"}},"fontSize":"xs"} -->
<p class="has-text-color has-xs-font-size" style="color:#ffffff;font-weight:600;letter-spacing:0.08em;text-transform:uppercase">Verano Athletics</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"#ffffff","width":"1px","style":"solid","radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group has-border-color" style="border-color:#ffffff;border-style:solid;border-width:1px;border-radius:9999px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)"><!-- wp:image {"width":"22px","height":"22px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="" style="width:22px;height:22px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained","contentSize":"620px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"color":{"text":"#ffffff"}},"fontSize":"3-xl"} -->
<h3 class="wp-block-heading has-text-color has-3-xl-font-size" style="color:#ffffff">Nothing But Distance</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#e4e4e7"}},"fontSize":"sm"} -->
<p class="has-text-color has-sm-font-size" style="color:#e4e4e7">A launch spot for a running line, shot over two days on the coast road.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","alt":"An empty concert hall seen from the stage","dimRatio":50,"minHeight":460,"minHeightUnit":"px","align":"wide","style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|8"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover alignwide" style="border-radius:16px;padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--8);min-height:460px"><img class="wp-block-cover__image-background" alt="An empty concert hall seen from the stage" src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":"380px"},"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="min-height:380px"><!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.08em"}},"fontSize":"xs"} -->
<p class="has-text-color has-xs-font-size" style="color:#ffffff;font-weight:600;letter-spacing:0.08em;text-transform:uppercase">Meridian Sound</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"#ffffff","width":"1px","style":"solid","radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group has-border-color" style="border-color:#ffffff;border-style:solid;border-width:1px;border-radius:9999px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)"><!-- wp:image {"width":"22px","height":"22px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="" style="width:22px;height:22px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained","contentSize":"620px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"color":{"text":"#ffffff"}},"fontSize":"3-xl"} -->
<h3 class="wp-block-heading has-text-color has-3-xl-font-size" style="color:#ffffff">The Room Tone Sessions</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#e4e4e7"}},"fontSize":"sm"} -->
<p class="has-text-color has-sm-font-size" style="color:#e4e4e7">A four-part series on the people who tune concert halls before anyone arrives.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
