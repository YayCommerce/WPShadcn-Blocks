<?php
/**
 * Title: Hero Tabbed Product Preview
 * Slug: shadcn/hero-tabbed-product-preview
 * Categories: shadcn, hero
 * Description: A centred product hero with a badge, headline, lead and two buttons above three tabs that each swap the screenshot panel below.
 * AI Hint: Interactive centred hero — an icon badge, a large centred H1, a two-sentence muted lead and a filled plus outline button pair inside a narrow centred column, followed by three tabs (Release board, Automations, Insights) where each panel is a tall muted rounded frame holding one centred product screenshot; best for a SaaS or app landing page whose product has several screens worth showing without stacking three images down the page.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|9"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"New in this release","variant":"secondary","iconName":"sparkles"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"fluid-7-xl"} -->
<h1 class="wp-block-heading has-text-align-center has-fluid-7-xl-font-size">Your whole release on one calm screen</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Cadence gathers tickets, builds and rollouts into a single board the whole team can read at a glance. No tab-hopping between four dashboards, no spreadsheet that went stale on Tuesday.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"lg","backgroundColor":"primary","textColor":"primary-foreground","style":{"border":{"radius":"8px"}},"iconName":"arrow-right","iconPosition":"right"} -->
<div class="wp-block-button is-size-lg"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:8px">Start a free workspace</a></div>
<!-- /wp:button -->

<!-- wp:button {"size":"lg","className":"is-style-outline","iconName":"play","iconPosition":"left"} -->
<div class="wp-block-button is-style-outline is-size-lg"><a class="wp-block-button__link wp-element-button" href="#">Watch the tour</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:shadcn/tabs {"defaultTab":0,"fitted":true} -->
<!-- wp:shadcn/tab {"label":"Release board"} -->
<!-- wp:group {"style":{"border":{"radius":"16px"},"dimensions":{"minHeight":"420px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}},"backgroundColor":"muted","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:16px;min-height:420px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:image {"width":"160px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Release board showing every ticket grouped by the version it ships in" style="width:160px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/tab -->

<!-- wp:shadcn/tab {"label":"Automations"} -->
<!-- wp:group {"style":{"border":{"radius":"16px"},"dimensions":{"minHeight":"420px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}},"backgroundColor":"muted","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:16px;min-height:420px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:image {"width":"160px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Automation editor wiring a merged pull request to a staging deploy" style="width:160px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/tab -->

<!-- wp:shadcn/tab {"label":"Insights"} -->
<!-- wp:group {"style":{"border":{"radius":"16px"},"dimensions":{"minHeight":"420px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}},"backgroundColor":"muted","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:16px;min-height:420px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:image {"width":"160px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Insights view charting cycle time across the last eight releases" style="width:160px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/tab -->
<!-- /wp:shadcn/tabs --></div>
<!-- /wp:group -->
