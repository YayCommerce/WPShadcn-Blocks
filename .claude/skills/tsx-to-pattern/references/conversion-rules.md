# Conversion Rules: TSX → Block Pattern

## Re-author policy (non-negotiable)

Source TSX (shadcnblocks.com or elsewhere) is **layout reference only**. The plugin is publicly distributed; shipped patterns must contain:
- **Zero verbatim markup** copied from the source.
- **Zero verbatim copy** (headlines, body text, names) — write original placeholder copy fitting the section's purpose.
- Reproduce the *section type and layout idea* (e.g. "3-column testimonial grid with avatar, quote, name/role"), not its exact DOM.

## Output file

`patterns/<name>.php` with this header (parsed by the plugin loader `inc/Patterns.php` and by the AI-hint filter):

```php
<?php
/**
 * Title: Testimonials 1
 * Slug: shadcn/testimonials-1
 * Categories: shadcn
 * Description: A three-column grid of customer testimonials.
 * AI Hint: Three-column grid of quote cards with avatar, name, and role; best for social proof below a hero or pricing section.
 */

?>
<!-- block markup ... -->
```

- **Slug MUST use the `shadcn/` namespace** — the AI Layout Builder catalog (`CatalogBuilder::SLUG_PREFIX`) only indexes `shadcn/*`. Never reuse a slug already registered by the theme (`themes/shadcn/patterns/`).
- Slug must NOT contain `header-1`, `header-2`, or `footer-` substrings (PromptBuilder excludes those as template-part territory).
- Categories: always `shadcn`; add extra categories only if the theme registers them.
- AI Hint: one sentence — visual arrangement + best use, matching the voice of hints in `themes/shadcn/patterns/*.php`.
- Translatable copy may use `esc_html__( '...', 'shadcn-blocks' )`.

## Class policy (audited 2026-07-14)

Audit result: the theme defines **no CSS for Tailwind-style utilities** (`sm:py-16`, `space-y-4`, `mx-auto`, `sm:grid-cols-2`, …) — not in `style.css`, `editor-style.css`, or `theme.json`. Older theme patterns carry them as inert provenance markers; **new patterns must NOT emit them**.

Allowed class families (everything else fails validation):
- WP-generated, attribute-derived: `wp-block-*`, `has-*`, `is-layout-*`, `align*`, `has-text-align-*` — never hand-write these; they appear when block attrs serialize.
- Block style variations (from `themes/shadcn/styles/blocks/*.json`): `is-style-card` (core/group), `is-style-badge`, `is-style-badge-outline` (core/paragraph), `is-style-secondary`, `is-style-outline`, `is-style-ghost`, `is-style-destructive`, `is-style-fill` (core/button), `is-style-pill` (core/navigation); core-registered styles: `is-style-rounded` (core/image), `is-style-default`, `is-style-wide` (core/separator).
- Theme block-setting classes: `is-size-sm|md|lg` on buttons (ButtonSize setting, attr-driven).
- `screen-reader-text`.

All spacing, color, typography, and layout comes from **block attributes**, not classes:

## Preset tables (theme.json)

- **Spacing** (`var:preset|spacing|N`): slugs `1`–`10`. Section padding convention: top/bottom `10`, left/right `4`; card padding `6`; small gaps `2`–`4`.
- **Colors** (`textColor` / `backgroundColor` attrs): `background`, `foreground`, `card`, `card-foreground`, `popover(-foreground)`, `primary(-foreground)`, `secondary(-foreground)`, `muted`, `muted-foreground`, `accent(-foreground)`, `destructive(-foreground)`, `code(-foreground)`. Muted body text = `muted-foreground`.
- **Font sizes** (`fontSize` attr): `xs, sm, base, lg, xl, 2-xl … 7-xl`, fluid: `fluid-4-xl`, `fluid-5-xl`, `fluid-7-xl`. Hero H1 = `fluid-7-xl` (class form `has-fluid-7-xl-font-size`).

## Layout mapping (TSX → block attrs)

| TSX idiom | Gutenberg |
|---|---|
| `<section className="py-16 px-4">` | `core/group` `align:wide`, spacing padding presets |
| `container mx-auto max-w-*` | `core/group` `layout:{type:"constrained",contentSize:"<px>"}` |
| `flex flex-col items-center gap-*` | `core/group` `layout:{type:"flex",orientation:"vertical",justifyContent:"center"}` + `blockGap` preset |
| `grid grid-cols-3 gap-*` | `core/group` `layout:{type:"grid",columnCount:3}` (or `minimumColumnWidth` for responsive auto-fit) + `blockGap` |
| `flex` row of buttons | `core/buttons` `layout:{type:"flex"}` |
| responsive `sm:/lg:` variants | rely on grid `minimumColumnWidth` auto-fit and WP's intrinsic layout; do NOT emit utility classes |
| `.map(items)` loops | unroll into literal blocks (3–6 items of original placeholder content) |
| `<Star>`/icons | inline SVG via theme's svgCode image support, or omit |
| dark-mode `dark:` classes | ignore — theme presets are CSS-variable-driven and adapt automatically |

## No inline CSS

Never hand-write `style="…"`. The ONLY `style=` allowed is what Gutenberg itself serializes from the block's `style` attr JSON (spacing, border, typography presets). If a design detail needs bespoke CSS, that's a signal to use a block style variation or ask before adding anything.

## Component → block map

| TSX component | Target |
|---|---|
| `Button` | `core/button` (+ `is-style-secondary/outline/ghost/destructive`, `size` attr) inside `core/buttons` |
| `Card, CardHeader/Content/Footer` | `shadcn/card` family |
| `Accordion*` | `shadcn/accordion` family |
| `Carousel*` | `shadcn/carousel` family — paginated/snap only, NOT for continuous marquees |
| `Marquee`, `MarqueeContent`, `MarqueeItem` | `shadcn/marquee` family |
| `Alert*` | `shadcn/alert` family |
| `Avatar` | `shadcn/avatar` (`fallback` initials) |
| `Badge` | `shadcn/badge` (or paragraph + `is-style-badge` for plain text) |
| `Tagline` / eyebrow | `shadcn/marker` or paragraph, `textColor:muted-foreground`, `fontSize:sm` |
| `Progress` | `shadcn/progress` |
| `Tooltip*` | `shadcn/tooltip` family |
| `Separator` | `core/separator` |
| `Input/Select/Form…` | static approximation only if decorative; otherwise flag in review notes |
| Anything interactive & unmapped (Tabs, Dialog, HoverCard…) | **missing-block gate** — see SKILL.md |

See `block-inventory.md` for attrs and children.
