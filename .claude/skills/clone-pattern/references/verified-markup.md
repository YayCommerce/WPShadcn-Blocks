# Verified markup

Every snippet here was shipped in a pattern that passes `validate-pattern.php` and reports `invalid: []` in the editor. Copy them rather than rewriting the serialized HTML from memory — a single class out of order makes the block invalid.

Placeholder image everywhere: `https://ui.shadcn.com/placeholder.svg`.

## Theme presets

| Token | Values |
|---|---|
| `fontSize` | `xs sm base lg xl 2-xl 3-xl 4-xl 5-xl 6-xl 7-xl fluid-4-xl fluid-5-xl fluid-7-xl` |
| `spacing` | `1`–`10` |
| `color` | `background foreground card card-foreground popover popover-foreground primary primary-foreground secondary secondary-foreground muted muted-foreground accent accent-foreground destructive destructive-foreground code code-foreground` |
| layout | contentSize `800px`, wideSize `1200px` |

`border` and `ring` resolve as CSS variables from `style.css` but are absent from the palette, so they work in `var:preset|color|border` and never show in a picker. There is no monospace font family preset — set `style.typography.fontFamily` to a raw stack.

## Section wrapper

```html
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)">…</div>
<!-- /wp:group -->
```

Children that must span the full 1200px need their own `"align":"wide"` and the `alignwide` class.

## Bordered card

The workhorse. Border colour, style, width, radius, then padding — that order.

```html
<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">…</div>
<!-- /wp:group -->
```

## Author row — avatar beside name and role

```html
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"40px","height":"40px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Sarah Williams" style="border-radius:9999px;object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Sarah Williams</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Head of Product, Northwind</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
```

## Images

Logo — height only, so a wide wordmark keeps its natural width and sits flush left. Setting a width too letterboxes it inside a fixed box:

```html
<!-- wp:image {"height":"24px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="https://ui.shadcn.com/placeholder.svg" alt="Northwind logo" style="height:24px"/></figure>
<!-- /wp:image -->
```

Plain rounded image:

```html
<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="Studio workspace" style="border-radius:12px"/></figure>
<!-- /wp:image -->
```

## Columns

```html
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"34%"} -->
<div class="wp-block-column" style="flex-basis:34%">…</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33%">…</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
```

Content pinned top and bottom over the full column height — put the flex on the column, not on a group inside it:

```html
<!-- wp:column {"width":"60%","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-column" style="flex-basis:60%">…</div>
<!-- /wp:column -->
```

## Responsive grid

```html
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"grid","minimumColumnWidth":"22rem"}} -->
<div class="wp-block-group alignwide">…</div>
<!-- /wp:group -->
```

`auto-fill` divides the container by `minimumColumnWidth`. At 1200px: `18rem` → 4 columns, `22rem` → 3, `28rem` → 2.

## Pill badge

A paragraph is a block box, so its border would span the full width. Wrapping it in a flex group shrinks it to its text without any CSS.

```html
<!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"9999px"},"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem","left":"0.75rem","right":"0.75rem"}}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-border-color has-muted-foreground-color has-text-color has-xs-font-size" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:9999px;padding-top:0.25rem;padding-right:0.75rem;padding-bottom:0.25rem;padding-left:0.75rem">★ Rave reviews</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
```

## Cover panel

`<img>` comes **before** the dim `<span>`. Style order is border-radius (from block supports) then min-height (from the block's own save). `layout: default` lets children fill the panel; `constrained` would cap them at 800px.

```html
<!-- wp:cover {"url":"https://ui.shadcn.com/placeholder.svg","alt":"Living room","dimRatio":60,"minHeight":720,"minHeightUnit":"px","align":"wide","style":{"border":{"radius":"16px"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover alignwide" style="border-radius:16px;min-height:720px"><img class="wp-block-cover__image-background" alt="Living room" src="https://ui.shadcn.com/placeholder.svg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container">…</div></div>
<!-- /wp:cover -->
```

`dimRatio` 0 and 50 emit no `has-background-dim-N` class; every other value rounds to the nearest 10.

Text over a photo should use a literal `#ffffff`, not the `background` preset — that preset flips to near-black in dark mode:

```html
<!-- wp:heading {"level":2,"style":{"color":{"text":"#ffffff"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-color has-fluid-5-xl-font-size" style="color:#ffffff">Warmth and style</h2>
<!-- /wp:heading -->
```

## Block style variations

Registered in `inc/BlockStyles.php`, so they ship with the plugin and do not depend on the theme.

| Class | Block | Effect |
|---|---|---|
| `is-style-shadcn-check` | `core/list` | Bullets become ticks drawn with a CSS mask, coloured by `currentColor` |
| `is-style-shadcn-sticky` | `core/group` | `position: sticky; top: 2rem` above 782px, with the admin-bar offset |
| `is-style-shadcn-divided` | `core/group` | Hairline under every direct child plus matching vertical padding |

Divided rows — set `blockGap` to `0` and let the style own the rhythm. A label placed as the first child gets the rule beneath it for free:

```html
<!-- wp:group {"className":"is-style-shadcn-divided","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-shadcn-divided">…</div>
<!-- /wp:group -->
```

## Plugin blocks

`shadcn/carousel`, `shadcn/carousel-item`, `shadcn/marquee`, `shadcn/marquee-item`, `shadcn/tabs`, `shadcn/tab` all `save()` as `<InnerBlocks.Content />` — the pattern carries **no wrapper HTML** for them, only the block comments and their children.

```html
<!-- wp:shadcn/carousel {"autoplay":true,"autoplayDelay":4000,"showDots":false,"slidesPerView":1,"slidesPerViewTablet":1,"slidesPerViewDesktop":1} -->
<!-- wp:shadcn/carousel-item -->
… card markup …
<!-- /wp:shadcn/carousel-item -->
<!-- /wp:shadcn/carousel -->
```

Carousel attributes: `autoplay`, `autoplayDelay`, `loop`, `showArrows`, `showDots`, `slidesPerView` / `slidesPerViewTablet` / `slidesPerViewDesktop`, `gap`, `orientation`, `effect` (`none` | `coverflow`).

For any plugin block not listed here, read its `block.json` for the attribute names and check `index.js` for whether `save()` emits a wrapper.
