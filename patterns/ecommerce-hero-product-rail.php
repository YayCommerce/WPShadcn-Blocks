<?php
/**
 * Title: Ecommerce Hero Product Rail
 * Slug: shadcn/ecommerce-hero-product-rail
 * Categories: shadcn, hero
 * Description: A wide dimmed photo panel with a headline and filled call to action beside a narrow dark rail autoplaying through flush product cards with pricing and a quick-view button.
 * AI Hint: Ecommerce hero — a two-thirds width rounded cover panel over a dimmed photograph with a bottom-left white headline and a solid white button, beside a one-third width near-black rail holding a vertical autoplaying carousel of edge-to-edge white product cards (fixed-height thumbnail, name, price with an optional struck-through regular price, outline quick-view button); best for a shop landing page that pairs one lifestyle photo with a rotating list of featured products.
 */

?>
<!-- wp:columns {"metadata":{"categories":["shadcn","hero"],"patternName":"shadcn/ecommerce-hero-product-rail","name":"Ecommerce Hero Product Rail"},"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66%"} -->
<div class="wp-block-column" style="flex-basis:66%"><!-- wp:cover {"url":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","alt":"Hand-thrown ceramic cup resting in warm light","dimRatio":40,"minHeight":760,"minHeightUnit":"px","contentPosition":"bottom left","style":{"border":{"radius":"16px"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:16px;min-height:760px"><img class="wp-block-cover__image-background" alt="Hand-thrown ceramic cup resting in warm light" src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"style":{"color":{"text":"#ffffff"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-color has-fluid-5-xl-font-size" style="color:#ffffff">Small-batch pottery for everyday rituals</h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"text":"#0a0a0a","background":"#ffffff"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="#" style="color:#0a0a0a;background-color:#ffffff">Shop tableware</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"34%"} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:group {"backgroundColor":"foreground","style":{"spacing":{"padding":{"top":"var:preset|spacing|3","right":"0","bottom":"var:preset|spacing|3","left":"0"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group has-foreground-background-color has-background" style="padding-top:var(--wp--preset--spacing--3);padding-right:0;padding-bottom:var(--wp--preset--spacing--3);padding-left:0"><!-- wp:shadcn/carousel {"autoplay":true,"autoplayDelay":3500,"loop":true,"showArrows":false,"showDots":false,"slidesPerView":1,"slidesPerViewTablet":1,"slidesPerViewDesktop":1,"orientation":"vertical","className":"is-style-shadcn-vertical-rail"} -->
<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"backgroundColor":"card","textColor":"card-foreground","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-card-foreground-color has-card-background-color has-text-color has-background"><!-- wp:image {"width":"100%","height":"112px","scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Hand-thrown dinner plate in matte glaze" style="object-fit:cover;width:100%;height:112px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">$52.00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size"><s>$68.00</s></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Hand-Thrown Dinner Plate</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Quick view</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"backgroundColor":"card","textColor":"card-foreground","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-card-foreground-color has-card-background-color has-text-color has-background"><!-- wp:image {"width":"100%","height":"112px","scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Textured stoneware mug on a wooden shelf" style="object-fit:cover;width:100%;height:112px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">$28.00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Textured Stoneware Mug</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Quick view</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"backgroundColor":"card","textColor":"card-foreground","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-card-foreground-color has-card-background-color has-text-color has-background"><!-- wp:image {"width":"100%","height":"112px","scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Sculpted ceramic vase in a sunlit corner" style="object-fit:cover;width:100%;height:112px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">$46.00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Sculpted Ceramic Vase</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Quick view</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"backgroundColor":"card","textColor":"card-foreground","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-card-foreground-color has-card-background-color has-text-color has-background"><!-- wp:image {"width":"100%","height":"112px","scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Glazed cup and saucer set stacked on a counter" style="object-fit:cover;width:100%;height:112px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">$34.00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Glazed Cup and Saucer Set</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Quick view</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->
<!-- /wp:shadcn/carousel --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
