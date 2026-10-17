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
 * Default alignment options for the group (the shared sender side).
 */
const ALIGN_OPTIONS = [
  { label: __("Start (left)", "yaycommerce-blocks-for-shadcn-ui"), value: "start" },
  { label: __("End (right)", "yaycommerce-blocks-for-shadcn-ui"), value: "end" },
];

/**
 * Allowed inner blocks.
 */
const ALLOWED_BLOCKS = ["shadcn/bubble"];

/**
 * Default chat mockup: alternating received/sent bubbles.
 */
const TEMPLATE = [
  [
    "shadcn/bubble",
    { variant: "muted", align: "start" },
    [["core/paragraph", { content: __("Hey! Is the theme ready?", "yaycommerce-blocks-for-shadcn-ui") }]],
  ],
  [
    "shadcn/bubble",
    { variant: "default", align: "end" },
    [["core/paragraph", { content: __("Yep — shipping today.", "yaycommerce-blocks-for-shadcn-ui") }]],
  ],
  [
    "shadcn/bubble",
    { variant: "muted", align: "start" },
    [["core/paragraph", { content: __("Amazing 🎉", "yaycommerce-blocks-for-shadcn-ui") }]],
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

  const blockProps = useBlockProps({
    className: "wp-block-shadcn-bubble-group shadcn-bubble-group",
  });

  // useInnerBlocksProps places bubbles as direct flex children so the group's
  // column layout applies in the editor (avatar-group precedent).
  const innerBlocksProps = useInnerBlocksProps(blockProps, {
    template: TEMPLATE,
    allowedBlocks: ALLOWED_BLOCKS,
    templateLock: false,
    orientation: "vertical",
  });

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Bubble Group Settings", "yaycommerce-blocks-for-shadcn-ui")}>
          <SelectControl
            label={__("Default alignment", "yaycommerce-blocks-for-shadcn-ui")}
            value={align}
            options={ALIGN_OPTIONS}
            help={__(
              "Bubbles set to inherit use this side. Individual bubbles can override it.",
              "yaycommerce-blocks-for-shadcn-ui"
            )}
            onChange={(value) => setAttributes({ align: value })}
          />
        </PanelBody>
      </InspectorControls>
      <div {...innerBlocksProps} />
    </>
  );
}
