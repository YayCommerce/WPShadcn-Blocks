<?php
/**
 * Title: About Story with Avatar Profile
 * Slug: shadcn/about-story-avatar-profile
 * Categories: shadcn, about
 * Description: An about section with an offset editorial headline, a three-column row holding a date label, a founding story with an avatar credit, and a bold belief statement, closed by a wide cropped photograph.
 * AI Hint: Editorial about layout — an oversized headline pushed to the right, then a row splitting a small date label, a founding-story paragraph signed with a round avatar, name and role, and a large belief statement with supporting note, finished by a full-width cropped photo; best for an about page that opens with narrative rather than statistics.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"820px","justifyContent":"right"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"fontSize":"fluid-7-xl"} -->
<h2 class="wp-block-heading has-fluid-7-xl-font-size">Where this started</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|10"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"16.66%"} -->
<div class="wp-block-column" style="flex-basis:16.66%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Since 2014</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.34%"} -->
<div class="wp-block-column" style="flex-basis:33.34%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"lg"} -->
<p class="has-lg-font-size">Halcyon started in a borrowed meeting room with two laptops and a spreadsheet of people who had agreed to try whatever we built next. Nothing about that first year was tidy, but it taught us to keep the customer close enough to hear when something felt wrong.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"40px","height":"40px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Priya Raman" style="border-radius:9999px;object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Priya Raman</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Founder and Managing Director, Halcyon</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"3-xl"} -->
<h3 class="wp-block-heading has-3-xl-font-size">A tool earns its keep by the questions it stops you having to ask.</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">That belief sets the bar for everything we release. If a change adds a step to somebody's morning rather than removing one, it goes back to the board, however clever it looked in review.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:image {"align":"wide","height":"480px","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image alignwide size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="The Halcyon team gathered around a long desk during a Friday review" style="border-radius:16px;object-fit:cover;height:480px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
