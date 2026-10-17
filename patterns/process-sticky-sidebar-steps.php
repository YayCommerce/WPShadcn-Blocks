<?php
/**
 * Title: Process Sticky Sidebar Steps
 * Slug: shadcn/process-sticky-sidebar-steps
 * Categories: shadcn, process
 * Description: A two-column process section with a pinned heading, intro and contact link on the left and four numbered, hairline-divided steps on the right.
 * AI Hint: Sticky-sidebar process layout — a narrow left column holding an oversized heading, a short intro and a text contact link that stays pinned while the wider right column scrolls through four divided rows, each pairing a monospace step number in a muted chip with a title and a paragraph of detail; best for a services or agency page that explains how an engagement runs from first call to handover.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|10"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"32%"} -->
<div class="wp-block-column" style="flex-basis:32%"><!-- wp:group {"className":"is-style-shadcn-sticky","style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-shadcn-sticky"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace;letter-spacing:0.08em;text-transform:uppercase">How we work</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"style":{"typography":{"letterSpacing":"-0.03em"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-fluid-5-xl-font-size" style="letter-spacing:-0.03em">Four stages, start to handover</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Every engagement runs through the same four stages, so you always know which one you are in, who is holding the work, and what lands at the end of it.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600"><a href="#">Start a conversation ↗</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"68%"} -->
<div class="wp-block-column" style="flex-basis:68%"><!-- wp:group {"className":"is-style-shadcn-divided","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-shadcn-divided"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0.5rem","right":"0.75rem","bottom":"0.5rem","left":"0.75rem"}},"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","letterSpacing":"-0.02em"}},"backgroundColor":"muted","fontSize":"sm"} -->
<p class="has-muted-background-color has-background has-sm-font-size" style="padding-top:0.5rem;padding-right:0.75rem;padding-bottom:0.5rem;padding-left:0.75rem;font-family:ui-monospace, SFMono-Regular, Menlo, monospace;letter-spacing:-0.02em">01</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.02em"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size" style="letter-spacing:-0.02em">Scoping call</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">We map the problem, the constraints and the people who need to sign off, then write down what a good outcome looks like before any design work begins.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0.5rem","right":"0.75rem","bottom":"0.5rem","left":"0.75rem"}},"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","letterSpacing":"-0.02em"}},"backgroundColor":"muted","fontSize":"sm"} -->
<p class="has-muted-background-color has-background has-sm-font-size" style="padding-top:0.5rem;padding-right:0.75rem;padding-bottom:0.5rem;padding-left:0.75rem;font-family:ui-monospace, SFMono-Regular, Menlo, monospace;letter-spacing:-0.02em">02</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.02em"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size" style="letter-spacing:-0.02em">Written blueprint</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">You get a short document covering the approach, the milestones and every decision we need from you, sequenced so nothing important waits until the final week.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0.5rem","right":"0.75rem","bottom":"0.5rem","left":"0.75rem"}},"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","letterSpacing":"-0.02em"}},"backgroundColor":"muted","fontSize":"sm"} -->
<p class="has-muted-background-color has-background has-sm-font-size" style="padding-top:0.5rem;padding-right:0.75rem;padding-bottom:0.5rem;padding-left:0.75rem;font-family:ui-monospace, SFMono-Regular, Menlo, monospace;letter-spacing:-0.02em">03</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.02em"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size" style="letter-spacing:-0.02em">Build in short cycles</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Design and engineering run side by side in two-week cycles, and each one ends with a working version you can open, click through and comment on directly.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0.5rem","right":"0.75rem","bottom":"0.5rem","left":"0.75rem"}},"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","letterSpacing":"-0.02em"}},"backgroundColor":"muted","fontSize":"sm"} -->
<p class="has-muted-background-color has-background has-sm-font-size" style="padding-top:0.5rem;padding-right:0.75rem;padding-bottom:0.5rem;padding-left:0.75rem;font-family:ui-monospace, SFMono-Regular, Menlo, monospace;letter-spacing:-0.02em">04</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.02em"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size" style="letter-spacing:-0.02em">Handover and tuning</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">We ship, watch how the release behaves under real traffic, and spend the weeks after launch tightening whatever the numbers and the support queue point at.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
