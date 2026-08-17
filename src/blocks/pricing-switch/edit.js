/**
 * WordPress dependencies
 */
import { InspectorControls, useBlockProps } from "@wordpress/block-editor";
import {
  PanelBody,
  Notice,
  __experimentalToggleGroupControl as ToggleGroupControl,
  __experimentalToggleGroupControlOption as ToggleGroupControlOption,
} from "@wordpress/components";
import { __ } from "@wordpress/i18n";

/**
 * Edit component.
 *
 * Labels come from the intervals declared on the parent Pricing block, so
 * this block has no copy of its own to drift out of sync.
 *
 * The control is drawn but inert: flipping the preview is the parent's
 * toolbar, since that is the block that owns the interval every price reads.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit({ attributes, setAttributes, context }) {
  const { variant, justification } = attributes;

  const intervals = context["shadcn/intervals"] || [];
  // A toggle cannot express three or more choices.
  const effective = "switch" === variant && 2 === intervals.length
    ? "switch"
    : "segmented";

  const blockProps = useBlockProps({
    className: `wp-block-shadcn-pricing-switch is-${effective} is-justified-${
      justification || "center"
    }`,
  });

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Switch", "shadcn-blocks")}>
          {intervals.length < 2 && (
            <Notice status="warning" isDismissible={false}>
              {__(
                "Add at least two billing intervals on the Pricing block for this to render.",
                "shadcn-blocks"
              )}
            </Notice>
          )}

          <ToggleGroupControl
            __next40pxDefaultSize
            __nextHasNoMarginBottom
            isBlock
            label={__("Style", "shadcn-blocks")}
            help={
              "switch" === variant && 2 !== intervals.length
                ? __(
                    "Shown as a segmented control because there are not exactly two intervals.",
                    "shadcn-blocks"
                  )
                : undefined
            }
            value={variant || "switch"}
            onChange={(value) => setAttributes({ variant: value })}
          >
            <ToggleGroupControlOption
              label={__("Toggle", "shadcn-blocks")}
              value="switch"
            />
            <ToggleGroupControlOption
              label={__("Segmented", "shadcn-blocks")}
              value="segmented"
            />
          </ToggleGroupControl>

          <ToggleGroupControl
            __next40pxDefaultSize
            __nextHasNoMarginBottom
            isBlock
            label={__("Alignment", "shadcn-blocks")}
            value={justification || "center"}
            onChange={(value) => setAttributes({ justification: value })}
          >
            <ToggleGroupControlOption
              label={__("Left", "shadcn-blocks")}
              value="left"
            />
            <ToggleGroupControlOption
              label={__("Center", "shadcn-blocks")}
              value="center"
            />
            <ToggleGroupControlOption
              label={__("Right", "shadcn-blocks")}
              value="right"
            />
          </ToggleGroupControl>
        </PanelBody>
      </InspectorControls>

      <div {...blockProps}>
        {"switch" === effective ? (
          <>
            <span
              className="wp-block-shadcn-pricing-switch__label"
              data-interval-key={intervals[0].key}
            >
              {intervals[0].label}
            </span>
            <span className="wp-block-shadcn-pricing-switch__control">
              <span
                className="wp-block-shadcn-pricing-switch__thumb"
                aria-hidden="true"
              ></span>
            </span>
            <span
              className="wp-block-shadcn-pricing-switch__label"
              data-interval-key={intervals[1].key}
            >
              {intervals[1].label}
            </span>
          </>
        ) : (
          <span className="wp-block-shadcn-pricing-switch__group">
            {intervals.map((interval) => (
              <span
                key={interval.key}
                className="wp-block-shadcn-pricing-switch__option"
                data-interval-key={interval.key}
              >
                {interval.label}
              </span>
            ))}
          </span>
        )}
      </div>
    </>
  );
}
