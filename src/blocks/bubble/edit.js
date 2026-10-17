/**
 * WordPress dependencies
 */
import {
  InnerBlocks,
  InspectorControls,
  useBlockProps,
} from "@wordpress/block-editor";
import { PanelBody, SelectControl } from "@wordpress/components";
import { __ } from "@wordpress/i18n";

/**
 * Variant options shared with render.php class names.
 */
const VARIANT_OPTIONS = [
  { label: __("Default", "yaycommerce-blocks-for-shadcn-ui"), value: "default" },
  { label: __("Secondary", "yaycommerce-blocks-for-shadcn-ui"), value: "secondary" },
  { label: __("Muted", "yaycommerce-blocks-for-shadcn-ui"), value: "muted" },
  { label: __("Tinted", "yaycommerce-blocks-for-shadcn-ui"), value: "tinted" },
  { label: __("Outline", "yaycommerce-blocks-for-shadcn-ui"), value: "outline" },
  { label: __("Ghost", "yaycommerce-blocks-for-shadcn-ui"), value: "ghost" },
  { label: __("Destructive", "yaycommerce-blocks-for-shadcn-ui"), value: "destructive" },
];

/**
 * Alignment options. Empty value inherits the parent Bubble Group default.
 */
const ALIGN_OPTIONS = [
  { label: __("Inherit from group", "yaycommerce-blocks-for-shadcn-ui"), value: "" },
  { label: __("Start (left)", "yaycommerce-blocks-for-shadcn-ui"), value: "start" },
  { label: __("End (right)", "yaycommerce-blocks-for-shadcn-ui"), value: "end" },
];

/**
 * Bubble inner content template.
 */
const TEMPLATE = [
  ["core/paragraph", { placeholder: __("Type a message…", "yaycommerce-blocks-for-shadcn-ui") }],
];

/**
 * Only paragraphs are allowed inside a bubble.
 */
const ALLOWED_BLOCKS = ["core/paragraph"];

/**
 * Edit component.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit({ attributes, setAttributes, context }) {
  const { variant, align } = attributes;

  // Resolve the same way render.php does so editor and frontend classes match.
  const resolvedVariant = variant || "default";
  // Own align wins; otherwise inherit the group's default; otherwise "start".
  const resolvedAlign = align || context["shadcn/bubble-align"] || "start";

  const blockProps = useBlockProps({
    className: `wp-block-shadcn-bubble bubble bubble-${resolvedVariant} bubble-align-${resolvedAlign}`,
  });

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Bubble Settings", "yaycommerce-blocks-for-shadcn-ui")}>
          <SelectControl
            label={__("Variant", "yaycommerce-blocks-for-shadcn-ui")}
            value={variant}
            options={VARIANT_OPTIONS}
            onChange={(value) => setAttributes({ variant: value })}
          />
          <SelectControl
            label={__("Alignment", "yaycommerce-blocks-for-shadcn-ui")}
            value={align}
            options={ALIGN_OPTIONS}
            help={__(
              "Start is the receiver side, End is the sender side. Inherit uses the Bubble Group default.",
              "yaycommerce-blocks-for-shadcn-ui"
            )}
            onChange={(value) => setAttributes({ align: value })}
          />
        </PanelBody>
      </InspectorControls>
      <div {...blockProps}>
        <InnerBlocks
          template={TEMPLATE}
          allowedBlocks={ALLOWED_BLOCKS}
          templateLock={false}
        />
      </div>
    </>
  );
}
