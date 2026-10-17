<?php
/**
 * Title: Project Page Narrow Stacked Exhibition
 * Slug: shadcn/project-page-narrow-stacked-exhibition
 * Categories: shadcn, portfolio
 * Description: A single-exhibition page held to one narrow 720px column — title, two paragraphs of description, three stacked captioned images, a four-column credit row and a closing line.
 * AI Hint: Single-project exhibition page built as one narrow column at a 720px reading measure rather than a wide layout — an oversized title sits above two paragraphs of description, then three captioned photographs stack one above another at the same narrow width with generous space between them, a hairline rule introduces a four-column credit row carrying venue, dates, curator and medium as tiny uppercase labels over bold values, and a short muted statement closes the page; reach for it when one show or one body of work needs a quiet, book-like page instead of a gallery grid.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","portfolio"],"patternName":"shadcn/project-page-narrow-stacked-exhibition","name":"Project Page Narrow Stacked Exhibition"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|5","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"letterSpacing":"-0.02em","lineHeight":"1.05"}},"fontSize":"fluid-4-xl"} -->
<h1 class="wp-block-heading has-fluid-4-xl-font-size" style="letter-spacing:-0.02em;line-height:1.05">Salt and Signal</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"lg"} -->
<p class="has-lg-font-size">For sixty years the coast between Hallow Point and the Nyre estuary was watched by twelve unmanned radio masts. Salt and Signal gathers ninety photographs made in the eighteen months before the last of them came down, shown beside the logbooks, tide charts and hand-drawn wiring diagrams left behind in their equipment huts.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"lg"} -->
<p class="has-lg-font-size">The pictures hang in the order they were taken, walking north. Nothing was staged and nothing has been cropped; the only intervention is in the printing, done by hand on paper the artist coated herself so the greys would hold the weather rather than flatten it.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|7"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"100%","height":"480px","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A steel radio mast rising out of marsh grass under a low grey sky" style="border-radius:12px;object-fit:cover;width:100%;height:480px"/><figcaption class="wp-element-caption">Mast four, Hallow Point, photographed an hour before high water.</figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"100%","height":"480px","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="The inside of an equipment hut with a wall of dials and a stool pushed under the bench" style="border-radius:12px;object-fit:cover;width:100%;height:480px"/><figcaption class="wp-element-caption">Hut nine still held its logbook, open at the last entry anyone wrote.</figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"100%","height":"480px","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A coil of severed aerial cable lying in wet sand at the mouth of an estuary" style="border-radius:12px;object-fit:cover;width:100%;height:480px"/><figcaption class="wp-element-caption">Aerial cable at the Nyre mouth, three days after decommissioning.</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.12em;text-transform:uppercase">Venue</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Marlow Hall</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.12em;text-transform:uppercase">Dates</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">9 Mar &ndash; 4 May</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.12em;text-transform:uppercase">Curator</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Ines Duarte</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.12em;text-transform:uppercase">Medium</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Silver gelatin</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">The masts were built to speak to ships that stopped listening years before anyone switched them off. What is left of them now is ninety sheets of paper, one room in Marlow Hall, and the eleven weeks this show stays open.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
