<?php
/**
 * Title: Download All Platform File List
 * Slug: shadcn/download-all-platform-file-list
 * Categories: shadcn, download
 * Description: A centred app tile, product name and auto-detect download button above one bordered card of hairline-separated platform rows, each offering its own stack of full-width file buttons.
 * AI Hint: Complete release page for an app that ships a different artefact to every operating system: a large rounded app tile sits above the product name, a single filled auto-detect button and a small muted build line, and beneath them one bordered card divides into hairline-separated rows that pair a platform name on the left with one, two or three full-width outline buttons on the right; reach for it when visitors already know the product and only need to find the exact installer for the machine in front of them.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|4","right":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--4)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"constrained","contentSize":"560px"}} -->
<div class="wp-block-group"><!-- wp:image {"align":"center","width":"128px","height":"128px","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"24px"}}} -->
<figure class="wp-block-image aligncenter size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Runeplate app tile" style="border-radius:24px;object-fit:cover;width:128px;height:128px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":2,"style":{"typography":{"textAlign":"center","fontWeight":"700","letterSpacing":"-0.03em"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size" style="font-weight:700;letter-spacing:-0.03em">Runeplate</h2>
<!-- /wp:heading -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"lg","iconName":"download","iconPosition":"right"} -->
<div class="wp-block-button is-size-lg"><a class="wp-block-button__link wp-element-button" href="#">Download for this device</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size">Version 4.2, published 12 August 2026</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"0"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-right:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:columns {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4"},"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-columns" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4)"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">iOS</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"size":"sm","className":"is-style-outline","iconName":"download","iconPosition":"left"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline is-size-sm"><a class="wp-block-button__link wp-element-button" href="#">Mobile store listing</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4"},"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-columns" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4)"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Android</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"size":"sm","className":"is-style-outline","iconName":"download","iconPosition":"left"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline is-size-sm"><a class="wp-block-button__link wp-element-button" href="#">Mobile store listing</a></div>
<!-- /wp:button -->

<!-- wp:button {"width":100,"size":"sm","className":"is-style-outline","iconName":"download","iconPosition":"left"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline is-size-sm"><a class="wp-block-button__link wp-element-button" href="#">Direct package (.apk)</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4"},"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-columns" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4)"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Windows</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"size":"sm","className":"is-style-outline","iconName":"download","iconPosition":"left"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline is-size-sm"><a class="wp-block-button__link wp-element-button" href="#">Installer (.exe)</a></div>
<!-- /wp:button -->

<!-- wp:button {"width":100,"size":"sm","className":"is-style-outline","iconName":"download","iconPosition":"left"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline is-size-sm"><a class="wp-block-button__link wp-element-button" href="#">Portable archive (.zip)</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4"},"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-columns" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4)"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">macOS</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"size":"sm","className":"is-style-outline","iconName":"download","iconPosition":"left"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline is-size-sm"><a class="wp-block-button__link wp-element-button" href="#">Disk image (.dmg)</a></div>
<!-- /wp:button -->

<!-- wp:button {"width":100,"size":"sm","className":"is-style-outline","iconName":"download","iconPosition":"left"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline is-size-sm"><a class="wp-block-button__link wp-element-button" href="#">Universal archive (.zip)</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4"},"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4)"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Linux</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"size":"sm","className":"is-style-outline","iconName":"download","iconPosition":"left"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline is-size-sm"><a class="wp-block-button__link wp-element-button" href="#">AppImage build</a></div>
<!-- /wp:button -->

<!-- wp:button {"width":100,"size":"sm","className":"is-style-outline","iconName":"download","iconPosition":"left"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline is-size-sm"><a class="wp-block-button__link wp-element-button" href="#">Debian package (.deb)</a></div>
<!-- /wp:button -->

<!-- wp:button {"width":100,"size":"sm","className":"is-style-outline","iconName":"download","iconPosition":"left"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline is-size-sm"><a class="wp-block-button__link wp-element-button" href="#">Source tarball (.tar.gz)</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
