<?php
/**
 * Title: Testimonial Social Source Grid
 * Slug: shadcn/testimonial-social-source-grid
 * Categories: shadcn, testimonials
 * Description: A centred heading and intro above a three-column grid of quote cards, each opening with the author beside a linked source logo and closing with the quote itself.
 * AI Hint: Review-wall section — a centred heading with a supporting line over six bordered cards laid out three across, where every card starts with a round avatar beside the author name and role on the left and a small linked platform logo on the right, then carries the quote underneath in muted text. Reach for it when the quotes were published somewhere public and each one should credit and link back to its source.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":2,"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-4-xl-font-size">Reviews from the teams already shipping</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Every quote below was posted publicly. Follow the mark on any card to read it where it was written.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"grid","minimumColumnWidth":"22rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"36px","height":"36px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Nadia Fournier" style="border-radius:9999px;object-fit:cover;width:36px;height:36px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500">Nadia Fournier</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Product lead, Ashcombe</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"height":"20px","sizeSlug":"thumbnail","href":"#"} -->
<figure class="wp-block-image size-thumbnail is-resized"><a href="#"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Read this review on Trailhead" style="height:20px"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">&#8220;We put the new pricing page together in an afternoon and it still matched the rest of the site down to the spacing.&#8221;</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"36px","height":"36px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Kwame Boateng" style="border-radius:9999px;object-fit:cover;width:36px;height:36px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500">Kwame Boateng</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Staff engineer, Silverbrook</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"height":"20px","sizeSlug":"thumbnail","href":"#"} -->
<figure class="wp-block-image size-thumbnail is-resized"><a href="#"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Read this review on Trailhead" style="height:20px"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">&#8220;The markup is the part that sold me. I read a whole section before I used it and had no notes.&#8221;</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"36px","height":"36px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Lena Vogt" style="border-radius:9999px;object-fit:cover;width:36px;height:36px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500">Lena Vogt</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Design director, Halcyon</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"height":"20px","sizeSlug":"thumbnail","href":"#"} -->
<figure class="wp-block-image size-thumbnail is-resized"><a href="#"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Read this review on Trailhead" style="height:20px"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">&#8220;My files and the built pages finally agree with each other. I stopped keeping a list of the differences.&#8221;</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"36px","height":"36px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Owen Marsh" style="border-radius:9999px;object-fit:cover;width:36px;height:36px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500">Owen Marsh</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Head of platform, Brightmoor</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"height":"20px","sizeSlug":"thumbnail","href":"#"} -->
<figure class="wp-block-image size-thumbnail is-resized"><a href="#"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Read this review on Trailhead" style="height:20px"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">&#8220;Rolling it out across four brand sites took one sprint, and nobody had to learn a new build step.&#8221;</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"36px","height":"36px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Chiara Bellini" style="border-radius:9999px;object-fit:cover;width:36px;height:36px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500">Chiara Bellini</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Founder, Verdigris</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"height":"20px","sizeSlug":"thumbnail","href":"#"} -->
<figure class="wp-block-image size-thumbnail is-resized"><a href="#"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Read this review on Trailhead" style="height:20px"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">&#8220;As a two-person company this is the closest thing we have to a design team, and it never argues back.&#8221;</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"36px","height":"36px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Ravi Menon" style="border-radius:9999px;object-fit:cover;width:36px;height:36px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500">Ravi Menon</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Frontend lead, Copperfield</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"height":"20px","sizeSlug":"thumbnail","href":"#"} -->
<figure class="wp-block-image size-thumbnail is-resized"><a href="#"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Read this review on Trailhead" style="height:20px"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">&#8220;Keyboard focus and reduced motion were already right, so the audit was the shortest one we have ever had.&#8221;</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
