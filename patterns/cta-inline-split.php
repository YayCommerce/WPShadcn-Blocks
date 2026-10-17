<?php
/**
 * Title: CTA Inline Split
 * Slug: shadcn/cta-inline-split
 * Categories: shadcn, call-to-action
 * Description: A compact single-row call to action with a short heading and one line of copy on the left and two buttons pushed to the far edge, over a hairline rule.
 * AI Hint: Lightest of the call to action layouts — one full-width row rather than a panel, with a two-extra-large heading above a single muted line on the left and an outline button beside a primary button pushed hard right, the pair sitting on a hairline rule; carries no image at all, so reach for it when a page already holds its weight elsewhere and the closing ask should read as a footnote rather than a section.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|8"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8)"><!-- wp:group {"align":"wide","style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"bottom":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|6"}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--7)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"fontSize":"2-xl"} -->
<h2 class="wp-block-heading has-2-xl-font-size">Try it on your own content</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">Import one page, swap the words, publish. No card, no call, no sales sequence afterwards.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"md","className":"is-style-outline"} -->
<div class="wp-block-button is-size-md is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">See how it works</a></div>
<!-- /wp:button -->

<!-- wp:button {"size":"md","backgroundColor":"primary","textColor":"primary-foreground","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button is-size-md"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:8px">Start in the editor</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
