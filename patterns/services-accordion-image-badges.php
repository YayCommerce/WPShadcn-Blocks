<?php
/**
 * Title: Services Accordion Image Badges
 * Slug: shadcn/services-accordion-image-badges
 * Categories: shadcn, services
 * Description: An oversized editorial heading above a numbered accordion whose panels open onto a wide photograph, a lead line, a paragraph of detail and a cluster of category badges.
 * AI Hint: Editorial numbered service accordion — a display-size heading beside a short standfirst, then full-width accordion rows each labelled with a zero-padded index and a discipline name, opening onto a landscape image on the left and, on the right, a lead sentence, explanatory copy and a row of filled category badges; reach for it when a studio wants its disciplines to read like a magazine contents page rather than a card grid, and each discipline deserves a picture.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","services"],"patternName":"shadcn/services-accordion-image-badges","name":"Services Accordion Image Badges"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|5","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"66%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:66%"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"600","lineHeight":"1"}},"fontSize":"fluid-7-xl"} -->
<h2 class="wp-block-heading has-fluid-7-xl-font-size" style="font-weight:600;line-height:1">Services.</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"34%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:34%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Four disciplines, one studio. Open a row to see the work behind the label and the kinds of briefs it usually answers.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:shadcn/accordion {"headingLevel":3,"allowMultiple":true,"openFirst":true} -->
<!-- wp:shadcn/accordion-item {"title":"01 — Brand identity","summary":"Naming through to guidelines"} -->
<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"380px"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:380px"><!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Printed identity manual open on a desk" style="border-radius:12px;aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"xl"} -->
<p class="has-xl-font-size" style="font-weight:500">A name, a mark and the rules that keep both honest.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">We build identities that survive contact with a real marketing calendar. That means fewer flourishes, more decisions written down, and a set of assets your team can use on a Friday afternoon without calling us first.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Naming"} /-->

<!-- wp:shadcn/badge {"text":"Logotype"} /-->

<!-- wp:shadcn/badge {"text":"Art direction"} /-->

<!-- wp:shadcn/badge {"text":"Guidelines"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"02 — Digital product","summary":"Research, interface, prototype"} -->
<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"380px"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:380px"><!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Interface screens pinned to a studio wall" style="border-radius:12px;aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"xl"} -->
<p class="has-xl-font-size" style="font-weight:500">Interfaces designed against the awkward cases first.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Empty states, permission errors and the long lists nobody screenshots. We start there, because the happy path designs itself and everything else is where products lose people.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Research"} /-->

<!-- wp:shadcn/badge {"text":"Interface"} /-->

<!-- wp:shadcn/badge {"text":"Prototyping"} /-->

<!-- wp:shadcn/badge {"text":"Design system"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"03 — Motion and film","summary":"Direction, animation, sound"} -->
<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"380px"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:380px"><!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Storyboard frames laid out on a light table" style="border-radius:12px;aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"xl"} -->
<p class="has-xl-font-size" style="font-weight:500">Short films and motion that carry the same voice.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">From a fifteen-second loop for a launch post to a founder interview cut three ways. We storyboard before anyone books a camera, and we hand back the project files as well as the finished edit.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Direction"} /-->

<!-- wp:shadcn/badge {"text":"Animation"} /-->

<!-- wp:shadcn/badge {"text":"Sound"} /-->

<!-- wp:shadcn/badge {"text":"Post"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"04 — Editorial design","summary":"Print, layout, typography"} -->
<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"380px"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:380px"><!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Bound annual report beside loose proof sheets" style="border-radius:12px;aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"xl"} -->
<p class="has-xl-font-size" style="font-weight:500">Long documents that people actually finish reading.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Annual reports, research papers and the occasional book. A grid, a typographic scale and a print partner we have used for years, so the proof matches the screen more often than not.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Print"} /-->

<!-- wp:shadcn/badge {"text":"Layout"} /-->

<!-- wp:shadcn/badge {"text":"Typography"} /-->

<!-- wp:shadcn/badge {"text":"Production"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion --></div>
<!-- /wp:group -->
