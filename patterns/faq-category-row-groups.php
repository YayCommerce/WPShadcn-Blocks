<?php
/**
 * Title: FAQ Category Row Groups
 * Slug: shadcn/faq-category-row-groups
 * Categories: shadcn, faq
 * Description: A large left-aligned heading over hairline-separated category rows, each pairing a category name in a narrow left column with a full-width accordion of questions on the right.
 * AI Hint: Two-band FAQ index — a big flush-left heading with a rule under it, then one row per topic whose narrow left column carries only the category name and whose wide right column holds a hairline-divided accordion of four or five collapsed questions, with another rule dividing the topics; reach for it on a dedicated support page where questions already sort into named groups and the reader scans headings before opening anything.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|5","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|6"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.02em"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-fluid-4-xl-font-size" style="font-weight:700;letter-spacing:-0.02em">Frequently asked questions.</h2>
<!-- /wp:heading -->

<!-- wp:separator {"align":"wide","className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator alignwide has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"28%"} -->
<div class="wp-block-column" style="flex-basis:28%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Orders</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"72%"} -->
<div class="wp-block-column" style="flex-basis:72%"><!-- wp:shadcn/accordion {"headingLevel":4} -->
<!-- wp:shadcn/accordion-item {"title":"How long does a print order take to make?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Standard prints leave the lab within two working days. Framed pieces and anything larger than A2 are mounted by hand, so allow five working days before the courier collects.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Can I change an order after checkout?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Sizes, paper and quantities can be edited from the order page until the job enters production, usually a window of about four hours. After that, message the studio and we will do what we can before the sheet is cut.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"What resolution should my files be?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Aim for 300 pixels per inch at the finished size. The uploader flags anything that would print soft and suggests the largest size the file can carry, so you are never guessing from a thumbnail.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Do you colour correct before printing?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Every file gets a soft proof against the paper profile, and we adjust only where a print would otherwise lose shadow detail. Tick the box at checkout if you would rather we printed your file untouched.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Can I order a single test print first?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Yes. Order one small print of any image and the cost comes off the full run when you place it within thirty days, which is the cheapest way to compare two papers side by side.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"align":"wide","className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator alignwide has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"28%"} -->
<div class="wp-block-column" style="flex-basis:28%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Delivery</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"72%"} -->
<div class="wp-block-column" style="flex-basis:72%"><!-- wp:shadcn/accordion {"headingLevel":4} -->
<!-- wp:shadcn/accordion-item {"title":"How are prints packed for shipping?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Flat prints travel between two sheets of board in a rigid envelope. Anything over A2 ships rolled in a tube with an inner sleeve, and framed work goes in a corner-protected carton rated for glass.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Do you ship outside the country?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">We ship to most of Europe and to North America. Duties are shown at checkout rather than sprung on you at the door, and tracking is included on every international parcel.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"What if a print arrives damaged?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Send a photo of the packaging and the print within seven days and we reprint the whole order at no cost. There is nothing to return, since a damaged print is no use to anyone.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->

<!-- wp:shadcn/accordion-item {"title":"Can I collect an order from the studio?"} -->
<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Choose collection at checkout and we hold the order for two weeks. You will get a message the moment it is trimmed, and the counter is open on weekday afternoons.</p>
<!-- /wp:paragraph -->
<!-- /wp:shadcn/accordion-item -->
<!-- /wp:shadcn/accordion --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
