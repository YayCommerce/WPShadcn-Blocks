---
name: tsx-to-pattern
description: Convert a TSX section (shadcnblocks.com or any shadcn/ui source, used as layout reference only) into a validated Gutenberg block pattern shipped by the wpshadcn-blocks plugin. Use when the user asks to create a pattern from TSX/React source, grow the pattern pool, or convert a shadcnblocks section.
---

# tsx-to-pattern

Dev-time production line: one TSX section → one reviewed pattern file in `patterns/`. One pattern per run; quality over throughput.

## Inputs

1. TSX source (pasted or file path) — **layout reference only**, see re-author policy in `references/conversion-rules.md`.
2. Target section type + pattern name (e.g. `testimonials-1`). If not given, propose one from the wave list and confirm.

## Workflow

### 1. Analyze
Read `references/conversion-rules.md` and `references/block-inventory.md`. Identify the section anatomy: wrapper, intro (tagline/heading/subtext), repeating unit, CTA. List every React component used and map each via the component→block table. Unroll `.map()` loops into 3–6 literal items.

### 2. Missing-block gate
If any **interactive** component has no mapping (Tabs, Dialog, Marquee, HoverCard…): STOP and use AskUserQuestion with options:
- **Scaffold new block** — copy the structure of `src/blocks/accordion/` (block.json, edit.js, index.js, render.php, style.scss, view.js if interactive), then `npm run build` in the plugin. Registration is automatic (build-dir glob).
- **Fallback markup** — nearest static core-block approximation; note the gap in the final report.
- **Skip section**.
Never scaffold without asking.

### 3. Re-author and emit
Write `patterns/<name>.php`:
- Header per conversion-rules (Title, `Slug: shadcn/<name>`, Categories incl. `shadcn`, Description, AI Hint).
- Original placeholder copy — zero verbatim source text/markup.
- Styling ONLY via block attrs (spacing/color/fontSize presets, layout, block styles). No hand-written classes outside the audited allowlist, and no `style=` that does not come from a block attribute — the serialized HTML must match what `save()` emits, inline styles included.
- For shadcn/* dynamic blocks, follow `references/examples.md` markup shape; when using a block for the first time, verify serialized shape in the editor Code view.
- Proven serialized markup for cards, author rows, covers, grids and the shadcn block styles lives in `../clone-pattern/references/verified-markup.md` — copy from there rather than re-deriving.

### 4. Validate (mechanical)
Paths are document-root relative, because `wp-local` runs WP-CLI from the site's document root:

```bash
WP=/Users/shrief/.claude/bin/wp-local
PLUGIN=wp-content/plugins/wpshadcn-blocks
$WP wpshadcn-dev eval-file "$PLUGIN/.claude/skills/tsx-to-pattern/scripts/validate-pattern.php" "$PLUGIN/patterns/<name>.php"
```
Requires the LocalWP site running — if `wp` reports a DB error, ask the user to start the site. Fix every failure and re-run until green.

### 5. Manual review checklist (present to user)
- [ ] Editor reports no invalid blocks — see the `isValid` walk in `../clone-pattern/SKILL.md`. The mechanical validator cannot detect this; block validity is a client-side comparison against `save()`.
- [ ] Inserter shows the pattern under "Shadcn Patterns" with correct preview
- [ ] Editor render — light AND dark mode
- [ ] Frontend render — light AND dark mode
- [ ] AI catalog: `wp eval 'print_r((new \Shadcn\AiLayoutBuilder\PatternHintReader())->hints());'` includes the new slug + hint
- [ ] Spot-check: no phrase or DOM fragment identical to the source TSX

### 6. Report
Changed files, mapping decisions, any fallbacks taken, validation output. Leave commits to the user.

## Hard rules

- Never edit existing theme patterns — they follow older conventions on purpose.
- Never reuse a slug the theme already registers.
- The deliverable is a *pattern that passes validation*, not a pixel-perfect clone.
