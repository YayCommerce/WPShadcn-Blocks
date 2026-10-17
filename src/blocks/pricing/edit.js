/**
 * WordPress dependencies
 */
import {
  BlockControls,
  InnerBlocks,
  InspectorControls,
  useBlockProps,
} from "@wordpress/block-editor";
import {
  Button,
  PanelBody,
  TextControl,
  ToolbarButton,
  ToolbarGroup,
} from "@wordpress/components";
import { useState } from "@wordpress/element";
import { __, sprintf } from "@wordpress/i18n";

/**
 * Hairline used for the grid's internal dividers and its outer frame.
 *
 * Referenced as a preset variable rather than a literal so it tracks the
 * theme's border colour in both light and dark mode.
 */
const HAIRLINE = {
  color: "var:preset|color|border",
  width: "1px",
  style: "solid",
};

/** Padding inside each grid cell. */
const CELL_PADDING = {
  top: "var:preset|spacing|5",
  right: "var:preset|spacing|5",
  bottom: "var:preset|spacing|5",
  left: "var:preset|spacing|5",
};

/**
 * Turn a label into a usable interval key.
 *
 * @param {string} label Human label.
 * @return {string} Slug.
 */
const toKey = (label) =>
  String(label)
    .toLowerCase()
    .replace(/[^a-z0-9]+/g, "-")
    .replace(/^-+|-+$/g, "");

/**
 * Build one tier column: name, description, price, call to action.
 *
 * @param {string}  name    Plan name.
 * @param {string}  summary Short description.
 * @param {Array}   prices  Price entries, one per priced interval.
 * @param {string}  cta     Button label.
 * @param {boolean} primary Whether the button is the filled variant.
 * @param {boolean} divider Whether a divider follows this column.
 * @return {Array} Inner block definition.
 */
const tier = (name, summary, prices, cta, primary, divider) => [
  "core/column",
  {
    style: {
      spacing: { padding: CELL_PADDING },
      ...(divider ? { border: { right: HAIRLINE } } : {}),
    },
  },
  [
    ["core/heading", { level: 3, content: name, fontSize: "2-xl" }],
    ["core/paragraph", { content: summary, textColor: "muted-foreground" }],
    [
      "shadcn/pricing-price",
      {
        prices,
        currencyPlacement: "superscript",
        periodPlacement: "below",
      },
    ],
    [
      "core/buttons",
      {},
      [
        [
          "core/button",
          primary ? { text: cta } : { text: cta, className: "is-style-outline" },
        ],
      ],
    ],
  ],
];

/**
 * Build one column of the feature band.
 *
 * @param {string[]} features Feature labels.
 * @param {boolean}  divider  Whether a divider follows this column.
 * @return {Array} Inner block definition.
 */
const featureColumn = (features, divider) => [
  "core/column",
  {
    style: {
      spacing: { padding: CELL_PADDING },
      ...(divider ? { border: { right: HAIRLINE } } : {}),
    },
  },
  [
    [
      "core/list",
      {},
      features.map((feature) => ["core/list-item", { content: feature }]),
    ],
  ],
];

/**
 * Price entries for the default two intervals.
 *
 * @param {string} monthly Monthly amount.
 * @param {string} yearly  Yearly amount.
 * @return {Array} Price entries.
 */
const defaultPrices = (monthly, yearly) => [
  { key: "monthly", amount: monthly, period: __("Per month", "yaycommerce-blocks-for-shadcn-ui") },
  { key: "yearly", amount: yearly, period: __("Per year", "yaycommerce-blocks-for-shadcn-ui") },
];

/**
 * Default template.
 *
 * Reproduces a four-tier comparison grid: a switch, three tiers, a band of
 * feature lists beneath them, then one wide row for the entry-level plan.
 *
 * Everything except the switch and the prices is core blocks on purpose —
 * the point of this block is that the layout belongs to the author. Rearrange
 * or replace any of it and every price still follows the switch.
 */
