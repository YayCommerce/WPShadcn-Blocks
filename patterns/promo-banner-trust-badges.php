<?php
/**
 * Title: Promo Banner Trust Badges
 * Slug: shadcn/promo-banner-trust-badges
 * Categories: shadcn, banner
 * Description: A slim full-width bar carrying three reassurance points, each an icon beside a short line.
 * AI Hint: Reassurance strip for a shop — three icon-and-label pairs spread across a filled bar covering shipping, returns and payment safety. It carries no offer and no deadline, so it can sit permanently above the header or directly over the footer; use a sale or countdown bar when there is something to announce.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"full","className":"is-style-shadcn-on-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|2","bottom":"var:preset|spacing|2","left":"var:preset|spacing|4","right":"var:preset|spacing|4"}}},"backgroundColor":"primary","textColor":"primary-foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-shadcn-on-dark has-primary-foreground-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--2);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--2);padding-left:var(--wp--preset--spacing--4)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Free shipping over £50","variant":"ghost","iconName":"truck"} /-->

<!-- wp:shadcn/badge {"text":"Thirty days to change your mind","variant":"ghost","iconName":"package"} /-->

<!-- wp:shadcn/badge {"text":"Checkout is secure","variant":"ghost","iconName":"shield-check"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
