<?php
/**
 * Title: Testimonial Bento Featured Grid
 * Slug: shadcn/testimonial-bento-featured-grid
 * Categories: shadcn, testimonials
 * Description: A centred headline over a bento-style split where one oversized featured quote fills the left panel and two smaller quote cards stack beside it.
 * AI Hint: Social-proof section built as a bento arrangement — a large centred headline sits above a two-thirds panel carrying a single oversized quote with the avatar, name and role pinned to the bottom of the panel, while the remaining third stacks two shorter quote cards in the same tinted surface; reach for it when one flagship customer story should dominate the section and a couple of supporting voices sit beside it without competing.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","testimonials"],"patternName":"shadcn/testimonial-bento-featured-grid","name":"Testimonial Bento Featured Grid"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"500"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size" style="font-weight:500">Loved by the teams who ship with it</h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66%","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|8"}},"backgroundColor":"accent","textColor":"accent-foreground","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-column has-accent-foreground-color has-accent-background-color has-text-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--9);flex-basis:66%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"3-xl"} -->
<p class="has-3-xl-font-size" style="font-weight:500">We used to rebuild the same hero, the same pricing table and the same wall of quotes on every project. The whole marketing site now comes out of one kit, and the team argues about copy instead of margins.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"40px","height":"40px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Priya Raghavan" style="border-radius:9999px;object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Priya Raghavan</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"xs"} -->
<p class="has-xs-font-size">Head of design, Halcyon Systems</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"34%","style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|8"}},"backgroundColor":"accent","textColor":"accent-foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-accent-foreground-color has-accent-background-color has-text-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"lg"} -->
<p class="has-lg-font-size" style="font-weight:500">Two sprints in, our landing pages stopped drifting apart. Everything lines up because everything comes from the same set of pieces.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"40px","height":"40px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Tomas Lindqvist" style="border-radius:9999px;object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Tomas Lindqvist</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"xs"} -->
<p class="has-xs-font-size">Front-end lead, Brightpath</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|8"}},"backgroundColor":"accent","textColor":"accent-foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-accent-foreground-color has-accent-background-color has-text-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"lg"} -->
<p class="has-lg-font-size" style="font-weight:500">The blocks dropped straight into an app that already had its own theme and picked up our tokens without a fight.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"40px","height":"40px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Naomi Okafor" style="border-radius:9999px;object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Naomi Okafor</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"xs"} -->
<p class="has-xs-font-size">Product engineer, Cedarline</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
