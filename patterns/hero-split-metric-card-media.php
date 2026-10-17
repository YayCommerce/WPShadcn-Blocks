<?php
/**
 * Title: Hero Split Metric Card Media
 * Slug: shadcn/hero-split-metric-card-media
 * Categories: shadcn, hero
 * Description: A two-column hero pairing a headline, lead and two arrow buttons with a wide product screenshot above a single metric card.
 * AI Hint: Split product hero with one number to prove it — the left half stacks a two-line display h1, a three-sentence muted lead and a filled button beside an outline button, both carrying a right arrow, while the right half holds a wide rounded screenshot with a bordered card underneath naming one headline percentage and the span it covers; reach for it when the offer needs both an interface shot and a single believable figure above the fold.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|9"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"46%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:46%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.02em","lineHeight":"1.1"}},"fontSize":"fluid-5-xl"} -->
<h1 class="wp-block-heading has-fluid-5-xl-font-size" style="font-weight:600;letter-spacing:-0.02em;line-height:1.1">Hiring that keeps its promises to candidates</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Larkfield keeps every scorecard, interview note and offer approval on the same record, so no decision has to be chased through an inbox. Each panel sees what the panel before it wrote. Anyone can answer where a role stands without opening five tabs.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"primary-foreground","style":{"border":{"radius":"8px"}},"iconName":"arrow-right","iconPosition":"right"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:8px">Open a workspace</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"8px"}},"iconName":"arrow-right","iconPosition":"right"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:8px">See a sample pipeline</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"54%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:54%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"16/10","scale":"cover","width":"100%","sizeSlug":"large","style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="The Larkfield pipeline board showing open roles across interview stages" class="has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;aspect-ratio:16/10;object-fit:cover;width:100%"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|2"}},"backgroundColor":"card","layout":{"type":"constrained","contentSize":"320px","justifyContent":"left"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Offer acceptance</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","lineHeight":"1.1"}},"fontSize":"4-xl"} -->
<p class="has-4-xl-font-size" style="font-weight:600;line-height:1.1">84%</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Across every role closed in the last two quarters</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
