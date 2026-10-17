<?php
/**
 * Title: Centered Connect CTA Footer
 * Slug: shadcn/centered-connect-cta-footer
 * Categories: shadcn, footer
 * Description: A centred closing footer that stacks a small italic eyebrow, an oversized headline, a supporting line, one primary button, a row of social icons and a contact address.
 * AI Hint: Site footer — a narrow centred column with an italic eyebrow above a very large two-line headline, a muted supporting sentence, a single filled call-to-action button, a centred row of plain social icons and a small contact email line at the bottom; reach for it when the page should end on one invitation to get in touch rather than on a site map.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|4","right":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--4)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size" style="font-style:italic;font-weight:400">Let's connect</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontWeight":"600","lineHeight":"1.1"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size" style="font-weight:600;line-height:1.1">Ready to scale faster? Start with Brightmill today.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-base-font-size">Thousands of teams already run their daily operations on our platform, and onboarding takes an afternoon.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|4"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--4)"><!-- wp:button {"backgroundColor":"primary","textColor":"primary-foreground","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:8px">Get started now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:social-links {"iconColor":"muted-foreground","iconColorValue":"var(--wp--preset--color--muted-foreground)","size":"has-small-icon-size","className":"is-style-logos-only","style":{"spacing":{"margin":{"top":"var:preset|spacing|5"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--5)"><!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size"><a href="#">hello@brightmill.com</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
