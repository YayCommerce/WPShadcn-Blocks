<?php
/**
 * Title: Hero Section 8
 * Slug: shadcn/hero-section-8
 * Categories: shadcn, hero
 * Description: A hero section with an icon badge above the headline, description, two icon call-to-action buttons, and a right-side image.
 * AI Hint: Split hero with an icon outline badge above the H1, subtext, and a primary button with a trailing icon plus an outline button with a leading icon on the left, one large rounded image right; best for a SaaS/product landing page announcing a release.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"backgroundColor":"background"} -->
<div class="wp-block-group alignwide has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|7"}},"layout":{"type":"grid","minimumColumnWidth":"32rem"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Changelog v1.1","variant":"outline","iconName":"sparkles","iconPosition":"left"} /-->

<!-- wp:heading {"level":1,"fontSize":"6-xl"} -->
<h1 class="wp-block-heading has-6-xl-font-size">Blocks built with shadcn and Tailwind</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Finely crafted components ready to drop into your project — copy, paste, and ship your next release faster.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"lg","iconName":"arrow-right","iconPosition":"right"} -->
<div class="wp-block-button is-size-lg"><a class="wp-block-button__link wp-element-button" href="#">Browse components</a></div>
<!-- /wp:button -->

<!-- wp:button {"size":"lg","className":"is-style-outline","iconName":"star","iconPosition":"left"} -->
<div class="wp-block-button is-style-outline is-size-lg"><a class="wp-block-button__link wp-element-button" href="#">View on GitHub</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Product screenshot placeholder" style="border-radius:8px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
