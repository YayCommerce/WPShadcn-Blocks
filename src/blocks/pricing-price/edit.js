/**
 * WordPress dependencies
 */
import { InspectorControls, useBlockProps } from "@wordpress/block-editor";
import {
  PanelBody,
  TextControl,
  __experimentalToggleGroupControl as ToggleGroupControl,
  __experimentalToggleGroupControlOption as ToggleGroupControlOption,
} from "@wordpress/components";
import { __, sprintf } from "@wordpress/i18n";

/**
 * Read one interval's entry out of the saved prices.
 *
 * @param {Array}  prices Saved price entries.
 * @param {string} key    Interval key.
 * @return {Object} The entry, or an empty one.
 */
const entryFor = (prices, key) =>
  (prices || []).find((price) => price && price.key === key) || {
    key,
    amount: "",
    period: "",
  };

/**
 * Edit component.
 *
 * The fields are generated from the intervals the parent Pricing block
 * declares, so adding a period there — quarterly, lifetime — immediately adds
 * a place to price it here.
 *
 * Every priced interval is rendered at once while editing; the parent's
 * toolbar decides which one the preview reveals.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit({ attributes, setAttributes, context }) {
  const { currency, prices, currencyPlacement, periodPlacement } = attributes;

  const intervals = context["shadcn/intervals"] || [];

  const blockProps = useBlockProps({
    className: [
      "wp-block-shadcn-pricing-price",
      `is-currency-${currencyPlacement || "inline"}`,
      `is-period-${periodPlacement || "inline"}`,
    ].join(" "),
  });

  /**
   * Write one field of one interval's entry back into `prices`, keeping the
   * order of the declared intervals so the saved data stays readable.
   *
   * @param {string} key   Interval key.
   * @param {string} field `amount` or `period`.
   * @param {string} value New value.
   */
  const updateEntry = (key, field, value) => {
    const next = intervals.map((interval) => {
      const entry = entryFor(prices, interval.key);
      return interval.key === key ? { ...entry, [field]: value } : entry;
    });

    // Drop entries with no amount so an unpriced interval simply has none.
    setAttributes({ prices: next.filter((entry) => entry.amount !== "") });
  };

  const priced = (prices || []).filter(
    (price) => price && price.amount !== ""
  );
  const single = priced.length === 1;

  const figure = (entry, only) => (
    <span
      key={entry.key}
      className="wp-block-shadcn-pricing-price__figure"
      data-interval-key={entry.key}
      {...(only ? { "data-interval-only": "true" } : {})}
    >
      {currency ? (
        <span className="wp-block-shadcn-pricing-price__currency">
          {currency}
        </span>
      ) : null}
      <span className="wp-block-shadcn-pricing-price__amount">
        {entry.amount || __("0", "yaycommerce-blocks-for-shadcn-ui")}
      </span>
      {entry.period ? (
        <span className="wp-block-shadcn-pricing-price__period">
          {entry.period}
        </span>
      ) : null}
    </span>
  );

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Price", "yaycommerce-blocks-for-shadcn-ui")}>
          <TextControl
            __next40pxDefaultSize
            __nextHasNoMarginBottom
            label={__("Currency", "yaycommerce-blocks-for-shadcn-ui")}
            value={currency || ""}
            onChange={(value) => setAttributes({ currency: value })}
          />

          {intervals.length === 0 && (
            <p>
              {__(
                "The Pricing block around this one has no billing intervals yet.",
                "yaycommerce-blocks-for-shadcn-ui"
              )}
            </p>
          )}

          {intervals.map((interval) => {
            const entry = entryFor(prices, interval.key);
            return (
              <div key={interval.key}>
                <TextControl
                  __next40pxDefaultSize
                  __nextHasNoMarginBottom
                  label={sprintf(
                    /* translators: %s: billing interval label, such as Monthly. */
                    __("%s amount", "yaycommerce-blocks-for-shadcn-ui"),
                    interval.label || interval.key
                  )}
                  help={__(
                    "Leave empty when this plan is not sold on this interval.",
                    "yaycommerce-blocks-for-shadcn-ui"
                  )}
                  value={entry.amount || ""}
                  onChange={(value) =>
                    updateEntry(interval.key, "amount", value)
                  }
                />
                <TextControl
                  __next40pxDefaultSize
                  __nextHasNoMarginBottom
                  label={sprintf(
                    /* translators: %s: billing interval label, such as Monthly. */
                    __("%s caption", "yaycommerce-blocks-for-shadcn-ui"),
                    interval.label || interval.key
                  )}
                  value={entry.period || ""}
                  onChange={(value) =>
                    updateEntry(interval.key, "period", value)
                  }
                />
              </div>
            );
          })}
        </PanelBody>

        <PanelBody title={__("Layout", "yaycommerce-blocks-for-shadcn-ui")} initialOpen={false}>
          <ToggleGroupControl
            __next40pxDefaultSize
            __nextHasNoMarginBottom
            isBlock
            label={__("Currency", "yaycommerce-blocks-for-shadcn-ui")}
            value={currencyPlacement || "inline"}
            onChange={(value) => setAttributes({ currencyPlacement: value })}
          >
            <ToggleGroupControlOption
              label={__("Inline", "yaycommerce-blocks-for-shadcn-ui")}
              value="inline"
            />
            <ToggleGroupControlOption
              label={__("Raised", "yaycommerce-blocks-for-shadcn-ui")}
              value="superscript"
            />
          </ToggleGroupControl>

          <ToggleGroupControl
            __next40pxDefaultSize
            __nextHasNoMarginBottom
            isBlock
            label={__("Caption", "yaycommerce-blocks-for-shadcn-ui")}
            value={periodPlacement || "inline"}
            onChange={(value) => setAttributes({ periodPlacement: value })}
          >
            <ToggleGroupControlOption
              label={__("Beside", "yaycommerce-blocks-for-shadcn-ui")}
              value="inline"
            />
            <ToggleGroupControlOption
              label={__("Below", "yaycommerce-blocks-for-shadcn-ui")}
              value="below"
            />
          </ToggleGroupControl>
        </PanelBody>
      </InspectorControls>

      <p {...blockProps}>
        {priced.length === 0
          ? figure({ key: "", amount: "", period: "" }, true)
          : /* A lone figure is marked so the parent's preview can never hide
               it and leave the price blank — matching how render.php omits
               the binding in the same case. */
            priced.map((entry) => figure(entry, single))}
      </p>
    </>
  );
}
