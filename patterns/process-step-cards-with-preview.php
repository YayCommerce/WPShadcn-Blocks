<?php
/**
 * Title: Process Step Cards With Preview
 * Slug: shadcn/process-step-cards-with-preview
 * Categories: shadcn, process
 * Description: A sticky title column beside three bordered step cards, each pairing its copy with a square preview image.
 * AI Hint: Two-column process layout — a sticky left column with a monospace step count, heading and lead paragraph, and a right stack of three rounded bordered cards that each carry a step label, a title, a short description and a square preview thumbnail; reach for it when a short onboarding or ordering process needs one supporting image per step.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","process"],"patternName":"shadcn/process-step-cards-with-preview","name":"Process Step Cards With Preview"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"backgroundColor":"background"} -->
<div class="wp-block-group alignwide has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|10"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"34%"} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:group {"className":"is-style-shadcn-sticky","style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group is-style-shadcn-sticky"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace;letter-spacing:0.08em;text-transform:uppercase">003 steps</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"letterSpacing":"-0.02em"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-fluid-4-xl-font-size" style="letter-spacing:-0.02em">Getting started takes about a week</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">No long procurement dance. Pick the level of support you need, tell us what you are working on, and we start on the next open slot.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66%"} -->
<div class="wp-block-column" style="flex-basis:66%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-shadcn-hover-reveal","style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-shadcn-hover-reveal has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"66%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:66%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace;letter-spacing:0.08em;text-transform:uppercase">Step 01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.01em"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size" style="letter-spacing:-0.01em">Choose a support level</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Compare the three retainers and pick the one that matches how often you expect to call on us. You can move between them at any renewal.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"34%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:34%"><!-- wp:image {"aspectRatio":"1","scale":"cover","width":"100%","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A printed comparison of three support levels marked up in pencil" style="border-radius:12px;aspect-ratio:1;object-fit:cover;width:100%"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-shadcn-hover-reveal","style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-shadcn-hover-reveal has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"66%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:66%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace;letter-spacing:0.08em;text-transform:uppercase">Step 02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.01em"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size" style="letter-spacing:-0.01em">Send us the brief</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">A short form captures your stack, your deadlines and the people we should be talking to. Most teams fill it in during a single meeting.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"34%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:34%"><!-- wp:image {"aspectRatio":"1","scale":"cover","width":"100%","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A short project brief open on a tablet beside a cooling coffee cup" style="border-radius:12px;aspect-ratio:1;object-fit:cover;width:100%"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-shadcn-hover-reveal","style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-shadcn-hover-reveal has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"66%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:66%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace;letter-spacing:0.08em;text-transform:uppercase">Step 03</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.01em"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size" style="letter-spacing:-0.01em">Work starts on the next slot</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">You get a named lead, a shared board and a standing weekly call. First deliverables usually land inside ten working days.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"34%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:34%"><!-- wp:image {"aspectRatio":"1","scale":"cover","width":"100%","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A shared delivery board showing the first week of tasks in progress" style="border-radius:12px;aspect-ratio:1;object-fit:cover;width:100%"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
