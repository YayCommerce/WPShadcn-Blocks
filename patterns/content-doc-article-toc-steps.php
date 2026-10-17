<?php
/**
 * Title: Content Doc Article Toc Steps
 * Slug: shadcn/content-doc-article-toc-steps
 * Categories: shadcn, text
 * Description: A long-form documentation article in a wide reading column beside a narrow on-this-page rail, with a numbered-step sequence and a two-column settings table.
 * AI Hint: Documentation article layout that pairs a wide prose column — pill badge, H1, muted lead, muted media panel, then sectioned H2s carrying icon-chip steps, a striped two-column settings table and closing notes — with a narrow sticky rail listing the page's own section links; reach for it when a page has to be read top to bottom yet still let a returning reader jump straight to one section.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained","contentSize":"1040px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"68%"} -->
<div class="wp-block-column" style="flex-basis:68%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"9999px"},"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem","left":"0.75rem","right":"0.75rem"}}},"fontSize":"xs"} -->
<p class="has-border-color has-xs-font-size" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:9999px;padding-top:0.25rem;padding-right:0.75rem;padding-bottom:0.25rem;padding-left:0.75rem">Platform docs</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"fontSize":"3-xl"} -->
<h1 class="wp-block-heading has-3-xl-font-size">Scheduled exports</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">Send a saved view to a destination on a repeating schedule, so the figures your team opens on Monday were assembled while nobody was awake to run them.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"12px"},"dimensions":{"minHeight":"320px"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"margin":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|7"}}},"backgroundColor":"muted","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:12px;min-height:320px;margin-top:var(--wp--preset--spacing--6);margin-bottom:var(--wp--preset--spacing--7);padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:image {"width":"160px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Schedule editor showing a saved view, a cadence and a destination" style="width:160px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"fontSize":"2-xl","anchor":"how-a-schedule-runs"} -->
<h2 class="wp-block-heading has-2-xl-font-size" id="how-a-schedule-runs">How a schedule runs</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6","margin":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|7"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--5);margin-bottom:var(--wp--preset--spacing--7)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|2","right":"var:preset|spacing|2","bottom":"var:preset|spacing|2","left":"var:preset|spacing|2"}}},"backgroundColor":"muted","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--2);padding-right:var(--wp--preset--spacing--2);padding-bottom:var(--wp--preset--spacing--2);padding-left:var(--wp--preset--spacing--2)"><!-- wp:image {"width":"16px","height":"16px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Saved view icon" style="width:16px;height:16px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">Pick the saved view</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"left":"var:preset|spacing|4"}}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-left:var(--wp--preset--spacing--4)">Every schedule starts from a view someone has already saved. Column choices, filters and sort order travel with it, so the delivered file matches what the team reads on screen.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|2","right":"var:preset|spacing|2","bottom":"var:preset|spacing|2","left":"var:preset|spacing|2"}}},"backgroundColor":"muted","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--2);padding-right:var(--wp--preset--spacing--2);padding-bottom:var(--wp--preset--spacing--2);padding-left:var(--wp--preset--spacing--2)"><!-- wp:image {"width":"16px","height":"16px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Cadence icon" style="width:16px;height:16px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">Choose a cadence</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"left":"var:preset|spacing|4"}}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-left:var(--wp--preset--spacing--4)">Hourly, daily, or the first working morning of the month. Slots are queued in the workspace time zone, and a slot is skipped only while the previous run is still writing its file.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|2","right":"var:preset|spacing|2","bottom":"var:preset|spacing|2","left":"var:preset|spacing|2"}}},"backgroundColor":"muted","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--2);padding-right:var(--wp--preset--spacing--2);padding-bottom:var(--wp--preset--spacing--2);padding-left:var(--wp--preset--spacing--2)"><!-- wp:image {"width":"16px","height":"16px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Destination icon" style="width:16px;height:16px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">Name a destination</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"left":"var:preset|spacing|4"}}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-left:var(--wp--preset--spacing--4)">Point the run at a mailbox, a storage bucket or a webhook. Each destination holds its own credentials, so revoking one never interrupts the schedules that feed the others.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"fontSize":"2-xl","anchor":"what-each-run-writes"} -->
<h2 class="wp-block-heading has-2-xl-font-size" id="what-each-run-writes">What each run writes</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|5"}}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="margin-top:var(--wp--preset--spacing--4);margin-bottom:var(--wp--preset--spacing--5)">A run produces one file and a short receipt. The receipt is kept for as long as the run history, and it is the quickest way to tell an empty export apart from a failed one.</p>
<!-- /wp:paragraph -->

<!-- wp:table {"hasFixedLayout":false,"className":"is-style-stripes","fontSize":"sm"} -->
<figure class="wp-block-table is-style-stripes has-sm-font-size"><table><thead><tr><th scope="col">Setting</th><th scope="col">Default</th></tr></thead><tbody><tr><td>File format</td><td>Comma separated, UTF-8</td></tr><tr><td>Row ceiling</td><td>One million per file</td></tr><tr><td>Empty result</td><td>Skips the send</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|7"}}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="margin-top:var(--wp--preset--spacing--5);margin-bottom:var(--wp--preset--spacing--7)">Anything in the table can be overridden on a single schedule. Overrides are recorded against the schedule rather than the view, so everyone else reading the same view is left untouched.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"fontSize":"2-xl","anchor":"limits-and-retention"} -->
<h2 class="wp-block-heading has-2-xl-font-size" id="limits-and-retention">Limits and retention</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|4"}}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="margin-top:var(--wp--preset--spacing--4)">Run history is held for ninety days, and a file leaves temporary storage as soon as the destination confirms receipt. Smaller workspaces may keep ten schedules active at once; pausing one frees the slot immediately.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"28%"} -->
<div class="wp-block-column" style="flex-basis:28%"><!-- wp:group {"className":"is-style-shadcn-sticky","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-shadcn-sticky"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"16px","height":"16px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Section list icon" style="width:16px;height:16px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">On this page</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:list {"className":"is-style-shadcn-plain","style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-plain has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li><a href="#how-a-schedule-runs">How a schedule runs</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#what-each-run-writes">What each run writes</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#limits-and-retention">Limits and retention</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
