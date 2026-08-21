<?php
/**
 * Title: Community Project Spotlight
 * Slug: shadcn/community-project-spotlight
 * Categories: shadcn, community
 * Description: A centred open-source introduction above one bordered spotlight card pairing a project mark and repository address with its headline numbers, closing on a row of channel links.
 * AI Hint: Single-project spotlight — a centred code badge, headline and one supporting line over a bordered card whose left column carries the project mark, name and repository address while the right column holds a one-line summary and a wrapping row of stat chips for stars, forks and contributors, followed by a centred row of outline badge links to the other places the project is discussed; best for an open-source or community page that needs to put one flagship repository and its momentum in front of everything else.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|8"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Open source","variant":"secondary","iconName":"code"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","fontSize":"4-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-4-xl-font-size">The project everyone is building on</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-base-font-size">One repository carries most of what the community ships. Here is where it stands this month, and where the conversation around it happens.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"48px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Lanternfold project mark" style="width:48px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<p class="has-lg-font-size" style="font-weight:600">Lanternfold</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size"><a href="#">code.example/lanternfold</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"65%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">A small toolkit for wiring background jobs to the queue you already run, maintained in the open since 2021.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"7,420 stars","variant":"outline","iconName":"star"} /-->

<!-- wp:shadcn/badge {"text":"612 forks","variant":"outline","iconName":"share-2"} /-->

<!-- wp:shadcn/badge {"text":"184 contributors","variant":"outline","iconName":"users"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Chat","variant":"outline","url":"#","iconName":"message-circle"} /-->

<!-- wp:shadcn/badge {"text":"Forum","variant":"outline","url":"#","iconName":"message-square"} /-->

<!-- wp:shadcn/badge {"text":"Newsletter","variant":"outline","url":"#","iconName":"send"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
