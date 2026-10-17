<?php
/**
 * Title: Hero Avatar Marquee Proof
 * Slug: shadcn/hero-avatar-marquee-proof
 * Categories: shadcn, hero
 * Description: A centred hero that drops a wide, continuously scrolling strip of customer avatars between its headcount proof line and its button pair.
 * AI Hint: Centred hero built in three bands — a 720px column carrying a fluid oversized h1, a muted two-line lead and a proof line that pairs a heavy number with muted text, then a full-width faded marquee of fourteen circular avatars scrolling slowly across the section, and finally a centred filled and outline button pair below the strip; reach for it when the argument is the sheer number of teams already on board and a static avatar stack would undersell it.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|7"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"letterSpacing":"-0.03em"}},"fontSize":"fluid-7-xl"} -->
<h1 class="wp-block-heading has-text-align-center has-fluid-7-xl-font-size" style="letter-spacing:-0.03em">Fill the role before the shortlist goes stale</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-base-font-size">Structured scorecards, shared debriefs and one calendar the whole panel actually keeps, so a candidate worth hiring never waits a week for an answer.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:700">620+</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">hiring teams onboarded</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:shadcn/marquee {"speed":28,"direction":"left","showFade":true,"gap":"1.25rem","align":"wide"} -->
<!-- wp:shadcn/marquee-item -->
<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Adaeze Nwachukwu, talent partner","size":"lg","fallback":"AN"} /-->
<!-- /wp:shadcn/marquee-item -->

<!-- wp:shadcn/marquee-item -->
<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Rune Bjornstad, engineering manager","size":"lg","fallback":"RB"} /-->
<!-- /wp:shadcn/marquee-item -->

<!-- wp:shadcn/marquee-item -->
<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Chiara Lombardi, people operations","size":"lg","fallback":"CL"} /-->
<!-- /wp:shadcn/marquee-item -->

<!-- wp:shadcn/marquee-item -->
<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Devendra Rao, technical recruiter","size":"lg","fallback":"DR"} /-->
<!-- /wp:shadcn/marquee-item -->

<!-- wp:shadcn/marquee-item -->
<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Solene Fabre, head of talent","size":"lg","fallback":"SF"} /-->
<!-- /wp:shadcn/marquee-item -->

<!-- wp:shadcn/marquee-item -->
<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Marcus Whitlow, hiring panel lead","size":"lg","fallback":"MW"} /-->
<!-- /wp:shadcn/marquee-item -->

<!-- wp:shadcn/marquee-item -->
<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Yuki Tanabe, design director","size":"lg","fallback":"YT"} /-->
<!-- /wp:shadcn/marquee-item -->

<!-- wp:shadcn/marquee-item -->
<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Priyanka Deshmukh, sourcing lead","size":"lg","fallback":"PD"} /-->
<!-- /wp:shadcn/marquee-item -->

<!-- wp:shadcn/marquee-item -->
<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Tomas Ferreira, staff engineer","size":"lg","fallback":"TF"} /-->
<!-- /wp:shadcn/marquee-item -->

<!-- wp:shadcn/marquee-item -->
<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Halima Yusuf, people partner","size":"lg","fallback":"HY"} /-->
<!-- /wp:shadcn/marquee-item -->

<!-- wp:shadcn/marquee-item -->
<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Eero Lahtinen, product lead","size":"lg","fallback":"EL"} /-->
<!-- /wp:shadcn/marquee-item -->

<!-- wp:shadcn/marquee-item -->
<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Beatriz Salgado, operations manager","size":"lg","fallback":"BS"} /-->
<!-- /wp:shadcn/marquee-item -->

<!-- wp:shadcn/marquee-item -->
<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Owen Kirkbride, finance lead","size":"lg","fallback":"OK"} /-->
<!-- /wp:shadcn/marquee-item -->

<!-- wp:shadcn/marquee-item -->
<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Anneke Visser, chief of staff","size":"lg","fallback":"AV"} /-->
<!-- /wp:shadcn/marquee-item -->
<!-- /wp:shadcn/marquee -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"md"} -->
<div class="wp-block-button is-size-md"><a class="wp-block-button__link wp-element-button" href="#">Start a free search</a></div>
<!-- /wp:button -->

<!-- wp:button {"size":"md","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline is-size-md"><a class="wp-block-button__link wp-element-button" href="#">See a sample scorecard</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
