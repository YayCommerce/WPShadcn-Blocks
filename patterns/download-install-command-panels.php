<?php
/**
 * Title: Download Install Command Panels
 * Slug: shadcn/download-install-command-panels
 * Categories: shadcn, download
 * Description: A release block pairing a square app tile with two platform panels, one carrying a monospace install command and one a weighted download row.
 * AI Hint: Release download block for a desktop tool: a square app tile sits left of a bold version headline with a muted release date, and the right side splits into two platform columns, the first stacking a platform label, a two-chip channel strip, a bordered monospace install command, a muted archive link and then a second platform label above a full-width outline waitlist button, the second stacking a platform label, an architecture chip strip, a bordered row weighing a bold download label against a file size and a download glyph, and a muted requirement line, the whole closing on a hairline and a muted licence sentence; reach for it when one release has to serve a scripted install, a waitlist and a direct binary at once.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|4","bottom":"var:preset|spacing|9","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|6"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--4)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|7","left":"var:preset|spacing|7"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"18%"} -->
<div class="wp-block-column" style="flex-basis:18%"><!-- wp:image {"width":"168px","height":"168px","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Quarry Desk app tile" style="border-radius:16px;object-fit:cover;width:168px;height:168px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"82%"} -->
<div class="wp-block-column" style="flex-basis:82%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"700"}},"fontSize":"3-xl"} -->
<h2 class="wp-block-heading has-3-xl-font-size" style="font-weight:700">Download Quarry Desk 4.1.0</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Published 14 March 2026</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"svgCode":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002216\u0022 height=\u002216\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003e\u003cpath d=\u0022M12 19h8\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022m4 17 6-6-6-6\u0022 fill=\u0022none\u0022/\u003e\u003c/svg\u003e","svgColor":"currentColor","svgSize":"16px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Linux</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","style":"solid","width":"1px","radius":"8px"},"spacing":{"padding":{"top":"0.25rem","right":"0.25rem","bottom":"0.25rem","left":"0.25rem"},"blockGap":"var:preset|spacing|1"}},"backgroundColor":"muted","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group has-border-color has-muted-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:8px;padding-top:0.25rem;padding-right:0.25rem;padding-bottom:0.25rem;padding-left:0.25rem"><!-- wp:paragraph {"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"0.2rem","right":"0.6rem","bottom":"0.2rem","left":"0.6rem"}},"typography":{"fontWeight":"600"}},"backgroundColor":"card","fontSize":"xs"} -->
<p class="has-card-background-color has-background has-xs-font-size" style="border-radius:6px;padding-top:0.2rem;padding-right:0.6rem;padding-bottom:0.2rem;padding-left:0.6rem;font-weight:600">Stable</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0.2rem","right":"0.6rem","bottom":"0.2rem","left":"0.6rem"}}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="padding-top:0.2rem;padding-right:0.6rem;padding-bottom:0.2rem;padding-left:0.6rem">Preview</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","style":"solid","width":"1px","radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|4","bottom":"var:preset|spacing|3","left":"var:preset|spacing|4"}},"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace"}},"backgroundColor":"code","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-code-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--4);font-family:ui-monospace, SFMono-Regular, Menlo, monospace"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">quarry install desk</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Prefer a tarball? <a href="#">Take the archive</a> and unpack it wherever you like.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"svgCode":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002216\u0022 height=\u002216\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003e\u003cpath d=\u0022M10 16h.01\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022M2.212 11.577a2 2 0 0 0-.212.896V18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-5.527a2 2 0 0 0-.212-.896L18.55 5.11A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022M21.946 12.013H2.054\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022M6 16h.01\u0022 fill=\u0022none\u0022/\u003e\u003c/svg\u003e","svgColor":"currentColor","svgSize":"16px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Windows</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline","iconName":"external-link","iconPosition":"right"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Join the Windows preview list</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Or compile it yourself from the open source tree.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"svgCode":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002216\u0022 height=\u002216\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003e\u003cpath d=\u0022M12 20v2\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022M12 2v2\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022M17 20v2\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022M17 2v2\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022M2 12h2\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022M2 17h2\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022M2 7h2\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022M20 12h2\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022M20 17h2\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022M20 7h2\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022M7 20v2\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022M7 2v2\u0022 fill=\u0022none\u0022/\u003e\u003crect x=\u00224\u0022 y=\u00224\u0022 width=\u002216\u0022 height=\u002216\u0022 rx=\u00222\u0022 fill=\u0022none\u0022/\u003e\u003crect x=\u00228\u0022 y=\u00228\u0022 width=\u00228\u0022 height=\u00228\u0022 rx=\u00221\u0022 fill=\u0022none\u0022/\u003e\u003c/svg\u003e","svgColor":"currentColor","svgSize":"16px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">macOS</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","style":"solid","width":"1px","radius":"8px"},"spacing":{"padding":{"top":"0.25rem","right":"0.25rem","bottom":"0.25rem","left":"0.25rem"},"blockGap":"var:preset|spacing|1"}},"backgroundColor":"muted","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group has-border-color has-muted-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:8px;padding-top:0.25rem;padding-right:0.25rem;padding-bottom:0.25rem;padding-left:0.25rem"><!-- wp:paragraph {"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"0.2rem","right":"0.6rem","bottom":"0.2rem","left":"0.6rem"}},"typography":{"fontWeight":"600"}},"backgroundColor":"card","fontSize":"xs"} -->
<p class="has-card-background-color has-background has-xs-font-size" style="border-radius:6px;padding-top:0.2rem;padding-right:0.6rem;padding-bottom:0.2rem;padding-left:0.6rem;font-weight:600">arm64</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0.2rem","right":"0.6rem","bottom":"0.2rem","left":"0.6rem"}}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="padding-top:0.2rem;padding-right:0.6rem;padding-bottom:0.2rem;padding-left:0.6rem">x86_64</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","style":"solid","width":"1px","radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|4","bottom":"var:preset|spacing|3","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--4)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Download now</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Signed arm64 disk image</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"textColor":"muted-foreground","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-muted-foreground-color has-text-color"><!-- wp:paragraph {"fontSize":"xs"} -->
<p class="has-xs-font-size">218 MB</p>
<!-- /wp:paragraph -->

<!-- wp:image {"svgCode":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002216\u0022 height=\u002216\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003e\u003cpath d=\u0022M12 15V3\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022m7 10 5 5 5-5\u0022 fill=\u0022none\u0022/\u003e\u003c/svg\u003e","svgColor":"currentColor","svgSize":"16px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Requires macOS 13 or later.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">By installing Quarry Desk you accept the <a href="#">licence terms</a> and the automatic update policy.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
