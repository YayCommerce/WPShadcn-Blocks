<?php
/**
 * Title: Project Page Serif Meta Row
 * Slug: shadcn/project-page-serif-meta-row
 * Categories: shadcn, portfolio
 * Description: A single project case study led by an oversized serif title, a three-column client and year metadata row, a full-width image and a short prose summary closing on one button.
 * AI Hint: Single-project case study page — an oversized serif project title spans the wide column, a hairline-topped metadata row beneath it lists client, year and discipline as small uppercase labels above bold values, a wide full-bleed image follows, and a narrow 800px prose block of three paragraphs closes on a single arrow button; reach for it when one project needs a whole page rather than a card in a grid.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","portfolio"],"patternName":"shadcn/project-page-serif-meta-row","name":"Project Page Serif Meta Row"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|5","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:heading {"align":"wide","level":2,"style":{"typography":{"fontFamily":"Georgia, Times New Roman, serif","letterSpacing":"-0.02em","lineHeight":"0.95"}},"fontSize":"fluid-7-xl"} -->
<h2 class="wp-block-heading alignwide has-fluid-7-xl-font-size" style="font-family:Georgia, Times New Roman, serif;letter-spacing:-0.02em;line-height:0.95">Lantern Bay Ferry Terminal</h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","style":{"border":{"top":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"top":"var:preset|spacing|5"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--5)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="letter-spacing:0.12em;text-transform:uppercase">Client</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<p class="has-lg-font-size" style="font-weight:600">Lantern Bay Port Authority</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="letter-spacing:0.12em;text-transform:uppercase">Year</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<p class="has-lg-font-size" style="font-weight:600">2025</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="letter-spacing:0.12em;text-transform:uppercase">Discipline</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<p class="has-lg-font-size" style="font-weight:600">Wayfinding and signage</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:image {"align":"wide","width":"100%","height":"560px","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image alignwide size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Suspended directional signs above the ferry terminal concourse at dusk" style="border-radius:16px;object-fit:cover;width:100%;height:560px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"lg"} -->
<p class="has-lg-font-size">The terminal moves eleven thousand passengers a day through a hall built for half that number. Riders kept missing sailings because gate numbers lived on one screen at the far end of the concourse, unreadable from the ticket line.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">We rebuilt the sign system around the three decisions a traveller actually makes: which pier, which sailing, how long until it leaves. Retail, restrooms and the harbour museum moved to a quieter second tier that only appears once you have your gate.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">Ninety-four signs were drawn, prototyped at full size in the maintenance shed and installed across six night shifts. Six months on, the information desk logs a third fewer directions requests.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"md","iconName":"arrow-right","iconPosition":"right"} -->
<div class="wp-block-button is-size-md"><a class="wp-block-button__link wp-element-button" href="#">Read the full case study</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
