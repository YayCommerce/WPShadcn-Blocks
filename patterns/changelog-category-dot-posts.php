<?php
/**
 * Title: Changelog Category Dot Posts
 * Slug: shadcn/changelog-category-dot-posts
 * Categories: shadcn, changelog
 * Description: A hairline-divided release log where each entry pairs a narrow date column with colour-coded category badges, a headline, linked prose and a muted image panel.
 * AI Hint: Prose-led changelog — a modest heading and muted lead above a hairline-divided stack of entries, each splitting a narrow two-line date column against a wider column holding a wrapped row of colour-coded category badges, a headline, two muted paragraphs carrying inline links out to the features they mention, and a muted rounded panel with a centred placeholder image; best for a release page written as short essays about what shipped rather than as version numbers and bullet lists.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained","contentSize":"680px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"fontSize":"4-xl"} -->
<h2 class="wp-block-heading has-4-xl-font-size">What we shipped</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">Every release, written up by the people who built it. Categories tell you at a glance whether an entry touches the editor, the API or the way the product performs.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-shadcn-divided","align":"wide","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-group alignwide is-style-shadcn-divided"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"18%"} -->
<div class="wp-block-column" style="flex-basis:18%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">June 12<br>2026</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"82%"} -->
<div class="wp-block-column" style="flex-basis:82%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Editor","variant":"default"} /-->

<!-- wp:shadcn/badge {"text":"Accessibility","variant":"secondary"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size">Keyboard-first editing, end to end</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">You can now move through an entire document without reaching for the mouse. Every inserter, sidebar and toolbar answers to a focus ring, and the new <a href="#">command palette</a> opens on the same shortcut everywhere.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Screen reader announcements were rewritten alongside it, so block selection and drag handles read out in plain language. The full list of shortcuts lives in the <a href="#">editing guide</a>, and the reasoning behind the focus model is in <a href="#">our notes on accessibility</a>.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"border":{"radius":"12px"},"dimensions":{"minHeight":"240px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}},"backgroundColor":"muted","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:12px;min-height:240px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:image {"width":"120px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Command palette open over a document" style="width:120px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"18%"} -->
<div class="wp-block-column" style="flex-basis:18%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">May 28<br>2026</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"82%"} -->
<div class="wp-block-column" style="flex-basis:82%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Performance","variant":"secondary"} /-->

<!-- wp:shadcn/badge {"text":"API","variant":"outline"} /-->

<!-- wp:shadcn/badge {"text":"Breaking change","variant":"destructive"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size">Batched reads cut cold loads in half</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Collection endpoints now resolve their relations in a single round trip instead of one per record. On a workspace with ten thousand entries the first paint dropped from just over four seconds to under two, without any change on your side.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">The old per-record endpoint stays available until the autumn release and then retires. Swap to the batched shape described in the <a href="#">API reference</a>, and check the <a href="#">migration notes</a> if you cache responses yourself.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"border":{"radius":"12px"},"dimensions":{"minHeight":"240px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}},"backgroundColor":"muted","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:12px;min-height:240px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:image {"width":"120px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Request timeline before and after batching" style="width:120px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"18%"} -->
<div class="wp-block-column" style="flex-basis:18%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">May 09<br>2026</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"82%"} -->
<div class="wp-block-column" style="flex-basis:82%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Integrations","variant":"default"} /-->

<!-- wp:shadcn/badge {"text":"Docs","variant":"outline"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size">Connect a warehouse in one afternoon</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Sync now speaks to Postgres, BigQuery and Snowflake through the same connector screen. Pick a destination, map the fields once, and the schedule takes over from there — no scripts, no service account juggling.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Each connector ships with a worked example and a rollback path, both collected in the <a href="#">sync handbook</a>. If you are still on the legacy export job, the <a href="#">upgrade walkthrough</a> covers the two settings that changed names.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"border":{"radius":"12px"},"dimensions":{"minHeight":"240px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}},"backgroundColor":"muted","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:12px;min-height:240px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:image {"width":"120px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Warehouse connector picker" style="width:120px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
