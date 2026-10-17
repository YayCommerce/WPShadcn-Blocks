<?php
/**
 * Title: Hero Announcement Triptych
 * Slug: shadcn/hero-announcement-triptych
 * Categories: shadcn, hero
 * Description: A centred announcement — outline badge, oversized headline, short lead and two buttons — standing above three tall photographic panels, each carrying a small white caption at its foot.
 * AI Hint: Centred launch hero in a 760px column — an outline badge linking to the announcement, a fluid oversized h1, a two-line muted lead and a filled button beside an outline one — closing on a full-width triptych of three equal photographic covers, each dimmed at half strength with a single white caption pinned to the bottom of the frame; reach for it when the launch is visual and the proof is three images read left to right, rather than a screenshot or a logo wall.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Read the launch note","variant":"outline","url":"#","iconName":"arrow-right","iconPosition":"right"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"fluid-5-xl"} -->
<h1 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size">Publish the shoot before the light goes</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-base-font-size">Fieldpress gathers every frame, caption and credit from a location day into one page an editor can open straight away. Pull the cards, set the sequence, and send the link before the kit is unpacked.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"lg","iconName":"arrow-right","iconPosition":"right"} -->
<div class="wp-block-button is-size-lg"><a class="wp-block-button__link wp-element-button" href="#">Start a shoot log</a></div>
<!-- /wp:button -->

<!-- wp:button {"size":"lg","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline is-size-lg"><a class="wp-block-button__link wp-element-button" href="#">See a sample story</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","alt":"Fishing crews loading crates onto a harbour wall at first light","dimRatio":50,"minHeight":380,"minHeightUnit":"px","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-radius:12px;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5);min-height:380px"><img class="wp-block-cover__image-background" alt="Fishing crews loading crates onto a harbour wall at first light" src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":"340px"},"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"bottom","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="min-height:340px"><!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-text-color has-sm-font-size" style="color:#ffffff;font-weight:600">Day one — the harbour before the crews arrive</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","alt":"Climber coiling rope on a windy clifftop above the sea","dimRatio":50,"minHeight":380,"minHeightUnit":"px","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-radius:12px;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5);min-height:380px"><img class="wp-block-cover__image-background" alt="Climber coiling rope on a windy clifftop above the sea" src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":"340px"},"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"bottom","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="min-height:340px"><!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-text-color has-sm-font-size" style="color:#ffffff;font-weight:600">Day two — rope work on the north cliff</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","alt":"Empty mountain road winding through a pass at dusk","dimRatio":50,"minHeight":380,"minHeightUnit":"px","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-radius:12px;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5);min-height:380px"><img class="wp-block-cover__image-background" alt="Empty mountain road winding through a pass at dusk" src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":"340px"},"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"bottom","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="min-height:340px"><!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-text-color has-sm-font-size" style="color:#ffffff;font-weight:600">Day three — the long drive back through the pass</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
