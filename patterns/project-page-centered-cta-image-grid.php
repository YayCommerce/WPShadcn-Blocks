<?php
/**
 * Title: Project Page Centered CTA Image Grid
 * Slug: shadcn/project-page-centered-cta-image-grid
 * Categories: shadcn, portfolio
 * Description: A single-exhibition page — centred title, short description and one button above a one-line metadata strip and a wide three-column grid of six captioned images.
 * AI Hint: Centred single-project exhibition page — an oversized title and a one-sentence description sit on the centre axis above a single centred button, then a one-line metadata strip runs the dates, venue, rooms and admission across a single row separated by middots, and beneath it a wide three-column grid holds six photographs at a consistent 4:3 crop, each with a short caption printed under the frame rather than hidden behind a hover; reach for it when one exhibition, collection or body of work needs its own page and the images themselves are the argument.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","portfolio"],"patternName":"shadcn/project-page-centered-cta-image-grid","name":"Project Page Centered CTA Image Grid"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|5","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"letterSpacing":"-0.02em","lineHeight":"1.05"}},"fontSize":"fluid-5-xl"} -->
<h1 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size" style="letter-spacing:-0.02em;line-height:1.05">Salt Line</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"xl"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xl-font-size">Ninety photographs made along one tidal estuary over twelve years, hung together for the first time in the east wing at Fenwick Hall.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"primary-foreground","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:8px">Book a free ticket</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500">14 March – 29 June 2026</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">·</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500">Fenwick Hall Gallery</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">·</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500">Rooms 3–5</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">·</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500">Free admission</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"grid","minimumColumnWidth":"22rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","width":"100%","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A wooden tide mill standing in shallow water at first light" style="border-radius:8px;aspect-ratio:4/3;object-fit:cover;width:100%"/><figcaption class="wp-element-caption">Tide Mill, Low Water — March 2014</figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"4/3","scale":"cover","width":"100%","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Mooring ropes coiled on a wet timber jetty beside an empty berth" style="border-radius:8px;aspect-ratio:4/3;object-fit:cover;width:100%"/><figcaption class="wp-element-caption">Ropes at Berth Nine — August 2016</figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"4/3","scale":"cover","width":"100%","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A fisherman mending a net across his knees in the door of a boat shed" style="border-radius:8px;aspect-ratio:4/3;object-fit:cover;width:100%"/><figcaption class="wp-element-caption">Netting Shed, Third Reach — October 2017</figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"4/3","scale":"cover","width":"100%","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Saltmarsh grass bending under wind with the channel visible beyond it" style="border-radius:8px;aspect-ratio:4/3;object-fit:cover;width:100%"/><figcaption class="wp-element-caption">Marsh Above the Cut — June 2019</figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"4/3","scale":"cover","width":"100%","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="An upturned clinker dinghy resting on trestles under a corrugated roof" style="border-radius:8px;aspect-ratio:4/3;object-fit:cover;width:100%"/><figcaption class="wp-element-caption">Winter Repairs, Hallam Yard — January 2022</figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"4/3","scale":"cover","width":"100%","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="The estuary mouth opening to flat open water beneath a wide pale sky" style="border-radius:8px;aspect-ratio:4/3;object-fit:cover;width:100%"/><figcaption class="wp-element-caption">Where the River Gives Up Its Name — May 2025</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
