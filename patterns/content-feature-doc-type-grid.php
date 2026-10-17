<?php
/**
 * Title: Content Feature Doc Type Grid
 * Slug: shadcn/content-feature-doc-type-grid
 * Categories: shadcn, text
 * Description: A single-column how-to guide that opens with a badge, heading and media panel, then lists the available options as a two-column grid of bordered cards above numbered instructions and a tip callout.
 * AI Hint: Guide page written as one narrow reading column — pill badge, H1, muted lead and a tall muted media panel, then an H2 over a two-column grid of small bordered cards that each pair a line icon with a bold name and a one-line note, followed by H2 sections holding numbered instructions with emphasised interface labels and a bordered tip callout; reach for it when a reader has to see every available option at a glance before following the steps in order.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained","contentSize":"780px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"9999px"},"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem","left":"0.75rem","right":"0.75rem"}}},"fontSize":"xs"} -->
<p class="has-border-color has-xs-font-size" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:9999px;padding-top:0.25rem;padding-right:0.75rem;padding-bottom:0.25rem;padding-left:0.75rem">How-to guide</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"fontSize":"3-xl"} -->
<h1 class="wp-block-heading has-3-xl-font-size">Set up a shared inbox</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">Bring every request your team answers into one queue, then decide who picks it up. This guide covers the first connection and the two jobs you will repeat every week afterwards.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"12px"},"dimensions":{"minHeight":"420px"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"margin":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|7"}}},"backgroundColor":"muted","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:12px;min-height:420px;margin-top:var(--wp--preset--spacing--6);margin-bottom:var(--wp--preset--spacing--7);padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:image {"width":"180px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Shared inbox queue with unassigned and assigned requests side by side" style="width:180px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"fontSize":"2-xl"} -->
<h2 class="wp-block-heading has-2-xl-font-size">Channels you can connect</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4","margin":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|7"}}},"layout":{"type":"grid","columnCount":2}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--5);margin-bottom:var(--wp--preset--spacing--7)"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)"><!-- wp:image {"width":"20px","height":"20px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Mailbox icon" style="width:20px;height:20px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Mailbox</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Forward an address or connect the mailbox directly.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)"><!-- wp:image {"width":"20px","height":"20px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Web form icon" style="width:20px;height:20px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Web form</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Turn each submission into a threaded request.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)"><!-- wp:image {"width":"20px","height":"20px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Live chat icon" style="width:20px;height:20px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Live chat</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Pick up conversations after the visitor leaves.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)"><!-- wp:image {"width":"20px","height":"20px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Voicemail icon" style="width:20px;height:20px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Voicemail</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Route recordings and their transcripts to the queue.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)"><!-- wp:image {"width":"20px","height":"20px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Social mentions icon" style="width:20px;height:20px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Social</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Collect public mentions and private messages together.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)"><!-- wp:image {"width":"20px","height":"20px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="In-product feedback icon" style="width:20px;height:20px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Feedback widget</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Catch reports with the page and build attached.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)"><!-- wp:image {"width":"20px","height":"20px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Inbound API icon" style="width:20px;height:20px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Custom</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Post anything into the queue through the inbound API.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"fontSize":"2-xl"} -->
<h2 class="wp-block-heading has-2-xl-font-size">Connect the first channel</h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered":true,"style":{"spacing":{"blockGap":"var:preset|spacing|2","margin":{"top":"var:preset|spacing|4"}}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ol class="wp-block-list has-muted-foreground-color has-text-color has-sm-font-size" style="margin-top:var(--wp--preset--spacing--4)"><!-- wp:list-item -->
<li>Open <strong>Settings</strong>, choose <strong>Channels</strong> and select <strong>Add channel</strong>.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pick a channel type, then paste the address or key it asks for.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Send one test message and confirm it arrives under <strong>Unassigned</strong>.</li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|3","margin":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|7"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:8px;margin-top:var(--wp--preset--spacing--5);margin-bottom:var(--wp--preset--spacing--7);padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)"><!-- wp:image {"width":"16px","height":"16px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Tip icon" style="width:16px;height:16px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Tip</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Start with a quiet channel. One test address is enough to prove the routing before real requests begin to land.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"fontSize":"2-xl"} -->
<h2 class="wp-block-heading has-2-xl-font-size">Assign and close a request</h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered":true,"style":{"spacing":{"blockGap":"var:preset|spacing|2","margin":{"top":"var:preset|spacing|4"}}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ol class="wp-block-list has-muted-foreground-color has-text-color has-sm-font-size" style="margin-top:var(--wp--preset--spacing--4)"><!-- wp:list-item -->
<li>Open a request and use <strong>Assign</strong> to hand it to a person or a team.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Add a rule under <strong>Routing</strong> so the next request of that kind skips the queue.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Finish with <strong>Resolve</strong>; reopening a thread keeps the original owner.</li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group -->
