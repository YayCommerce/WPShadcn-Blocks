<?php
/**
 * Title: Blog Related Articles Grid
 * Slug: shadcn/blog-related-articles-grid
 * Categories: shadcn, posts
 * Description: A compact end-of-article module pairing a short heading with an outline archive button, above three borderless post stacks set on a responsive grid.
 * AI Hint: Related reading module — a compact header row putting a small eyebrow and a modest heading on the left against an outline archive button on the right, then a responsive three-column grid of borderless typographic stacks that each give a muted category label, a linked title, a two-line summary and a publication date, with generous gaps instead of card borders; best as a lightweight further-reading footer beneath a single article or documentation page.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","posts"],"patternName":"shadcn/blog-related-articles-grid","name":"Blog Related Articles Grid"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600">Keep reading</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"fontSize":"3-xl"} -->
<h2 class="wp-block-heading has-3-xl-font-size">More on this topic</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"md","className":"is-style-outline","iconName":"arrow-right","iconPosition":"right"} -->
<div class="wp-block-button is-style-outline is-size-md"><a class="wp-block-button__link wp-element-button" href="#">Browse the archive</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"grid","minimumColumnWidth":"22rem"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Design systems</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><a href="#">Why our tokens outlived three redesigns</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Naming a colour after the job it does, rather than the shade it happens to be, is the one decision we never had to undo.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">18 April 2024</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Performance</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><a href="#">Cutting a second off first paint without a rewrite</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Four unglamorous fixes — fonts, a hero image, one blocking script and a cache header — bought us more than any framework swap would have.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">2 April 2024</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Accessibility</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><a href="#">Focus order is a content problem, not a CSS one</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Every tab-order bug we logged last year traced back to a layout that read differently than it was written. Sorting the source fixed most of them.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">21 March 2024</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
