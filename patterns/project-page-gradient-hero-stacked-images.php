<?php
/**
 * Title: Project Page Gradient Hero Stacked Images
 * Slug: shadcn/project-page-gradient-hero-stacked-images
 * Categories: shadcn, portfolio
 * Description: A single-project case study page opening on a viewport-tall photo hero washed with a bottom-weighted gradient, followed by a four-item project overview grid and three edge-to-edge photographs stacked with no gaps.
 * AI Hint: Full-bleed case study page for one project — a screen-height photograph whose overlay is a transparent-to-dark gradient rather than a flat dim, carrying a small uppercase marker at the top of the frame and an uppercase label above an oversized white title pinned to the bottom; underneath, a wide four-column overview grid pairing muted uppercase labels with client, scope, year and team values, then three full-viewport-width images stacked directly on top of one another as one continuous column with no gutters; use it as the landing layout for a portfolio project where the photography carries the story and the credits stay to a single row.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","portfolio"],"patternName":"shadcn/project-page-gradient-hero-stacked-images","name":"Project Page Gradient Hero Stacked Images"},"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:0;padding-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","alt":"A harbour ferry pulling away from a timber pier under low grey cloud","customGradient":"linear-gradient(180deg,rgba(9,9,11,0) 30%,rgba(9,9,11,0.8) 100%)","dimRatio":100,"minHeight":760,"minHeightUnit":"px","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|6","bottom":"var:preset|spacing|8","left":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--6);min-height:760px"><img class="wp-block-cover__image-background" alt="A harbour ferry pulling away from a timber pier under low grey cloud" src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(9,9,11,0) 30%,rgba(9,9,11,0.8) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":"620px"},"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="min-height:620px"><!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600","letterSpacing":"0.18em","textTransform":"uppercase"}},"fontSize":"xs"} -->
<p class="has-text-color has-xs-font-size" style="color:#ffffff;font-weight:600;letter-spacing:0.18em;text-transform:uppercase">Case study 07</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained","contentSize":"900px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600","letterSpacing":"0.16em","textTransform":"uppercase"}},"fontSize":"xs"} -->
<p class="has-text-color has-xs-font-size" style="color:#ffffff;font-weight:600;letter-spacing:0.16em;text-transform:uppercase">Identity and wayfinding — 2026</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"color":{"text":"#ffffff"},"typography":{"letterSpacing":"-0.03em","lineHeight":"1"}},"fontSize":"fluid-7-xl"} -->
<h1 class="wp-block-heading has-text-color has-fluid-7-xl-font-size" style="color:#ffffff;letter-spacing:-0.03em;line-height:1">Tidewater Ferry</h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|6","bottom":"var:preset|spacing|9","left":"var:preset|spacing|6"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"grid","minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.16em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.16em;text-transform:uppercase">Client</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1.5"}},"fontSize":"lg"} -->
<p class="has-lg-font-size" style="font-weight:500;line-height:1.5">Tidewater Ferry Authority</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.16em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.16em;text-transform:uppercase">Scope</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1.5"}},"fontSize":"lg"} -->
<p class="has-lg-font-size" style="font-weight:500;line-height:1.5">Identity, pier wayfinding, printed ticketing</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.16em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.16em;text-transform:uppercase">Year</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1.5"}},"fontSize":"lg"} -->
<p class="has-lg-font-size" style="font-weight:500;line-height:1.5">2026, over eleven months</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.16em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.16em;text-transform:uppercase">Team</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1.5"}},"fontSize":"lg"} -->
<p class="has-lg-font-size" style="font-weight:500;line-height:1.5">Marisol Adeyemi, Jonah Pike, Rue Castellan</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"aspectRatio":"16/9","scale":"cover","width":"100%","sizeSlug":"large","align":"full"} -->
<figure class="wp-block-image alignfull size-large is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="The redrawn ferry mark painted across the bow of a harbour boat at first light" style="aspect-ratio:16/9;object-fit:cover;width:100%"/></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"16/9","scale":"cover","width":"100%","sizeSlug":"large","align":"full"} -->
<figure class="wp-block-image alignfull size-large is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A wayfinding totem on the terminal pier listing departure times in the new typeface" style="aspect-ratio:16/9;object-fit:cover;width:100%"/></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"16/9","scale":"cover","width":"100%","sizeSlug":"large","align":"full"} -->
<figure class="wp-block-image alignfull size-large is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Deck tickets, folded timetables and enamel crew badges laid out on a wet dock plank" style="aspect-ratio:16/9;object-fit:cover;width:100%"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
