<?php
/**
 * Title: CTA Fullwidth Image Overlay
 * Slug: shadcn/cta-fullwidth-image-overlay
 * Categories: shadcn, call-to-action
 * Description: An edge-to-edge photographic band with square corners, darkened by a gradient wash, holding a centred headline, a supporting line and a pair of buttons.
 * AI Hint: Full-bleed image call to action — a photograph run edge to edge across the whole viewport with no rounded corners and no gutter, gradient-darkened so a centred stack of uppercase eyebrow, oversized white headline, one supporting paragraph and two buttons (a solid light primary and a white outline secondary) stays readable over it; reach for it as the closing band of a long page where the section should break the page rhythm rather than sit inside it. The overlay treatment is a one-attribute swap on the cover block — drop customGradient for a flat dim, or replace it with a radial-gradient for a vignette — so the same layout covers every overlay style.
 */

?>
<!-- wp:cover {"url":"https://ui.shadcn.com/placeholder.svg","alt":"Long exposure of headlights sweeping past a glass office block at dusk","customGradient":"linear-gradient(180deg,rgba(9,9,11,0.35) 0%,rgba(9,9,11,0.72) 55%,rgba(9,9,11,0.85) 100%)","dimRatio":100,"minHeight":620,"minHeightUnit":"px","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|6","bottom":"var:preset|spacing|10","left":"var:preset|spacing|6"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--6);min-height:620px"><img class="wp-block-cover__image-background" alt="Long exposure of headlights sweeping past a glass office block at dusk" src="https://ui.shadcn.com/placeholder.svg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(9,9,11,0.35) 0%,rgba(9,9,11,0.72) 55%,rgba(9,9,11,0.85) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textAlign":"center","style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600","letterSpacing":"0.16em","textTransform":"uppercase"}},"fontSize":"xs"} -->
<p class="has-text-align-center has-text-color has-xs-font-size" style="color:#ffffff;font-weight:600;letter-spacing:0.16em;text-transform:uppercase">Now onboarding for spring</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600","letterSpacing":"-0.02em"}},"fontSize":"fluid-7-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-fluid-7-xl-font-size" style="color:#ffffff;font-weight:600;letter-spacing:-0.02em">Stop stitching the last mile together by hand</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"center","style":{"color":{"text":"#ffffff"},"typography":{"lineHeight":"1.6"}},"fontSize":"lg"} -->
<p class="has-text-align-center has-text-color has-lg-font-size" style="color:#ffffff;line-height:1.6">Connect the systems you already run, keep the reports your finance team already trusts, and let the routing look after itself from the first week onwards.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"lg","iconName":"arrow-right","iconPosition":"right","style":{"color":{"text":"#0a0a0a","background":"#ffffff"}}} -->
<div class="wp-block-button is-size-lg"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="#" style="color:#0a0a0a;background-color:#ffffff">Start the free month</a></div>
<!-- /wp:button -->

<!-- wp:button {"size":"lg","className":"is-style-outline","style":{"color":{"text":"#ffffff"}}} -->
<div class="wp-block-button is-style-outline is-size-lg"><a class="wp-block-button__link has-text-color wp-element-button" href="#" style="color:#ffffff">Talk to an engineer</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
