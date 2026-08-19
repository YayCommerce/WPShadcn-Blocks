<?php
/**
 * Title: Privacy Controls Columns Footer
 * Slug: shadcn/privacy-controls-columns-footer
 * Categories: shadcn, footer
 * Description: A footer that stacks a logo, social icons and a column of privacy controls beside a four-column link grid, closing on a copyright line and one outline button.
 * AI Hint: Site footer — a narrow left rail carrying a logo, a row of social icons and a small stack of privacy utilities including a cookie preferences drawer and a do-not-sell link, set beside a four-column grid of headed link lists, with a bottom bar pairing a copyright line with a single outline button; reach for it when a consumer product footer has to satisfy privacy disclosure rules and still show the full sitemap.
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|4","right":"var:preset|spacing|4"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--4)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"var:preset|spacing|6"}}} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:image {"height":"28px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="https://ui.shadcn.com/placeholder.svg" alt="Ferrous Labs logo" style="height:28px"/></figure>
<!-- /wp:image -->

<!-- wp:social-links {"iconColor":"muted-foreground","iconColorValue":"var(--wp--preset--color--muted-foreground)","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:shadcn/drawer {"dismissible":true} -->
<!-- wp:shadcn/drawer-trigger -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Cookie settings</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- /wp:shadcn/drawer-trigger -->

<!-- wp:shadcn/drawer-header -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Cookie preferences</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Choose which categories of cookies this site may use. Strictly necessary cookies keep the site working and cannot be switched off.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/drawer-header -->

<!-- wp:shadcn/drawer-content -->
<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Strictly necessary &mdash; always on</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Performance and analytics</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Personalisation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Advertising and measurement</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->
<!-- /wp:shadcn/drawer-content -->

<!-- wp:shadcn/drawer-footer -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"primary-foreground","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:8px">Save preferences</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- /wp:shadcn/drawer-footer -->
<!-- /wp:shadcn/drawer -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">English (United Kingdom)</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size"><a href="#">Do not sell or share my information</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"grid","minimumColumnWidth":"11rem"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size" style="font-weight:600">About</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Our story</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Join us</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Security overview</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">System status</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Legal and privacy</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size" style="font-weight:600">Get started</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Mobile for iOS and Android</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Desktop for Mac and Windows</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Browser extension</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size" style="font-weight:600">Learn more</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Support centre</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Pricing plans</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Articles</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">User groups</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">App integrations</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Design resources</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Partner programme</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size" style="font-weight:600">Solutions for</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Large enterprises</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Small businesses</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Individual users</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">&copy; 2026 Ferrous Labs</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Explore more</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
