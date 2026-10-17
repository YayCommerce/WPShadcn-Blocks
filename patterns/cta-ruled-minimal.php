<?php
/**
 * Title: CTA Ruled Minimal
 * Slug: shadcn/cta-ruled-minimal
 * Categories: shadcn, call-to-action
 * Description: A quiet call to action with no card and no panel, bounded top and bottom by a single hairline rule around a centred headline, one supporting line and two buttons.
 * AI Hint: Minimal ruled call to action — a hairline border above and below an otherwise unfilled section holding a centred headline, one muted supporting sentence and a primary plus outline button pair, with no card, panel, photograph or background colour anywhere; reach for it between two dense sections where a filled CTA would fight for attention, or as the last thing on a long editorial page. The rules are per-side border supports on the wrapper group, so dropping the bottom side leaves a top-rule variant and moving them to the left side gives the vertical stripe treatment.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"border":{"top":{"color":"var:preset|color|border","width":"1px","style":"solid"},"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.02em"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-4-xl-font-size" style="font-weight:600;letter-spacing:-0.02em">Everything above, ready to drop into your next build</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"center","style":{"typography":{"lineHeight":"1.6"}},"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size" style="line-height:1.6">Every section on this page ships as an editable pattern. Pick the ones you want, change the words, and keep the spacing decisions someone else already argued about.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"md"} -->
<div class="wp-block-button is-size-md"><a class="wp-block-button__link wp-element-button" href="#">Get the full set</a></div>
<!-- /wp:button -->

<!-- wp:button {"size":"md","className":"is-style-outline","iconName":"arrow-right","iconPosition":"right"} -->
<div class="wp-block-button is-style-outline is-size-md"><a class="wp-block-button__link wp-element-button" href="#">Browse the catalogue</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
