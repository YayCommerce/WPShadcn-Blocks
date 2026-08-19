<?php
/**
 * Title: Testimonial Stat Carousel
 * Slug: shadcn/testimonial-stat-carousel
 * Categories: shadcn, testimonials
 * Description: A carousel of bordered testimonial cards, each pairing a square portrait with a company logo, a serif pull quote and two highlighted stat figures.
 * AI Hint: Testimonial carousel — one bordered card per slide, a square portrait and the author's name and role in a narrow left column, and in the wider right column a company logo beside the company name, a large serif quote, a hairline rule, and two oversized stat figures each with a label and a time-range caption; arrows and dots step between customer stories. Best for case-study style social proof where each quote comes with measurable results.
 */

?>
<!-- wp:group {"metadata":{"categories":["shadcn","testimonials"],"patternName":"shadcn/testimonial-stat-carousel","name":"Testimonial Stat Carousel"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:shadcn/carousel {"slidesPerViewTablet":1,"slidesPerViewDesktop":1,"align":"wide"} -->
<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|8"}}},"backgroundColor":"card","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--8)"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%"><!-- wp:group {"metadata":{"name":"Author"},"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Portrait of Amy Chase" style="border-radius:8px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"metadata":{"name":"Author Meta"},"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Amy Chase</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Product Manager - RetailCorp</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:66.66%"><!-- wp:group {"metadata":{"name":"Testimonial"},"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Company"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"height":"28px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="https://ui.shadcn.com/placeholder.svg" alt="RetailCorp logo" style="height:28px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size" style="font-weight:600">RetailCorp</h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"metadata":{"name":"Quote"},"style":{"typography":{"fontFamily":"Georgia, Times New Roman, serif"}},"fontSize":"2-xl"} -->
<p class="has-2-xl-font-size" style="font-family:Georgia, Times New Roman, serif">“This tool completely transformed how our team collaborates. We ship twice as fast now and the quality has never been better.”</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:columns {"metadata":{"name":"Stats"},"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"5-xl"} -->
<h3 class="wp-block-heading has-5-xl-font-size" style="font-weight:600">2.2x</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}}} -->
<p style="font-weight:500">Monthly Active Users</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Since last month</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"5-xl"} -->
<h3 class="wp-block-heading has-5-xl-font-size" style="font-weight:600">256%</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}}} -->
<p style="font-weight:500">Increase in Revenue</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Since last year</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|8"}}},"backgroundColor":"card","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--8)"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%"><!-- wp:group {"metadata":{"name":"Author"},"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Portrait of Jonas Kotara" style="border-radius:8px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"metadata":{"name":"Author Meta"},"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Jonas Kotara</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Lead Engineer - TechCorp</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:66.66%"><!-- wp:group {"metadata":{"name":"Testimonial"},"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Company"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"height":"28px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="https://ui.shadcn.com/placeholder.svg" alt="TechCorp logo" style="height:28px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size" style="font-weight:600">TechCorp</h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"metadata":{"name":"Quote"},"style":{"typography":{"fontFamily":"Georgia, Times New Roman, serif"}},"fontSize":"2-xl"} -->
<p class="has-2-xl-font-size" style="font-family:Georgia, Times New Roman, serif">“The onboarding was seamless. Within a week, our entire organization was up and running without a single support ticket.”</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:columns {"metadata":{"name":"Stats"},"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"5-xl"} -->
<h3 class="wp-block-heading has-5-xl-font-size" style="font-weight:600">1.5x</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}}} -->
<p style="font-weight:500">Monthly Active Users</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Since last month</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"5-xl"} -->
<h3 class="wp-block-heading has-5-xl-font-size" style="font-weight:600">150%</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}}} -->
<p style="font-weight:500">Increase in Revenue</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Since last year</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->
<!-- /wp:shadcn/carousel --></div>
<!-- /wp:group -->