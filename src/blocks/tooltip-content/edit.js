/**
 * WordPress dependencies
 */
import { useBlockProps, InnerBlocks } from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";

/**
 * Tooltip content template.
 */
const TEMPLATE = [
  [
    "core/paragraph",
    {
      "content": "This is a tooltip content",
      placeholder: __("Add tooltip content here...", "wpshadcn-blocks"),
    },
  ],
];

/**
 * Edit component.
 *
 * @return {Element} Block edit element.
 */
export default function Edit() {
  const blockProps = useBlockProps({
    className: "wp-block-wpshadcn-tooltip-content",
  });

  return (
    <div {...blockProps}>
      <InnerBlocks template={TEMPLATE} templateLock={false} />
    </div>
  );
}
