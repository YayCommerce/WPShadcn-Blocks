/**
 * WordPress dependencies
 */
import { useBlockProps, InnerBlocks } from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";

/**
 * Sheet footer template.
 */
const TEMPLATE = [
  [
    "core/buttons",
    {
      layout: {
        type: "flex",
        flexWrap: "nowrap",
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
          text: __("Save changes", "wpshadcn-blocks"),
          style: {
            spacing: {
              padding: {
                top: 8,
                right: 16,
                bottom: 8,
                left: 16,
              },
            },
            typography: {
              fontSize: 14,
            },
          },
        },
      ],
      [
        "core/button",
        {
          text: __("Close", "wpshadcn-blocks"),
          className: "is-style-outline",
          style: {
            spacing: {
              padding: {
                top: 8,
                right: 16,
                bottom: 8,
                left: 16,
              },
            },
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
    className: "wp-block-wpshadcn-sheet-footer",
  });

  return (
    <div {...blockProps}>
      <InnerBlocks template={TEMPLATE} templateLock={false} />
    </div>
  );
}
