<?php
/**
 * Title: About Agency Process Cards
 * Slug: shadcn/about-agency-process-cards
 * Categories: shadcn, about
 * Description: An agency profile with a two-column intro, three numbered process cards, a milestone band, a wide team photo, an awards list, and a closing testimonial.
 * AI Hint: Agency about layout — labelled two-column intro with portrait, a row of three numbered process cards, three muted milestone figures, a full-width team photograph, a divided awards list, and a large closing quote with attribution; best for a studio or agency about page.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","about"],"patternName":"shadcn/about-agency-process-cards","name":"About Agency Process Cards"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|10"}},"backgroundColor":"background"} -->
<div class="wp-block-group alignwide has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|10"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"58%"} -->
<div class="wp-block-column" style="flex-basis:58%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","contentSize":"560px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace;letter-spacing:0.08em;text-transform:uppercase">Studio profile</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-fluid-4-xl-font-size">A small design and product studio built around one working group</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">We take on a handful of engagements each year so every project keeps the same people from the first sketch through to launch.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"42%"} -->
<div class="wp-block-column" style="flex-basis:42%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Studio founder at a drafting desk" style="border-radius:12px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">The studio started in a shared workshop with two people and a single client. What held from that first year is the habit of drawing the whole thing before arguing about any one part of it.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Today the team runs research, interface design, and front-end delivery in one room, which keeps handovers short and decisions traceable.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace;letter-spacing:0.08em;text-transform:uppercase">How we work</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"3-xl"} -->
<h2 class="wp-block-heading has-3-xl-font-size">Three phases, and nothing skipped</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"grid","minimumColumnWidth":"22rem"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace"}},"textColor":"muted-foreground","fontSize":"4-xl"} -->
<p class="has-muted-foreground-color has-text-color has-4-xl-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace">01</p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Interview notes pinned to a board" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">Framing</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Two weeks of interviews, a walk through the current product, and a written brief everyone signs off before a single screen is drawn.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace"}},"textColor":"muted-foreground","fontSize":"4-xl"} -->
<p class="has-muted-foreground-color has-text-color has-4-xl-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace">02</p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Screen layouts spread across a table" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">Drafting</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">Rough layouts first, then a component set your own team can extend. We review in the browser rather than in a slide deck.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace"}},"textColor":"muted-foreground","fontSize":"4-xl"} -->
<p class="has-muted-foreground-color has-text-color has-4-xl-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace">03</p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Developer reviewing a build on two monitors" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">Shipping</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">We build the front end alongside your engineers, then stay on for a support window so the first month after launch is not a cliff.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace;letter-spacing:0.08em;text-transform:uppercase">Milestones</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"grid","minimumColumnWidth":"22rem"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|6","bottom":"var:preset|spacing|7","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|2"}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"fontSize":"5-xl"} -->
<h3 class="wp-block-heading has-5-xl-font-size">12</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Years of continuous practice, from the first workshop bench to the current studio.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|6","bottom":"var:preset|spacing|7","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|2"}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"fontSize":"5-xl"} -->
<h3 class="wp-block-heading has-5-xl-font-size">86</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Products taken from an empty repository to a public launch date.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|6","bottom":"var:preset|spacing|7","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|2"}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"fontSize":"5-xl"} -->
<h3 class="wp-block-heading has-5-xl-font-size">7</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">People on the permanent team, all of whom work directly on client engagements.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="The full studio team gathered in the workshop" style="border-radius:16px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace;letter-spacing:0.08em;text-transform:uppercase">Recognition</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"is-style-shadcn-divided","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group is-style-shadcn-divided"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace">2025</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}}} -->
<p style="font-weight:500">Interface of the Year, shortlist</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Product design</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace">2024</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}}} -->
<p style="font-weight:500">Regional Studio Award, winner</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Brand systems</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace">2023</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}}} -->
<p style="font-weight:500">Accessible Practice Certification</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Accessibility</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace">2022</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}}} -->
<p style="font-weight:500">Craft in Software, honourable mention</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Front-end build</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"3-xl"} -->
<p class="has-3-xl-font-size">They gave us a shared vocabulary for the product. Six months on, our own designers still open the same file first, and nobody has asked to start over.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"40px","height":"40px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Priya Raman" style="border-radius:9999px;object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Priya Raman</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">VP Product, Halden Systems</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
