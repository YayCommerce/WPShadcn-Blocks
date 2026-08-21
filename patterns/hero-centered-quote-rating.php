<?php
/**
 * Title: Hero Centered Quote Rating
 * Slug: shadcn/hero-centered-quote-rating
 * Categories: shadcn, hero
 * Description: A narrow centred hero that follows its headline and single button with a customer pull-quote and a combined avatar, star and review-count proof row.
 * AI Hint: Image-free centred hero in a 720px column: a fluid oversized h1, a two-line muted lead, one filled primary button, then a medium-weight centred pull-quote with a small attribution line and a closing proof row pairing an overlapping five-avatar stack with a star row, a bold rating figure and a muted review count; reach for it when one quotable sentence from a named customer carries more weight than a screenshot.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"fluid-7-xl"} -->
<h1 class="wp-block-heading has-text-align-center has-fluid-7-xl-font-size">Every answer your team keeps losing, in one searchable place.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Decisions, half-finished specs and the reasoning behind both stop drifting between chat threads. Ledgerbook keeps them indexed, current and one shortcut away.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"lg"} -->
<div class="wp-block-button is-size-lg"><a class="wp-block-button__link wp-element-button" href="#">Create a workspace</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"var:preset|spacing|5"} -->
<div style="height:var(--wp--preset--spacing--5)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained","contentSize":"620px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"500","lineHeight":"1.35"}},"fontSize":"2-xl"} -->
<p class="has-text-align-center has-2-xl-font-size" style="font-weight:500;line-height:1.35">“We stopped repeating ourselves in stand-up within a fortnight of moving in.”</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size">Marisol Adeyemi, Head of Operations at Kestrel Labs</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/avatar-group {"maxVisible":5} -->
<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Ines Kowalczyk","size":"sm","fallback":"IK"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Tobias Ferreira","size":"sm","fallback":"TF"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Amara Diallo","size":"sm","fallback":"AD"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Rohan Sethupathy","size":"sm","fallback":"RS"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Greta Lindqvist","size":"sm","fallback":"GL"} /-->
<!-- /wp:shadcn/avatar-group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">★★★★★ <strong>4.9</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">480+ reviews</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
