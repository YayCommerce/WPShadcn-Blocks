# Examples: TSX → Pattern

Two compact reference pairs. More input/output pairs (older conventions, includes now-banned utility classes — use for structure intuition only): `themes/shadcn/context/CONVERSION-EXAMPLES.md`.

## Example 1 — CTA section (core blocks only)

**Source TSX (layout reference):**

```tsx
<section className="bg-primary py-16">
  <div className="container mx-auto flex max-w-xl flex-col items-center gap-8 text-center">
    <Tagline>CTA Section</Tagline>
    <h2 className="text-primary-foreground">Action-driving headline</h2>
    <p className="text-primary-foreground/80">Supporting copy that drives action.</p>
    <Button>Get started<ArrowRight /></Button>
  </div>
</section>
```

**Pattern output (re-authored copy, attrs not classes):**

```html
<!-- wp:group {"align":"wide","backgroundColor":"primary","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|4","right":"var:preset|spacing|4"}}},"layout":{"type":"constrained","contentSize":"576px"}} -->
<div class="wp-block-group alignwide has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--4)"><!-- wp:paragraph {"align":"center","textColor":"primary-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-primary-foreground-color has-text-color has-sm-font-size">Ready when you are</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","textColor":"primary-foreground"} -->
<h2 class="wp-block-heading has-text-align-center has-primary-foreground-color has-text-color">Launch your storefront in an afternoon</h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"md","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill is-size-md"><a class="wp-block-button__link wp-element-button" href="#">Start free</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
```

Note: every `class=` and `style=` above is what Gutenberg serializes from the block attrs — nothing hand-written.

## Example 2 — Testimonial tile (shadcn/card + shadcn/avatar, dynamic blocks)

**Source TSX (layout reference):** `<Card><CardContent><p>quote</p><div><Avatar/><span>name</span></div></CardContent></Card>`

**Pattern output fragment:** dynamic blocks (`render.php`) serialize with NO wrapper HTML of their own — only the comment and inner static markup:

```html
<!-- wp:shadcn/card -->
<!-- wp:shadcn/card-content -->
<!-- wp:paragraph {"textColor":"muted-foreground"} -->
<p class="has-muted-foreground-color has-text-color">"The setup took minutes and the storefront looked hand-built."</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:shadcn/avatar {"fallback":"LN","size":"sm"} /-->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Lan Nguyen — Founder, Riverstone Goods</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/card-content -->
<!-- /wp:shadcn/card -->
```

Before shipping a shadcn block for the first time, verify the exact serialized shape in the editor (Code editor view) — this fragment shows the *convention*, the editor output is the contract.
