<?php
/**
 * Title: About Sticky Profile
 * Slug: shadcn/about-sticky-profile
 * Categories: shadcn, about
 * Description: A two-column about section with a sticky company card and contact link beside a long-form column of bio, philosophy, imagery, and a numbered team list.
 * AI Hint: Long-form about section — a narrow left column holding an avatar, company name, tagline and contact link that stays pinned while the right column scrolls through an oversized "About Us" heading, a bio paragraph, a two-column philosophy note, a rounded workspace image, and a divided team list with monospace row numbers; best for an about page with enough copy that the reader loses sight of the header.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|9","left":"var:preset|spacing|10"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"32%"} -->
<div class="wp-block-column" style="flex-basis:32%"><!-- wp:group {"className":"is-style-shadcn-sticky","style":{"spacing":{"blockGap":"var:preset|spacing|7"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-shadcn-sticky"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"56px","height":"56px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Studio mark" style="border-radius:8px;object-fit:cover;width:56px;height:56px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600">Shadcn Studio</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Building the future of productivity</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"fontSize":"2-xl"} -->
<p class="has-2-xl-font-size"><a href="#">Contact us ↗</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|9"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"fontSize":"fluid-7-xl"} -->
<h2 class="wp-block-heading has-fluid-7-xl-font-size">About Us</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"2-xl"} -->
<p class="has-2-xl-font-size">We're a small team building interface tooling for people who ship. Our aim is software that solves the problem in front of you today without boxing in whatever you need next, so the work you do now still holds up a year from here.</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">Core Philosophy</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Good tooling should disappear into the work. Every component we publish is one we already use ourselves, so the rough edges turn up on our side of the line before they reach yours.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"24px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="The studio workspace" style="border-radius:24px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size">Our Team</h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"is-style-shadcn-divided","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-shadcn-divided"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace">01</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Sarah Chen</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">CEO &amp; Co-founder</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace">02</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Marcus Rodriguez</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">CTO &amp; Co-founder</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace">03</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Emily Watson</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Head of Product</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace">04</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>David Kim</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Lead Engineer</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace">05</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lisa Thompson</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Head of Design</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">We work across four time zones and hire for curiosity ahead of credentials. If that sounds like the kind of team you would want to build with, the door is open.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
