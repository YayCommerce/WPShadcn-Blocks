<?php
/**
 * Title: Download Single Platform Command
 * Slug: shadcn/download-single-platform-command
 * Categories: shadcn, download
 * Description: A fully centred single-platform download column with an app tile, a filled button, a monospace command row and architecture chips.
 * AI Hint: Centred one-platform download column: a rounded app tile tops an oversized h2 and a two-line muted lead, then a small platform glyph, a filled download button, a bordered monospace command row with a copy glyph beside it and a muted arrow link to other install routes, closing on a small muted label above two outline architecture chips; reach for it when the page already knows which operating system the visitor is on and should offer one obvious button rather than a matrix.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|4","bottom":"var:preset|spacing|9","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--4)"><!-- wp:image {"align":"center","width":"88px","height":"88px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"20px"}}} -->
<figure class="wp-block-image aligncenter size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Halyard app tile" style="border-radius:20px;object-fit:cover;width:88px;height:88px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":2,"textAlign":"center","fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size">Halyard on your desktop</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Watch every deploy, log stream and rollback from one quiet window. It installs in under a minute and keeps itself current in the background.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|4","right":"0","bottom":"0","left":"0"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--4);padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"svgCode":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002228\u0022 height=\u002228\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003e\u003cpath d=\u0022M10 16h.01\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022M2.212 11.577a2 2 0 0 0-.212.896V18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-5.527a2 2 0 0 0-.212-.896L18.55 5.11A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022M21.946 12.013H2.054\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022M6 16h.01\u0022 fill=\u0022none\u0022/\u003e\u003c/svg\u003e","svgColor":"currentColor","svgSize":"28px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"md","iconName":"download","iconPosition":"left"} -->
<div class="wp-block-button is-size-md"><a class="wp-block-button__link wp-element-button" href="#">Download for Windows</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","style":"solid","width":"1px","radius":"8px"},"spacing":{"padding":{"top":"0.5rem","right":"0.75rem","bottom":"0.5rem","left":"0.75rem"},"blockGap":"var:preset|spacing|3"},"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace"}},"backgroundColor":"code","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color has-code-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:8px;padding-top:0.5rem;padding-right:0.75rem;padding-bottom:0.5rem;padding-left:0.75rem;font-family:ui-monospace, SFMono-Regular, Menlo, monospace"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">pkgm install halyard</p>
<!-- /wp:paragraph -->

<!-- wp:group {"textColor":"muted-foreground","layout":{"type":"flex"}} -->
<div class="wp-block-group has-muted-foreground-color has-text-color"><!-- wp:image {"svgCode":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002216\u0022 height=\u002216\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003e\u003crect width=\u002214\u0022 height=\u002214\u0022 x=\u00228\u0022 y=\u00228\u0022 rx=\u00222\u0022 ry=\u00222\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2\u0022 fill=\u0022none\u0022/\u003e\u003c/svg\u003e","svgColor":"currentColor","svgSize":"16px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"textColor":"muted-foreground","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-muted-foreground-color has-text-color"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><a href="#">Other ways to install</a></p>
<!-- /wp:paragraph -->

<!-- wp:image {"svgCode":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002214\u0022 height=\u002214\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003e\u003cpath d=\u0022M5 12h14\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022m12 5 7 7-7 7\u0022 fill=\u0022none\u0022/\u003e\u003c/svg\u003e","svgColor":"currentColor","svgSize":"14px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","right":"0","bottom":"0","left":"0"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--6);padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size">Every Windows build:</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"sm","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline is-size-sm"><a class="wp-block-button__link wp-element-button" href="#">x64</a></div>
<!-- /wp:button -->

<!-- wp:button {"size":"sm","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline is-size-sm"><a class="wp-block-button__link wp-element-button" href="#">Arm64</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
