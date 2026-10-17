<?php
/**
 * Title: Changelog Social Strip Feed
 * Slug: shadcn/changelog-social-strip-feed
 * Categories: shadcn, changelog
 * Description: A single-column release feed under a muted follow-along strip, where each entry leads with a screenshot panel, credits an author beside the date, and closes with a short detail list.
 * AI Hint: Screenshot-led changelog feed — a large left-aligned heading above a muted rounded strip of labelled channel links and a follow-along line, then hairline-divided entries that each stack a muted image panel, a small round author avatar beside the release date, a title, a summary with a couple of bolded phrases, and a bold sub-heading introducing three or four bulleted details; reach for it when releases are visual enough to show rather than describe and each one has a named author to credit.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|7"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:heading {"fontSize":"5-xl"} -->
<h2 class="wp-block-heading has-5-xl-font-size">Changelog</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|3","bottom":"var:preset|spacing|3","left":"var:preset|spacing|3"},"blockGap":"var:preset|spacing|3"}},"backgroundColor":"muted","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--3)"><!-- wp:shadcn/badge {"text":"Chat","variant":"ghost","url":"#","iconName":"message-circle"} /-->

<!-- wp:shadcn/badge {"text":"Forum","variant":"ghost","url":"#","iconName":"message-square"} /-->

<!-- wp:shadcn/badge {"text":"Newsletter","variant":"ghost","url":"#","iconName":"rss"} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Pick whichever one you already read — every release turns up in all three the same afternoon.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-shadcn-divided","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-shadcn-divided"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"12px"},"dimensions":{"minHeight":"260px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}},"backgroundColor":"muted","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:12px;min-height:260px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:image {"width":"140px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Two drafts opened side by side with changed paragraphs highlighted" style="width:140px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","height":"24px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Priya Ramanathan" style="border-radius:9999px;object-fit:cover;width:24px;height:24px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Priya Ramanathan · 14 August 2026</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size">Compare two drafts without leaving the editor</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Opening any two revisions now stacks them in one view, and the <strong>inline diff</strong> marks moved paragraphs as moved instead of flagging the whole block as rewritten. Reviewers stop guessing what actually <strong>changed</strong> between Tuesday and Friday.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Also in this release</p>
<!-- /wp:paragraph -->

<!-- wp:list {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Jump between changes with the bracket keys</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The compare view remembers your last pairing</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Comments follow a paragraph into the newer draft</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"12px"},"dimensions":{"minHeight":"260px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}},"backgroundColor":"muted","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:12px;min-height:260px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:image {"width":"140px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Scheduling dialog showing a local time beside the workspace time" style="width:140px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","height":"24px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Tomás Beringer" style="border-radius:9999px;object-fit:cover;width:24px;height:24px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Tomás Beringer · 31 July 2026</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size">Scheduled posts now run on your own clock</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Schedules used to follow the workspace timezone, which left <strong>every editor abroad</strong> doing the arithmetic by hand. Each account now keeps its own zone and the picker prints both times before you <strong>confirm</strong>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Details worth knowing</p>
<!-- /wp:paragraph -->

<!-- wp:list {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Existing schedules were relabelled, never re-timed</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Daylight saving shifts are applied for you</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Shared calendars still read in the workspace zone</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Confirmation mail spells out which zone was used</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"12px"},"dimensions":{"minHeight":"260px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}},"backgroundColor":"muted","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:12px;min-height:260px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:image {"width":"140px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Media library grid scrolling through thumbnails" style="width:140px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","height":"24px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Ingrid Sørhaug" style="border-radius:9999px;object-fit:cover;width:24px;height:24px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Ingrid Sørhaug · 9 July 2026</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size">A quieter, faster media library</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Thumbnails now arrive in a <strong>single pass</strong>, so a library of ten thousand files scrolls without the stutter halfway down. Uploads that drop out retry on their own rather than leaving a <strong>silent gap</strong> in the grid.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">What we fixed</p>
<!-- /wp:paragraph -->

<!-- wp:list {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Duplicates are caught before the transfer starts</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alt text survives replacing the underlying file</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Folder filters hold through a page refresh</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
