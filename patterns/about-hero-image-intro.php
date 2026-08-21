<?php
/**
 * Title: About with Hero Image
 * Slug: shadcn/about-hero-image-intro
 * Categories: shadcn, about
 * Description: An about section led by a large headline and a full-width hero image, closed by a three-column row with a label, an intro paragraph with an author credit, and a bold philosophy statement.
 * AI Hint: About-page layout — oversized headline above a full-width wide-crop hero photo, then a three-column row holding a muted label, an introduction with an inline avatar credit, and a large closing statement; best when strong photography leads the story.
 */

?>
<!-- wp:group {"metadata":{"categories":["shadcn","about"],"patternName":"shadcn/about-hero-image-intro","name":"About with Hero Image"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|10"}},"backgroundColor":"background"} -->
<div class="wp-block-group alignwide has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:heading {"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-fluid-5-xl-font-size">About Northwind</h2>
<!-- /wp:heading -->

<!-- wp:image {"aspectRatio":"21/9","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="The Northwind engineering team working together in the Leeds studio" style="border-radius:16px;aspect-ratio:21/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"16.66%"} -->
<div class="wp-block-column" style="flex-basis:16.66%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Our story</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"41.67%"} -->
<div class="wp-block-column" style="flex-basis:41.67%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"lg"} -->
<p class="has-lg-font-size">Northwind began in 2016 with three engineers, one rented desk, and a stubborn view that the software a team relies on every day deserves as much craft as the product it supports. Our first release went out to eleven customers. We have grown every year since without giving up that habit.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"40px","height":"40px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Elena Marsh" style="border-radius:9999px;object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Elena Marsh</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Co-founder and CEO, Northwind</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"41.67%"} -->
<div class="wp-block-column" style="flex-basis:41.67%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"2-xl"} -->
<p class="has-2-xl-font-size" style="font-weight:500">We would rather ship one feature people keep using than ten they try once and forget.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Every release has to earn its place by making somebody's working day shorter — that test decides what we build, and just as often what we leave out.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
