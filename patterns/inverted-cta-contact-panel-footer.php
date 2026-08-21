<?php
/**
 * Title: Inverted CTA Contact Panel Footer
 * Slug: shadcn/inverted-cta-contact-panel-footer
 * Categories: shadcn, footer
 * Description: A footer built as one inverted panel with rounded top corners, opening on a headline and button, then a logo with link columns and a signup, a row of contact details, and a closing legal bar.
 * AI Hint: Site footer — a single dark panel with rounded top corners divided by hairline rules into four bands: a call-to-action row pairing a large question headline with a light button, a row placing the logo beside two short link columns and a newsletter heading with a subscribe button, a row of three labelled contact badges for phone, email and address, and a final bar with the copyright opposite the legal links; reach for it when the footer should read as one self-contained contrasting block that carries a conversion prompt and real contact details.
 */

?>
<!-- wp:group {"className":"is-style-shadcn-on-dark","align":"full","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px"}},"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|8","left":"var:preset|spacing|4","right":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|8"}},"backgroundColor":"primary","textColor":"primary-foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-shadcn-on-dark has-primary-foreground-color has-primary-background-color has-text-color has-background" style="border-top-left-radius:16px;border-top-right-radius:16px;padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--4)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"600","lineHeight":"1.15"}},"fontSize":"4-xl"} -->
<h2 class="wp-block-heading has-4-xl-font-size" style="font-weight:600;line-height:1.15">Ready to scale your business with automation that fits?</h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"foreground","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button" style="border-radius:8px">Get started free</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:image {"height":"28px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Corevane logo" style="height:28px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%","style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<h3 class="wp-block-heading has-sm-font-size" style="font-weight:600">Links</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Products</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Solutions</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Resources</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Support</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%","style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<h3 class="wp-block-heading has-sm-font-size" style="font-weight:600">Socials</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">X</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">LinkedIn</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">GitHub</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"35%","style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column" style="flex-basis:35%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<h3 class="wp-block-heading has-sm-font-size" style="font-weight:600">Stay updated</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Product notes and field insights, delivered to your inbox once a month.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"foreground","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button" style="border-radius:8px">Subscribe</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}}} -->
<div class="wp-block-column"><!-- wp:shadcn/badge {"text":"Phone","variant":"secondary","iconName":"phone"} /-->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">+1 (555) 210 4488</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}}} -->
<div class="wp-block-column"><!-- wp:shadcn/badge {"text":"Email","variant":"secondary","iconName":"mail"} /-->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">hello@corevane.com</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}}} -->
<div class="wp-block-column"><!-- wp:shadcn/badge {"text":"Office","variant":"secondary","iconName":"map-pin"} /-->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">140 Harbour Way, Suite 12, Portland, OR 97209</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">© 2026 Corevane. All rights reserved.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><a href="#">Privacy policy</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><a href="#">Terms of service</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
