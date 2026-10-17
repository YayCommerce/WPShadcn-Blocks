<?php
/**
 * Title: About Why Us Stats
 * Slug: shadcn/about-why-us-stats
 * Categories: shadcn, about
 * Description: A two-column about section with a sticky "why us" label beside a quoted headline, a wide banner image, and three divided stat rows.
 * AI Hint: Why-us layout — a narrow left column with a pill label that stays pinned while the right column carries an oversized quoted statement, a supporting paragraph, a wide cropped photo, and three hairline-divided rows pairing a large figure with a short caption; best for an about page that argues its case with numbers.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|10"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"26%"} -->
<div class="wp-block-column" style="flex-basis:26%"><!-- wp:group {"className":"is-style-shadcn-sticky","style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-shadcn-sticky"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"9999px"},"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem","left":"0.75rem","right":"0.75rem"}}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-border-color has-muted-foreground-color has-text-color has-xs-font-size" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:9999px;padding-top:0.25rem;padding-right:0.75rem;padding-bottom:0.25rem;padding-left:0.75rem">Why us</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">What a decade of shipping alongside our customers has actually produced.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"74%"} -->
<div class="wp-block-column" style="flex-basis:74%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","contentSize":"720px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-fluid-4-xl-font-size">“We would rather ship one thing a customer keeps using than ten they try once.”</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">That sentence has decided nearly every roadmap argument we have had. It is why our release notes are short, why we retire features that stopped earning their place, and why the teams who join us tend to stay long past the first contract.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"aspectRatio":"21/9","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Two colleagues reviewing release metrics on a wall display" style="border-radius:16px;aspect-ratio:21/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"is-style-shadcn-divided","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-group is-style-shadcn-divided"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|3","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"34%"} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:heading {"level":3,"fontSize":"5-xl"} -->
<h3 class="wp-block-heading has-5-xl-font-size">11 yrs</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66%"} -->
<div class="wp-block-column" style="flex-basis:66%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained","contentSize":"420px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600">Median partnership length</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Most engagements that began as a single project are still running today.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|3","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"34%"} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:heading {"level":3,"fontSize":"5-xl"} -->
<h3 class="wp-block-heading has-5-xl-font-size">64M</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66%"} -->
<div class="wp-block-column" style="flex-basis:66%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained","contentSize":"420px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600">Sessions served each month</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Traffic our customers push through the platform without a scheduled outage.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|3","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"34%"} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:heading {"level":3,"fontSize":"5-xl"} -->
<h3 class="wp-block-heading has-5-xl-font-size">3.4x</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66%"} -->
<div class="wp-block-column" style="flex-basis:66%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained","contentSize":"420px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600">Faster to a working release</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Measured against the in-house build each team costed before they called us.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
