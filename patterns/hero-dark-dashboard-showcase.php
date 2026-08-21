<?php
/**
 * Title: Hero Dark Dashboard Showcase
 * Slug: shadcn/hero-dark-dashboard-showcase
 * Categories: shadcn, hero
 * Description: A dark full-width hero with left-aligned display copy and a button pair above one wide product screenshot.
 * AI Hint: Inverted launch hero — a full-width band filled with the foreground colour holds a left-pinned column carrying a three-line display h1, a two-sentence muted lead and a light filled button beside a dark outlined one, with a single wide rounded product screenshot running beneath it across the full wide measure; reach for it when the product is a console or dashboard and the screen itself, seen large and on a dark ground, is the strongest argument on the page.
 */

?>
<!-- wp:group {"className":"is-style-shadcn-on-dark","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|5","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|9"}},"backgroundColor":"foreground","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-shadcn-on-dark has-background-color has-foreground-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","contentSize":"760px","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.02em","lineHeight":"1.05"}},"textColor":"background","fontSize":"fluid-7-xl"} -->
<h1 class="wp-block-heading has-background-color has-text-color has-fluid-7-xl-font-size" style="font-weight:600;letter-spacing:-0.02em;line-height:1.05">Watch every environment from one quiet console</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Ridgewatch folds spend, uptime and deploy history into a single view, so a spike in one region never has to be pieced back together from four dashboards. Every alert arrives with the change that caused it already attached.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|3","margin":{"top":"var:preset|spacing|3"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--3)"><!-- wp:button {"backgroundColor":"background","textColor":"foreground","size":"md","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button is-size-md"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:8px">Open a live console</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"foreground","textColor":"background","size":"md","style":{"border":{"color":"var:preset|color|background","width":"1px","style":"solid","radius":"8px"}}} -->
<div class="wp-block-button is-size-md"><a class="wp-block-button__link has-background-color has-foreground-background-color has-text-color has-background has-border-color wp-element-button" href="#" style="border-color:var(--wp--preset--color--background);border-style:solid;border-width:1px;border-radius:8px">Browse the sample data</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"aspectRatio":"21/9","scale":"cover","width":"100%","sizeSlug":"large","align":"wide","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image alignwide size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="The Ridgewatch console showing regional spend beside a deploy timeline" style="border-radius:16px;aspect-ratio:21/9;object-fit:cover;width:100%"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
