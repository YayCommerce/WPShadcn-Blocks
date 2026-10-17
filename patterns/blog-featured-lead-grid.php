<?php
/**
 * Title: Blog Featured Lead Grid
 * Slug: shadcn/blog-featured-lead-grid
 * Categories: shadcn, posts
 * Description: A full-width featured cover photo with overlaid story text, above a three-across grid of six compact post cards.
 * AI Hint: Blog lead — a left-aligned header pairing a badge, oversized headline and supporting line, then one full-width featured article rendered as a dimmed cover photo with a category pill pinned top and a white linked title, excerpt, byline and outline read button pinned bottom, and beneath it a responsive three-across grid of six compact posts each carrying a rounded 16:9 thumbnail, a category and reading-time line and a linked title; best as a blog landing or magazine index where one story leads at full width and the rest stay scannable.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","posts"],"patternName":"shadcn/blog-featured-lead-grid","name":"Blog Featured Lead Grid"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained","contentSize":"720px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"The dispatch","variant":"secondary","iconName":"book-open","iconPosition":"left"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-fluid-4-xl-font-size">This week's lead, and six more worth the coffee</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">One story gets the whole width every Monday. Everything under it is short enough to finish before the kettle boils.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","alt":"A newsroom desk lit by one lamp with notebooks fanned across it","dimRatio":60,"minHeight":560,"minHeightUnit":"px","style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|8"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-radius:16px;padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--8);min-height:560px"><img class="wp-block-cover__image-background" alt="A newsroom desk lit by one lamp with notebooks fanned across it" src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":"400px"},"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="min-height:400px"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Featured story","variant":"secondary","iconName":"star","iconPosition":"left"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained","contentSize":"760px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"color":{"text":"#ffffff"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-text-color has-fluid-4-xl-font-size" style="color:#ffffff"><a href="#">The year we stopped shipping on Fridays</a></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"}},"fontSize":"lg"} -->
<p class="has-text-color has-lg-font-size" style="color:#ffffff">Two incidents, one exhausted on-call rotation and a rule nobody wanted to put in writing. Twelve months on the release train looks slower on paper and feels considerably quieter in practice.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"}},"fontSize":"sm"} -->
<p class="has-text-color has-sm-font-size" style="color:#ffffff">Marta Vogel · Platform · 2 March 2026 · 14 min read</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"size":"md","className":"is-style-outline","iconName":"arrow-right","iconPosition":"right","style":{"color":{"text":"#ffffff"}}} -->
<div class="wp-block-button is-style-outline is-size-md"><a class="wp-block-button__link has-text-color wp-element-button" href="#" style="color:#ffffff">Read the lead story</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"grid","minimumColumnWidth":"22rem"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A wall of printed component swatches pinned in rows" style="border-radius:12px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Design · 6 min read</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><a href="#">A design system that finally fits in one file</a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Two people reviewing interview transcripts across a kitchen table" style="border-radius:12px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Research · 8 min read</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><a href="#">Onboarding rewritten by the people who quit</a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A monitoring dashboard glowing in an otherwise dark office" style="border-radius:12px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Infrastructure · 5 min read</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><a href="#">Cheaper logs, and what we lost along with them</a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A printed release note marked up in red pencil" style="border-radius:12px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Process · 4 min read</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><a href="#">The changelog nobody skims anymore</a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A headset resting on a stack of annotated hiring notes" style="border-radius:12px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Team · 9 min read</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><a href="#">Hiring notes from ninety screening calls</a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A laptop showing a plain text roadmap beside a cold espresso" style="border-radius:12px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Product · 7 min read</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><a href="#">Why our roadmap lives in the docs folder</a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
