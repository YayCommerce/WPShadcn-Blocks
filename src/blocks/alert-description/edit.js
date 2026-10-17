/**
 * WordPress dependencies
 */
import { useBlockProps, InnerBlocks } from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";

/**
 * Alert description template.
 */
const TEMPLATE = [
  [
    "core/paragraph",
    {
      placeholder: __(
        "Add alert description here...",
        "yaycommerce-blocks-for-shadcn-ui"
      ),
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
    className: "wp-block-shadcn-alert-description alert-description",
  });

  return (
    <div {...blockProps}>
      <InnerBlocks template={TEMPLATE} templateLock={false} />
    </div>
  );
}
