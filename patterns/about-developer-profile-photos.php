<?php
/**
 * Title: About Developer Profile Photos
 * Slug: shadcn/about-developer-profile-photos
 * Categories: shadcn, about
 * Description: A personal about section with a left-aligned intro headline, a wide portrait photo, a role and location column beside a bio, and a closing workspace photo.
 * AI Hint: Personal profile about layout — a short left-aligned headline over a full-width rounded portrait, then a narrow left column holding the role title and a location line with a small round flag next to a wider bio in muted text, closing on a second rounded workspace photo; best for a freelancer or solo studio about page built around one person rather than a company.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained","contentSize":"720px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Hello — I am Mara</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-fluid-5-xl-font-size">I design interfaces and then stay around long enough to build them.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Portrait at the studio window" style="border-radius:16px"/></figure>
<!-- /wp:image -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|10"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"34%"} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size" style="font-weight:500">Product designer and front-end developer</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","height":"20px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Flag of Portugal" style="border-radius:9999px;object-fit:cover;width:20px;height:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Lisbon, Portugal — working GMT+1</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"lg"} -->
<p class="has-lg-font-size">Nine years in, I still move between a design file and an editor several times a day, and I have stopped pretending those are two separate jobs. Most of what I make starts as a rough screen, turns into a component nobody notices, and quietly holds up for years.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">I take on a handful of projects each year, usually with founding teams who need a first interface they will not have to throw away. Before going independent I led design at a payments company and shipped a design system three products still run on today. Outside of work I bake badly and cycle slowly along the river.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Desk with sketchbook and monitor" style="border-radius:16px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
