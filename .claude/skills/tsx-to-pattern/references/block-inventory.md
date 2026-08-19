# wpshadcn-blocks Block Inventory

All blocks live in `src/blocks/` and register from `build/blocks/`. **All are dynamic (`render.php`)** — in pattern files they serialize as block comments with inner-block markup between them but no own wrapper HTML.

## Container blocks (with required children)

| Block | Key attrs | Children | Use for TSX |
|---|---|---|---|
| `shadcn/card` | color/border/align supports | `card-header`, `card-content`, `card-footer` (each InnerBlocks) | `<Card>` — real card semantics; prefer over `core/group` + `is-style-card` when header/footer structure exists |
| `shadcn/accordion` | `headingLevel`, `allowMultiple`, `outlined` | `accordion-item` (`title`, `disabled`) | `<Accordion>` / FAQ sections |
| `shadcn/carousel` | `autoplay`, `autoplayDelay`, `loop`, `showArrows`, `showDots`, `slidesPerView(+Tablet/Desktop)`, `gap`, `orientation` | `carousel-item` | `<Carousel>`, paginated/snap sliders — NOT for continuous marquees (use `shadcn/marquee`) |
| `shadcn/marquee` | `speed`, `direction`, `pauseOnHover`, `showFade`, `gap` | `marquee-item` | `<Marquee>`/`<MarqueeContent>` — continuous, seamless, non-paginated auto-scroll; logo strips, tickers |
| `shadcn/alert` | `variant`, `dismissible` | `alert-title` (`title`), `alert-description` | `<Alert>` |
| `shadcn/drawer` | `dismissible`, `direction` | `drawer-trigger/header/content/footer` | `<Drawer>` — interactive; rarely in patterns |
| `shadcn/sheet` | `dismissible`, `direction` | `sheet-trigger/header/content/footer` | `<Sheet>` — interactive; rarely in patterns |
| `shadcn/tooltip` | `action` | `tooltip-trigger`, `tooltip-content` | `<Tooltip>` |
| `shadcn/bubble-group` | `align` | `shadcn/bubble` (`variant`, `align`) | chat/testimonial bubbles |
| `shadcn/avatar-group` | `maxVisible` | `shadcn/avatar` | stacked avatar rows |

## Leaf blocks

| Block | Key attrs | Use for TSX |
|---|---|---|
| `shadcn/avatar` | `mediaId`, `mediaUrl`, `mediaAlt`, `size` (sm/md/lg), `fallback` | `<Avatar>` — fallback initials when no image |
| `shadcn/badge` | `text`, `variant`, `url`, `linkTarget`, `rel` | `<Badge>` — prefer over paragraph + `is-style-badge` when link/variant needed |
| `shadcn/marker` | `content`, `variant`, `shimmer`, `url` | eyebrow/tagline chips with shimmer |
| `shadcn/progress` | `maxValue`, `currentValue`, `staticValue`, `dynamicValue`, `trackColor`, `fillColor` | `<Progress>`, stat bars |
| `shadcn/empty` | — | empty states |
| `shadcn/sonner` | `buttonLabel`, `toastType`, `toastTitle`, `toastDescription` | toast demo — avoid in patterns |

## Custom block vs core decision

- Structure exists as a core block (heading, paragraph, image, buttons, columns, group with flex/grid layout) → **core block + theme presets**.
- TSX component has interactive behavior or slotted anatomy matching a table above → **shadcn block**.
- Card-LIKE visual with no header/footer anatomy → `core/group` + `is-style-card` is acceptable and lighter; use `shadcn/card` when the TSX uses Card* subcomponents.
- Interactive component with NO block here (Tabs, Dialog, HoverCard…) → missing-block gate (see SKILL.md).

## Exact markup shape

Confirm serialized shape by inserting the block in the editor once and copying markup (Code editor view), or read `src/blocks/<name>/edit.js` TEMPLATE. Do not guess attribute names.
