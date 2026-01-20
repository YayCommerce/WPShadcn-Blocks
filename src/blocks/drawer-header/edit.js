/**
 * WordPress dependencies
 */
import { useBlockProps, InnerBlocks } from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";

/**
 * Drawer header template.
 */
const TEMPLATE = [
  [
    "core/heading",
    {
      level: 3,
      content: __("Controlled Drawer", "shadcn-blocks"),
      placeholder: __("Drawer Title", "shadcn-blocks"),
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
      content: __(
        "This drawer's open state is controlled externally.",
        "shadcn-blocks"
      ),
      placeholder: __("Drawer description", "shadcn-blocks"),
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
    className: "wp-block-shadcn-drawer-header",
  });

  return (
    <div {...blockProps}>
      <InnerBlocks template={TEMPLATE} templateLock={false} />
    </div>
  );
}
