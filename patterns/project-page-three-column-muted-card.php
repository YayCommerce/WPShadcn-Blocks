<?php
/**
 * Title: Project Page Three Column Muted Card
 * Slug: shadcn/project-page-three-column-muted-card
 * Categories: shadcn, portfolio
 * Description: A single-project case study page — a three-column header pairing the title with a summary and a muted metadata card, a three-to-one image split, and a two-column closing note.
 * AI Hint: Single-project case study page built on a three-column header — the project title on the left, a short description in the middle, and a soft muted card on the right holding client, scope and year as label-and-value rows; below it a three-to-one image split where a wide establishing shot sits beside a narrow detail crop at matching height, then a closing section with a short heading left and two prose paragraphs right; reach for it when one project needs its own page and the key facts should read at a glance beside the introduction.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","portfolio"],"patternName":"shadcn/project-page-three-column-muted-card","name":"Project Page Three Column Muted Card"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|5","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|7","left":"var:preset|spacing|7"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:heading {"level":1,"style":{"typography":{"letterSpacing":"-0.02em","lineHeight":"1.05"}},"fontSize":"fluid-4-xl"} -->
<h1 class="wp-block-heading has-fluid-4-xl-font-size" style="letter-spacing:-0.02em;line-height:1.05">Harbour Line</h1>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"38%"} -->
<div class="wp-block-column" style="flex-basis:38%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">A wayfinding system for the eleven jetties of a working harbour, drawn so that a first-time passenger can find the right gangway from the far side of the quay. Signs, deck markings, timetable boards and a printed pocket map, all built from one grid and three enamel colours.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Client</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Port of Kaldvik</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Scope</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Wayfinding &amp; print</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Year</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">2025</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"74%"} -->
<div class="wp-block-column" style="flex-basis:74%"><!-- wp:image {"width":"100%","height":"520px","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A row of enamel jetty signs standing along the quay at low tide" style="border-radius:12px;object-fit:cover;width:100%;height:520px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:image {"width":"100%","height":"520px","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Close crop of a painted deck number stencilled onto wet timber planking" style="border-radius:12px;object-fit:cover;width:100%;height:520px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|7","left":"var:preset|spacing|7"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"32%"} -->
<div class="wp-block-column" style="flex-basis:32%"><!-- wp:heading {"level":2,"style":{"typography":{"letterSpacing":"-0.01em","lineHeight":"1.15"}},"fontSize":"3-xl"} -->
<h2 class="wp-block-heading has-3-xl-font-size" style="letter-spacing:-0.01em;line-height:1.15">How it reads on the quay</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:paragraph {"fontSize":"lg"} -->
<p class="has-lg-font-size">The harbour had grown one jetty at a time, and so had its signage — six typefaces, four numbering schemes, and a habit of naming berths after the company that once leased them. We spent a fortnight riding the boats before we drew anything, and the pattern that emerged was simple: passengers navigate by colour first, number second, and never by name.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"lg"} -->
<p class="has-lg-font-size">So the system leads with a band of enamel colour visible from the ticket hall, carries a single set of numbers from the map to the deck, and keeps every word short enough to read at a walking pace in rain. Ticket staff now answer roughly half as many directions questions per shift, which was the only measure the harbour master ever asked us for.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
