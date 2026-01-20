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
          text: __("Cancel", "shadcn-blocks"),
          className: "is-style-outline",
          style: {
            typography: {
              fontSize: 14,
            },
          },
        },
      ],
      [
        "core/button",
        {
          text: __("Submit", "shadcn-blocks"),
          style: {
            spacing: {
              padding: {
                top: 8,
                right: 16,
                bottom: 8,
                left: 16,
              },
            },
            // how to set typo  font size to 14px
            typography: {
              fontSize: 14,
            },
          },
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
    className: "wp-block-shadcn-drawer-footer",
  });

  return (
    <div {...blockProps}>
      <InnerBlocks template={TEMPLATE} templateLock={false} />
    </div>
  );
}
