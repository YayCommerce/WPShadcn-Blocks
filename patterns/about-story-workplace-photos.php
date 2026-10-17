<?php
/**
 * Title: About Story Workplace Photos
 * Slug: shadcn/about-story-workplace-photos
 * Categories: shadcn, about
 * Description: A two-column about section pairing a company story and a workplace note with two staggered photo grids of mixed portrait and landscape crops.
 * AI Hint: Editorial about layout — a left column with the origin-story headline and lead paragraph above a two-up photo grid, beside a vertically offset right column holding a second photo grid over a workplace heading and two prose paragraphs; best for an image-forward about page where photography carries the story.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"fontSize":"5-xl"} -->
<h2 class="wp-block-heading has-5-xl-font-size">We build the tools we needed first</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Our first release was a release-planning tool three engineers wrote to stop losing Fridays to spreadsheets. It was never meant to leave the building. Six years on it schedules work for product teams in fourteen countries, and we still write every feature for ourselves before anyone else sees it.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Two engineers reviewing a release plan at a shared desk" style="border-radius:12px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}}} -->
<div class="wp-block-column"><!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="The studio front room in early morning light" style="border-radius:12px;aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A designer sketching interface states on paper" style="border-radius:12px;aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|8","padding":{"top":"var:preset|spacing|10"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--10)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}}} -->
<div class="wp-block-column"><!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="The team gathered at a whiteboard during planning" style="border-radius:12px;aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A workstation with notebooks and a mechanical keyboard" style="border-radius:12px;aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Colleagues talking over coffee in the studio kitchen" style="border-radius:12px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"3-xl"} -->
<h3 class="wp-block-heading has-3-xl-font-size">Where the work happens</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Our studio sits above a print shop that has been on the same street since the sixties, and we kept most of what we inherited — long shared tables, more daylight than we know what to do with, and a back room that has been a recording booth, a testing lab, and a quiet corner depending on the month.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">About half the company works remotely, so decisions get written down before they get discussed and the office is somewhere to gather rather than somewhere to check in. Everyone comes through at least twice a year, usually in the week before a release lands.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
