<?php
/**
 * Title: Hero Trust Logo Strip
 * Slug: shadcn/hero-trust-logo-strip
 * Categories: shadcn, hero
 * Description: A centred hero — trust badge, oversized headline, two-line lead and a button pair — closing on a quiet six-wordmark customer strip that spans wider than the text column.
 * AI Hint: Image-free centred hero in a 760px column: a secondary badge with a people icon, a fluid oversized h1, a two-sentence muted lead and a filled primary button beside an outline one, then an alignwide trust strip made of a small uppercase muted label above six evenly split columns each holding one 90px customer wordmark; reach for it when the closing argument is the roster of companies already paying rather than a screenshot or a rating.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Trusted by product teams","variant":"secondary","iconName":"users"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"fluid-7-xl"} -->
<h1 class="wp-block-heading has-text-align-center has-fluid-7-xl-font-size">Every release note written while the work is still warm</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Pull merged changes straight from your tracker and turn them into a readable changelog your customers actually finish. Approve the draft, pick a channel, and let the announcement go out without a single copy-paste.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"lg","iconName":"arrow-right","iconPosition":"right"} -->
<div class="wp-block-button is-size-lg"><a class="wp-block-button__link wp-element-button" href="#">Draft your first changelog</a></div>
<!-- /wp:button -->

<!-- wp:button {"size":"lg","className":"is-style-outline","iconName":"calendar","iconPosition":"left"} -->
<div class="wp-block-button is-style-outline is-size-lg"><a class="wp-block-button__link wp-element-button" href="#">Book a walkthrough</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size" style="letter-spacing:0.08em;text-transform:uppercase">Shipping updates with teams of every size</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","width":"90px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image aligncenter size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Customer wordmark" style="width:90px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","width":"90px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image aligncenter size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Customer wordmark" style="width:90px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","width":"90px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image aligncenter size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Customer wordmark" style="width:90px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","width":"90px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image aligncenter size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Customer wordmark" style="width:90px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","width":"90px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image aligncenter size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Customer wordmark" style="width:90px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","width":"90px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image aligncenter size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Customer wordmark" style="width:90px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
