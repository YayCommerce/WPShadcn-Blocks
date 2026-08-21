<?php
/**
 * Title: Tagline Accordion Columns Footer
 * Slug: shadcn/tagline-accordion-columns-footer
 * Categories: shadcn, footer
 * Description: A wide footer whose brand block pairs an underlined statement tagline with a call-to-action button, set beside four navigation columns where one column collapses its links into accordions.
 * AI Hint: Site footer — a left brand block stacking a logo, a small social icon row, a large statement tagline closed by a hairline and a primary button with a trailing arrow, sitting beside four titled link columns of which one replaces its flat list with two collapsible accordion groups, all closed by a legal row that puts a copyright line opposite contact and policy links; reach for it when a footer carries a marketing statement and a deep, partly collapsible sitemap at the same time.
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|4","right":"var:preset|spacing|4"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--4)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|9"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"32%","style":{"spacing":{"blockGap":"var:preset|spacing|5"}}} -->
<div class="wp-block-column" style="flex-basis:32%"><!-- wp:image {"height":"28px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Northbeam logo" style="height:28px"/></figure>
<!-- /wp:image -->

<!-- wp:social-links {"iconColor":"muted-foreground","iconColorValue":"var(--wp--preset--color--muted-foreground)","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:paragraph {"style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"bottom":"var:preset|spacing|4"}}},"fontSize":"2-xl"} -->
<p class="has-2-xl-font-size" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--4)">A development platform built for teams that ship every week.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"iconName":"arrow-right","iconPosition":"right","backgroundColor":"primary","textColor":"primary-foreground","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:8px">Start building free</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"14%","style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-column" style="flex-basis:14%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size" style="font-weight:600">Platform</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Developer API</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Integrations</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Infrastructure</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Developer portal</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"22%","style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size" style="font-weight:600">Solutions</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/accordion -->
<!-- wp:shadcn/accordion-item {"title":"By technology"} -->
<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">React and Next.js</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Node services</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Edge workers</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"By use case"} -->
<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Internal tools</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Customer portals</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Data pipelines</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"16%","style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-column" style="flex-basis:16%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size" style="font-weight:600">Resources</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Documentation</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">API reference</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Code examples</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Tutorials</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Changelog</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"16%","style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-column" style="flex-basis:16%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size" style="font-weight:600">Company</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">About</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Blog</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Careers</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Support</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Partners</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">© 2026 Northbeam Labs, Inc. All rights reserved.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size"><a href="#">hello@northbeam.dev</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size"><a href="#">+1 (555) 210-4400</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size"><a href="#">Terms of service</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size"><a href="#">Licenses</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
