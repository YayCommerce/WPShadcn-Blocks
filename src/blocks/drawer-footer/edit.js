/**
 * WordPress dependencies
 */
import { useBlockProps, InnerBlocks } from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";

/**
 * Drawer footer template.
 */
const TEMPLATE = [
  [
    "core/buttons",
    {
      layout: {
        type: "flex",
        justifyContent: "flex-end",
      },
      style: {
        spacing: {
          blockGap: "var(--wp--preset--spacing--3)",
        },
      },
    },
    [
      [
        "core/button",
        {
          text: __("Cancel", "wpshadcn-blocks"),
          className: "is-style-outline",
        },
      ],
      [
        "core/button",
        {
          text: __("Submit", "wpshadcn-blocks"),
        },
      ],
    ],
  ],
];

/**
 * Edit component.
 *
 * @return {Element} Block edit element.
 */
export default function Edit() {
  const blockProps = useBlockProps({
    className: "wp-block-wpshadcn-drawer-footer",
  });

  return (
    <div {...blockProps}>
      <InnerBlocks template={TEMPLATE} templateLock={false} />
    </div>
  );
}
