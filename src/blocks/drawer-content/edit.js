/**
 * WordPress dependencies
 */
import { useBlockProps, InnerBlocks } from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";

/**
 * Drawer content template.
 */
const TEMPLATE = [
  [
    "core/paragraph",
    {
      content: __(
        "You can control this drawer from outside components or trigger it programmatically based on user actions or application state.",
        "shadcn-blocks"
      ),
      placeholder: __("Add drawer content here...", "shadcn-blocks"),
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
    className: "wp-block-shadcn-drawer-content",
  });

  return (
    <div {...blockProps}>
      <InnerBlocks template={TEMPLATE} templateLock={false} />
    </div>
  );
}
