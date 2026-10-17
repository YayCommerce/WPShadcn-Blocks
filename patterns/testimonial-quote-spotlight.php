<?php
/**
 * Title: Testimonial Quote Spotlight
 * Slug: shadcn/testimonial-quote-spotlight
 * Categories: shadcn, testimonials
 * Description: A full-width carousel that shows one centered oversized quote at a time above a round avatar, the author name and role, with dot navigation underneath.
 * AI Hint: Minimal social-proof carousel — each slide is a single customer story centred on the page, the quote set in oversized text across a narrow measure, then a round avatar, the author name and their role and company underneath, and a row of dots below the slide steps between stories while autoplay advances them on its own. Best when one quote at a time should carry the whole section, with no heading, cards or borders competing for attention.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","testimonials"],"patternName":"shadcn/testimonial-quote-spotlight","name":"Testimonial Quote Spotlight"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:shadcn/carousel {"autoplay":true,"autoplayDelay":6000,"showArrows":false,"slidesPerView":1,"slidesPerViewTablet":1,"slidesPerViewDesktop":1,"align":"wide"} -->
<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6","padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"500"}},"fontSize":"3-xl"} -->
<p class="has-text-align-center has-3-xl-font-size" style="font-weight:500">&#8220;We had put the redesign off for two years because nobody wanted to own the component work. This gave us a starting point on day one, and the new pages went live before the quarter closed.&#8221;</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"72px","height":"72px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Marisol Trevino" style="border-radius:9999px;object-fit:cover;width:72px;height:72px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-text-align-center has-base-font-size" style="font-weight:600">Marisol Trevino</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">VP Design, Halverd</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6","padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"500"}},"fontSize":"3-xl"} -->
<p class="has-text-align-center has-3-xl-font-size" style="font-weight:500">&#8220;What sold the team was how little we had to fight it. Our own tokens dropped straight in, so the first build already looked like our product rather than a demo.&#8221;</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"72px","height":"72px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Devon Aikins" style="border-radius:9999px;object-fit:cover;width:72px;height:72px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-text-align-center has-base-font-size" style="font-weight:600">Devon Aikins</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">Principal Engineer, Paleblue</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6","padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"500"}},"fontSize":"3-xl"} -->
<p class="has-text-align-center has-3-xl-font-size" style="font-weight:500">&#8220;Our writers now put a landing page together without waiting on anyone. Three of them shipped last month and I only saw the pages after they were live.&#8221;</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"72px","height":"72px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Priya Raghunathan" style="border-radius:9999px;object-fit:cover;width:72px;height:72px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-text-align-center has-base-font-size" style="font-weight:600">Priya Raghunathan</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">Head of Content, Fernwood</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->
<!-- /wp:shadcn/carousel --></div>
<!-- /wp:group -->
