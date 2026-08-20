<?php
/**
 * Title: Community Gradient Tiles
 * Slug: shadcn/community-gradient-tiles
 * Categories: shadcn, community
 * Description: A centred invitation above four dark gradient tiles, each naming a community channel with a badge, a heading, a short line and an arrow link.
 * AI Hint: Four-column row of saturated dark gradient tiles — blue, red, near-black and magenta — every tile pinning a labelled channel badge at the top and an arrow call-to-action at the bottom with a heading and one muted line between; best for the loudest community or contact section on a page, where a light card grid would read as too quiet.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":2,"fontSize":"4-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-4-xl-font-size">Four ways in</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-base-font-size">Every room we keep open, and what tends to happen in each one. Point the links at your own spaces before this page goes live.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-shadcn-on-dark","style":{"border":{"radius":"12px"},"color":{"text":"#ffffff","gradient":"linear-gradient(160deg,#0a1a3c 0%,#1d4ed8 100%)"},"dimensions":{"minHeight":"220px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-shadcn-on-dark has-text-color has-background" style="border-radius:12px;color:#ffffff;background:linear-gradient(160deg,#0a1a3c 0%,#1d4ed8 100%);min-height:220px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Chat","variant":"outline","iconName":"message-circle","iconPosition":"left"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size">Talk it through live</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Quick questions, pairing sessions and the occasional release-day scramble.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Join the chat","variant":"ghost","url":"#","iconName":"arrow-right","iconPosition":"right"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-shadcn-on-dark","style":{"border":{"radius":"12px"},"color":{"text":"#ffffff","gradient":"linear-gradient(160deg,#3b0a0a 0%,#b91c1c 100%)"},"dimensions":{"minHeight":"220px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-shadcn-on-dark has-text-color has-background" style="border-radius:12px;color:#ffffff;background:linear-gradient(160deg,#3b0a0a 0%,#b91c1c 100%);min-height:220px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Forum","variant":"outline","iconName":"message-square","iconPosition":"left"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size">Ask the long questions</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Threads that stay searchable long after the answer has landed.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Browse threads","variant":"ghost","url":"#","iconName":"arrow-right","iconPosition":"right"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-shadcn-on-dark","style":{"border":{"radius":"12px"},"color":{"text":"#ffffff","gradient":"linear-gradient(160deg,#101014 0%,#3f3f46 100%)"},"dimensions":{"minHeight":"220px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-shadcn-on-dark has-text-color has-background" style="border-radius:12px;color:#ffffff;background:linear-gradient(160deg,#101014 0%,#3f3f46 100%);min-height:220px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Source","variant":"outline","iconName":"code","iconPosition":"left"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size">Read the code</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Open issues, review queues and the roadmap we work from each week.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Open the repository","variant":"ghost","url":"#","iconName":"arrow-right","iconPosition":"right"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-shadcn-on-dark","style":{"border":{"radius":"12px"},"color":{"text":"#ffffff","gradient":"linear-gradient(160deg,#2e0a4a 0%,#a21caf 100%)"},"dimensions":{"minHeight":"220px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-shadcn-on-dark has-text-color has-background" style="border-radius:12px;color:#ffffff;background:linear-gradient(160deg,#2e0a4a 0%,#a21caf 100%);min-height:220px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Newsletter","variant":"outline","iconName":"send","iconPosition":"left"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size">Get the monthly note</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">One short letter a month on what shipped and what comes next.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Subscribe","variant":"ghost","url":"#","iconName":"arrow-right","iconPosition":"right"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
