<?php
/**
 * Title: Content Blog Article Byline TOC
 * Slug: shadcn/content-blog-article-byline-toc
 * Categories: shadcn, text
 * Description: A two-crumb breadcrumb and oversized headline above an avatar byline, followed by a two-column article body pairing illustrated prose with an on-this-page link rail.
 * AI Hint: Long-form article opener — a two-crumb breadcrumb, an oversized two-line h1 and a byline row of round avatar, bold writer name and muted publication date sit above a two-column body whose wide left column stacks a tall rounded muted media panel, a three-line muted intro, an anchored h2 with two paragraphs and a second media panel, while the narrow right column lists the section headings under an uppercase on-this-page label; reach for it on an editorial post, essay or research write-up where the reader needs a table of contents beside the story rather than above it.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size"><a href="#">Journal</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">&rsaquo;</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Interfaces After Dark</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.02em"}},"fontSize":"fluid-5-xl"} -->
<h1 class="wp-block-heading has-fluid-5-xl-font-size" style="font-weight:700;letter-spacing:-0.02em">Interfaces After Dark<br>and the Night Shift</h1>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/avatar {"mediaUrl":"https://ui.shadcn.com/placeholder.svg","mediaAlt":"Marisol Quintana","size":"sm","fallback":"MQ"} /-->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Marisol Quintana</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">on 3 March 2026</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|10"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"55%","style":{"spacing":{"blockGap":"var:preset|spacing|6"}}} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:group {"style":{"border":{"radius":"12px"},"dimensions":{"minHeight":"420px"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"}}},"backgroundColor":"muted","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:12px;min-height:420px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:image {"width":"180px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="https://ui.shadcn.com/placeholder.svg" alt="A dimmed operations console photographed shortly after midnight" style="width:180px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">Most product decisions are made in daylight by people who will never open the thing at three in the morning. The teams who do open it then read the same screens differently, and the gap between those two readings is where a surprising number of late-night mistakes begin.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"anchor":"reading-a-screen-at-three-am","style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" id="reading-a-screen-at-three-am"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.01em"}},"fontSize":"2-xl"} -->
<h2 class="wp-block-heading has-2-xl-font-size" style="font-weight:600;letter-spacing:-0.01em">Reading a screen at three in the morning</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">Attention narrows on a long shift. Operators stop scanning a layout and start hunting for the one number they came for, which means anything placed near that number is read whether it was meant to be or not, and anything placed far from it may as well not exist.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">We watched eleven handovers before changing a pixel. Two habits showed up every night: people read the timestamp before the value, and they trusted a stale figure far longer than anyone had assumed. Both turned out to be layout problems rather than training problems.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"border":{"radius":"12px"},"dimensions":{"minHeight":"300px"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"}}},"backgroundColor":"muted","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:12px;min-height:300px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:image {"width":"150px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="https://ui.shadcn.com/placeholder.svg" alt="Redrawn status panel with the timestamp set above the reading" style="width:150px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"contrast-that-does-not-shout","style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" id="contrast-that-does-not-shout"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.01em"}},"fontSize":"2-xl"} -->
<h2 class="wp-block-heading has-2-xl-font-size" style="font-weight:600;letter-spacing:-0.01em">Contrast that does not shout</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">A dark theme is not a dimmer switch. Dropping every surface at once flattens the hierarchy that told an operator which panel mattered, and the usual repair is to give the important surface a little more separation rather than to make the rest darker still.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"handing-over-cleanly","style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" id="handing-over-cleanly"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.01em"}},"fontSize":"2-xl"} -->
<h2 class="wp-block-heading has-2-xl-font-size" style="font-weight:600;letter-spacing:-0.01em">Handing over cleanly</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">The last ten minutes of a shift decide how the next eight hours go. Anything the outgoing operator has to remember unaided will eventually be forgotten, so the interface should carry the handover instead of the person carrying it.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"28%","style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-column" style="flex-basis:28%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:500;letter-spacing:0.08em;text-transform:uppercase">On this page</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"textColor":"foreground","fontSize":"sm"} -->
<p class="has-foreground-color has-text-color has-sm-font-size" style="font-weight:500"><a href="#reading-a-screen-at-three-am">Reading a screen at three in the morning</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size"><a href="#contrast-that-does-not-shout">Contrast that does not shout</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size"><a href="#handing-over-cleanly">Handing over cleanly</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
