<?php
/**
 * Title: Project Page Centered Divider Meta
 * Slug: shadcn/project-page-centered-divider-meta
 * Categories: shadcn, portfolio
 * Description: A single-project case study page centred on the axis — small uppercase label, large serif title, a full-width rule, a three-column meta row, a captioned image and a short prose close.
 * AI Hint: Centred single-project case study page — a small muted uppercase label sits above an oversized serif project title, a wide horizontal rule cuts across beneath it, then a three-column metadata row pairs a tiny uppercase label with a bold value for client, scope and year, followed by a wide captioned photograph and two or three centred prose paragraphs closing on one centred button; reach for it when one project needs its own page and the studio wants the restrained, symmetrical feel of a printed case-study opener rather than a listing grid.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","portfolio"],"patternName":"shadcn/project-page-centered-divider-meta","name":"Project Page Centered Divider Meta"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|5","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600","letterSpacing":"0.18em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.18em;text-transform:uppercase">Case study</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontFamily":"Georgia, Times New Roman, serif","letterSpacing":"-0.02em","lineHeight":"1.05"}},"fontSize":"fluid-5-xl"} -->
<h1 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size" style="font-family:Georgia, Times New Roman, serif;letter-spacing:-0.02em;line-height:1.05">A pantry brand built for open shelves</h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:separator {"align":"wide","className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator alignwide has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"500","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:500;letter-spacing:0.12em;text-transform:uppercase">Client</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-text-align-center has-base-font-size" style="font-weight:600">Salt &amp; Signal</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"500","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:500;letter-spacing:0.12em;text-transform:uppercase">Scope</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-text-align-center has-base-font-size" style="font-weight:600">Identity, packaging, storefront</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"500","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:500;letter-spacing:0.12em;text-transform:uppercase">Year</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-text-align-center has-base-font-size" style="font-weight:600">2025</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:image {"align":"wide","width":"100%","height":"520px","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image alignwide size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="The full Salt and Signal range lined up on a pale studio shelf" style="border-radius:12px;object-fit:cover;width:100%;height:520px"/><figcaption class="wp-element-caption">The launch range photographed on the studio shelf, two weeks before the first shipment left the building.</figcaption></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","fontSize":"lg"} -->
<p class="has-text-align-center has-lg-font-size">Salt &amp; Signal sells twelve pantry staples and nothing else. The founders had spent two years getting the blends right and roughly two afternoons on the label, so a genuinely good product was arriving in something that still looked like a prototype.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-base-font-size">We rebuilt the range around one rule: every jar has to read from across the room and still reward a close look. A narrow serif carries the product name, the blend notes sit beneath it in small type, and a printed colour band does the sorting work so nobody has to squint at a shelf of near-identical glass.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-base-font-size">The storefront follows the same logic. Product pages lead with one photograph and one sentence, subscriptions renew without an account, and the catalogue loads in under a second on a phone. Reorders now account for just over half of revenue.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"primary-foreground","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:8px">Read the full case study</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
