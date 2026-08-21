<?php
/**
 * Title: Hero Announcement Review Split
 * Slug: shadcn/hero-announcement-review-split
 * Categories: shadcn, hero
 * Description: A wide two-column hero with an announcement pill and oversized headline on the left and a rating summary with reviewer avatars on the right.
 * AI Hint: Split hero whose broad left column stacks a secondary badge beside an arrow text link, a fluid oversized h1 and a filled-plus-outline button pair, while the narrow right column carries a muted lead, a five-star row, a large rating figure, a verified-review count and a small overlapping avatar pair; reach for it when the headline needs the full left half to itself and the proof should read as a sidebar rather than a footer.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|10"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"58%","style":{"spacing":{"blockGap":"var:preset|spacing|5"}}} -->
<div class="wp-block-column" style="flex-basis:58%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Field notes","variant":"secondary"} /-->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><a href="#">How Brightwater halved its dispatch window →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"fontSize":"fluid-7-xl"} -->
<h1 class="wp-block-heading has-fluid-7-xl-font-size">Send every crew out before the coffee goes cold.</h1>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"md"} -->
<div class="wp-block-button is-size-md"><a class="wp-block-button__link wp-element-button" href="#">Book a demo</a></div>
<!-- /wp:button -->

<!-- wp:button {"size":"md","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline is-size-md"><a class="wp-block-button__link wp-element-button" href="#">Watch live routing</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"34%","style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">Schedulers in eleven countries plan the day with Runline, reshuffle jobs the moment a van drops out, and still land inside the window they promised the customer.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"lg"} -->
<p class="has-lg-font-size">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","lineHeight":"1.1"}},"fontSize":"4-xl"} -->
<p class="has-4-xl-font-size" style="font-weight:700;line-height:1.1">4.8</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Based on 340 verified reviews from working dispatch teams</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/avatar-group {"maxVisible":2} -->
<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Ottilie Bergström","size":"md","fallback":"OB"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Desmond Achebe","size":"md","fallback":"DA"} /-->
<!-- /wp:shadcn/avatar-group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
