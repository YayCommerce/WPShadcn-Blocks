<?php
/**
 * Title: Boxed Columns Pattern Bar Footer
 * Slug: shadcn/boxed-columns-pattern-bar-footer
 * Categories: shadcn, footer
 * Description: A footer drawn as a ruled box, with a brand and social block beside three link columns and a legal bar sitting under a hairline inside the same frame.
 * AI Hint: Site footer — hairlines above and below the whole section plus vertical rules down both sides of the content, framing a brand block of logo, one-line tagline and a row of social icons set opposite three titled columns of navigation links, with a legal bar under an internal hairline carrying a copyright line opposite policy links; reach for it when the footer should read as a bordered box continuing the ruled grid of the page above it.
 */

?>
<!-- wp:group {"align":"full","style":{"border":{"top":{"color":"var:preset|color|border","width":"1px","style":"solid"},"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"right":"var:preset|spacing|4","left":"var:preset|spacing|4"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-right:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)"><!-- wp:group {"align":"wide","style":{"border":{"right":{"color":"var:preset|color|border","width":"1px","style":"solid"},"left":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="border-right-color:var(--wp--preset--color--border);border-right-style:solid;border-right-width:1px;border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|6","bottom":"var:preset|spacing|8","left":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--6)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|7","left":"var:preset|spacing|7"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"34%","style":{"spacing":{"blockGap":"var:preset|spacing|5"}}} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:image {"height":"30px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Lattice logo" style="height:30px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Carefully drawn sections for teams that design in the browser.</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"muted-foreground","iconColorValue":"var(--wp--preset--color--muted-foreground)","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"github"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"22%","style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size" style="font-weight:600">Product</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Overview</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Pricing</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Marketplace</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Features</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Integrations</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"22%","style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size" style="font-weight:600">Company</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">About</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Team</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Blog</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Careers</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Contact</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"22%","style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size" style="font-weight:600">Support</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Help centre</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Documentation</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Status</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Community</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|6","bottom":"var:preset|spacing|5","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">© 2026 Lattice Studio. All rights reserved.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size"><a href="#">Terms and conditions</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size"><a href="#">Privacy policy</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
