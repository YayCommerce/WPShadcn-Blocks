/**
 * WordPress dependencies
 */
import { useBlockProps, InnerBlocks } from "@wordpress/block-editor";

/**
 * Drawer block template.
 */
const TEMPLATE = [
  ["wpshadcn/drawer-trigger", {}],
  ["wpshadcn/drawer-header", {}],
  ["wpshadcn/drawer-content", {}],
  ["wpshadcn/drawer-footer", {}],
];

/**
 * Allowed inner blocks.
 */
const ALLOWED_BLOCKS = [
  "wpshadcn/drawer-trigger",
  "wpshadcn/drawer-header",
  "wpshadcn/drawer-content",
  "wpshadcn/drawer-footer",
];

/**
 * Edit component.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit(props) {
  const blockProps = useBlockProps({
    className: "wp-block-wpshadcn-drawer",
  });

  return (
    <div {...blockProps}>
      <InnerBlocks
        template={TEMPLATE}
        allowedBlocks={ALLOWED_BLOCKS}
        templateLock={false}
      />
    </div>
  );
}
