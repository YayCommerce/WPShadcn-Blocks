/**
 * WordPress dependencies
 */
import {
  InspectorControls,
  useBlockProps,
  useInnerBlocksProps,
} from "@wordpress/block-editor";
import { PanelBody, SelectControl } from "@wordpress/components";
import { __ } from "@wordpress/i18n";

/**
 * Default alignment options for the group (the shared sender side). Unset
 * inherits an outer group's side, or "start" at the top level.
 */
const ALIGN_OPTIONS = [
  { label: __("Inherit (start at top level)", "yaycommerce-blocks-for-shadcn-ui"), value: "" },
  { label: __("Start (left)", "yaycommerce-blocks-for-shadcn-ui"), value: "start" },
  { label: __("End (right)", "yaycommerce-blocks-for-shadcn-ui"), value: "end" },
];

/**
 * Allowed inner blocks. A nested group stacks consecutive messages from the
 * same sender tighter than the conversation around them.
 */
const ALLOWED_BLOCKS = ["shadcn/message", "shadcn/message-group"];

/**
 * Resolve a block-gap value to CSS, mirroring render.php.
 *
 * Core only turns `blockGap` into CSS for blocks with layout support, so the
 * editor publishes the same custom property the frontend does.
 *
 * @param {string|Object} blockGap Raw blockGap attribute value.
 * @return {string} A CSS length, or '' when unset or unrecognised.
 */
function resolveGroupGap(blockGap) {
  const raw = (typeof blockGap === "object" && null !== blockGap ? blockGap?.top : blockGap) || "";
  const preset = /^var:preset\|spacing\|([A-Za-z0-9-]+)$/.exec(raw.trim());

  if (preset) {
    return `var(--wp--preset--spacing--${preset[1]})`;
  }

  return /^(0|[0-9]+(\.[0-9]+)?(px|rem|em|vh|vw|%))$/.test(raw.trim()) ? raw.trim() : "";
}

/**
 * Default conversation: a received message with a sender name, then a sent
 * message with a delivery status.
 */
const TEMPLATE = [
  [
    "shadcn/message",
    { variant: "muted", align: "start", fallback: "OL", header: __("Olivia", "yaycommerce-blocks-for-shadcn-ui") },
    [["core/paragraph", { content: __("Hey! Is the theme ready?", "yaycommerce-blocks-for-shadcn-ui") }]],
  ],
  [
    "shadcn/message",
    { variant: "default", align: "end", fallback: "ME", footer: __("Delivered", "yaycommerce-blocks-for-shadcn-ui") },
    [["core/paragraph", { content: __("Yep — shipping today.", "yaycommerce-blocks-for-shadcn-ui") }]],
  ],
];

/**
 * Edit component.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit({ attributes, setAttributes }) {
  const { align } = attributes;

  // Always set, so a nested group doesn't inherit its parent's gap: gap-2 by default.
  const groupGap =
    resolveGroupGap(attributes.style?.spacing?.blockGap) || "calc(var(--spacing, 0.25rem) * 2)";

  const blockProps = useBlockProps({
    className: "wp-block-shadcn-message-group shadcn-message-group",
    style: { "--shadcn-message-group-gap": groupGap },
  });

  // useInnerBlocksProps places messages as direct flex children so the group's
  // column layout applies in the editor (bubble-group precedent).
  const innerBlocksProps = useInnerBlocksProps(blockProps, {
    template: TEMPLATE,
    allowedBlocks: ALLOWED_BLOCKS,
    templateLock: false,
    orientation: "vertical",
  });

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Message Group Settings", "yaycommerce-blocks-for-shadcn-ui")}>
          <SelectControl
            label={__("Default alignment", "yaycommerce-blocks-for-shadcn-ui")}
            value={align || ""}
            options={ALIGN_OPTIONS}
            help={__(
              "Messages set to inherit use this side. Individual messages can override it. A nested group left on Inherit follows its outer group.",
              "yaycommerce-blocks-for-shadcn-ui"
            )}
            onChange={(value) => setAttributes({ align: value || undefined })}
          />
        </PanelBody>
      </InspectorControls>
      <div {...innerBlocksProps} />
    </>
  );
}
