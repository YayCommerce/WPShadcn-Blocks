/**
 * WordPress dependencies
 */
import { useBlockProps, InnerBlocks } from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";

/**
 * Drawer trigger template.
 */
const TEMPLATE = [
  [
    "core/button",
    {
      text: __("Open Drawer", "wpshadcn-blocks"),
      className: "is-style-primary",
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
    className: "wp-block-wpshadcn-drawer-trigger",
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
