<?php
/**
 * Title: Services Split Square Image Cards
 * Slug: shadcn/services-split-square-image-cards
 * Categories: shadcn, services
 * Description: A split section pairing an intro column with a tightly spaced two-by-two grid of square photo cards.
 * AI Hint: Services split with copy on the left — eyebrow, heading, supporting paragraph and an outline button spread over the full column height — and a compact two-by-two tile grid on the right where every card is a square dimmed cover carrying a white service name and link arrow at the bottom; reach for it when four services need equal weight and the section should read as one tidy block of imagery.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","services"],"patternName":"shadcn/services-split-square-image-cards","name":"Services Split Square Image Cards"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.08em"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.08em;text-transform:uppercase">Capabilities</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-fluid-4-xl-font-size">Four ways we plug into a team</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Take one lane or all four. Every engagement starts with a two-week discovery so the scope is written before the invoice is.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"md","className":"is-style-outline","iconName":"arrow-up-right","iconPosition":"right"} -->
<div class="wp-block-button is-style-outline is-size-md"><a class="wp-block-button__link wp-element-button" href="#">Read how we work</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","alt":"A research team sorting interview notes into clusters on a wall","dimRatio":50,"contentPosition":"bottom left","style":{"dimensions":{"aspectRatio":"1"},"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:12px;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><img class="wp-block-cover__image-background" alt="A research team sorting interview notes into clusters on a wall" src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-text-color has-lg-font-size" style="color:#ffffff;font-weight:600"><a href="#">Discovery</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"}},"fontSize":"lg"} -->
<p class="has-text-color has-lg-font-size" style="color:#ffffff">↗</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","alt":"A whiteboard covered in wireframe sketches and arrows","dimRatio":50,"contentPosition":"bottom left","style":{"dimensions":{"aspectRatio":"1"},"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:12px;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><img class="wp-block-cover__image-background" alt="A whiteboard covered in wireframe sketches and arrows" src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-text-color has-lg-font-size" style="color:#ffffff;font-weight:600"><a href="#">Interface design</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"}},"fontSize":"lg"} -->
<p class="has-text-color has-lg-font-size" style="color:#ffffff">↗</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","alt":"An engineer pairing at a desk with two terminals open","dimRatio":50,"contentPosition":"bottom left","style":{"dimensions":{"aspectRatio":"1"},"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:12px;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><img class="wp-block-cover__image-background" alt="An engineer pairing at a desk with two terminals open" src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-text-color has-lg-font-size" style="color:#ffffff;font-weight:600"><a href="#">Build and launch</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"}},"fontSize":"lg"} -->
<p class="has-text-color has-lg-font-size" style="color:#ffffff">↗</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","alt":"A support lead watching an uptime dashboard on a quiet morning","dimRatio":50,"contentPosition":"bottom left","style":{"dimensions":{"aspectRatio":"1"},"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:12px;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><img class="wp-block-cover__image-background" alt="A support lead watching an uptime dashboard on a quiet morning" src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-text-color has-lg-font-size" style="color:#ffffff;font-weight:600"><a href="#">Care and support</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"}},"fontSize":"lg"} -->
<p class="has-text-color has-lg-font-size" style="color:#ffffff">↗</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
