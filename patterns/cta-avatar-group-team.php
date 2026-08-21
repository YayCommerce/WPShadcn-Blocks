<?php
/**
 * Title: CTA Avatar Group Team
 * Slug: shadcn/cta-avatar-group-team
 * Categories: shadcn, call-to-action
 * Description: A centred call to action led by a row of overlapping team avatars above a display headline and one pill button.
 * AI Hint: Call to action — a centred stack that opens on a row of six overlapping circular avatars, then a large display headline, a two-line supporting paragraph, a single rounded pill button and one small reassurance line underneath; reach for it when the closing pitch is about people and the faces should carry the social proof.
 */

?>
<!-- wp:group {"metadata":{"categories":["shadcn","call-to-action"],"patternName":"shadcn/cta-avatar-group-team","name":"CTA Avatar Group Team"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|4","bottom":"var:preset|spacing|10","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--4)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/avatar-group {"maxVisible":6} -->
<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Rosalind Ferreira, product lead","size":"lg","fallback":"RF"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Ibrahim Cisse, staff engineer","size":"lg","fallback":"IC"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Noor Haddadi, design director","size":"lg","fallback":"NH"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Tomas Bergqvist, research","size":"lg","fallback":"TB"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Amara Nwachukwu, support lead","size":"lg","fallback":"AN"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Jun-seo Park, platform engineer","size":"lg","fallback":"JP"} /-->
<!-- /wp:shadcn/avatar-group --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontWeight":"700","lineHeight":"1.05","letterSpacing":"-0.02em"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size" style="font-weight:700;letter-spacing:-0.02em;line-height:1.05">Where good teams get started</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"xl"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xl-font-size">Trust, a shared plan and one place to keep it. Bring the people you already work with and turn a rough idea into something you can ship this month.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|4"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--4)"><!-- wp:button {"size":"lg","backgroundColor":"primary","textColor":"primary-foreground","style":{"border":{"radius":"9999px"}}} -->
<div class="wp-block-button is-size-lg"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:9999px">Start a workspace now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size" style="font-style:italic;font-weight:400">No sign-up needed — look around first.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
