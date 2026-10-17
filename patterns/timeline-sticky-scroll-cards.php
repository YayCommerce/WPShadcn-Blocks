<?php
/**
 * Title: Timeline Sticky Scroll Cards
 * Slug: shadcn/timeline-sticky-scroll-cards
 * Categories: shadcn, timeline
 * Description: A two-column section with a heading and standfirst pinned in the narrow left column while four numbered cards, each with an icon badge, title and paragraph, scroll past on the right.
 * AI Hint: Sticky-heading timeline — a narrow left column holds an oversized heading and a short standfirst that stay pinned via the shadcn sticky group style, while the wider right column stacks four soft-panelled cards that each carry an oversized monospace step number in the top corner, a round outlined icon badge, a title and a paragraph; reach for it when a numbered sequence is long enough to scroll but the framing statement must stay on screen the whole way down.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|10"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"42%"} -->
<div class="wp-block-column" style="flex-basis:42%"><!-- wp:group {"className":"is-style-shadcn-sticky","style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","contentSize":"440px","justifyContent":"left"}} -->
<div class="wp-block-group is-style-shadcn-sticky"><!-- wp:heading {"level":2,"style":{"typography":{"letterSpacing":"-0.03em"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-fluid-5-xl-font-size" style="letter-spacing:-0.03em">Payroll that stops eating Thursdays</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Four things change in the first month. None of them ask your team to learn a new job.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"58%"} -->
<div class="wp-block-column" style="flex-basis:58%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--8)"><!-- wp:paragraph {"align":"right","style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","letterSpacing":"-0.02em"}},"textColor":"muted-foreground","fontSize":"5-xl"} -->
<p class="has-text-align-right has-muted-foreground-color has-text-color has-5-xl-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace;letter-spacing:-0.02em">01</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|3","bottom":"var:preset|spacing|3","left":"var:preset|spacing|3"}}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:9999px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--3)"><!-- wp:image {"width":"22px","height":"22px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Icon of a folder holding signed contracts" style="width:22px;height:22px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.02em"}},"textColor":"foreground","fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-foreground-color has-text-color has-2-xl-font-size" style="letter-spacing:-0.02em">Every contract in one drawer</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Salaried staff, hourly crew and the three contractors nobody can ever find paperwork for all sit in the same list, with their rates, notice periods and end dates attached to the person rather than to a spreadsheet tab.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--8)"><!-- wp:paragraph {"align":"right","style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","letterSpacing":"-0.02em"}},"textColor":"muted-foreground","fontSize":"5-xl"} -->
<p class="has-text-align-right has-muted-foreground-color has-text-color has-5-xl-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace;letter-spacing:-0.02em">02</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|3","bottom":"var:preset|spacing|3","left":"var:preset|spacing|3"}}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:9999px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--3)"><!-- wp:image {"width":"22px","height":"22px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Icon of a single approval tick on a form" style="width:22px;height:22px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.02em"}},"textColor":"foreground","fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-foreground-color has-text-color has-2-xl-font-size" style="letter-spacing:-0.02em">One desk signs, not four</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Overtime, expenses and unpaid leave route to whoever actually owns the budget, and stop there. If that person is away the request moves on by itself instead of sitting unread until the cut-off.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--8)"><!-- wp:paragraph {"align":"right","style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","letterSpacing":"-0.02em"}},"textColor":"muted-foreground","fontSize":"5-xl"} -->
<p class="has-text-align-right has-muted-foreground-color has-text-color has-5-xl-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace;letter-spacing:-0.02em">03</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|3","bottom":"var:preset|spacing|3","left":"var:preset|spacing|3"}}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:9999px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--3)"><!-- wp:image {"width":"22px","height":"22px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Icon of a ledger page with a magnifying glass" style="width:22px;height:22px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.02em"}},"textColor":"foreground","fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-foreground-color has-text-color has-2-xl-font-size" style="letter-spacing:-0.02em">A figure you can defend</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Every number on the run links back to the timesheet, rate change or adjustment that produced it. When an auditor asks why March moved, the answer takes a click rather than an afternoon of reconstruction.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--8)"><!-- wp:paragraph {"align":"right","style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","letterSpacing":"-0.02em"}},"textColor":"muted-foreground","fontSize":"5-xl"} -->
<p class="has-text-align-right has-muted-foreground-color has-text-color has-5-xl-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace;letter-spacing:-0.02em">04</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|3","bottom":"var:preset|spacing|3","left":"var:preset|spacing|3"}}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:9999px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--3)"><!-- wp:image {"width":"22px","height":"22px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Icon of a speech bubble with a headset" style="width:22px;height:22px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.02em"}},"textColor":"foreground","fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-foreground-color has-text-color has-2-xl-font-size" style="letter-spacing:-0.02em">Help from someone who runs payroll</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Support is staffed by people who have closed a month themselves, and they answer in the same hour on run week. You will not be handed a help-centre link when a payment is already late.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
