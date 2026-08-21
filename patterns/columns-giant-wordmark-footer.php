<?php
/**
 * Title: Columns Giant Wordmark Footer
 * Slug: shadcn/columns-giant-wordmark-footer
 * Categories: shadcn, footer
 * Description: A light footer with the logo on the left, four short link columns on the right, and the brand name set as an oversized wordmark across the bottom.
 * AI Hint: Site footer — a logo lockup pinned left beside a four-up grid of small-caps column titles over plain link lists, the last of which holds social icons instead of links, closed by the brand name repeated as a giant edge-to-edge wordmark; reach for it when the footer should stay compact but still end on a strong piece of brand typography.
 */

?>
<!-- wp:group {"metadata":{"categories":["shadcn","footer"],"patternName":"shadcn/columns-giant-wordmark-footer","name":"Columns Giant Wordmark Footer"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|4","bottom":"var:preset|spacing|6","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--4)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|7","left":"var:preset|spacing|7"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"28%"} -->
<div class="wp-block-column" style="flex-basis:28%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"height":"28px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Halcyon logo" style="height:28px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<p class="has-lg-font-size" style="font-weight:600">Halcyon</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"18%"} -->
<div class="wp-block-column" style="flex-basis:18%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<h3 class="wp-block-heading has-muted-foreground-color has-text-color has-sm-font-size" style="font-weight:600">Product</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Features</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Pricing</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Calendar</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Meetings</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"18%"} -->
<div class="wp-block-column" style="flex-basis:18%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<h3 class="wp-block-heading has-muted-foreground-color has-text-color has-sm-font-size" style="font-weight:600">Company</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Contact</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Questions</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Journal</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Careers</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"18%"} -->
<div class="wp-block-column" style="flex-basis:18%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<h3 class="wp-block-heading has-muted-foreground-color has-text-color has-sm-font-size" style="font-weight:600">Legal</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Terms</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Privacy</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"18%"} -->
<div class="wp-block-column" style="flex-basis:18%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<h3 class="wp-block-heading has-muted-foreground-color has-text-color has-sm-font-size" style="font-weight:600">Social</h3>
<!-- /wp:heading -->

<!-- wp:social-links {"iconColor":"muted-foreground","iconColorValue":"var(--wp--preset--color--muted-foreground)","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|5"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--5)"><!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontWeight":"700","lineHeight":"0.9","letterSpacing":"-0.04em"}},"fontSize":"fluid-7-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-7-xl-font-size" style="font-weight:700;letter-spacing:-0.04em;line-height:0.9">Halcyon</h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
