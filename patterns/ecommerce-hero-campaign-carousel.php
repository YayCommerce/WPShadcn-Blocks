<?php
/**
 * Title: Ecommerce Hero Campaign Carousel
 * Slug: shadcn/ecommerce-hero-campaign-carousel
 * Categories: shadcn, hero
 * Description: A wide autoplaying carousel where each slide sets a campaign headline and call to action beside a product card over a dimmed photograph.
 * AI Hint: Ecommerce hero — a wide autoplaying carousel of tall rounded slides over dimmed photographs, each pairing a white product card on the left (tall image, status badges, category line, product name beside its price, and a star rating with review count) against a large white campaign headline, supporting line and solid light button on the right; best for a shop landing page that rotates through several campaigns while keeping one hero product shoppable on each.
 */

?>
<!-- wp:shadcn/carousel {"metadata":{"categories":["shadcn","hero"],"patternName":"shadcn/ecommerce-hero-campaign-carousel","name":"Ecommerce Hero Campaign Carousel"},"autoplay":true,"autoplayDelay":5000,"showDots":true,"slidesPerViewTablet":1,"slidesPerViewDesktop":1,"align":"wide"} -->
<!-- wp:shadcn/carousel-item -->
<!-- wp:cover {"url":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","alt":"Gel cream jar photographed on a sunlit plinth","dimRatio":50,"minHeight":90,"minHeightUnit":"vh","style":{"border":{"radius":"16px"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-radius:16px;min-height:90vh"><img class="wp-block-cover__image-background" alt="Gel cream jar photographed on a sunlit plinth" src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|8"},"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--8)"><!-- wp:column {"verticalAlignment":"center","width":"32%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:32%"><!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"blockGap":"0"}},"backgroundColor":"card","textColor":"card-foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-card-foreground-color has-card-background-color has-text-color has-background" style="border-radius:12px"><!-- wp:image {"width":"100%","height":"340px","scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Dewpoint gel cream tube and jar" style="object-fit:cover;width:100%;height:340px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Best seller","variant":"secondary"} /-->

<!-- wp:shadcn/badge {"text":"New","variant":"secondary"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">MOISTURISER</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600">Dewpoint Gel Cream</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600">$44.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">★★★★☆</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">4.6 · 5.8K reviews</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"68%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:68%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"color":{"text":"#ffffff"}},"fontSize":"fluid-7-xl"} -->
<h2 class="wp-block-heading has-text-color has-fluid-7-xl-font-size" style="color:#ffffff">Water-light moisture that holds all day</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"}},"fontSize":"lg"} -->
<p class="has-text-color has-lg-font-size" style="color:#ffffff">A featherweight gel cream that sinks in on contact and keeps skin comfortable from morning through to night.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"text":"#0a0a0a","background":"#ffffff"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="#" style="color:#0a0a0a;background-color:#ffffff">Shop the moisturiser</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:cover {"url":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","alt":"Night balm jar on a dark stone surface","dimRatio":50,"minHeight":90,"minHeightUnit":"vh","style":{"border":{"radius":"16px"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-radius:16px;min-height:90vh"><img class="wp-block-cover__image-background" alt="Night balm jar on a dark stone surface" src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|8"},"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--8)"><!-- wp:column {"verticalAlignment":"center","width":"32%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:32%"><!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"blockGap":"0"}},"backgroundColor":"card","textColor":"card-foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-card-foreground-color has-card-background-color has-text-color has-background" style="border-radius:12px"><!-- wp:image {"width":"100%","height":"340px","scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Ceramide recovery balm jar" style="object-fit:cover;width:100%;height:340px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Best seller","variant":"secondary"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">NIGHT BALM</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600">Ceramide Recovery Balm</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600">$52.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">4.8 · 3.1K reviews</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"68%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:68%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"color":{"text":"#ffffff"}},"fontSize":"fluid-7-xl"} -->
<h2 class="wp-block-heading has-text-color has-fluid-7-xl-font-size" style="color:#ffffff">Repair the barrier while you sleep</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"}},"fontSize":"lg"} -->
<p class="has-text-color has-lg-font-size" style="color:#ffffff">A rich ceramide balm that rebuilds a stressed barrier overnight, so mornings start calm instead of tight.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"text":"#0a0a0a","background":"#ffffff"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="#" style="color:#0a0a0a;background-color:#ffffff">Shop night care</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:cover {"url":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","alt":"Serum bottle beside fresh citrus","dimRatio":50,"minHeight":90,"minHeightUnit":"vh","style":{"border":{"radius":"16px"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-radius:16px;min-height:90vh"><img class="wp-block-cover__image-background" alt="Serum bottle beside fresh citrus" src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|8"},"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--8)"><!-- wp:column {"verticalAlignment":"center","width":"32%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:32%"><!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"blockGap":"0"}},"backgroundColor":"card","textColor":"card-foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-card-foreground-color has-card-background-color has-text-color has-background" style="border-radius:12px"><!-- wp:image {"width":"100%","height":"340px","scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Vitamin C daily serum bottle" style="object-fit:cover;width:100%;height:340px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"New","variant":"secondary"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">SERUM</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600">Vitamin C Daily Serum</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600">$38.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">★★★★☆</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">4.5 · 2.4K reviews</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"68%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:68%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"color":{"text":"#ffffff"}},"fontSize":"fluid-7-xl"} -->
<h2 class="wp-block-heading has-text-color has-fluid-7-xl-font-size" style="color:#ffffff">Brightness without the sting</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"}},"fontSize":"lg"} -->
<p class="has-text-color has-lg-font-size" style="color:#ffffff">A buffered vitamin C serum that evens tone gradually, made for skin that reacts to everything else.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"text":"#0a0a0a","background":"#ffffff"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="#" style="color:#0a0a0a;background-color:#ffffff">Shop the serum</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->
<!-- /wp:shadcn/carousel-item -->
<!-- /wp:shadcn/carousel -->
