/**
 * WordPress dependencies
 */
import {
  useBlockProps,
  InnerBlocks,
  InspectorControls,
} from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";
import {
  ToggleControl,
  __experimentalToggleGroupControl as ToggleGroupControl,
  __experimentalToggleGroupControlOption as ToggleGroupControlOption,
  __experimentalToolsPanel as ToolsPanel,
  __experimentalToolsPanelItem as ToolsPanelItem,
} from "@wordpress/components";

/**
 * Sheet block template.
 */
const TEMPLATE = [
  ["shadcn/sheet-trigger", {}],
  ["shadcn/sheet-header", {}],
  ["shadcn/sheet-content", {}],
  ["shadcn/sheet-footer", {}],
];

/**
 * Allowed inner blocks.
 */
const ALLOWED_BLOCKS = [
  "shadcn/sheet-trigger",
  "shadcn/sheet-header",
  "shadcn/sheet-content",
  "shadcn/sheet-footer",
];

/**
 * Edit component.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit(props) {
  const { attributes, setAttributes } = props;
  const { dismissible, direction } = attributes;
  const blockProps = useBlockProps({
    className: "wp-block-shadcn-sheet",
  });

  return (
    <>
      <InspectorControls key="setting">
        <ToolsPanel
          label={__("Settings", "yaycommerce-blocks-for-shadcn-ui")}
          resetAll={() => {
            setAttributes({
              dismissible: false,
              direction: "bottom",
            });
          }}
        >
          <ToolsPanelItem
            label={__("Dismissible", "yaycommerce-blocks-for-shadcn-ui")}
            isShownByDefault
            hasValue={() => !!dismissible}
            onDeselect={() => setAttributes({ dismissible: false })}
          >
            <ToggleControl
              isBlock
              label={__("Dismissible", "yaycommerce-blocks-for-shadcn-ui")}
              onChange={(value) => {
                setAttributes({
                  dismissible: value,
                });
              }}
              checked={dismissible ?? false}
              help={__(
                "Allow users to dismiss the sheet by clicking outside or using a close button.",
                "yaycommerce-blocks-for-shadcn-ui"
              )}
            />
          </ToolsPanelItem>

          <ToolsPanelItem
            label={__("Direction", "yaycommerce-blocks-for-shadcn-ui")}
            isShownByDefault
            hasValue={() => direction !== "bottom"}
            onDeselect={() => setAttributes({ direction: "bottom" })}
          >
            <ToggleGroupControl
              __next40pxDefaultSize
              isBlock
              label={__("Direction", "yaycommerce-blocks-for-shadcn-ui")}
              value={direction ?? "bottom"}
              onChange={(value) => {
                setAttributes({ direction: value });
              }}
            >
              <ToggleGroupControlOption
                label={__("Bottom", "yaycommerce-blocks-for-shadcn-ui")}
                value="bottom"
              />
              <ToggleGroupControlOption
                label={__("Top", "yaycommerce-blocks-for-shadcn-ui")}
                value="top"
              />
              <ToggleGroupControlOption
                label={__("Left", "yaycommerce-blocks-for-shadcn-ui")}
                value="left"
              />
              <ToggleGroupControlOption
                label={__("Right", "yaycommerce-blocks-for-shadcn-ui")}
                value="right"
              />
            </ToggleGroupControl>
          </ToolsPanelItem>
        </ToolsPanel>
      </InspectorControls>
      <div {...blockProps}>
        <InnerBlocks
          template={TEMPLATE}
          allowedBlocks={ALLOWED_BLOCKS}
          templateLock={false}
        />
      </div>
    </>
  );
}
