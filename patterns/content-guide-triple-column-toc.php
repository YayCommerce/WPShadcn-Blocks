<?php
/**
 * Title: Content Guide Triple Column TOC
 * Slug: shadcn/content-guide-triple-column-toc
 * Categories: shadcn, text
 * Description: A breadcrumbed documentation header above a three-column article body with a meta rail on the left, long-form prose in the centre and an on-this-page link rail on the right.
 * AI Hint: Documentation guide layout — a three-crumb breadcrumb, an oversized two-line h1, a muted two-line lead and a filled-plus-outline button pair sit above a three-column body whose narrow left rail labels the topics and the last-updated date, whose wide centre column runs a rounded muted media panel, a section h2 and four anchored h3-and-paragraph passages including a nested checklist with inline code and an inline link, and whose narrow right rail repeats those headings as an uppercase on-this-page list; reach for it on a handbook, knowledge-base or developer-guide page that needs metadata and in-page navigation flanking the prose.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size"><a href="#">Home</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">&#47;</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size"><a href="#">Handbook</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">&#47;</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Scheduled imports</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"800","letterSpacing":"-0.02em"}},"fontSize":"fluid-5-xl"} -->
<h1 class="wp-block-heading has-fluid-5-xl-font-size" style="font-weight:800;letter-spacing:-0.02em">Running unattended imports<br>without keeping a server awake.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">Point the runner at a folder, describe the cadence once<br>and let the queue carry every run after that.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"sm","backgroundColor":"primary","textColor":"primary-foreground","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button is-size-sm"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:8px">Start the walkthrough</a></div>
<!-- /wp:button -->

<!-- wp:button {"size":"sm","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline is-size-sm"><a class="wp-block-button__link wp-element-button" href="#">Sample repository</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"20%","style":{"spacing":{"blockGap":"var:preset|spacing|6"}}} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Topics</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size"><a href="#">Scheduled jobs</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size"><a href="#">Data pipelines</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Last updated</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">12 February 2026</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"54%","style":{"spacing":{"blockGap":"var:preset|spacing|7"}}} -->
<div class="wp-block-column" style="flex-basis:54%"><!-- wp:group {"style":{"border":{"radius":"12px"},"dimensions":{"minHeight":"280px"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"}}},"backgroundColor":"muted","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:12px;min-height:280px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:image {"width":"140px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Runner dashboard showing a queue of scheduled imports" style="width:140px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.01em"}},"fontSize":"3-xl"} -->
<h2 class="wp-block-heading has-3-xl-font-size" style="font-weight:700;letter-spacing:-0.01em">Operator handbook</h2>
<!-- /wp:heading -->

<!-- wp:group {"anchor":"what-this-covers","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" id="what-this-covers"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">What this covers</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">This page walks through a single repeating import from the first manual run to a schedule nobody has to babysit. Everything here works from a laptop, a spare box under a desk, or a hosted worker, and none of it assumes you already keep a machine online overnight.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"before-you-begin","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" id="before-you-begin"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Before you begin</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">Collect the four things below before writing a schedule. Missing any one of them turns a five-minute setup into an afternoon of guessing which run failed and why.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Files the runner will read on every pass:<!-- wp:list {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}}} -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><code>schedule.yaml</code> naming the cadence and the time zone</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><code>--dry-run</code> to rehearse a pass without writing any rows</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>A destination the worker can reach <a href="#">check the connection notes</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Somewhere to send failures that a person actually reads</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>A retention rule so old run logs do not grow without limit</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"choosing-a-cadence","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" id="choosing-a-cadence"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Choosing a cadence</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">Match the interval to how quickly the source actually changes rather than to how fresh you would like the data to feel. A nightly pass that always finishes beats a five-minute pass that piles up behind itself by the middle of the afternoon.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"when-a-run-fails","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" id="when-a-run-fails"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">When a run fails</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">Every pass writes an outcome, a duration and a row count, so a failure is a record rather than a silence. Replay the run against the same input first; if it succeeds the second time, the problem is almost always the source and not the schedule.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"22%","style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:500;letter-spacing:0.08em;text-transform:uppercase">On this page</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"textColor":"foreground","fontSize":"sm"} -->
<p class="has-foreground-color has-text-color has-sm-font-size" style="font-weight:500"><a href="#what-this-covers">What this covers</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size"><a href="#before-you-begin">Before you begin</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size"><a href="#choosing-a-cadence">Choosing a cadence</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size"><a href="#when-a-run-fails">When a run fails</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
