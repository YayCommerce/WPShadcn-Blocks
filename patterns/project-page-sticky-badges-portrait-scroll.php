<?php
/**
 * Title: Project Page Sticky Badges Portrait Scroll
 * Slug: shadcn/project-page-sticky-badges-portrait-scroll
 * Categories: shadcn, portfolio
 * Description: A single-project case study page pinning the title, discipline badges and description in a sticky left column while three tall portrait images scroll past on the right, closing on a three-card row of related projects.
 * AI Hint: Single-project case study page built as a narrow-wide split — the left column holds a sticky panel with the project title, a row of discipline badges and two paragraphs of description that stay pinned while the right column scrolls a tall stack of three 4:5 portrait images past it, then a full-width three-column grid of bordered related-project cards, each with an image, a title and a one-line category shown at rest; reach for it when one project needs an image-led page and the reader should keep the project name and scope in view the whole way down.
 */

?>
<!-- wp:group {"metadata":{"categories":["shadcn","portfolio"],"patternName":"shadcn/project-page-sticky-badges-portrait-scroll","name":"Project Page Sticky Badges Portrait Scroll"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|5","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|10"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"38%"} -->
<div class="wp-block-column" style="flex-basis:38%"><!-- wp:group {"className":"is-style-shadcn-sticky","style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-shadcn-sticky"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.12em;text-transform:uppercase">Selected project</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"letterSpacing":"-0.02em","lineHeight":"1.1"}},"fontSize":"4-xl"} -->
<h1 class="wp-block-heading has-4-xl-font-size" style="letter-spacing:-0.02em;line-height:1.1">Tola Ceramics</h1>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Identity","variant":"secondary"} /-->

<!-- wp:shadcn/badge {"text":"Art direction","variant":"secondary"} /-->

<!-- wp:shadcn/badge {"text":"Photography","variant":"secondary"} /-->

<!-- wp:shadcn/badge {"text":"Packaging","variant":"secondary"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size" style="line-height:1.7">Tola throws tableware for restaurants, about nine hundred pieces a year out of a converted grain store, and every plate leaves the kiln slightly unlike the last one. The studio had spent three seasons trying to photograph that as consistency and losing the thing that made the work worth buying.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size" style="line-height:1.7">We rebuilt the identity around the variation instead — one wordmark cut from the studio's own glaze tests, a single north-facing light setup we shot everything in, and packaging printed in two inks so a chef unpacking a crate sees the same hand that made the pots. Four days of shooting produced the whole first-year library.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"62%","style":{"spacing":{"blockGap":"var:preset|spacing|5"}}} -->
<div class="wp-block-column" style="flex-basis:62%"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","width":"100%","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="A stack of unglazed dinner plates drying on a plank shelf beside the studio window" style="border-radius:12px;aspect-ratio:4/5;object-fit:cover;width:100%"/></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"4/5","scale":"cover","width":"100%","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Two hands lifting a wet bowl from the wheel, clay slip running down the wrists" style="border-radius:12px;aspect-ratio:4/5;object-fit:cover;width:100%"/></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"4/5","scale":"cover","width":"100%","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="A finished place setting on linen, the two-ink packaging sleeve folded open beside it" style="border-radius:12px;aspect-ratio:4/5;object-fit:cover;width:100%"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":2,"style":{"typography":{"letterSpacing":"-0.01em"}},"fontSize":"2-xl"} -->
<h2 class="wp-block-heading has-2-xl-font-size" style="letter-spacing:-0.01em">Related projects</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"grid","minimumColumnWidth":"22rem"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|3","bottom":"var:preset|spacing|3","left":"var:preset|spacing|3"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--3)"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","width":"100%","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Kraft coffee bags in a row, each band printed with a different roast colour" style="border-radius:8px;aspect-ratio:4/3;object-fit:cover;width:100%"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1","padding":{"bottom":"var:preset|spacing|2","left":"var:preset|spacing|2","right":"var:preset|spacing|2"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--2);padding-bottom:var(--wp--preset--spacing--2);padding-left:var(--wp--preset--spacing--2)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Mavro Coffee</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="letter-spacing:0.1em;text-transform:uppercase">Packaging</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|3","bottom":"var:preset|spacing|3","left":"var:preset|spacing|3"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--3)"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","width":"100%","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="A painted enamel sign for a harbour swimming club above a tiled changing room door" style="border-radius:8px;aspect-ratio:4/3;object-fit:cover;width:100%"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1","padding":{"bottom":"var:preset|spacing|2","left":"var:preset|spacing|2","right":"var:preset|spacing|2"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--2);padding-bottom:var(--wp--preset--spacing--2);padding-left:var(--wp--preset--spacing--2)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Bright Harbour Swim Club</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="letter-spacing:0.1em;text-transform:uppercase">Identity</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|3","bottom":"var:preset|spacing|3","left":"var:preset|spacing|3"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--3)"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","width":"100%","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="An open journal spread on a press bed, wide margins and a single duotone plate" style="border-radius:8px;aspect-ratio:4/3;object-fit:cover;width:100%"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1","padding":{"bottom":"var:preset|spacing|2","left":"var:preset|spacing|2","right":"var:preset|spacing|2"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--2);padding-bottom:var(--wp--preset--spacing--2);padding-left:var(--wp--preset--spacing--2)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Lantern &amp; Ash</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="letter-spacing:0.1em;text-transform:uppercase">Editorial design</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
