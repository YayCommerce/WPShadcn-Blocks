/**
 * WordPress dependencies
 */
import {
  InspectorControls,
  useBlockProps,
  useInnerBlocksProps,
} from "@wordpress/block-editor";
import { PanelBody, TextControl } from "@wordpress/components";
import { __ } from "@wordpress/i18n";

/**
 * Allowed inner blocks.
 */
const ALLOWED_BLOCKS = ["shadcn/attachment"];

/**
 * Default row: a document, a spreadsheet and a code file, as in the shadcn
 * Group example.
 */
const TEMPLATE = [
  ["shadcn/attachment", { title: "briefing-notes.pdf", description: "PDF · 1.4 MB", iconName: "file-text" }],
  ["shadcn/attachment", { title: "customers.csv", description: "CSV · 18 KB", iconName: "file-spreadsheet" }],
  ["shadcn/attachment", { title: "renderer.tsx", description: "TSX · 12 KB", iconName: "file-code" }],
];

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
  const raw = ((typeof blockGap === "object" && null !== blockGap ? blockGap.left || blockGap.top : blockGap) || "").trim();
  const preset = /^var:preset\|spacing\|([A-Za-z0-9-]+)$/.exec(raw);

  if (preset) {
    return `var(--wp--preset--spacing--${preset[1]})`;
  }

  return /^(0|[0-9]+(\.[0-9]+)?(px|rem|em|vh|vw|%))$/.test(raw) ? raw : "";
}

/**
 * Edit component.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit({ attributes, setAttributes }) {
  const { label } = attributes;

  // Always set, so a nested group doesn't inherit its parent's gap: gap-3 by default.
  const groupGap =
    resolveGroupGap(attributes.style?.spacing?.blockGap) || "calc(var(--spacing, 0.25rem) * 3)";

  const blockProps = useBlockProps({
    className: "wp-block-shadcn-attachment-group shadcn-attachment-group",
    style: { "--shadcn-attachment-group-gap": groupGap },
  });

  // useInnerBlocksProps places attachments as direct flex children so the
  // group's row layout applies in the editor (message-group precedent).
  const innerBlocksProps = useInnerBlocksProps(blockProps, {
    template: TEMPLATE,
    allowedBlocks: ALLOWED_BLOCKS,
    templateLock: false,
    orientation: "horizontal",
  });

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Attachment Group Settings", "yaycommerce-blocks-for-shadcn-ui")}>
          <TextControl
            label={__("Accessible label", "yaycommerce-blocks-for-shadcn-ui")}
            value={label}
            placeholder={__("Attachments", "yaycommerce-blocks-for-shadcn-ui")}
            help={__(
              "Read by screen readers for the scrollable row.",
              "yaycommerce-blocks-for-shadcn-ui"
            )}
            onChange={(value) => setAttributes({ label: value })}
          />
        </PanelBody>
      </InspectorControls>
      <div {...innerBlocksProps} />
    </>
  );
}