const TEMPLATE = [
  ["shadcn/pricing-switch", {}],
  [
    // The frame. Rows butt against each other with no block gap so their
    // dividers read as one continuous grid rather than as separate cards.
    "core/group",
    {
      align: "wide",
      backgroundColor: "card",
      style: {
        border: { ...HAIRLINE, radius: "0.75rem" },
        spacing: {
          blockGap: "0",
          // A group with a background otherwise inherits the theme's root
          // padding, which would inset every divider from the frame it is
          // meant to meet. Spacing comes from the cells instead.
          padding: { top: "0", right: "0", bottom: "0", left: "0" },
        },
      },
    },
    [
      // Tier band: name, description, price, call to action.
      [
        "core/columns",
        { style: { border: { bottom: HAIRLINE }, spacing: { blockGap: "0" } } },
        [
          tier(
            __("Standard Plan", "yaycommerce-blocks-for-shadcn-ui"),
            __(
              "For growing teams that need more power. Start with a 30-day free trial.",
              "yaycommerce-blocks-for-shadcn-ui"
            ),
            defaultPrices("20", "200"),
            __("Get Started", "yaycommerce-blocks-for-shadcn-ui"),
            true,
            true
          ),
          tier(
            __("Premium Plan", "yaycommerce-blocks-for-shadcn-ui"),
            __(
              "For large organizations with advanced needs. Everything in Standard, and more.",
              "yaycommerce-blocks-for-shadcn-ui"
            ),
            defaultPrices("80", "800"),
            __("Buy Now", "yaycommerce-blocks-for-shadcn-ui"),
            false,
            true
          ),
          tier(
            __("Enterprise", "yaycommerce-blocks-for-shadcn-ui"),
            __(
              "For organizations that need governance, security reviews and dedicated support.",
              "yaycommerce-blocks-for-shadcn-ui"
            ),
            defaultPrices("199", "1990"),
            __("Contact sales", "yaycommerce-blocks-for-shadcn-ui"),
            false,
            false
          ),
        ],
      ],

      // Feature band, aligned to the same three columns.
      [
        "core/columns",
        { style: { border: { bottom: HAIRLINE }, spacing: { blockGap: "0" } } },
        [
          featureColumn(
            [
              __("Unlimited components", "yaycommerce-blocks-for-shadcn-ui"),
              __("Priority support", "yaycommerce-blocks-for-shadcn-ui"),
              __("Daily updates", "yaycommerce-blocks-for-shadcn-ui"),
              __("10GB storage", "yaycommerce-blocks-for-shadcn-ui"),
              __("Advanced analytics", "yaycommerce-blocks-for-shadcn-ui"),
            ],
            true
          ),
          featureColumn(
            [
              __("Unlimited components", "yaycommerce-blocks-for-shadcn-ui"),
              __("Dedicated support", "yaycommerce-blocks-for-shadcn-ui"),
              __("Real-time updates", "yaycommerce-blocks-for-shadcn-ui"),
              __("Unlimited storage", "yaycommerce-blocks-for-shadcn-ui"),
              __("Custom integrations", "yaycommerce-blocks-for-shadcn-ui"),
            ],
            true
          ),
          featureColumn(
            [
              __("SSO and audit logs", "yaycommerce-blocks-for-shadcn-ui"),
              __("Data residency options", "yaycommerce-blocks-for-shadcn-ui"),
              __("Dedicated success manager", "yaycommerce-blocks-for-shadcn-ui"),
              __("Custom reporting and SLAs", "yaycommerce-blocks-for-shadcn-ui"),
              __("Workflow automation at scale", "yaycommerce-blocks-for-shadcn-ui"),
              __("Executive business reviews", "yaycommerce-blocks-for-shadcn-ui"),
              __("Early access to beta features", "yaycommerce-blocks-for-shadcn-ui"),
            ],
            false
          ),
        ],
      ],

      // Entry-level plan as one wide row closing the grid. Priced once, so it
      // shows the same figure whatever interval is selected.
      [
        "core/group",
        {
          style: { spacing: { padding: CELL_PADDING } },
          layout: {
            type: "flex",
            justifyContent: "space-between",
            verticalAlignment: "center",
          },
        },
        [
          [
            "core/group",
            { layout: { type: "constrained" } },
            [
              [
                "core/heading",
                {
                  level: 3,
                  content: __("Basic Plan", "yaycommerce-blocks-for-shadcn-ui"),
                  fontSize: "2-xl",
                },
              ],
              [
                "core/paragraph",
                {
                  content: __(
                    "Ideal for individuals getting started. No credit card required.",
                    "yaycommerce-blocks-for-shadcn-ui"
                  ),
                  textColor: "muted-foreground",
                },
              ],
            ],
          ],
          [
            "core/group",
            { layout: { type: "flex", verticalAlignment: "center" } },
            [
              [
                "shadcn/pricing-price",
                {
                  prices: [{ key: "monthly", amount: "0", period: "" }],
                  currencyPlacement: "superscript",
                },
              ],
              [
                "core/buttons",
                {},
                [
                  [
                    "core/button",
                    {
                      className: "is-style-outline",
                      text: __("Start for Free", "yaycommerce-blocks-for-shadcn-ui"),
                    },
                  ],
                ],
              ],
            ],
          ],
        ],
      ],
    ],
  ],
];

