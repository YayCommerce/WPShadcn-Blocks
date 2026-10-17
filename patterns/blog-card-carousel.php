<?php
/**
 * Title: Blog Card Carousel
 * Slug: shadcn/blog-card-carousel
 * Categories: shadcn, posts
 * Description: A left-aligned blog heading and intro above a wide carousel of six bordered article cards, three in view on desktop, closing with a centred link to the archive.
 * AI Hint: Blog carousel — a left-set badge, large headline and one-line intro sit above a full-width sliding track of six bordered cards that each open with a wide cover image, then a topic badge beside a calendar-marked date, a two-line article title and a short summary, with arrows stepping three cards at a time on desktop, two on tablet and one on mobile, and a centred outline button to the full archive beneath; best for a blog or newsroom index with more stories than a static grid can hold.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","posts"],"patternName":"shadcn/blog-card-carousel","name":"Blog Card Carousel"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"metadata":{"name":"Intro"},"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"From the journal","variant":"secondary","iconName":"pen-line","iconPosition":"left"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.02em"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-fluid-4-xl-font-size" style="font-weight:600;letter-spacing:-0.02em">Notes from the workshop floor</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Short write-ups on the decisions behind the product, published whenever a change is worth explaining.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/carousel {"align":"wide","loop":true,"showArrows":true,"showDots":false,"slidesPerView":1,"slidesPerViewTablet":2,"slidesPerViewDesktop":3,"gap":"1.5rem"} -->
<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Engineers reviewing a sync diagram on a whiteboard" style="border-radius:8px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"metadata":{"name":"Meta"},"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Engineering","variant":"secondary"} /-->

<!-- wp:shadcn/badge {"text":"4 March 2026","variant":"outline","iconName":"calendar","iconPosition":"left"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"1.3"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size" style="font-weight:600;line-height:1.3">Rewriting the sync engine in a single quarter</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">The old queue held together for six years. Here is what finally broke it, and the three rules we wrote before touching a line.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Printed type specimens laid out across a desk" style="border-radius:8px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"metadata":{"name":"Meta"},"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Design","variant":"secondary"} /-->

<!-- wp:shadcn/badge {"text":"19 February 2026","variant":"outline","iconName":"calendar","iconPosition":"left"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"1.3"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size" style="font-weight:600;line-height:1.3">A type scale that survives eleven languages</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">German compounds and Thai ascenders broke every heading we shipped. Fixing them made the English pages better too.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Researcher tagging call notes on a wall of cards" style="border-radius:8px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"metadata":{"name":"Meta"},"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Research","variant":"secondary"} /-->

<!-- wp:shadcn/badge {"text":"2 February 2026","variant":"outline","iconName":"calendar","iconPosition":"left"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"1.3"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size" style="font-weight:600;line-height:1.3">What forty support calls told us about day one</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Nobody was confused by the feature they called about. They were confused by the step before it, every single time.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Close-up of a settings screen sketched on paper" style="border-radius:8px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"metadata":{"name":"Meta"},"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Product","variant":"secondary"} /-->

<!-- wp:shadcn/badge {"text":"21 January 2026","variant":"outline","iconName":"calendar","iconPosition":"left"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"1.3"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size" style="font-weight:600;line-height:1.3">Shipping a settings page nobody has to read</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">We deleted nine toggles and moved four more behind sensible defaults. Support tickets about them fell to none.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Small team gathered around a release checklist" style="border-radius:8px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"metadata":{"name":"Meta"},"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Culture","variant":"secondary"} /-->

<!-- wp:shadcn/badge {"text":"8 January 2026","variant":"outline","iconName":"calendar","iconPosition":"left"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"1.3"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size" style="font-weight:600;line-height:1.3">How our smallest team runs the release train</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Four people, a Thursday cutoff and a rota that nobody dreads. The process fits on one page and stays there.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Dashboard of usage charts on a wide monitor" style="border-radius:8px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"metadata":{"name":"Meta"},"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Data","variant":"secondary"} /-->

<!-- wp:shadcn/badge {"text":"12 December 2025","variant":"outline","iconName":"calendar","iconPosition":"left"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"1.3"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size" style="font-weight:600;line-height:1.3">Counting the same thing twice, on purpose</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Two independent pipelines that should agree, and a weekly alert when they do not. It has caught six quiet bugs so far.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->
<!-- /wp:shadcn/carousel -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"lg","className":"is-style-outline","iconName":"arrow-right","iconPosition":"right"} -->
<div class="wp-block-button is-style-outline is-size-lg"><a class="wp-block-button__link wp-element-button" href="#">Browse the full archive</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
