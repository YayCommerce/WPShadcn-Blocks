<?php
/**
 * Title: Testimonial Hero Split List
 * Slug: shadcn/testimonial-hero-split-list
 * Categories: shadcn, testimonials
 * Description: A muted two-column panel pairing a centred hero — heading, intro, call to action and a row of customer logos — with a stack of four testimonial rows on the right.
 * AI Hint: Community or membership hero backed by proof — the left half carries a large centred heading, a short intro, a primary call-to-action button and a small uppercase label above a wrapping row of customer logos, while the right half stacks four rounded rows that alternate between filled and outlined, each holding a round avatar beside the member name and a short quote. Reach for it when the invitation and the social proof have to share one section.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|8","bottom":"var:preset|spacing|9","left":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|8"}},"backgroundColor":"muted","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-muted-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--8)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|9"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":2,"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-4-xl-font-size">Join the builders shipping every week</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color">A working group of product people, designers and engineers who trade sections, reviews and hard-won defaults instead of starting every page from nothing.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"primary-foreground","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:8px">Become a member</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size" style="text-transform:uppercase">Used by leading teams</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"height":"24px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Halberd logo" style="height:24px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"height":"24px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Oakhaven logo" style="height:24px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"height":"24px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Mistvale logo" style="height:24px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"height":"24px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Copperfield logo" style="height:24px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"height":"24px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Verdigris logo" style="height:24px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group has-card-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:image {"width":"36px","height":"36px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Elena Marsh" style="border-radius:9999px;object-fit:cover;width:36px;height:36px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500">Elena Marsh</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Joining changed how our small team plans a release. We stopped rebuilding the same page furniture and started shipping the parts customers actually notice.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:image {"width":"36px","height":"36px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Adam Whitfield" style="border-radius:9999px;object-fit:cover;width:36px;height:36px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500">Adam Whitfield</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Being in the room with people solving the same problems keeps me current without reading three newsletters a morning.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group has-card-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:image {"width":"36px","height":"36px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Noor Haddad" style="border-radius:9999px;object-fit:cover;width:36px;height:36px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500">Noor Haddad</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">I brought one messy landing page to a review call and left with a layout the whole team agreed on the same afternoon.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:image {"width":"36px","height":"36px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Victor Almeida" style="border-radius:9999px;object-fit:cover;width:36px;height:36px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500">Victor Almeida</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Two of our best hires came out of this group, and both of them already knew how we build things.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
