<?php
/**
 * Title: Compare Either Or Image Cards
 * Slug: shadcn/compare-either-or-image-cards
 * Categories: shadcn, compare
 * Description: Two large photo cards side by side, each darkened towards the bottom so a title, short description and light button sit over the image, with a small "or" chip centred between them.
 * AI Hint: Either-or choice section — a centred H2 and one-line muted lead above two equal photo panels whose lower half fades to near-black under a gradient, carrying a white title, a three-line white description and a small light button, separated by a narrow centre column holding a rounded "or" chip; reach for it when a visitor has to pick between two equally valid routes, such as a guided rollout against a self-serve one, and the two options deserve equal visual weight rather than a recommended default.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.02em"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size" style="font-weight:600;letter-spacing:-0.02em">Two routes to the same launch</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Choose how much help you want on the way in. The platform underneath is identical either way, and you can switch routes at any point.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|3"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"46%"} -->
<div class="wp-block-column" style="flex-basis:46%"><!-- wp:cover {"url":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","alt":"A specialist and a client reviewing a migration plan across a long table","customGradient":"linear-gradient(180deg,rgba(9,9,11,0) 35%,rgba(9,9,11,0.55) 70%,rgba(9,9,11,0.88) 100%)","dimRatio":100,"minHeight":620,"minHeightUnit":"px","contentPosition":"bottom left","style":{"border":{"radius":"16px"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:16px;min-height:620px"><img class="wp-block-cover__image-background" alt="A specialist and a client reviewing a migration plan across a long table" src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(9,9,11,0) 35%,rgba(9,9,11,0.55) 70%,rgba(9,9,11,0.88) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600","letterSpacing":"-0.01em"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-text-color has-2-xl-font-size" style="color:#ffffff;font-weight:600;letter-spacing:-0.01em">Guided rollout</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"lineHeight":"1.6"}},"fontSize":"sm"} -->
<p class="has-text-color has-sm-font-size" style="color:#ffffff;line-height:1.6">A named specialist maps your data, rebuilds your reports and runs the first close alongside your team. You approve each step; we do the moving, the testing and the handover notes.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"size":"sm","style":{"color":{"text":"#0a0a0a","background":"#ffffff"}}} -->
<div class="wp-block-button is-size-sm"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="#" style="color:#0a0a0a;background-color:#ffffff">Book a rollout slot</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"8%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:8%"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"9999px"},"spacing":{"padding":{"top":"0.75rem","right":"0.9rem","bottom":"0.75rem","left":"0.9rem"}},"typography":{"fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"}},"backgroundColor":"card","fontSize":"xs"} -->
<p class="has-text-align-center has-border-color has-card-background-color has-background has-xs-font-size" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:9999px;padding-top:0.75rem;padding-right:0.9rem;padding-bottom:0.75rem;padding-left:0.9rem;font-weight:700;letter-spacing:0.08em;text-transform:uppercase">Or</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"46%"} -->
<div class="wp-block-column" style="flex-basis:46%"><!-- wp:cover {"url":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","alt":"A developer working alone at a standing desk beside an open documentation site","customGradient":"linear-gradient(180deg,rgba(9,9,11,0) 35%,rgba(9,9,11,0.55) 70%,rgba(9,9,11,0.88) 100%)","dimRatio":100,"minHeight":620,"minHeightUnit":"px","contentPosition":"bottom left","style":{"border":{"radius":"16px"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:16px;min-height:620px"><img class="wp-block-cover__image-background" alt="A developer working alone at a standing desk beside an open documentation site" src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(9,9,11,0) 35%,rgba(9,9,11,0.55) 70%,rgba(9,9,11,0.88) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600","letterSpacing":"-0.01em"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-text-color has-2-xl-font-size" style="color:#ffffff;font-weight:600;letter-spacing:-0.01em">Self-serve toolkit</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"lineHeight":"1.6"}},"fontSize":"sm"} -->
<p class="has-text-color has-sm-font-size" style="color:#ffffff;line-height:1.6">Import your own data with the migration CLI, follow the recipe library at whatever pace suits you, and pull in an engineer from the shared support channel only when you actually need one.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"size":"sm","style":{"color":{"text":"#0a0a0a","background":"#ffffff"}}} -->
<div class="wp-block-button is-size-sm"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="#" style="color:#0a0a0a;background-color:#ffffff">Open the toolkit</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
