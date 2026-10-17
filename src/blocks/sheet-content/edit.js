/**
 * WordPress dependencies
 */
import { useBlockProps, InnerBlocks } from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";

/**
 * Sheet content template.
 */
const TEMPLATE = [
  [
    "core/paragraph",
    {
      content: __(
        "You can control this sheet from outside components or trigger it programmatically based on user actions or application state.",
        "yaycommerce-blocks-for-shadcn-ui"
      ),
      placeholder: __("Add sheet content here...", "yaycommerce-blocks-for-shadcn-ui"),
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
    className: "wp-block-shadcn-sheet-content",
  });

  return (
    <div {...blockProps}>
      <InnerBlocks template={TEMPLATE} templateLock={false} />
    </div>
  );
}
