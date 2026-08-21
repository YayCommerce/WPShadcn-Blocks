<?php
/**
 * Title: Hero Centered User Count
 * Slug: shadcn/hero-centered-user-count
 * Categories: shadcn, hero
 * Description: A narrow centred hero that closes on an overlapping avatar row above a bold user-count figure and its muted label.
 * AI Hint: Image-free centred hero in a 720px column: a fluid oversized h1, a two-line muted lead, a single filled primary button, then an overlapping four-avatar stack sitting directly above a bold headline number and a small muted caption naming what the number counts; reach for it when adoption volume is the strongest argument and the section should stay short enough to sit above the fold.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"fluid-7-xl"} -->
<h1 class="wp-block-heading has-text-align-center has-fluid-7-xl-font-size">Watch every pound land exactly where you meant it to.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Tallow reads your accounts once a day, sorts what actually moved, and shows the single number that says whether this month is still on plan.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"lg"} -->
<div class="wp-block-button is-size-lg"><a class="wp-block-button__link wp-element-button" href="#">Start tracking free</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"var:preset|spacing|4"} -->
<div style="height:var(--wp--preset--spacing--4)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/avatar-group {"maxVisible":4} -->
<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Nkechi Obiora","size":"md","fallback":"NO"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Aurélie Descamps","size":"md","fallback":"AD"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Hyun-woo Baek","size":"md","fallback":"HB"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Fiona Mulcahy","size":"md","fallback":"FM"} /-->
<!-- /wp:shadcn/avatar-group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700","lineHeight":"1.15"}},"fontSize":"3-xl"} -->
<p class="has-text-align-center has-3-xl-font-size" style="font-weight:700;line-height:1.15">38K+</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">Households balancing the month with Tallow</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
