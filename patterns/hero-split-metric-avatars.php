<?php
/**
 * Title: Hero Split Metric Avatars
 * Slug: shadcn/hero-split-metric-avatars
 * Categories: shadcn, hero
 * Description: A two-column hero that gives the left side an oversized three-line headline with a button pair and keeps the proof — lead, labelled metric and a stacked avatar row — in a narrow right column.
 * AI Hint: Asymmetric image-free hero splitting a 1200px row into a wide left column holding a fluid oversized h1 over a small filled button with a chevron beside an outline button, and a narrow right column stacking a muted three-line lead, a small label, a heavy stat number and an overlapping four-avatar group that closes with a "+N" overflow chip; reach for it when the headline itself is the artwork and the numbers belong beside it rather than under it.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|4","bottom":"var:preset|spacing|10","left":"var:preset|spacing|4"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--4)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"62%","style":{"spacing":{"blockGap":"var:preset|spacing|6"}}} -->
<div class="wp-block-column" style="flex-basis:62%"><!-- wp:heading {"level":1,"style":{"typography":{"letterSpacing":"-0.03em"}},"fontSize":"fluid-7-xl"} -->
<h1 class="wp-block-heading has-fluid-7-xl-font-size" style="letter-spacing:-0.03em">Every pallet counted before the shift ends.</h1>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"sm","iconName":"chevron-right","iconPosition":"right"} -->
<div class="wp-block-button is-size-sm"><a class="wp-block-button__link wp-element-button" href="#">Get moving</a></div>
<!-- /wp:button -->

<!-- wp:button {"size":"sm","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline is-size-sm"><a class="wp-block-button__link wp-element-button" href="#">Watch a walkthrough</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","style":{"spacing":{"blockGap":"var:preset|spacing|5"}}} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">Floor leads reconcile stock without stopping the line, so the count on the screen and the count on the rack finally agree.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500">Sites running live</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.02em"}},"fontSize":"3-xl"} -->
<p class="has-3-xl-font-size" style="font-weight:700;letter-spacing:-0.02em">1,240</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/avatar-group {"maxVisible":4} -->
<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Rosalind Achebe, night shift supervisor","size":"lg","fallback":"RA"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Teodor Vasiliev, inventory analyst","size":"lg","fallback":"TV"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Mai Sasaki, receiving lead","size":"lg","fallback":"MS"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Delphine Okonjo, operations manager","size":"lg","fallback":"DO"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Hamish Craddock, dispatch coordinator","size":"lg","fallback":"HC"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Ingrid Solheim, warehouse director","size":"lg","fallback":"IS"} /-->
<!-- /wp:shadcn/avatar-group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
