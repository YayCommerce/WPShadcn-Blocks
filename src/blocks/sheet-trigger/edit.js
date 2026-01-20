/**
 * WordPress dependencies
 */
import { useBlockProps, InnerBlocks } from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";

/**
 * Sheet trigger template.
 */
const TEMPLATE = [
  [
    "core/button",
    {
      text: __("Open Sheet", "shadcn-blocks"),
      className: "is-style-outline",
      style: {
        typography: {
          fontSize: 14,
        },
      },
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
    className: "wp-block-shadcn-sheet-trigger",
  });

  return (
    <div {...blockProps}>
      <InnerBlocks
        template={TEMPLATE}
        allowedBlocks={["core/button", "core/buttons"]}
        templateLock={false}
      />
    </div>
  );
}
