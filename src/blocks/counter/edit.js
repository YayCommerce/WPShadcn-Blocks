/**
 * WordPress dependencies
 */
import { InspectorControls, useBlockProps } from "@wordpress/block-editor";
import {
  PanelBody,
  RangeControl,
  TextControl,
  ToggleControl,
  __experimentalNumberControl as NumberControl,
} from "@wordpress/components";
import { __ } from "@wordpress/i18n";

/**
 * Format a value the same way render.php and view.js do, so the editor preview
 * matches the frontend.
 *
 * @param {number}  value     Value to format.
 * @param {number}  decimals  Decimal places.
 * @param {boolean} separator Whether to group thousands with a comma.
 * @return {string} Formatted number.
 */
function formatValue(value, decimals, separator) {
  const fixed = Number(value).toFixed(decimals);

  if (!separator) {
    return fixed;
  }

  const [integer, fraction] = fixed.split(".");
  const grouped = integer.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

  return fraction ? `${grouped}.${fraction}` : grouped;
}

/**
 * Edit component.
 *
 * The editor shows the final value: the count-up only runs on the frontend so
 * the number does not jitter while the post is being written.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit({ attributes, setAttributes }) {
  const { startValue, endValue, duration, decimals, separator, suffix } =
    attributes;

  const blockProps = useBlockProps({
    className: "wp-block-shadcn-counter",
  });

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Counter Settings", "yaycommerce-blocks-for-shadcn-ui")}>
          <NumberControl
            __next40pxDefaultSize
            label={__("Start value", "yaycommerce-blocks-for-shadcn-ui")}
            value={startValue}
            onChange={(value) =>
              setAttributes({ startValue: parseFloat(value) || 0 })
            }
          />
          <NumberControl
            __next40pxDefaultSize
            label={__("End value", "yaycommerce-blocks-for-shadcn-ui")}
            value={endValue}
            onChange={(value) =>
              setAttributes({ endValue: parseFloat(value) || 0 })
            }
          />
          <RangeControl
            __next40pxDefaultSize
            label={__("Duration (ms)", "yaycommerce-blocks-for-shadcn-ui")}
            value={duration}
            onChange={(value) => setAttributes({ duration: value ?? 2000 })}
            min={0}
            max={10000}
            step={100}
            help={__("Set to 0 to show the end value right away.", "yaycommerce-blocks-for-shadcn-ui")}
          />
          <RangeControl
            __next40pxDefaultSize
            label={__("Decimals", "yaycommerce-blocks-for-shadcn-ui")}
            value={decimals}
            onChange={(value) => setAttributes({ decimals: value ?? 0 })}
            min={0}
            max={4}
            step={1}
          />
          <ToggleControl
            label={__("Group thousands", "yaycommerce-blocks-for-shadcn-ui")}
            checked={separator}
            help={__("Show 1,000 instead of 1000.", "yaycommerce-blocks-for-shadcn-ui")}
            onChange={(value) => setAttributes({ separator: value })}
          />
          <TextControl
            __next40pxDefaultSize
            label={__("Suffix", "yaycommerce-blocks-for-shadcn-ui")}
            value={suffix}
            help={__(
              "Text after the number, such as +, %, K or M. It stays put while the number counts.",
              "yaycommerce-blocks-for-shadcn-ui"
            )}
            onChange={(value) => setAttributes({ suffix: value })}
          />
        </PanelBody>
      </InspectorControls>
      <div {...blockProps}>
        <span className="counter-value">
          {formatValue(endValue, decimals, separator)}
        </span>
        {suffix && <span className="counter-suffix">{suffix}</span>}
      </div>
    </>
  );
}
