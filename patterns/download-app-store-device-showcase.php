<?php
/**
 * Title: Download App Store Device Showcase
 * Slug: shadcn/download-app-store-device-showcase
 * Categories: shadcn, download
 * Description: A centred app download section with a pill badge, a full-width headline, two store buttons and a row of three phone mockups.
 * AI Hint: Centred mobile download section that opens with a small outlined pill badge, sets one very wide single-line h2 across the full wide container, follows it with a filled download button beside an outline download button, and closes with three tall rounded phone mockups sitting side by side; reach for it when the app itself is the proof and the page needs one confident line plus the screens above the fold.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|6"}},"layout":{"type":"constrained","contentSize":"1120px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"9999px"},"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem","left":"0.75rem","right":"0.75rem"}}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-border-color has-muted-foreground-color has-text-color has-xs-font-size" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:9999px;padding-top:0.25rem;padding-right:0.75rem;padding-bottom:0.25rem;padding-left:0.75rem">Brightpath for phones</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"600","letterSpacing":"-0.02em","lineHeight":"1.1"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size" style="font-weight:600;letter-spacing:-0.02em;line-height:1.1">Put next week's shifts in every pocket on the crew</h2>
<!-- /wp:heading -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"primary-foreground","size":"lg","style":{"border":{"radius":"8px"}},"iconName":"download","iconPosition":"left"} -->
<div class="wp-block-button is-size-lg"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:8px">Get it for iOS</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline","size":"lg","style":{"border":{"radius":"8px"}},"iconName":"download","iconPosition":"left"} -->
<div class="wp-block-button is-style-outline is-size-lg"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:8px">Get it for Android</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5","margin":{"top":"var:preset|spacing|6"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"bottom"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--6)"><!-- wp:image {"aspectRatio":"9/19","scale":"cover","width":"240px","sizeSlug":"large","style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"28px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="The Brightpath week view on a phone, showing shifts grouped by day" class="has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:28px;aspect-ratio:9/19;object-fit:cover;width:240px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"9/19","scale":"cover","width":"240px","sizeSlug":"large","style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"28px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A Brightpath shift card open on a phone, with the swap request button in view" class="has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:28px;aspect-ratio:9/19;object-fit:cover;width:240px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"9/19","scale":"cover","width":"240px","sizeSlug":"large","style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"28px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="The Brightpath availability screen on a phone, with next week already filled in" class="has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:28px;aspect-ratio:9/19;object-fit:cover;width:240px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