/**
 * Edit component.
 *
 * The preview selector lives here rather than on the switch block: this is the
 * block that owns the interval, and each price is its own component, so a
 * scoped style rule keyed on this block's instance id is what reveals one
 * interval across all of them at once.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit({ attributes, setAttributes }) {
  const { intervals, defaultInterval } = attributes;

  const list = intervals || [];
  const fallback = list.length ? list[0].key : "";
  const [preview, setPreview] = useState(defaultInterval || fallback);

  // A removed interval can leave the preview pointing at nothing.
  const active = list.some((interval) => interval.key === preview)
    ? preview
    : fallback;

  const blockProps = useBlockProps({
    className: "wp-block-shadcn-pricing",
  });

  // Scope the preview rule to whatever id the editor actually put on the
  // wrapper. Passing an id of our own into useBlockProps does not survive —
  // the editor overwrites it with `block-<clientId>` — so read it back out
  // rather than assuming either value.
  const scope = blockProps.id ? `#${blockProps.id}` : ".wp-block-shadcn-pricing";

  /**
   * Replace one interval, keeping its key in step with a renamed label while
   * the key is still auto-derived.
   *
   * @param {number} index Position in the list.
   * @param {string} label New label.
   */
  const renameInterval = (index, label) => {
    const next = list.map((interval, i) =>
      i === index
        ? { key: toKey(label) || interval.key, label }
        : interval
    );
    setAttributes({ intervals: next });
  };

  const addInterval = () => {
    const label = sprintf(
      /* translators: %d: position of the new billing interval. */
      __("Interval %d", "yaycommerce-blocks-for-shadcn-ui"),
      list.length + 1
    );
    setAttributes({
      intervals: [...list, { key: toKey(label), label }],
    });
  };

  const removeInterval = (index) => {
    setAttributes({ intervals: list.filter((_, i) => i !== index) });
  };

  return (
    <>
      <BlockControls>
        <ToolbarGroup>
          {list.map((interval) => (
            <ToolbarButton
              key={interval.key}
              label={sprintf(
                /* translators: %s: billing interval label. */
                __("Preview %s prices", "yaycommerce-blocks-for-shadcn-ui"),
                interval.label || interval.key
              )}
              isPressed={interval.key === active}
              onClick={() => setPreview(interval.key)}
            >
              {interval.label || interval.key}
            </ToolbarButton>
          ))}
        </ToolbarGroup>
      </BlockControls>

      <InspectorControls>
        <PanelBody title={__("Billing intervals", "yaycommerce-blocks-for-shadcn-ui")}>
          {list.map((interval, index) => (
            <div
              key={index}
              className="wp-block-shadcn-pricing__interval-row"
            >
              <TextControl
                __next40pxDefaultSize
                __nextHasNoMarginBottom
                label={sprintf(
                  /* translators: %d: position in the interval list. */
                  __("Interval %d", "yaycommerce-blocks-for-shadcn-ui"),
                  index + 1
                )}
                value={interval.label || ""}
                onChange={(value) => renameInterval(index, value)}
              />
              <Button
                size="small"
                variant="tertiary"
                isDestructive
                disabled={list.length < 2}
                onClick={() => removeInterval(index)}
              >
                {__("Remove", "yaycommerce-blocks-for-shadcn-ui")}
              </Button>
            </div>
          ))}

          <Button variant="secondary" onClick={addInterval}>
            {__("Add interval", "yaycommerce-blocks-for-shadcn-ui")}
          </Button>
        </PanelBody>

        <PanelBody title={__("Settings", "yaycommerce-blocks-for-shadcn-ui")}>
          <p>{__("Shown first to visitors", "yaycommerce-blocks-for-shadcn-ui")}</p>
          {list.map((interval) => (
            <Button
              key={interval.key}
              variant={
                interval.key === (defaultInterval || fallback)
                  ? "primary"
                  : "secondary"
              }
              onClick={() => setAttributes({ defaultInterval: interval.key })}
            >
              {interval.label || interval.key}
            </Button>
          ))}
        </PanelBody>
      </InspectorControls>

      <div {...blockProps}>
        {/* Reveal only the previewed interval, and mark it on the switch
            stand-in. Both rules have to name the key literally, which is why
            they are generated per block rather than living in editor.scss.
            Figures priced on a single interval opt out, so they never blank
            when another interval is chosen.

            The highlight values mirror `.is-active` in the switch styles. */}
        <style>
          {`
${scope} .wp-block-shadcn-pricing-price__figure:not([data-interval-key="${active}"]):not([data-interval-only]) { display: none; }
${scope} .wp-block-shadcn-pricing-switch__option[data-interval-key="${active}"] {
  background: var(--wp--preset--color--background, #fff);
  color: var(--wp--preset--color--foreground, #0a0a0a);
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
}
${scope} .wp-block-shadcn-pricing-switch__label[data-interval-key="${active}"] {
  color: var(--wp--preset--color--foreground, #0a0a0a);
}
`}
        </style>
        <InnerBlocks template={TEMPLATE} templateLock={false} />
      </div>
    </>
  );
}
