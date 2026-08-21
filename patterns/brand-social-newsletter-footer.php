<?php
/**
 * Title: Brand Social Newsletter Footer
 * Slug: shadcn/brand-social-newsletter-footer
 * Categories: shadcn, footer
 * Description: A light full-width footer whose brand, tagline and social row open a four-column band that ends with a newsletter prompt, closed by a hairline credit bar.
 * AI Hint: Site footer — a wide brand column carrying a logo lockup, a short descriptive paragraph and a row of social icons, followed by two narrow columns of titled text links and a wider newsletter column with a subscribe button and a fine-print privacy note, all above a hairline rule and a two-part credit line; reach for it when a product footer should introduce the company and capture emails without a long navigation tree.
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|4","right":"var:preset|spacing|4"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--4)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|7","left":"var:preset|spacing|7"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"33%"} -->
<div class="wp-block-column" style="flex-basis:33%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"height":"32px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Sundial logo" style="height:32px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"xl"} -->
<p class="has-xl-font-size" style="font-weight:600">Sundial</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">A working set of responsive layouts for founders who would rather launch than wireframe.</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"muted-foreground","iconColorValue":"var(--wp--preset--color--muted-foreground)","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"github"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"17%"} -->
<div class="wp-block-column" style="flex-basis:17%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500"}},"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size" style="font-weight:500">Platform</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">What we build</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Plans and billing</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Template library</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Capabilities</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"17%"} -->
<div class="wp-block-column" style="flex-basis:17%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500"}},"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size" style="font-weight:500">Company</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Our story</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">The people</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Writing</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Talk to us</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33%"} -->
<div class="wp-block-column" style="flex-basis:33%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500"}},"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size" style="font-weight:500">Newsletter</h3>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"primary-foreground","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:8px">Subscribe</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">By subscribing you agree to our <a href="#">privacy policy</a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">© 2026 Sundial Type Co. All rights reserved.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Designed and maintained by <a href="#">the Sundial team</a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
