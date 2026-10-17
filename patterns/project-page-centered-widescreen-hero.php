<?php
/**
 * Title: Project Page Centered Widescreen Hero
 * Slug: shadcn/project-page-centered-widescreen-hero
 * Categories: shadcn, portfolio
 * Description: A single-project case study page — a centred title and subtitle above a full-bleed 16:9 hero image, then a two-column section pairing a prose narrative with a short supporting note and a small metadata stack.
 * AI Hint: Single-project case study page for one piece of work — a centred oversized title with a centred one-line subtitle beneath it, then a full-bleed widescreen hero photograph running edge to edge with no rounding, and below it a two-column section with three prose paragraphs on the left and a narrower right column holding a short heading, a supporting paragraph and a stack of label-and-value project details; reach for it when a fashion, photography or editorial project deserves its own page led by one wide image rather than a gallery or a credits table.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","portfolio"],"patternName":"shadcn/project-page-centered-widescreen-hero","name":"Project Page Centered Widescreen Hero"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"letterSpacing":"-0.02em","lineHeight":"1.05"}},"fontSize":"fluid-5-xl"} -->
<h1 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size" style="letter-spacing:-0.02em;line-height:1.05">Salt Season</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"xl"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xl-font-size">A twelve-look autumn collection for Marlow &amp; Fen, shot across three cold mornings on the Suffolk shingle.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"align":"full","aspectRatio":"16/9","scale":"cover","width":"100%","sizeSlug":"large"} -->
<figure class="wp-block-image alignfull size-large is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="The opening look photographed against a grey seawall, a long wool coat caught mid-turn in the wind" style="aspect-ratio:16/9;object-fit:cover;width:100%"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-right:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|7","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"lg"} -->
<p class="has-lg-font-size">Marlow &amp; Fen had photographed every collection since 2016 in the same rented studio off Kingsland Road, on the same seamless paper, under the same two softboxes. The clothes had changed a great deal in nine years. The pictures had not, and the buyers had started saying so out loud.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"lg"} -->
<p class="has-lg-font-size">We moved the whole shoot to the coast in the third week of October and let the weather do the styling. Casting went to two dancers and a fisherman's daughter from the next village, none of them agency-signed, all of them able to stand still in a gale. Hair stayed unset. Nothing was steamed on location, so the wool arrived at the beach already carrying the creases of the drive.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"lg"} -->
<p class="has-lg-font-size">The edit runs to forty-one frames, of which nine carry the wholesale line sheet and the rest belong to the campaign. Every look was shot in sequence and printed in sequence, so the story reads the way the three days actually went: bright and hopeful on Tuesday, sideways rain by Thursday afternoon, and a last hour of low sun that gave us the cover.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"34%"} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"style":{"typography":{"letterSpacing":"-0.01em"}},"fontSize":"2-xl"} -->
<h2 class="wp-block-heading has-2-xl-font-size" style="letter-spacing:-0.01em">Working on the shingle</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Daylight lasted from half past seven until four, which left roughly six usable hours a day and no room to reshoot. The crew stayed to eight people, the rail lived in the back of an estate car, and every frame was lit by whatever the sky was doing at the time.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.1em;text-transform:uppercase">Client</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Marlow &amp; Fen</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.1em;text-transform:uppercase">Collection</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Autumn / Winter 2025, twelve looks</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.1em;text-transform:uppercase">Location</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Shingle Street and Orford Ness, Suffolk</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.1em;text-transform:uppercase">Scope</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Art direction, casting, styling, campaign edit</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
