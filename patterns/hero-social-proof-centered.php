<?php
/**
 * Title: Hero Social Proof Centered
 * Slug: shadcn/hero-social-proof-centered
 * Categories: shadcn, hero
 * Description: A narrow centred hero — beta badge, oversized headline, two-line lead and a pair of buttons — closing on a row of stacked customer avatars beside a rating badge.
 * AI Hint: Image-free centred hero in a 760px column: a secondary badge with a sparkle, a fluid oversized h1, a two-sentence muted lead, a filled primary button next to an outline one, and a proof row pairing an overlapping five-avatar stack with a ghost rating badge above a small reassurance line; reach for it when the launch argument rests on customers already using the product rather than on a screenshot.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Now in open beta","variant":"secondary","iconName":"sparkles"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"fluid-7-xl"} -->
<h1 class="wp-block-heading has-text-align-center has-fluid-7-xl-font-size">Ship the interface before the deadline moves</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Assemble production screens from blocks your designers already signed off on. Swap the copy, keep the tokens, and hand the whole thing back for review the same afternoon.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"lg","iconName":"arrow-right","iconPosition":"right"} -->
<div class="wp-block-button is-size-lg"><a class="wp-block-button__link wp-element-button" href="#">Start building free</a></div>
<!-- /wp:button -->

<!-- wp:button {"size":"lg","className":"is-style-outline","iconName":"book-open","iconPosition":"left"} -->
<div class="wp-block-button is-style-outline is-size-lg"><a class="wp-block-button__link wp-element-button" href="#">Read the docs</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/avatar-group {"maxVisible":5} -->
<!-- wp:shadcn/avatar {"mediaUrl":"https://ui.shadcn.com/placeholder.svg","mediaAlt":"Priya Raghunathan","size":"md","fallback":"PR"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"https://ui.shadcn.com/placeholder.svg","mediaAlt":"Léon Marchetti","size":"md","fallback":"LM"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"https://ui.shadcn.com/placeholder.svg","mediaAlt":"Thandiwe Mokoena","size":"md","fallback":"TM"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"https://ui.shadcn.com/placeholder.svg","mediaAlt":"Jonas Halvorsen","size":"md","fallback":"JH"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"https://ui.shadcn.com/placeholder.svg","mediaAlt":"Camila Restrepo","size":"md","fallback":"CR"} /-->
<!-- /wp:shadcn/avatar-group -->

<!-- wp:shadcn/badge {"text":"4.9 out of 5 from 2,300 teams","variant":"ghost","iconName":"star"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size">No card required — the free workspace stays free for as long as you want it.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
