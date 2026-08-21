<?php
/**
 * Title: Case Study Landscape Carousel
 * Slug: shadcn/case-study-landscape-carousel
 * Categories: shadcn, case-studies
 * Description: A left-aligned heading and lead above a wide carousel of five landscape story cards, two in view on desktop, each pairing a dimmed photograph with a headline, summary and read link beneath it.
 * AI Hint: Case-study carousel — a short left-set headline and muted lead sit above a full-width sliding track of five wide landscape cards, each a dimmed photograph carrying a small white client wordmark at the top and a sector label at the bottom, with a caption block beneath the photograph holding the case headline, a two-line summary and a ghost "Read the story" link; arrows and dots step two cards at a time on desktop, two on tablet and one on mobile with no autoplay, so reach for it when case studies need room for a real summary rather than a one-line result, and when quotes, portraits and metrics are handled elsewhere on the page.
 */

?>
<!-- wp:group {"metadata":{"categories":["shadcn","case-studies"],"patternName":"shadcn/case-study-landscape-carousel","name":"Case Study Landscape Carousel"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|8"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"metadata":{"name":"Intro"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained","contentSize":"720px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.02em"}},"fontSize":"5-xl"} -->
<h2 class="wp-block-heading has-5-xl-font-size" style="font-weight:600;letter-spacing:-0.02em">Five projects, written up in full</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Each one started with a system somebody had outgrown. Slide across for the short version, then open whichever write-up matches the problem on your desk.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/carousel {"align":"wide","loop":true,"showArrows":true,"showDots":true,"slidesPerView":1,"slidesPerViewTablet":2,"slidesPerViewDesktop":2,"gap":"1.5rem"} -->
<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","alt":"Deckhand casting off a passenger ferry at first light","dimRatio":50,"minHeight":260,"minHeightUnit":"px","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-radius:12px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4);min-height:260px"><img class="wp-block-cover__image-background" alt="Deckhand casting off a passenger ferry at first light" src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":"228px"},"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="min-height:228px"><!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-text-color has-sm-font-size" style="color:#ffffff;font-weight:600">Halden Ferry Lines</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"}},"fontSize":"xs"} -->
<p class="has-text-color has-xs-font-size" style="color:#ffffff">Coastal transport</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<p class="has-lg-font-size" style="font-weight:600">One timetable for eleven islands</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Every crossing was booked on a different spreadsheet, and a cancelled sailing took an hour to ripple through. We put the whole network behind one schedule that the crew can amend from the wheelhouse.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Read the story","variant":"ghost","url":"#","iconName":"arrow-right","iconPosition":"right"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","alt":"Dental nurse preparing a treatment room between patients","dimRatio":50,"minHeight":260,"minHeightUnit":"px","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-radius:12px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4);min-height:260px"><img class="wp-block-cover__image-background" alt="Dental nurse preparing a treatment room between patients" src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":"228px"},"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="min-height:228px"><!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-text-color has-sm-font-size" style="color:#ffffff;font-weight:600">Cobalt Dental</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"}},"fontSize":"xs"} -->
<p class="has-text-color has-xs-font-size" style="color:#ffffff">Private healthcare</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<p class="has-lg-font-size" style="font-weight:600">Cutting the no-show rate by half</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Reminders went out by post and arrived after the appointment. A rebuilt booking flow now confirms, reschedules and fills a cancelled slot without anyone picking up the phone.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Read the story","variant":"ghost","url":"#","iconName":"arrow-right","iconPosition":"right"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","alt":"Orchard worker stacking crates beside a cider press","dimRatio":50,"minHeight":260,"minHeightUnit":"px","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-radius:12px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4);min-height:260px"><img class="wp-block-cover__image-background" alt="Orchard worker stacking crates beside a cider press" src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":"228px"},"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="min-height:228px"><!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-text-color has-sm-font-size" style="color:#ffffff;font-weight:600">Fenwick Cider Works</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"}},"fontSize":"xs"} -->
<p class="has-text-color has-xs-font-size" style="color:#ffffff">Food and drink</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<p class="has-lg-font-size" style="font-weight:600">Selling a harvest that changes weekly</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Stock came in as fast as the presses ran, so the shop was always wrong by Friday. Live batch counts now drive the storefront, and sold-out lines disappear the moment the last case leaves.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Read the story","variant":"ghost","url":"#","iconName":"arrow-right","iconPosition":"right"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","alt":"Weaver threading a loom on a textile mill floor","dimRatio":50,"minHeight":260,"minHeightUnit":"px","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-radius:12px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4);min-height:260px"><img class="wp-block-cover__image-background" alt="Weaver threading a loom on a textile mill floor" src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":"228px"},"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="min-height:228px"><!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-text-color has-sm-font-size" style="color:#ffffff;font-weight:600">Almara Textiles</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"}},"fontSize":"xs"} -->
<p class="has-text-color has-xs-font-size" style="color:#ffffff">Light manufacturing</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<p class="has-lg-font-size" style="font-weight:600">Quotes in minutes instead of days</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Pricing a custom weave meant three emails and a senior estimator. The rules behind those emails now sit in a calculator buyers use themselves, with the estimator only checking the unusual ones.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Read the story","variant":"ghost","url":"#","iconName":"arrow-right","iconPosition":"right"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->

<!-- wp:shadcn/carousel-item -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","alt":"Instructor belaying a climber on an indoor wall","dimRatio":50,"minHeight":260,"minHeightUnit":"px","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-radius:12px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4);min-height:260px"><img class="wp-block-cover__image-background" alt="Instructor belaying a climber on an indoor wall" src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":"228px"},"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="min-height:228px"><!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-text-color has-sm-font-size" style="color:#ffffff;font-weight:600">Redpoint Climbing</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"}},"fontSize":"xs"} -->
<p class="has-text-color has-xs-font-size" style="color:#ffffff">Sport and leisure</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<p class="has-lg-font-size" style="font-weight:600">Memberships that survive a busy Saturday</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Sign-ups queued at the desk while staff typed waivers into two systems. One tablet flow now handles the waiver, the induction booking and the first payment before anyone reaches the mats.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Read the story","variant":"ghost","url":"#","iconName":"arrow-right","iconPosition":"right"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/carousel-item -->
<!-- /wp:shadcn/carousel --></div>
<!-- /wp:group -->
