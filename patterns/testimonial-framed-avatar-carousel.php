<?php
/**
 * Title: Testimonial Framed Avatar Carousel
 * Slug: shadcn/testimonial-framed-avatar-carousel
 * Categories: shadcn, testimonials
 * Description: A centered carousel that leads with the author — a round avatar set inside a double rounded frame, then the name and role, then the quote in its own card below.
 * AI Hint: Testimonial carousel — a centered section heading above one slide at a time, each slide opening with a round portrait nested inside a dark double rounded frame, followed by the author's name and their role and handle, and only then the quote itself set large and centered in its own soft card; dot indicators sit underneath. Best when the person giving the endorsement matters more than the sentence, so the face and title are read before the words.
 */

?>
<!-- wp:group {"metadata":{"categories":["shadcn","testimonials"],"patternName":"shadcn/testimonial-framed-avatar-carousel","name":"Testimonial Framed Avatar Carousel"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|9"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.03em"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size" style="font-weight:700;letter-spacing:-0.03em">Testimonials</h2>
<!-- /wp:heading -->

<!-- wp:shadcn/carousel {"showArrows":false,"slidesPerView":1,"slidesPerViewTablet":1,"slidesPerViewDesktop":1} -->
<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"metadata":{"name":"Slide"},"style":{"spacing":{"blockGap":"var:preset|spacing|7"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Avatar Frame"},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}}},"backgroundColor":"foreground","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group has-foreground-background-color has-background" style="border-radius:24px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:group {"style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}}},"backgroundColor":"background","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:16px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:image {"width":"80px","height":"80px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Portrait of Elena Duarte" style="border-radius:9999px;object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Author"},"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"500","letterSpacing":"-0.02em"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-text-align-center has-2-xl-font-size" style="font-weight:500;letter-spacing:-0.02em">Elena Duarte</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Creative Director @ Larkspur Studio</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Quote Card"},"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|6","bottom":"var:preset|spacing|7","left":"var:preset|spacing|6"}}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-card-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"align":"center","metadata":{"name":"Quote"},"style":{"typography":{"letterSpacing":"-0.02em"}},"fontSize":"3-xl"} -->
<p class="has-text-align-center has-3-xl-font-size" style="letter-spacing:-0.02em">“We rebuilt our whole brand system on it and never once had to explain the tool to a new designer.”</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"metadata":{"name":"Slide"},"style":{"spacing":{"blockGap":"var:preset|spacing|7"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Avatar Frame"},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}}},"backgroundColor":"foreground","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group has-foreground-background-color has-background" style="border-radius:24px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:group {"style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}}},"backgroundColor":"background","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:16px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:image {"width":"80px","height":"80px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Portrait of Idris Falade" style="border-radius:9999px;object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Author"},"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"500","letterSpacing":"-0.02em"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-text-align-center has-2-xl-font-size" style="font-weight:500;letter-spacing:-0.02em">Idris Falade</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Head of Engineering @ Northreach</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Quote Card"},"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|6","bottom":"var:preset|spacing|7","left":"var:preset|spacing|6"}}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-card-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"align":"center","metadata":{"name":"Quote"},"style":{"typography":{"letterSpacing":"-0.02em"}},"fontSize":"3-xl"} -->
<p class="has-text-align-center has-3-xl-font-size" style="letter-spacing:-0.02em">“Deploys stopped being an event. We ship on a Thursday afternoon now and nobody stays late for it.”</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"metadata":{"name":"Slide"},"style":{"spacing":{"blockGap":"var:preset|spacing|7"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Avatar Frame"},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}}},"backgroundColor":"foreground","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group has-foreground-background-color has-background" style="border-radius:24px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:group {"style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}}},"backgroundColor":"background","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:16px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:image {"width":"80px","height":"80px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Portrait of Hanne Vogel" style="border-radius:9999px;object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Author"},"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"500","letterSpacing":"-0.02em"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-text-align-center has-2-xl-font-size" style="font-weight:500;letter-spacing:-0.02em">Hanne Vogel</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Chief Technology Officer @ Kestrel Labs</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Quote Card"},"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|6","bottom":"var:preset|spacing|7","left":"var:preset|spacing|6"}}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-card-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"align":"center","metadata":{"name":"Quote"},"style":{"typography":{"letterSpacing":"-0.02em"}},"fontSize":"3-xl"} -->
<p class="has-text-align-center has-3-xl-font-size" style="letter-spacing:-0.02em">“It answered the one question our old stack never could: what changed, and who decided it.”</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"metadata":{"name":"Slide"},"style":{"spacing":{"blockGap":"var:preset|spacing|7"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Avatar Frame"},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}}},"backgroundColor":"foreground","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group has-foreground-background-color has-background" style="border-radius:24px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:group {"style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}}},"backgroundColor":"background","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:16px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:image {"width":"80px","height":"80px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Portrait of Samir Qureshi" style="border-radius:9999px;object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Author"},"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"500","letterSpacing":"-0.02em"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-text-align-center has-2-xl-font-size" style="font-weight:500;letter-spacing:-0.02em">Samir Qureshi</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Founder @ Brightpath</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Quote Card"},"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|6","bottom":"var:preset|spacing|7","left":"var:preset|spacing|6"}}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-card-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"align":"center","metadata":{"name":"Quote"},"style":{"typography":{"letterSpacing":"-0.02em"}},"fontSize":"3-xl"} -->
<p class="has-text-align-center has-3-xl-font-size" style="letter-spacing:-0.02em">“Two people did the work of six, and not because anyone was working harder.”</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"metadata":{"name":"Slide"},"style":{"spacing":{"blockGap":"var:preset|spacing|7"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Avatar Frame"},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}}},"backgroundColor":"foreground","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group has-foreground-background-color has-background" style="border-radius:24px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:group {"style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}}},"backgroundColor":"background","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:16px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:image {"width":"80px","height":"80px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Portrait of Wren Callahan" style="border-radius:9999px;object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Author"},"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"500","letterSpacing":"-0.02em"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-text-align-center has-2-xl-font-size" style="font-weight:500;letter-spacing:-0.02em">Wren Callahan</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">VP of Operations @ Latchford</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Quote Card"},"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|6","bottom":"var:preset|spacing|7","left":"var:preset|spacing|6"}}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-card-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"align":"center","metadata":{"name":"Quote"},"style":{"typography":{"letterSpacing":"-0.02em"}},"fontSize":"3-xl"} -->
<p class="has-text-align-center has-3-xl-font-size" style="letter-spacing:-0.02em">“The handover notes I used to write on a Friday now exist before I think to write them.”</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"metadata":{"name":"Slide"},"style":{"spacing":{"blockGap":"var:preset|spacing|7"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Avatar Frame"},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}}},"backgroundColor":"foreground","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group has-foreground-background-color has-background" style="border-radius:24px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:group {"style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}}},"backgroundColor":"background","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:16px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:image {"width":"80px","height":"80px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Portrait of Bea Ostrowski" style="border-radius:9999px;object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Author"},"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"500","letterSpacing":"-0.02em"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-text-align-center has-2-xl-font-size" style="font-weight:500;letter-spacing:-0.02em">Bea Ostrowski</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Product Lead @ Halden</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Quote Card"},"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|6","bottom":"var:preset|spacing|7","left":"var:preset|spacing|6"}}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-card-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"align":"center","metadata":{"name":"Quote"},"style":{"typography":{"letterSpacing":"-0.02em"}},"fontSize":"3-xl"} -->
<p class="has-text-align-center has-3-xl-font-size" style="letter-spacing:-0.02em">“Our first week felt like tidying a room we had been stepping around for two years.”</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->
<!-- /wp:shadcn/carousel --></div>
<!-- /wp:group -->
