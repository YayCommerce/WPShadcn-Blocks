<?php
/**
 * Title: Hero Play Stat Strip
 * Slug: shadcn/hero-play-stat-strip
 * Categories: shadcn, hero
 * Description: A split hero placing a headline, lead and a watch-the-tour button pair beside a muted media panel, with three headline figures banded underneath.
 * AI Hint: Split hero with a proof band — a 52/48 row putting a display headline, muted lead and two calls to action, one filled and one outline carrying a play icon, beside a tall rounded muted panel holding a centred preview image, then three equal columns each stacking a large semibold figure above a small muted caption; best for a course, programme or product launch page whose main call is to watch a tour and whose credibility rests on a few round numbers.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|8"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|7","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"52%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"fontSize":"fluid-5-xl"} -->
<h1 class="wp-block-heading has-fluid-5-xl-font-size">Learn to ship a design system in six evenings</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Fieldnote is a self-paced programme for designers who inherited a component library and no plan for it. You leave with one working repository, a written set of rules, and a critique on every module you hand in.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"primary-foreground","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:8px">Join the autumn cohort</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline","iconName":"play","iconPosition":"left"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Watch the tour</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"48%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%"><!-- wp:group {"style":{"border":{"radius":"16px"},"dimensions":{"minHeight":"360px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}},"backgroundColor":"muted","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:16px;min-height:360px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:image {"width":"160px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Fieldnote lesson player preview" style="width:160px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"fontSize":"3-xl"} -->
<p class="has-text-align-center has-3-xl-font-size" style="font-weight:600">12</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size">Guided lessons, none of them longer than an hour</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"fontSize":"3-xl"} -->
<p class="has-text-align-center has-3-xl-font-size" style="font-weight:600">6</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size">Evenings from first commit to a published library</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"fontSize":"3-xl"} -->
<p class="has-text-align-center has-3-xl-font-size" style="font-weight:600">2,400</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size">Designers who finished the last three cohorts</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
