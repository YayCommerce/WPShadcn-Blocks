<?php
/**
 * Title: Incentives Scrolling Icon Marquee
 * Slug: shadcn/incentives-scrolling-icon-marquee
 * Categories: shadcn, incentives
 * Description: A continuously scrolling row of icon incentives, each with a short title and a two-line note, faded at both edges.
 * AI Hint: Looping incentive ticker — a single marquee row of six icon-and-text items that drifts sideways, pauses when hovered and fades out at both edges, with no heading of its own; reach for it when a store has more service promises than fit a static row and the strip should read as an ongoing list rather than a fixed set of four.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","incentives"],"patternName":"shadcn/incentives-scrolling-icon-marquee","name":"Incentives Scrolling Icon Marquee"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|7"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7)"><!-- wp:shadcn/marquee {"speed":40,"showFade":true,"gap":"3rem","align":"wide"} -->
<!-- wp:shadcn/marquee-item -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"28px","height":"28px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="" style="width:28px;height:28px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained","contentSize":"260px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">Checked before it ships</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Every order passes a two-stage inspection before it leaves the depot.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/marquee-item -->

<!-- wp:shadcn/marquee-item -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"28px","height":"28px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="" style="width:28px;height:28px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained","contentSize":"260px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">Packed the same day</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Anything ordered before three in the afternoon goes out that day.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/marquee-item -->

<!-- wp:shadcn/marquee-item -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"28px","height":"28px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="" style="width:28px;height:28px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained","contentSize":"260px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">Delivery on us</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Standard shipping costs nothing once the basket clears the threshold.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/marquee-item -->

<!-- wp:shadcn/marquee-item -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"28px","height":"28px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="" style="width:28px;height:28px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained","contentSize":"260px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">Payments locked down</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Card details are encrypted end to end and never stored on our side.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/marquee-item -->

<!-- wp:shadcn/marquee-item -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"28px","height":"28px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="" style="width:28px;height:28px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained","contentSize":"260px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">Kinder materials</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Boxes are plastic free and the filler is recycled paper throughout.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/marquee-item -->

<!-- wp:shadcn/marquee-item -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"28px","height":"28px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="" style="width:28px;height:28px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained","contentSize":"260px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">Two-year cover</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Manufacturing faults are repaired or replaced at no cost to you.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/marquee-item -->
<!-- /wp:shadcn/marquee --></div>
<!-- /wp:group -->
