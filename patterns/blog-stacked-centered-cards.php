<?php
/**
 * Title: Blog Stacked Centered Cards
 * Slug: shadcn/blog-stacked-centered-cards
 * Categories: shadcn, posts
 * Description: A centred introduction above a single narrow column of borderless blog entries stacked one under another, closing with an outline archive button.
 * AI Hint: Stacked blog list — a centred badge, headline and standfirst above a single editorial column of chrome-free entries laid one beneath the other, each opening with a wide rounded image, then a category badge with author and date, a large linked title, a generous muted excerpt and a link-styled read-more row, with an outline archive button centred underneath; best as a long-form journal index or an essay archive page where each entry needs room to breathe rather than a card grid.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","posts"],"patternName":"shadcn/blog-stacked-centered-cards","name":"Blog Stacked Centered Cards"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Field notes","variant":"secondary","iconName":"book-open","iconPosition":"left"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size">Longer reads from the workshop</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">One essay a fortnight, written by whoever last had to solve the thing. Nothing here was ghostwritten, and nothing went up before it actually worked.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"14px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A laptop wired into a server rack by lamplight" style="border-radius:14px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Infrastructure","variant":"secondary"} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Marisol Ferrer</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">31 July 2025</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"3-xl"} -->
<h3 class="wp-block-heading has-3-xl-font-size"><a href="#">What a week of running the database on a laptop taught us</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">A power cut took the primary offline on a Tuesday and the failover we rehearse twice a year did precisely nothing. This is the runbook we rewrote afterwards, along with the three assumptions inside the old one that turned out to be purely decorative.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Read the full piece","variant":"link","url":"#","iconName":"arrow-right","iconPosition":"right"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"14px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="An empty interface screen sketched on paper" style="border-radius:14px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Design","variant":"secondary"} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Tobias Lindqvist</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">17 July 2025</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"3-xl"} -->
<h3 class="wp-block-heading has-3-xl-font-size"><a href="#">Every empty state is a sentence somebody stopped writing</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Blank screens are where a new account decides whether the product is for them. We audited forty of ours, found eleven that only said “No results”, and rewrote each one as an instruction rather than an apology.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Read the full piece","variant":"link","url":"#","iconName":"arrow-right","iconPosition":"right"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"14px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A support desk with a wall of sorted conversation cards" style="border-radius:14px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Support","variant":"secondary"} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Priya Raghunathan</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">3 July 2025</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"3-xl"} -->
<h3 class="wp-block-heading has-3-xl-font-size"><a href="#">The ticket queue is a research budget nobody spends</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Six hundred conversations a month arrive pre-sorted by how much they hurt. We started tagging them by cause instead of by feature, and a roadmap argument we had been having for a year ended in one afternoon.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Read the full piece","variant":"link","url":"#","iconName":"arrow-right","iconPosition":"right"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"14px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="An unlabelled switch box left behind in a wiring cupboard" style="border-radius:14px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Engineering","variant":"secondary"} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Declan Moss</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">19 June 2025</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"3-xl"} -->
<h3 class="wp-block-heading has-3-xl-font-size"><a href="#">Switching off the queue that had been running since 2019</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Nobody could name the service, nobody owned its alerts, and it handled roughly four messages a day. Turning it off took eight weeks of archaeology, two apologies to a team that had forgotten it existed, and one very quiet deploy.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Read the full piece","variant":"link","url":"#","iconName":"arrow-right","iconPosition":"right"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"14px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A settings panel printed out and marked up in red pen" style="border-radius:14px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Product","variant":"secondary"} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Ingrid Sørensen</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">5 June 2025</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"3-xl"} -->
<h3 class="wp-block-heading has-3-xl-font-size"><a href="#">We shipped the smallest version and it was still too big</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Our minimum release arrived with nine settings. The version people actually adopted has two, and we only learned which two by watching a month of customers walk straight past the other seven.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Read the full piece","variant":"link","url":"#","iconName":"arrow-right","iconPosition":"right"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"md","className":"is-style-outline","iconName":"arrow-right","iconPosition":"right"} -->
<div class="wp-block-button is-style-outline is-size-md"><a class="wp-block-button__link wp-element-button" href="#">Browse the whole archive</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
