<?php
/**
 * Title: About Tilted Photo Profile
 * Slug: shadcn/about-tilted-photo-profile
 * Categories: shadcn, about
 * Description: A two-column personal about section pairing a framed portrait card that carries a name and handle with a short first-person introduction.
 * AI Hint: Personal about block — a bordered photo card holding a portrait with the person's name and social handle underneath, set beside a large introduction heading and two short paragraphs of first-person copy; best for a portfolio or personal brand page.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","about"],"patternName":"shadcn/about-tilted-photo-profile","name":"About Tilted Photo Profile"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|9","left":"var:preset|spacing|10"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)"><!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Portrait of Nora Vale" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<p class="has-lg-font-size" style="font-weight:600">Nora Vale</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">@noravale</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","contentSize":"560px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-fluid-5-xl-font-size">Interfaces built one honest detail at a time</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">I design and build product interfaces for small teams who would rather ship something clear than something clever. Most of my work starts in a text editor and ends in a browser, with a lot of narrowing down in between.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Before going independent I spent six years inside design systems teams, which is where I learned that the hard part is rarely the pixels. These days I take on a handful of projects a year and stay on them long enough to see what actually held up.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
