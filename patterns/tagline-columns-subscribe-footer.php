<?php
/**
 * Title: Tagline Columns Subscribe Footer
 * Slug: shadcn/tagline-columns-subscribe-footer
 * Categories: shadcn, footer
 * Description: A footer that opens with a logo beside an oversized brand tagline, then splits into three link columns and a wider rail holding a star badge, social icons, a subscribe prompt and an availability pill.
 * AI Hint: Site footer — a wide brand row pairing a small logo with a large one-line statement above a hairline rule, then a four-part row in which three titled link columns sit left of a wider rail stacking an outlined star-count badge beside social icons, a short newsletter heading with a subscribe button, and a small status badge; reach for it when the footer should lead with a brand statement and still carry the site map, community proof and a signup in a single band.
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|4","right":"var:preset|spacing|4"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--4)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"height":"28px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Northpeak logo" style="height:28px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"fontSize":"2-xl"} -->
<p class="has-2-xl-font-size">Build software people keep coming back to.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"18%","style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column" style="flex-basis:18%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<h3 class="wp-block-heading has-sm-font-size" style="font-weight:600">Features</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Workspace</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Insights</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Reporting</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Projects</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Task boards</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Plans</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Developer API</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Install guide</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"18%","style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column" style="flex-basis:18%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<h3 class="wp-block-heading has-sm-font-size" style="font-weight:600">Resources</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Documentation</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Help centre</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Security</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Terms</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Press kit</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"18%","style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column" style="flex-basis:18%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<h3 class="wp-block-heading has-sm-font-size" style="font-weight:600">Company</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Our story</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Journal</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Transparency</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Partners</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"46%","style":{"spacing":{"blockGap":"var:preset|spacing|6"}}} -->
<div class="wp-block-column" style="flex-basis:46%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Star 15.2K","variant":"outline","url":"#","iconName":"star"} /-->

<!-- wp:social-links {"iconColor":"muted-foreground","iconColorValue":"var(--wp--preset--color--muted-foreground)","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"github"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<h3 class="wp-block-heading has-sm-font-size" style="font-weight:600">Product notes, once a month</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Release notes, field guides and the occasional teardown. No filler.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"primary-foreground","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:8px">Subscribe</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:shadcn/badge {"text":"Online","variant":"secondary","iconName":"circle-check"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
