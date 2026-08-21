<?php
/**
 * Title: CTA Contained Image Overlay
 * Slug: shadcn/cta-contained-image-overlay
 * Categories: shadcn, call-to-action
 * Description: A rounded photographic panel inset inside the content width, washed with a top-to-bottom dark gradient and carrying a centred eyebrow, headline, one supporting line and a single light button.
 * AI Hint: Contained image call to action — a rounded, inset photo panel (not edge to edge) whose dark gradient wash keeps a centred stack of uppercase eyebrow, oversized white headline, one reassuring line of body copy and a single high-contrast button legible over the picture; reach for it when a section needs the weight of photography but the page should still read as a series of cards rather than full-bleed bands. The overlay treatment is a one-attribute swap on the cover block — drop customGradient for a flat dim, or replace it with a radial-gradient for a vignette — so the same layout covers every overlay style.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:cover {"url":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","alt":"Folded paper sculpture lit from one side, its curves fanning across the frame","customGradient":"linear-gradient(180deg,rgba(9,9,11,0.3) 0%,rgba(9,9,11,0.78) 100%)","dimRatio":100,"minHeight":480,"minHeightUnit":"px","align":"wide","style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|6","bottom":"var:preset|spacing|9","left":"var:preset|spacing|6"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-cover alignwide" style="border-radius:16px;padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--6);min-height:480px"><img class="wp-block-cover__image-background" alt="Folded paper sculpture lit from one side, its curves fanning across the frame" src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(9,9,11,0.3) 0%,rgba(9,9,11,0.78) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textAlign":"center","style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600","letterSpacing":"0.16em","textTransform":"uppercase"}},"fontSize":"xs"} -->
<p class="has-text-align-center has-text-color has-xs-font-size" style="color:#ffffff;font-weight:600;letter-spacing:0.16em;text-transform:uppercase">Fourteen days, no card</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600","letterSpacing":"-0.02em"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-fluid-5-xl-font-size" style="color:#ffffff;font-weight:600;letter-spacing:-0.02em">Put the whole thing in front of your team this week</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"center","style":{"color":{"text":"#ffffff"},"typography":{"lineHeight":"1.6"}},"fontSize":"lg"} -->
<p class="has-text-align-center has-text-color has-lg-font-size" style="color:#ffffff;line-height:1.6">Open a workspace, invite whoever needs to see it, and keep everything you build if you decide to stay. Nothing is billed until someone on your side says so.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"md","iconName":"arrow-right","iconPosition":"right","style":{"color":{"text":"#0a0a0a","background":"#ffffff"}}} -->
<div class="wp-block-button is-size-md"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="#" style="color:#0a0a0a;background-color:#ffffff">Open a workspace</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
