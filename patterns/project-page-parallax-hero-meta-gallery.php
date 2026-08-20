<?php
/**
 * Title: Project Page Parallax Hero Meta Gallery
 * Slug: shadcn/project-page-parallax-hero-meta-gallery
 * Categories: shadcn, portfolio
 * Description: A single-project case study page opening on a wide dimmed photo hero with an overlaid title, then a four-item metadata row, a four-image gallery grid and a split closing note.
 * AI Hint: Single-project case study page built around a wide 560px cover photo with a 16px radius and a 50 percent dim, carrying a small uppercase eyebrow pinned top and a large white project title with a one-line summary pinned bottom, followed by a four-column metadata row of hairline-topped client, location, completed and scope pairs, a two-by-two gallery of 4:3 cover-cropped photographs, and a closing row placing a short heading opposite two paragraphs of prose; use it when one project needs a full page that leads with a single hero photograph rather than a text intro.
 */

?>
<!-- wp:group {"metadata":{"categories":["shadcn","portfolio"],"patternName":"shadcn/project-page-parallax-hero-meta-gallery","name":"Project Page Parallax Hero Meta Gallery"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|5","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:cover {"url":"https://ui.shadcn.com/placeholder.svg","alt":"The rebuilt Halden boathouse seen from the water at first light","dimRatio":50,"minHeight":560,"minHeightUnit":"px","align":"wide","style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover alignwide" style="border-radius:16px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7);min-height:560px"><img class="wp-block-cover__image-background" alt="The rebuilt Halden boathouse seen from the water at first light" src="https://ui.shadcn.com/placeholder.svg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":"440px"},"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="min-height:440px"><!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"}},"fontSize":"xs"} -->
<p class="has-text-color has-xs-font-size" style="color:#ffffff;font-weight:600;letter-spacing:0.12em;text-transform:uppercase">Selected work — Waterfront</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained","contentSize":"720px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"color":{"text":"#ffffff"},"typography":{"letterSpacing":"-0.03em","lineHeight":"1.05"}},"fontSize":"fluid-5-xl"} -->
<h1 class="wp-block-heading has-text-color has-fluid-5-xl-font-size" style="color:#ffffff;letter-spacing:-0.03em;line-height:1.05">Halden Boathouse</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"lineHeight":"1.6"}},"fontSize":"lg"} -->
<p class="has-text-color has-lg-font-size" style="color:#ffffff;line-height:1.6">A 1911 rowing shed on the fjord, taken back to its frame and rebuilt so the club can train through the winter.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"grid","minimumColumnWidth":"17rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--4)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="letter-spacing:0.1em;text-transform:uppercase">Client</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:500">Halden Rowing Club</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--4)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="letter-spacing:0.1em;text-transform:uppercase">Location</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:500">Iddefjord, Østfold</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--4)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="letter-spacing:0.1em;text-transform:uppercase">Completed</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:500">June 2025</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--4)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="letter-spacing:0.1em;text-transform:uppercase">Scope</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:500">Survey, timber rebuild, interiors</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"grid","minimumColumnWidth":"28rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","width":"100%","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Original pine trusses left exposed above the new boat racks" style="border-radius:12px;aspect-ratio:4/3;object-fit:cover;width:100%"/></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"4/3","scale":"cover","width":"100%","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="The sliding water door open on to the launching ramp" style="border-radius:12px;aspect-ratio:4/3;object-fit:cover;width:100%"/></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"4/3","scale":"cover","width":"100%","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Detail of the brass rowlock rail salvaged from the old shed" style="border-radius:12px;aspect-ratio:4/3;object-fit:cover;width:100%"/></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"4/3","scale":"cover","width":"100%","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="The upstairs training room with its long window over the fjord" style="border-radius:12px;aspect-ratio:4/3;object-fit:cover;width:100%"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"34%"} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:heading {"level":2,"style":{"typography":{"letterSpacing":"-0.01em"}},"fontSize":"2-xl"} -->
<h2 class="wp-block-heading has-2-xl-font-size" style="letter-spacing:-0.01em">Working from the tide up</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66%","style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-column" style="flex-basis:66%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size" style="line-height:1.7">The shed had been patched every decade since the war and nobody held a drawing of it. We spent the first autumn measuring what was actually there — sixty-one timbers, a third of them rotten below the splash line — and only then decided how much of the original frame could stay. Two thirds did.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size" style="line-height:1.7">Everything new is bolted rather than glued, so the next crew can take it apart the way we did. The club now runs eights off the ramp in February, which was the whole point: a building that earns its keep in the months the old one was shut.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
