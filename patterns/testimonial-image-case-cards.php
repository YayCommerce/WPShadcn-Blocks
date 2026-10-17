<?php
/**
 * Title: Testimonial Image Case Cards
 * Slug: shadcn/testimonial-image-case-cards
 * Categories: shadcn, testimonials
 * Description: A left-aligned heading and intro above three bordered case cards that each open with a full-width image, then two quote panels carrying a coloured accent bar, an avatar and a company mark.
 * AI Hint: Outcome-first social proof — a heading with a supporting line, then a three-column row of bordered cards where each card starts with an edge-to-edge image and continues with an oversized stat, a small caption and the result in bold, and underneath two equal muted panels whose quote sits behind a vertical accent bar with the author's square avatar, name and role on one side of the footer and the company mark on the other; best for a results or case-study page where the numbers should land before the quotes.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","testimonials"],"patternName":"shadcn/testimonial-image-case-cards","name":"Testimonial Image Case Cards"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained","contentSize":"780px","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-fluid-4-xl-font-size">What teams say once the sections are live</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Product and engineering leads reach for the library when a page has to ship this week. Here is what changed for them after the first pull request.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"blockGap":"0"}},"backgroundColor":"card"} -->
<div class="wp-block-column has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","style":{"border":{"radius":{"topLeft":"12px","topRight":"12px"}}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Handoff board beside the finished pricing page" style="border-top-left-radius:12px;border-top-right-radius:12px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"fontSize":"3-xl"} -->
<p class="has-3-xl-font-size" style="font-weight:700">3x</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">faster handoff on a new section</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600">A pricing page rebuilt between two stand-ups</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"blockGap":"0"}},"backgroundColor":"card"} -->
<div class="wp-block-column has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","style":{"border":{"radius":{"topLeft":"12px","topRight":"12px"}}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Two landing pages sharing one spacing scale" style="border-top-left-radius:12px;border-top-right-radius:12px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"fontSize":"3-xl"} -->
<p class="has-3-xl-font-size" style="font-weight:700">72%</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">less one-off CSS per template</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600">One spacing scale across every landing page</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"blockGap":"0"}},"backgroundColor":"card"} -->
<div class="wp-block-column has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","style":{"border":{"radius":{"topLeft":"12px","topRight":"12px"}}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Traffic on the launch page in its first week" style="border-top-left-radius:12px;border-top-right-radius:12px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"fontSize":"3-xl"} -->
<p class="has-3-xl-font-size" style="font-weight:700">18k+</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">sessions on the new landing in week one</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600">From an empty repo to a page we could show</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|6"}},"backgroundColor":"muted","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-column has-border-color has-muted-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"border":{"left":{"color":"var:preset|color|primary","width":"3px","style":"solid"}},"spacing":{"padding":{"left":"var:preset|spacing|4"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--primary);border-left-style:solid;border-left-width:3px;padding-left:var(--wp--preset--spacing--4)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}}} -->
<p style="font-weight:500">Having the layouts and the primitives in one place is the part that saved us. Nobody had to invent a spacing scale on the way to a launch.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"40px","height":"40px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Maren Ostlund" style="border-radius:8px;object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Maren Ostlund</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">CTO, Brightloom</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"height":"24px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Brightloom logo" style="height:24px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|6"}},"backgroundColor":"muted","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-column has-border-color has-muted-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"border":{"left":{"color":"var:preset|color|primary","width":"3px","style":"solid"}},"spacing":{"padding":{"left":"var:preset|spacing|4"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--primary);border-left-style:solid;border-left-width:3px;padding-left:var(--wp--preset--spacing--4)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}}} -->
<p style="font-weight:500">We dropped two sections into an app that already carried its own tokens and they inherited them cleanly. The first release needed no design pass.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"40px","height":"40px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Idris Fadel" style="border-radius:8px;object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Idris Fadel</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Engineering lead, Cassava</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"height":"24px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Cassava logo" style="height:24px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
