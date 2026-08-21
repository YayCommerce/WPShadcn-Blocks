<?php
/**
 * Title: Testimonial Inline Avatar CTA
 * Slug: shadcn/testimonial-inline-avatar-cta
 * Categories: shadcn, testimonials
 * Description: A short centred headline strip with a stack of overlapping customer avatars set inside the sentence and a single call-to-action button beneath.
 * AI Hint: Compact centred social-proof strip — an oversized two-part headline that wraps around an inline group of overlapping round customer avatars, followed by one primary call-to-action button. Best as a light proof band between larger sections, or directly above a signup, when you want faces rather than full quotes.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|6"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700"}},"fontSize":"fluid-5-xl"} -->
<p class="has-text-align-center has-fluid-5-xl-font-size" style="font-weight:700">Meet your next hire</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/avatar-group {"maxVisible":3} -->
<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Amara Osei","size":"lg","fallback":"AO"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Ruben Castellanos","size":"lg","fallback":"RC"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Ingrid Halvorsen","size":"lg","fallback":"IH"} /-->
<!-- /wp:shadcn/avatar-group -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700"}},"fontSize":"fluid-5-xl"} -->
<p class="has-text-align-center has-fluid-5-xl-font-size" style="font-weight:700">in under a week.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"primary-foreground","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:8px">Start free today</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
