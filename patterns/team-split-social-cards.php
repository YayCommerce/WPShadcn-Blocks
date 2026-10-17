<?php
/**
 * Title: Team Split Social Cards
 * Slug: shadcn/team-split-social-cards
 * Categories: shadcn, team
 * Description: A centred intro above three columns of split member cards pairing name, role and social buttons on the left with a square portrait on the right.
 * AI Hint: Split team cards — a centred users badge, headline and intro sit above a three-column grid of bordered cards, each divided left to right with the name, role and a row of social buttons on one side and a square rounded portrait on the other; reach for it when a roster should read as contact cards rather than a wall of avatars.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Who you will work with","variant":"secondary","iconName":"users"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-4-xl-font-size">Named leads, not a shared inbox</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Every engagement gets three of these six people, and you meet all three before anything is signed.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"grid","minimumColumnWidth":"22rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"14px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:14px;min-height:100%;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Rowan Petrescu</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Managing partner</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"muted-foreground","iconColorValue":"var(\u002d\u002dmuted-foreground)","iconBackgroundColor":"transparent","iconBackgroundColorValue":"transparent","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|2"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:image {"width":"104px","height":"104px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Portrait of Rowan Petrescu" style="border-radius:10px;object-fit:cover;width:104px;height:104px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"14px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:14px;min-height:100%;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Thandiwe Molefe</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Head of strategy</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"muted-foreground","iconColorValue":"var(\u002d\u002dmuted-foreground)","iconBackgroundColor":"transparent","iconBackgroundColorValue":"transparent","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|2"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:image {"width":"104px","height":"104px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Portrait of Thandiwe Molefe" style="border-radius:10px;object-fit:cover;width:104px;height:104px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"14px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:14px;min-height:100%;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Casper Vandenberg</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Creative lead</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"muted-foreground","iconColorValue":"var(\u002d\u002dmuted-foreground)","iconBackgroundColor":"transparent","iconBackgroundColorValue":"transparent","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|2"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"dribbble"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:image {"width":"104px","height":"104px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Portrait of Casper Vandenberg" style="border-radius:10px;object-fit:cover;width:104px;height:104px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"14px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:14px;min-height:100%;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Noor Al-Sabah</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Head of production</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"muted-foreground","iconColorValue":"var(\u002d\u002dmuted-foreground)","iconBackgroundColor":"transparent","iconBackgroundColorValue":"transparent","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|2"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:image {"width":"104px","height":"104px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Portrait of Noor Al-Sabah" style="border-radius:10px;object-fit:cover;width:104px;height:104px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"14px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:14px;min-height:100%;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Emeka Nwachukwu</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Technology lead</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"muted-foreground","iconColorValue":"var(\u002d\u002dmuted-foreground)","iconBackgroundColor":"transparent","iconBackgroundColorValue":"transparent","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|2"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"github"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:image {"width":"104px","height":"104px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Portrait of Emeka Nwachukwu" style="border-radius:10px;object-fit:cover;width:104px;height:104px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"14px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:14px;min-height:100%;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Sanne de Vries</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Client partner</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"muted-foreground","iconColorValue":"var(\u002d\u002dmuted-foreground)","iconBackgroundColor":"transparent","iconBackgroundColorValue":"transparent","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|2"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:image {"width":"104px","height":"104px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Portrait of Sanne de Vries" style="border-radius:10px;object-fit:cover;width:104px;height:104px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
