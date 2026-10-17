<?php
/**
 * Title: Download Windows Screenshot Split
 * Slug: shadcn/download-windows-screenshot-split
 * Categories: shadcn, download
 * Description: A two-column desktop download section with an oversized headline, two installer buttons and a fine-print footnote beside a wide product screenshot.
 * AI Hint: Split desktop download section whose narrow left half sets an oversized two-line h2 over a two-line muted lead, a filled installer button beside an outline installer button, a small secondary download link and a closing pair of muted fine-print lines naming supported systems and the current version with a release-notes link, while the wide right half holds a single bordered screenshot of the desktop interface; reach for it when a downloadable app has to show its full window and answer compatibility questions in one screen.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|9"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"38%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:38%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.02em","lineHeight":"1.05"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-fluid-5-xl-font-size" style="font-weight:600;letter-spacing:-0.02em;line-height:1.05">Halden, straight on your desktop</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">The desktop build records, transcribes and files every session on the machine itself, so a dropped connection never costs you the meeting.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"primary-foreground","size":"lg","style":{"border":{"radius":"8px"}},"iconName":"download","iconPosition":"left"} -->
<div class="wp-block-button is-size-lg"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:8px">Download the installer</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline","size":"lg","style":{"border":{"radius":"8px"}},"iconName":"download","iconPosition":"left"} -->
<div class="wp-block-button is-style-outline is-size-lg"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:8px">Download the portable build</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600"><a href="#">Deploy it from your device management catalogue</a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2","margin":{"top":"var:preset|spacing|8"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--8)"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Runs on Windows 10 and 11, and on macOS 13 or newer. 64-bit only.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Version 4.2.0 — <a href="#">read the release notes</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"62%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:62%"><!-- wp:image {"aspectRatio":"16/10","scale":"cover","width":"100%","sizeSlug":"large","style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="The Halden desktop window, with a session list on the left and a transcript open beside it" class="has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;aspect-ratio:16/10;object-fit:cover;width:100%"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
