<?php
/**
 * Title: Services Sticky Image List
 * Slug: shadcn/services-sticky-image-list
 * Categories: shadcn, services
 * Description: A services section pairing a pinned image panel on the left with a hairline-divided list of numbered service titles and descriptions on the right.
 * AI Hint: Sticky-preview services layout — a left panel holding one large portrait image, an uppercase label and a short paragraph stays pinned while the wider right column scrolls through five divided rows that each carry a numbered superscript, an oversized service title and a line of detail, closing on an outline button; reach for it on an agency or studio services page that wants oversized editorial type and a single steady image rather than a carousel.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|10"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"38%"} -->
<div class="wp-block-column" style="flex-basis:38%"><!-- wp:group {"className":"is-style-shadcn-sticky","style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-shadcn-sticky"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","width":"100%","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="A designer working at a laptop against a painted studio backdrop" style="border-radius:12px;aspect-ratio:4/5;object-fit:cover;width:100%"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="letter-spacing:0.08em;text-transform:uppercase">Inside the studio</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Five people, one room, one project at a time. Every engagement starts with the same week of listening, and ends with work you can hand to your own team without a translation layer.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"62%","style":{"spacing":{"blockGap":"var:preset|spacing|7"}}} -->
<div class="wp-block-column" style="flex-basis:62%"><!-- wp:group {"className":"is-style-shadcn-divided","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-shadcn-divided"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.04em","lineHeight":"1"}},"fontSize":"fluid-4-xl"} -->
<h3 class="wp-block-heading has-fluid-4-xl-font-size" style="font-weight:700;letter-spacing:-0.04em;line-height:1">Product design<sup>{01}</sup></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Interface work that runs from the first rough flows through to a component library your engineers can build straight against.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.04em","lineHeight":"1"}},"fontSize":"fluid-4-xl"} -->
<h3 class="wp-block-heading has-fluid-4-xl-font-size" style="font-weight:700;letter-spacing:-0.04em;line-height:1">Brand design<sup>{02}</sup></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Marks, type and colour built to survive contact with a real website, a real ad budget and a print run nobody proofreads twice.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.04em","lineHeight":"1"}},"fontSize":"fluid-4-xl"} -->
<h3 class="wp-block-heading has-fluid-4-xl-font-size" style="font-weight:700;letter-spacing:-0.04em;line-height:1">Research<sup>{03}</sup></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Interviews, usability sessions and a written read of what your customers actually do, rather than what the roadmap assumes they do.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.04em","lineHeight":"1"}},"fontSize":"fluid-4-xl"} -->
<h3 class="wp-block-heading has-fluid-4-xl-font-size" style="font-weight:700;letter-spacing:-0.04em;line-height:1">Packaging<sup>{04}</sup></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Structure, dielines and print specs prepared in the format the printer you already work with expects to receive.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.04em","lineHeight":"1"}},"fontSize":"fluid-4-xl"} -->
<h3 class="wp-block-heading has-fluid-4-xl-font-size" style="font-weight:700;letter-spacing:-0.04em;line-height:1">Motion<sup>{05}</sup></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Short loops and interface transitions that explain how a product behaves without needing a voiceover to carry them.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"8px"}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:8px">Start a project ↗</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
