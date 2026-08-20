<?php
/**
 * Title: Case Study Testimonial Carousel
 * Slug: shadcn/case-study-testimonial-carousel
 * Categories: shadcn, case-studies
 * Description: A left-aligned heading and lead above a wide carousel that gives each customer story a full slide, pairing a six-tile photo mosaic on the left with the wordmark, quote and attribution on the right.
 * AI Hint: Case-study testimonial carousel showing one customer at a time — every slide splits into a narrow left mosaic of six small square tiles, some photographs and some empty muted blocks arranged differently on each story, and a wider right side carrying the customer wordmark, a longer quote and the speaker's name and role, with arrows stepping through four stories and no autoplay; reach for it when a case-study or customer page wants a single story to hold the reader's full attention instead of competing quote cards, and when you have working photography rather than portraits.
 */

?>
<!-- wp:group {"metadata":{"categories":["shadcn","case-studies"],"patternName":"shadcn/case-study-testimonial-carousel","name":"Case Study Testimonial Carousel"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|8"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"metadata":{"name":"Intro"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained","contentSize":"680px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.02em"}},"fontSize":"5-xl"} -->
<h2 class="wp-block-heading has-5-xl-font-size" style="font-weight:600;letter-spacing:-0.02em">One story at a time</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Four customers, each with a shelf of pictures from the work and one thing they wanted said about it. Step through them at whatever pace suits you.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/carousel {"align":"wide","loop":true,"showArrows":true,"showDots":false,"slidesPerView":1,"slidesPerViewTablet":1,"slidesPerViewDesktop":1,"gap":"1.5rem"} -->
<!-- wp:shadcn/carousel-item -->
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:columns {"metadata":{"name":"Mosaic"},"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|3","left":"var:preset|spacing|3"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column"><!-- wp:image {"width":"100%","height":"130px","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Crates of washed leeks stacked beside the packing shed" style="border-radius:8px;object-fit:cover;width:100%;height:130px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"border":{"radius":"8px"},"dimensions":{"minHeight":"130px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:8px;min-height:130px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"8px"},"dimensions":{"minHeight":"130px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:8px;min-height:130px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"></div>
<!-- /wp:group -->

<!-- wp:image {"width":"100%","height":"130px","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Hands tying a bundle of beetroot at a sorting bench" style="border-radius:8px;object-fit:cover;width:100%;height:130px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column"><!-- wp:image {"width":"100%","height":"130px","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Van doors open at dawn beside a field gate" style="border-radius:8px;object-fit:cover;width:100%;height:130px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"border":{"radius":"8px"},"dimensions":{"minHeight":"130px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:8px;min-height:130px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:image {"width":"110px","height":"24px","scale":"contain","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="https://ui.shadcn.com/placeholder.svg" alt="Harrowgate Fields wordmark" style="object-fit:contain;width:110px;height:24px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"metadata":{"name":"Quote"},"fontSize":"base"} -->
<p class="has-base-font-size">We photograph every box that leaves the yard, and for years none of those pictures went anywhere. Now the same pictures carry the whole shop, and orders from outside the county have doubled since spring.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Author"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Nell Harroway</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Co-founder, Harrowgate Fields</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:columns {"metadata":{"name":"Mosaic"},"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|3","left":"var:preset|spacing|3"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"8px"},"dimensions":{"minHeight":"130px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:8px;min-height:130px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"></div>
<!-- /wp:group -->

<!-- wp:image {"width":"100%","height":"130px","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Waiting room chairs beside a bay window" style="border-radius:8px;object-fit:cover;width:100%;height:130px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column"><!-- wp:image {"width":"100%","height":"130px","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Nurse laying instruments out on a tray" style="border-radius:8px;object-fit:cover;width:100%;height:130px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"border":{"radius":"8px"},"dimensions":{"minHeight":"130px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:8px;min-height:130px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"8px"},"dimensions":{"minHeight":"130px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:8px;min-height:130px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"></div>
<!-- /wp:group -->

<!-- wp:image {"width":"100%","height":"130px","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Reception desk with the morning list on screen" style="border-radius:8px;object-fit:cover;width:100%;height:130px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:image {"width":"110px","height":"24px","scale":"contain","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="https://ui.shadcn.com/placeholder.svg" alt="Lantern Bay Dental wordmark" style="object-fit:contain;width:110px;height:24px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"metadata":{"name":"Quote"},"fontSize":"base"} -->
<p class="has-base-font-size">Our receptionists were rewriting the same three pages every time a fee changed. They edit it themselves in about four minutes now, and nobody has had to ring a developer since February.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Author"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Idris Fenn</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Practice Manager, Lantern Bay Dental</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:columns {"metadata":{"name":"Mosaic"},"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|3","left":"var:preset|spacing|3"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column"><!-- wp:image {"width":"100%","height":"130px","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Sewing frame holding a half-bound book" style="border-radius:8px;object-fit:cover;width:100%;height:130px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"100%","height":"130px","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Gold tooling pressed into a leather spine" style="border-radius:8px;object-fit:cover;width:100%;height:130px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"8px"},"dimensions":{"minHeight":"130px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:8px;min-height:130px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"></div>
<!-- /wp:group -->

<!-- wp:image {"width":"100%","height":"130px","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Offcuts of marbled paper spread across a workbench" style="border-radius:8px;object-fit:cover;width:100%;height:130px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"8px"},"dimensions":{"minHeight":"130px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:8px;min-height:130px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"8px"},"dimensions":{"minHeight":"130px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:8px;min-height:130px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:image {"width":"110px","height":"24px","scale":"contain","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="https://ui.shadcn.com/placeholder.svg" alt="Corbin and Rowe wordmark" style="object-fit:contain;width:110px;height:24px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"metadata":{"name":"Quote"},"fontSize":"base"} -->
<p class="has-base-font-size">I expected a rebuild to mean losing the odd corners of the old site. Instead the odd corners are the part people write to us about, and the bindery has a six-week waiting list for the first time.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Author"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Marguerite Rowe</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Owner, Corbin &amp; Rowe</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:columns {"metadata":{"name":"Mosaic"},"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|3","left":"var:preset|spacing|3"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"8px"},"dimensions":{"minHeight":"130px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:8px;min-height:130px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"></div>
<!-- /wp:group -->

<!-- wp:image {"width":"100%","height":"130px","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Runners warming up on a wet track" style="border-radius:8px;object-fit:cover;width:100%;height:130px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"8px"},"dimensions":{"minHeight":"130px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:8px;min-height:130px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"8px"},"dimensions":{"minHeight":"130px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:8px;min-height:130px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column"><!-- wp:image {"width":"100%","height":"130px","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Club noticeboard pinned with fixture cards" style="border-radius:8px;object-fit:cover;width:100%;height:130px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"100%","height":"130px","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Kit bags lined along a changing room bench" style="border-radius:8px;object-fit:cover;width:100%;height:130px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:image {"width":"110px","height":"24px","scale":"contain","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="https://ui.shadcn.com/placeholder.svg" alt="Ferrymead Athletics wordmark" style="object-fit:contain;width:110px;height:24px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"metadata":{"name":"Quote"},"fontSize":"base"} -->
<p class="has-base-font-size">Half our members read the fixtures on a phone in a car park. Pages that used to take nine seconds now land before they have locked the door, and sign-ups stopped falling away halfway through.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Author"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Otis Bramwell</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Club Secretary, Ferrymead Athletics</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:shadcn/carousel-item -->
<!-- /wp:shadcn/carousel --></div>
<!-- /wp:group -->
