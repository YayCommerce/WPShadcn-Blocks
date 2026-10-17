<?php
/**
 * Title: About Fintech Stats Carousel
 * Slug: shadcn/about-fintech-stats-carousel
 * Categories: shadcn, about
 * Description: A long-form fintech about section with a left intro, a carousel of bordered metric cards, alternating left and right narrative blocks, a tall photo carousel, and a closing founders row.
 * AI Hint: Enterprise-flavoured about layout for a payments company — uppercase eyebrow above a large headline and lead paragraph, a wide carousel of bordered stat cards showing four figures at a time, a left-aligned mission block, a queue of tall portrait photographs that advance on their own, a right-positioned platform note, and a closing two-column founders row pairing a photograph with the origin story; best for a company or about page that needs several distinct bands rather than one block of text.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","about"],"patternName":"shadcn/about-fintech-stats-carousel","name":"About Fintech Stats Carousel"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained","contentSize":"760px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.08em;text-transform:uppercase">About Fenwick Pay</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"style":{"typography":{"letterSpacing":"-0.02em"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-fluid-5-xl-font-size" style="letter-spacing:-0.02em">Money movement for companies that outgrew the easy part</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">We build the settlement, ledger, and payout layer that sits underneath a growing business. Not the first hundred transactions, which any processor handles — the ten thousandth, across four currencies, on a day when a bank partner goes quiet.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/carousel {"autoplay":true,"autoplayDelay":4500,"showArrows":true,"showDots":false,"slidesPerView":1,"slidesPerViewTablet":2,"slidesPerViewDesktop":4,"gap":"1.5rem","align":"wide"} -->
<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|2"}},"backgroundColor":"card","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.02em"}},"fontSize":"4-xl"} -->
<h3 class="wp-block-heading has-4-xl-font-size" style="letter-spacing:-0.02em">£31B</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Settled through the platform in the last full financial year</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|2"}},"backgroundColor":"card","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.02em"}},"fontSize":"4-xl"} -->
<h3 class="wp-block-heading has-4-xl-font-size" style="letter-spacing:-0.02em">99.99%</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Authorisation uptime measured at the edge, not at the database</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|2"}},"backgroundColor":"card","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.02em"}},"fontSize":"4-xl"} -->
<h3 class="wp-block-heading has-4-xl-font-size" style="letter-spacing:-0.02em">37</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Settlement currencies with same-day payout in eleven of them</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|2"}},"backgroundColor":"card","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.02em"}},"fontSize":"4-xl"} -->
<h3 class="wp-block-heading has-4-xl-font-size" style="letter-spacing:-0.02em">140ms</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Median round trip on a card authorisation, ninety-fifth at 310ms</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|2"}},"backgroundColor":"card","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.02em"}},"fontSize":"4-xl"} -->
<h3 class="wp-block-heading has-4-xl-font-size" style="letter-spacing:-0.02em">2,400+</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Finance teams reconciling against our ledger every morning</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|2"}},"backgroundColor":"card","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.02em"}},"fontSize":"4-xl"} -->
<h3 class="wp-block-heading has-4-xl-font-size" style="letter-spacing:-0.02em">Nine</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Regulated entities we hold licences through across three regions</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->
<!-- /wp:shadcn/carousel -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained","contentSize":"620px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"500","letterSpacing":"-0.01em"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-fluid-4-xl-font-size" style="font-weight:500;letter-spacing:-0.01em">Why we started with the boring half</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Both founders had spent years closing books by hand at the end of a quarter, chasing a few pennies of drift between a processor report and a bank statement. The interesting products all sat on top of a ledger nobody wanted to own.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">So we built that layer first and kept it deliberately dull. Every balance is double-entry, every movement is replayable, and nothing is written that cannot be explained to an auditor eighteen months later.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/carousel {"autoplay":true,"autoplayDelay":5000,"showArrows":false,"showDots":false,"slidesPerView":1,"slidesPerViewTablet":2,"slidesPerViewDesktop":3,"gap":"1.5rem","align":"wide"} -->
<!-- wp:shadcn/carousel-item -->
<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="An engineer tracing a settlement run on a wall of monitors" style="border-radius:12px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Two colleagues reviewing a reconciliation report side by side" style="border-radius:12px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="The operations desk during an early morning payout window" style="border-radius:12px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="A whiteboard covered in ledger sketches after a design session" style="border-radius:12px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- /wp:shadcn/carousel-item -->
<!-- /wp:shadcn/carousel -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained","contentSize":"620px","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.08em;text-transform:uppercase">The core API</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"500","letterSpacing":"-0.01em"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-fluid-4-xl-font-size" style="font-weight:500;letter-spacing:-0.01em">One contract, versioned for as long as you need it</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Accounts, movements, holds, and payouts are four resources with the same shape everywhere. Nothing is deprecated without a dated notice and a parallel version you can run against in staging first.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Webhooks are signed, ordered per account, and replayable for thirty days, which is usually the difference between a quiet incident and a long one.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="The founding team gathered around a table in the first office" style="border-radius:12px;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"500","letterSpacing":"-0.01em"}},"fontSize":"3-xl"} -->
<h2 class="wp-block-heading has-3-xl-font-size" style="font-weight:500;letter-spacing:-0.01em">The founding team</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Iris Hallowell and Devrim Kanat met on a payments migration that ran nine months past its deadline. They spent the following year sketching the ledger they wished had existed, then hired the four people who had complained about the same problem loudest.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">The company is sixty-one people now, across London, Lisbon, and Singapore, and roughly half of them still touch production code every week.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
