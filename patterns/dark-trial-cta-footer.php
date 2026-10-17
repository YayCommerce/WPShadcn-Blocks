<?php
/**
 * Title: Dark Trial CTA Footer
 * Slug: shadcn/dark-trial-cta-footer
 * Categories: shadcn, footer
 * Description: A dark footer that opens with a framed trial call to action, follows with a newsletter row and a four-column link grid, and closes on a copyright line beside social icons.
 * AI Hint: Site footer — a dark full-width panel stacking four tiers: a rounded hairline-framed banner with a centred headline, supporting line and one primary trial button; a two-column newsletter row pairing a short heading and blurb with a subscribe button; a four-column grid of headed link lists; and a bottom bar with a copyright line opposite plain social icons; reach for it when the last screen of a SaaS marketing site has to sell the free trial and still carry the full site map.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"className":"is-style-shadcn-on-dark","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|4","bottom":"var:preset|spacing|9","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|8"}},"backgroundColor":"foreground","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-shadcn-on-dark has-background-color has-foreground-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--4)"><!-- wp:group {"align":"wide","style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|6","bottom":"var:preset|spacing|8","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontWeight":"600","lineHeight":"1.15"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-4-xl-font-size" style="font-weight:600;line-height:1.15">Begin your free trial. The next release will not wait.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"lg"} -->
<p class="has-text-align-center has-lg-font-size">Teams across product, design and engineering already run their release week on Larkspur.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"foreground"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button" href="#">Get started with 7 days free</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size" style="font-weight:500">Stay connected</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">One short note each month: product releases, field notes from the team and the occasional template worth stealing.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"foreground"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button" href="#">Subscribe</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|7"}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Product</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Overview</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Planning board</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Release notes</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Integrations</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Company</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">About us</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Pricing</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Careers</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Support</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Help centre</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Common questions</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Contact the team</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Legal</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#">Terms of service</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Privacy policy</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Security</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500">© 2026 Larkspur Software</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"background","iconColorValue":"var(--wp--preset--color--background)","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
