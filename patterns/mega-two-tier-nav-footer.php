<?php
/**
 * Title: Mega Two Tier Nav Footer
 * Slug: shadcn/mega-two-tier-nav-footer
 * Categories: shadcn, footer
 * Description: A dark mega footer pairing a narrow brand column with a wide four-column link grid above a hairline-framed panel holding a second tier of secondary navigation.
 * AI Hint: Site footer — a dark full-width panel split one third to two thirds: the narrow side stacks a small logo, plain social icons and a copyright line, while the wide side holds a four-column grid of headed link lists and, beneath it, a rounded hairline panel carrying a second tier of guides, tools and plan links; reach for it when a large product site needs its whole site map in the footer without the two tiers reading as one flat wall of links.
 */

?>
<!-- wp:group {"metadata":{"categories":["shadcn","footer"],"patternName":"shadcn/mega-two-tier-nav-footer","name":"Mega Two Tier Nav Footer"},"className":"is-style-shadcn-on-dark","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|4","bottom":"var:preset|spacing|9","left":"var:preset|spacing|4"}}},"backgroundColor":"foreground","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-shadcn-on-dark has-background-color has-foreground-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--4)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33%"} -->
<div class="wp-block-column" style="flex-basis:33%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"height":"28px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Vantage logo" style="height:28px"/></figure>
<!-- /wp:image -->

<!-- wp:social-links {"iconColor":"background","iconColorValue":"var(--wp--preset--color--background)","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">© 2025 Vantage Studio</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"67%"} -->
<div class="wp-block-column" style="flex-basis:67%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|7"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"grid","minimumColumnWidth":"11rem"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<h3 class="wp-block-heading has-sm-font-size" style="font-weight:600">Editing tools</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Smart trim</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Scene detection</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Voice clean-up</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Subtitles</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Colour grading</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Motion tracking</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<h3 class="wp-block-heading has-sm-font-size" style="font-weight:600">Product info</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Plans</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Desktop app</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">System needs</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Release notes</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Developer API</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<h3 class="wp-block-heading has-sm-font-size" style="font-weight:600">Support</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Help centre</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Tutorials</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Community forum</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Affiliates</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Contact support</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<h3 class="wp-block-heading has-sm-font-size" style="font-weight:600">About us</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Our story</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Open roles</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Press kit</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Privacy</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Terms</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|6"}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<h3 class="wp-block-heading has-sm-font-size" style="font-weight:600">Guides</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Your first edit</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Advanced timelines</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Sharper audio</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Publishing everywhere</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<h3 class="wp-block-heading has-sm-font-size" style="font-weight:600">Free tools</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Clip maker</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Voice enhancer</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Speech to text</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Every tool</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<h3 class="wp-block-heading has-sm-font-size" style="font-weight:600">For organisations</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">For teams</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">For enterprise</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">For education</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
