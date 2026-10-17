<?php
/**
 * Title: About Mission Drive Sections
 * Slug: shadcn/about-mission-drive-sections
 * Categories: shadcn, about
 * Description: A text-forward about section with two offset label-and-copy rows separated by a paired photo band, closing on a divided list of working principles.
 * AI Hint: Editorial about layout — a short left-hand label sits beside an offset headline and paragraphs for the mission, a two-photo band runs the full width beneath it, then a second label-and-copy row carries the values text over three hairline-divided principle rows; best for an about page that leads with words rather than cards or portraits.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|10"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"26%"} -->
<div class="wp-block-column" style="flex-basis:26%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="font-weight:500">Our mission</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"62%"} -->
<div class="wp-block-column" style="flex-basis:62%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"500"}},"fontSize":"4-xl"} -->
<h2 class="wp-block-heading has-4-xl-font-size" style="font-weight:500">Put the fix within reach of whoever spotted it</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Most workplace software is bought once and then endured for years. We would rather hand people something they can bend around the job in front of them, on the morning the job changes.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Everything we release is measured against one question — did it shorten the gap between noticing something and being able to act on it?</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"grid","minimumColumnWidth":"28rem"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A workshop table covered in printed drafts" style="border-radius:12px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Sunlight across an open studio floor" style="border-radius:12px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|10"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"26%"} -->
<div class="wp-block-column" style="flex-basis:26%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="font-weight:500">What drives us</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"62%"} -->
<div class="wp-block-column" style="flex-basis:62%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"500"}},"fontSize":"4-xl"} -->
<h2 class="wp-block-heading has-4-xl-font-size" style="font-weight:500">Work that still holds up a year after launch week</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Three commitments decide what we take on, what we turn down, and how we answer on the days something breaks in front of a customer.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"is-style-shadcn-divided","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-shadcn-divided"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size">Carry the maintenance</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">A feature is not finished at release. Whoever built it stays with it through the second and third round of real use.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size">Leave the exit unlocked</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Your data leaves in a readable format whenever you ask. Staying should be a preference, never a consequence of the file layout.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size">Write the hard update first</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Outages, slipped dates, prices going up — we send those notes before anyone has to come looking for them.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
