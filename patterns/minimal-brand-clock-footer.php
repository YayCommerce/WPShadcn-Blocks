<?php
/**
 * Title: Minimal Brand Clock Footer
 * Slug: shadcn/minimal-brand-clock-footer
 * Categories: shadcn, footer
 * Description: A minimal footer built from one full-width brand banner above a single muted row carrying copyright, studio hours and a contact address.
 * AI Hint: Site footer — an extremely wide wordmark or brand banner image spanning the full content width, closed by one low-contrast baseline row that spreads a copyright line, a local-time or opening-hours label and an email link across the container; reach for it when the footer should read as a signature rather than a sitemap.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|4","right":"var:preset|spacing|4"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--4)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:image {"aspectRatio":"137/10","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Halden Studio wordmark" style="border-radius:12px;aspect-ratio:137/10;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">&copy; 2026 Halden Studio</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Rotterdam &middot; Open 09:00 to 18:00 CET</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size"><a href="#">studio@haldenstudio.co</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
