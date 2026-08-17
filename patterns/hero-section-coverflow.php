<?php
/**
 * Title: Hero Section Coverflow
 * Slug: shadcn/hero-section-coverflow
 * Categories: shadcn, hero
 * Description: A split hero with a badge, headline, body copy and two call-to-action buttons on the left, and a faded logo marquee above a coverflow carousel of portrait cards on the right.
 * AI Hint: Two-column hero with a pill badge, large H1, supporting paragraph and dual arrow buttons on the left; on the right a faded, continuously scrolling logo strip sits above an autoplaying coverflow carousel whose centre portrait card scales up while its neighbours recede; stacks to one column on narrow screens; best for a product or SaaS landing page that wants social proof and imagery in the first screen.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"backgroundColor":"background"} -->
<div class="wp-block-group alignwide has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"grid","minimumColumnWidth":"30rem"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Flexible plan customized for you","variant":"secondary","iconName":"sparkles","iconPosition":"left"} /-->

<!-- wp:heading {"level":1,"fontSize":"fluid-7-xl"} -->
<h1 class="wp-block-heading has-fluid-7-xl-font-size">Blocks built with shadcn &amp; Tailwind.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Finely crafted sections you can drop straight into a page. Pick a layout, swap the copy and imagery, and ship your next release in an afternoon.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"lg","className":"is-style-outline","iconName":"arrow-up-right","iconPosition":"right"} -->
<div class="wp-block-button is-style-outline is-size-lg"><a class="wp-block-button__link wp-element-button" href="#">Documentation</a></div>
<!-- /wp:button -->

<!-- wp:button {"size":"lg","iconName":"arrow-up-right","iconPosition":"right"} -->
<div class="wp-block-button is-size-lg"><a class="wp-block-button__link wp-element-button" href="#">Get started</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|7"}}} -->
<div class="wp-block-group"><!-- wp:shadcn/marquee {"speed":40,"showFade":true,"gap":"3rem"} -->
<!-- wp:shadcn/marquee-item -->
<!-- wp:image {"width":"120px","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://ui.shadcn.com/placeholder.svg" alt="Customer logo placeholder" style="width:120px"/></figure>
<!-- /wp:image -->
<!-- /wp:shadcn/marquee-item -->

<!-- wp:shadcn/marquee-item -->
<!-- wp:image {"width":"120px","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://ui.shadcn.com/placeholder.svg" alt="Customer logo placeholder" style="width:120px"/></figure>
<!-- /wp:image -->
<!-- /wp:shadcn/marquee-item -->

<!-- wp:shadcn/marquee-item -->
<!-- wp:image {"width":"120px","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://ui.shadcn.com/placeholder.svg" alt="Customer logo placeholder" style="width:120px"/></figure>
<!-- /wp:image -->
<!-- /wp:shadcn/marquee-item -->

<!-- wp:shadcn/marquee-item -->
<!-- wp:image {"width":"120px","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://ui.shadcn.com/placeholder.svg" alt="Customer logo placeholder" style="width:120px"/></figure>
<!-- /wp:image -->
<!-- /wp:shadcn/marquee-item -->

<!-- wp:shadcn/marquee-item -->
<!-- wp:image {"width":"120px","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://ui.shadcn.com/placeholder.svg" alt="Customer logo placeholder" style="width:120px"/></figure>
<!-- /wp:image -->
<!-- /wp:shadcn/marquee-item -->

<!-- wp:shadcn/marquee-item -->
<!-- wp:image {"width":"120px","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="https://ui.shadcn.com/placeholder.svg" alt="Customer logo placeholder" style="width:120px"/></figure>
<!-- /wp:image -->
<!-- /wp:shadcn/marquee-item -->
<!-- /wp:shadcn/marquee -->

<!-- wp:shadcn/carousel {"autoplay":true,"autoplayDelay":3500,"loop":true,"showArrows":false,"showDots":true,"slidesPerView":1,"slidesPerViewTablet":2,"slidesPerViewDesktop":3,"gap":"1rem","effect":"coverflow"} -->
<!-- wp:shadcn/carousel-item {"style":{"border":{"radius":"12px"}}} -->
<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Portrait card placeholder" style="border-radius:12px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item {"style":{"border":{"radius":"12px"}}} -->
<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Portrait card placeholder" style="border-radius:12px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item {"style":{"border":{"radius":"12px"}}} -->
<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Portrait card placeholder" style="border-radius:12px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item {"style":{"border":{"radius":"12px"}}} -->
<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Portrait card placeholder" style="border-radius:12px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item {"style":{"border":{"radius":"12px"}}} -->
<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Portrait card placeholder" style="border-radius:12px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item {"style":{"border":{"radius":"12px"}}} -->
<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Portrait card placeholder" style="border-radius:12px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- /wp:shadcn/carousel-item -->
<!-- /wp:shadcn/carousel --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
