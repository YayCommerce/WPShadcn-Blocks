/**
 * WordPress dependencies
 */
import { useBlockProps, InnerBlocks } from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";

/**
 * Tooltip trigger template.
 */
const TEMPLATE = [
  [
    "core/button",
    {
      text: __("Hover", "yaycommerce-blocks-for-shadcn-ui"),
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
    className: "wp-block-shadcn-tooltip-trigger",
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
