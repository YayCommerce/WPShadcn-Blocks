<?php
/**
 * Title: Newsletter Three Columns Footer
 * Slug: shadcn/newsletter-three-columns-footer
 * Categories: shadcn, footer
 * Description: A footer pairing a logo, tagline and newsletter sign-up on the left with three columns of links on the right, closed by centred social icons and a copyright line.
 * AI Hint: Site footer — a wide first row where a logo, a one-line description and a newsletter prompt with a full-width subscribe button sit opposite a three-up grid of link columns, then a hairline and a centred closing block of social icons above the copyright; reach for it when the footer has to carry both list navigation and an email capture.
 */

?>
<!-- wp:group {"metadata":{"categories":["shadcn","footer"],"patternName":"shadcn/newsletter-three-columns-footer","name":"Newsletter Three Columns Footer"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|4","bottom":"var:preset|spacing|8","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|7"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--4)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"36%"} -->
<div class="wp-block-column" style="flex-basis:36%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"height":"28px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Charterline logo" style="height:28px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Straightforward lending tools for growing businesses and the people who bank with them.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Get the monthly briefing</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Rate changes, product notes and nothing else. Unsubscribe whenever.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"backgroundColor":"primary","textColor":"primary-foreground","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:8px">Subscribe</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"64%"} -->
<div class="wp-block-column" style="flex-basis:64%"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Products</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color"><!-- wp:list-item -->
<li><a href="#">Working capital</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Credit accounts</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Loan origination</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Portfolio purchase</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Support</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color"><!-- wp:list-item -->
<li><a href="#">Pricing</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Questions</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Book a demo</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Contact</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Company</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color"><!-- wp:list-item -->
<li><a href="#">About</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Careers</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Terms of service</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Privacy policy</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:social-links {"iconColor":"muted-foreground","iconColorValue":"var(--wp--preset--color--muted-foreground)","size":"has-normal-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">© 2026 Charterline. All rights reserved.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
