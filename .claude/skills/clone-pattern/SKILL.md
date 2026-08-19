---
name: clone-pattern
description: Rebuild a live section design (a shadcnblocks.com block URL, a screenshot, or any rendered reference) as a validated Gutenberg pattern in the wpshadcn-blocks plugin. Use when asked to "tạo pattern này" with a URL, to clone a section, or to add and verify any file under the plugin's patterns/ directory.
---

# clone-pattern

One rendered design in, one verified pattern file out. Sibling of `tsx-to-pattern`: that skill starts from TSX source, this one starts from a design you can only look at. Everything downstream of "write the file" is shared — same validator, same conventions.

**The deliverable is a pattern that renders correctly, not one that merely parses.** Every layout bug this workflow has caught was invisible in the markup and obvious in a browser.

## Workflow

### 1. Read the design

Navigate to the block page and screenshot it, scrolling to the bottom of the section. `www.shadcnblocks.com/preview/<id>?iframe=true` refuses to load directly (403), and reading the iframe's `contentDocument` from the parent page trips the privacy hook — screenshots are the reliable path.

Write down: the section's column structure, what is pinned/staggered/centred, and every repeating unit.

### 2. Decide what is a pattern

The governing principle in this codebase: **blocks encode behaviour, layouts are patterns.** Applied here, in order of preference:

1. Core blocks + block attributes → just write it.
2. Needs a reusable visual rule (sticky column, hairline-divided rows, check list) → add a variation in `inc/BlockStyles.php` and use it. Only when it is reusable beyond this one pattern.
3. Needs interactivity (carousel, tabs, accordion) → use the existing `shadcn/*` block. If none exists, **stop and ask** before scaffolding one.
4. Purely decorative and would need one-off CSS (a rule beside an eyebrow, a button floating over an image) → drop it, and say so in the report.

### 3. Write the file

`patterns/<descriptive-kebab-name>.php`. Name it for what it *is* (`testimonial-mention-list`), not for the source id (`testimonial16`).

Header — all five are read by `inc/Patterns.php`, `AI Hint` feeds the AI layout catalog:

```php
/**
 * Title: Testimonial Mention List
 * Slug: shadcn/testimonial-mention-list
 * Categories: shadcn, testimonials
 * Description: One sentence describing the layout.
 * AI Hint: Longer sentence naming the anatomy and when to reach for it.
 */
```

Copy must be **original**. Match the shape of the source, never its sentences.

Categories: `shadcn` is required. Core already registers `about`, `testimonials`, `team`, `services`, `banner`, `call-to-action`, `gallery`, `media`, `portfolio`, `contact`, `posts`, `text`, `columns`, `buttons`, `header`, `footer`, `featured`, `query`. `hero` and `pricing` come from `inc/Patterns.php`. Register a new one there only if none of those fit — check with `WP_Block_Pattern_Categories_Registry` first rather than assuming.

Pattern files hold **both** the block comment and the serialized HTML that `save()` would emit. Getting that HTML wrong is the one way to produce a broken pattern, so copy from `references/verified-markup.md` instead of writing it from memory. When you need markup that file does not cover, derive it in the editor — do not guess:

```js
wp.blocks.serialize([wp.blocks.createBlock('core/cover', {dimRatio: 60, minHeight: 720})])
```

Keep that probe **short**. Long JS, and JS combining a URL with a `style` attribute object, gets blocked by the privacy hook (`[BLOCKED: Cookie/query string data]`). Several tiny probes beat one big one.

### 4. Verify — all three gates

`wp-local` runs WP-CLI from the site's document root, so **every path below is document-root relative** — a path relative to your own shell will not resolve.

```bash
WP=/Users/shrief/.claude/bin/wp-local
PLUGIN=wp-content/plugins/wpshadcn-blocks

# 1. mechanical: headers, block registry, round-trip, class allowlist
$WP wpshadcn-dev eval-file "$PLUGIN/.claude/skills/tsx-to-pattern/scripts/validate-pattern.php" "$PLUGIN/patterns/<name>.php"

# 2. publish a throwaway page; prints both front-end and editor URLs
$WP wpshadcn-dev eval-file "$PLUGIN/.claude/skills/clone-pattern/scripts/preview-pattern.php" "$PLUGIN/patterns/<name>.php"
```

**Gate 2 — block validity.** Open the editor URL and run:

```js
const sel = wp.data.select('core/block-editor');
const bad = []; let n = 0;
const walk = bs => bs.forEach(b => { n++; if (b.isValid === false) bad.push(b.name); walk(b.innerBlocks); });
walk(sel.getBlocks());
JSON.stringify({blocks: n, invalid: bad});
```

Must be `invalid: []`. Validity is a client-side comparison against `save()`; no PHP check can substitute for it. If a block is invalid, its serialized HTML disagrees with its attributes — fix the HTML, never the attributes.

**Gate 3 — the eye.** Screenshot the front end. Confirm the section spans the width you intended, columns divide as intended, and images are the size you intended. Then measure anything you are unsure of rather than trusting the screenshot; a mid-transition frame has twice looked like a layout bug that was not there.

Finally, delete every preview page — pass the keyword without dashes, since WP-CLI swallows `--cleanup` as one of its own flags:

```bash
$WP wpshadcn-dev eval-file "$PLUGIN/.claude/skills/clone-pattern/scripts/preview-pattern.php" cleanup
```

### 5. Report

Files changed, anything dropped from the source and why, and the three gate results. Leave commits to the user.

## Traps that have actually bitten

- **`alignwide` does not inherit.** A `constrained` group caps its children at contentSize (800px) even when the group itself is 1200px wide. The child that should be full width needs its own `"align":"wide"`, or give the parent `"layout":{"type":"default"}`.
- **Grid `minimumColumnWidth` decides the column count, not your item count.** `auto-fill` at 17rem across 1200px makes four columns; three cards then leave a hole. Divide the container width by the count you want and pick a minimum just under it.
- **Vertical space-between needs a real height.** Put `{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}` on the `core/column` itself — the column is a stretched flex item and already full height. A group inside it is only as tall as its content, so the same layout on a group does nothing.
- **`verticalAlignment` maps to `justify-content` on vertical flex, and `justifyContent` maps to `align-items`.** They swap. Horizontal flex is the other way round.
- **Core's sticky position support is theme-gated.** `wp_render_position_support()` emits nothing unless the active theme sets `settings.position.sticky`; the shadcn theme does not. Patterns ship with the plugin, so use the `is-style-shadcn-sticky` variation instead.
- **`[hidden]` loses to any author `display`.** Its `display: none` comes from the UA stylesheet.
- **Presentation attributes lose to CSS.** `fill="none"` on an `<svg>` root is overridden by an inherited `fill` rule; put it on each closed shape.
- **WordPress renders inner blocks before their parent.** Shared PHP helpers must live in `inc/`, never in a block's `render.php`.
- **`var:preset|color|border` resolves but is not in the palette.** The theme defines `--wp--preset--color--border` directly in `style.css`, with a dark-mode override. Safe to use; it just will not appear in a colour picker.

## Hard rules

- Never edit the theme's own patterns — they follow older conventions deliberately.
- Never reuse a slug the theme registers; `inc/Patterns.php` silently skips collisions.
- Never add a block style for a single pattern's decoration.
- Never report a pattern done without gate 2 and gate 3.
