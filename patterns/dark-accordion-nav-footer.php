<?php
/**
 * Title: Dark Accordion Nav Footer
 * Slug: shadcn/dark-accordion-nav-footer
 * Categories: shadcn, footer
 * Description: A dark two-column footer that sets a logo and social icon row opposite a navigation stack whose three link groups collapse into accordions.
 * AI Hint: Site footer — a dark full-width panel split in two, the left half holding a logo above a small row of social icons and the right half replacing the usual link columns with a collapsible accordion whose panels each open a list of section links; reach for it when a deep sitemap has to stay readable inside a compact dark footer.
 */

?>
<!-- wp:group {"className":"is-style-shadcn-on-dark","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|4","bottom":"var:preset|spacing|9","left":"var:preset|spacing|4"}}},"backgroundColor":"foreground","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-shadcn-on-dark has-background-color has-foreground-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--4)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|6"}}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"height":"28px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Corvus Cloud logo" style="height:28px"/></figure>
<!-- /wp:image -->

<!-- wp:social-links {"iconColor":"background","iconColorValue":"var(--wp--preset--color--background)","size":"has-normal-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"github"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:shadcn/accordion {"openFirst":true} -->
<!-- wp:shadcn/accordion-item {"title":"Product"} -->
<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Pricing plans</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Trust and safety</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Partner program</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Resources"} -->
<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Help centre</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">API reference</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Setup guide</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Field notes</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Release updates</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Legal"} -->
<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Privacy policy</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Terms of use</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Data processing</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Cookie settings</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Trust centre</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
