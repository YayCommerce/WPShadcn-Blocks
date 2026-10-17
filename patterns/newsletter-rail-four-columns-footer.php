<?php
/**
 * Title: Newsletter Rail Four Columns Footer
 * Slug: shadcn/newsletter-rail-four-columns-footer
 * Categories: shadcn, footer
 * Description: A footer whose left rail carries the logo and a newsletter signup beside four dense columns of navigation links, closed by a bar with social icons, a copyright line and a service status pill.
 * AI Hint: Site footer — a wide row that puts a small logo above a short newsletter heading and subscribe button on the left, then four uppercase-headed link columns covering product, resources, company and legal, followed by a hairline rule and a closing bar that groups a tiny "keep in touch" label with social icons, the copyright, and an outlined status badge; reach for it when a large site map needs a signup anchored beside it rather than stacked above it.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|4","right":"var:preset|spacing|4"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--4)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"28%","style":{"spacing":{"blockGap":"var:preset|spacing|5"}}} -->
<div class="wp-block-column" style="flex-basis:28%"><!-- wp:image {"height":"28px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Fieldline logo" style="height:28px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<h3 class="wp-block-heading has-sm-font-size" style="font-weight:600">Subscribe to our newsletter</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">One short letter a month on what shipped and what we learned.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"primary-foreground","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:8px">Subscribe</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"18%","style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-column" style="flex-basis:18%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.06em"}},"fontSize":"xs"} -->
<h3 class="wp-block-heading has-xs-font-size" style="font-weight:600;letter-spacing:0.06em;text-transform:uppercase">Products</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Features</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Pricing</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Enterprise</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Integrations</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Developer API</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Changelog</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Roadmap</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Security</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"18%","style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-column" style="flex-basis:18%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.06em"}},"fontSize":"xs"} -->
<h3 class="wp-block-heading has-xs-font-size" style="font-weight:600;letter-spacing:0.06em;text-transform:uppercase">Resources</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Documentation</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Getting started</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Tutorials</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Journal</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Case studies</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Community</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Help centre</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"18%","style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-column" style="flex-basis:18%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.06em"}},"fontSize":"xs"} -->
<h3 class="wp-block-heading has-xs-font-size" style="font-weight:600;letter-spacing:0.06em;text-transform:uppercase">Company</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">About</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Contact</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Open roles</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Press</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Partners</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Newsroom</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"18%","style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-column" style="flex-basis:18%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.06em"}},"fontSize":"xs"} -->
<h3 class="wp-block-heading has-xs-font-size" style="font-weight:600;letter-spacing:0.06em;text-transform:uppercase">Legal</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Privacy</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Terms</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Cookies</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Accessibility</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Licensing</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","textTransform":"uppercase","letterSpacing":"0.08em"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:500;letter-spacing:0.08em;text-transform:uppercase">Keep in touch</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"muted-foreground","iconColorValue":"var(--wp--preset--color--muted-foreground)","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"github"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">© 2026 Fieldline Studio. All rights reserved.</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/badge {"text":"All systems normal","variant":"outline","url":"#","iconName":"circle-check"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
