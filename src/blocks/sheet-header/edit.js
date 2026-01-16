/**
 * WordPress dependencies
 */
import { useBlockProps, InnerBlocks } from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";

/**
 * Sheet header template.
 */
const TEMPLATE = [
  [
    "core/heading",
    {
      level: 3,
      placeholder: __("Sheet Title", "wpshadcn-blocks"),
      style: {
        typography: {
          fontWeight: "600",
        },
        spacing: {
          margin: {
            top: "0",
            bottom: "0",
          },
        },
      },
    },
  ],
  [
    "core/paragraph",
    {
      placeholder: __("Sheet description", "wpshadcn-blocks"),
      style: {
        typography: {
          fontSize: "var(--wp--preset--font-size--sm)",
        },
        color: {
          text: "var(--wp--preset--color--muted-foreground)",
        },
        spacing: {
          margin: {
            top: "0",
            bottom: "0",
          },
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
    className: "wp-block-wpshadcn-sheet-header",
  });

  return (
    <div {...blockProps}>
      <InnerBlocks template={TEMPLATE} templateLock={false} />
    </div>
  );
}
