<?php
/**
 * Title: Promo Banner Free Shipping Progress
 * Slug: shadcn/promo-banner-free-shipping-progress
 * Categories: shadcn, banner
 * Description: A slim full-width bar pairing a delivery line with a progress track showing how much more a shopper needs to spend to earn free shipping.
 * AI Hint: Thin site-wide promo bar for a shop — a truck icon beside a short "spend more for free shipping" line, followed by a narrow progress track that fills as the cart total approaches the free-shipping threshold. The track reads the live cart through WooCommerce and renders nothing without it, so reach for this only on a store; use the plain sale bar instead for a marketing site.
 */

?>
<!-- wp:group {"align":"full","className":"is-style-shadcn-on-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3","left":"var:preset|spacing|4","right":"var:preset|spacing|4"}}},"backgroundColor":"primary","textColor":"primary-foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-shadcn-on-dark has-primary-foreground-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--4)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Spend a little more and delivery is on us","variant":"ghost","iconName":"truck"} /-->

<!-- wp:shadcn/progress {"maxValue":100,"currentValue":"dynamic","dynamicValue":"free_shipping","style":{"trackColor":"color-mix(in srgb, currentColor 25%, transparent)","fillColor":"currentColor"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
