<?php
/**
 * Title: Blog Filterable List
 * Slug: shadcn/blog-filterable-list
 * Categories: shadcn, posts
 * Description: A centred blog introduction above a category rail and a divided stack of post rows that the rail filters down to one category.
 * AI Hint: Blog listing — a centred badge, oversized headline and supporting line, then a two-column body with a vertical rail of category filter buttons on the left and a hairline-divided stack of post rows on the right, each row showing a category eyebrow, a linked title, a short excerpt and an author with a publication date; the rail filters the stack to one category client-side, so best for a blog or news index long enough that readers need to narrow it.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","posts"],"patternName":"shadcn/blog-filterable-list","name":"Blog Filterable List"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Blog","variant":"secondary"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size">Notes from the build</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Field notes on design systems, frontend architecture and the unglamorous parts of running software in production.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/filterable-sections {"filterLabel":"","allOptionLabel":"All articles","control":"buttons","controlPosition":"side","align":"wide","style":{"spacing":{"blockGap":"0"}}} -->
<!-- wp:shadcn/filter-section {"label":"Web Development","showLabel":false} -->
<!-- wp:group {"className":"is-style-shadcn-divided","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-shadcn-divided"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600">Web Development</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size"><a href="#">Shipping a design system that survives its second year</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">The hard part was never the components. It was keeping four product teams agreeing on them once deadlines arrived and every exception looked reasonable on its own.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Priya Raman</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">on 12 March 2024</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600">Web Development</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size"><a href="#">What we learned rebuilding our docs site twice</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Two rewrites in eighteen months taught us that search, versioning and a writing guide matter more than whichever framework renders the pages.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Tomas Lind</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">on 4 March 2024</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/filter-section -->

<!-- wp:shadcn/filter-section {"label":"Frontend","showLabel":false} -->
<!-- wp:group {"className":"is-style-shadcn-divided","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-shadcn-divided"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600">Frontend</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size"><a href="#">State management after the hype settled</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Most screens need far less shared state than we give them. A short tour of what to keep local, what to cache, and what belongs on the server.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Marta Oliveira</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">on 27 February 2024</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600">Frontend</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size"><a href="#">Making a forty-field form feel like three</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Progressive disclosure, honest validation timing and saving as people type. The form did not get shorter; it just stopped feeling long.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Danny Okafor</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">on 19 February 2024</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/filter-section -->

<!-- wp:shadcn/filter-section {"label":"Backend","showLabel":false} -->
<!-- wp:group {"className":"is-style-shadcn-divided","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-shadcn-divided"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600">Backend</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size"><a href="#">Queues, retries and the myth of exactly once</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">You cannot buy exactly-once delivery, but you can make repeated work harmless. Idempotency keys, dead letters and the bookkeeping in between.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Sven Halvorsen</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">on 8 February 2024</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/filter-section -->
<!-- /wp:shadcn/filterable-sections --></div>
<!-- /wp:group -->
