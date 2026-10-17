<?php
/**
 * Title: Hero Aurora Benefit Row
 * Slug: shadcn/hero-aurora-benefit-row
 * Categories: shadcn, hero
 * Description: A dark aurora-gradient hero panel with a headline and buttons on the left, a glass preview tile on the right, and a wrapping row of benefit chips beneath.
 * AI Hint: Full-width dark panel washed with a custom night-sky gradient, splitting into a 55/45 column pair — eyebrow badge, large headline, lead paragraph and a two-button row on the left, a translucent hairline-bordered preview tile on the right — and closing with four icon badges naming the reasons to sign up; reach for it when a launch page needs a bold gradient opener that answers the objections in the same breath, without leaning on a photograph.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"className":"is-style-shadcn-on-dark","align":"wide","style":{"border":{"radius":"16px"},"color":{"text":"#ffffff","gradient":"linear-gradient(135deg,#070b1f 0%,#12224d 55%,#0b2f3a 100%)"},"dimensions":{"minHeight":"520px"},"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide is-style-shadcn-on-dark has-text-color has-background" style="border-radius:16px;color:#ffffff;background:linear-gradient(135deg,#070b1f 0%,#12224d 55%,#0b2f3a 100%);min-height:520px;padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--9)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Open beta, night shift edition","variant":"outline","iconName":"sparkles","iconPosition":"left"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"fontSize":"fluid-5-xl"} -->
<h1 class="wp-block-heading has-fluid-5-xl-font-size">Ship after dark and wake nobody</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"}},"fontSize":"lg"} -->
<p class="has-text-color has-lg-font-size" style="color:#ffffff">Northlight watches every overnight release, holds the noise back until it means something, and leaves the morning shift one readable summary of what actually moved while they slept.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"lg","iconName":"arrow-right","iconPosition":"right","style":{"color":{"text":"#0a0a0a","background":"#ffffff"}}} -->
<div class="wp-block-button is-size-lg"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="#" style="color:#0a0a0a;background-color:#ffffff">Start the free trial</a></div>
<!-- /wp:button -->

<!-- wp:button {"size":"lg","className":"is-style-outline","iconName":"play","iconPosition":"left","style":{"color":{"text":"#ffffff"}}} -->
<div class="wp-block-button is-style-outline is-size-lg"><a class="wp-block-button__link has-text-color wp-element-button" href="#" style="color:#ffffff">Watch a night in review</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"dimensions":{"minHeight":"300px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;min-height:300px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:image {"width":"140px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Northlight overnight summary panel" style="width:140px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"No three-in-the-morning pages","variant":"outline","iconName":"moon","iconPosition":"left"} /-->

<!-- wp:shadcn/badge {"text":"Connected in ten minutes","variant":"outline","iconName":"zap","iconPosition":"left"} /-->

<!-- wp:shadcn/badge {"text":"Free while your team is under five","variant":"outline","iconName":"users","iconPosition":"left"} /-->

<!-- wp:shadcn/badge {"text":"Cancel from the dashboard","variant":"outline","iconName":"shield-check","iconPosition":"left"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
