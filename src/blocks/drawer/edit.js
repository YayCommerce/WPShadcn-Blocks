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
 * Drawer block template.
 */
const TEMPLATE = [
  ["shadcn/drawer-trigger", {}],
  ["shadcn/drawer-header", {}],
  ["shadcn/drawer-content", {}],
  ["shadcn/drawer-footer", {}],
];

/**
 * Allowed inner blocks.
 */
const ALLOWED_BLOCKS = [
  "shadcn/drawer-trigger",
  "shadcn/drawer-header",
  "shadcn/drawer-content",
  "shadcn/drawer-footer",
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
    className: "wp-block-shadcn-drawer",
  });

  return (
    <>
      <InspectorControls key="setting">
        <ToolsPanel
          label={__("Settings", "shadcn-blocks")}
          resetAll={() => {
            setAttributes({
              dismissible: false,
              direction: "bottom",
            });
          }}
        >
          <ToolsPanelItem
            label={__("Dismissible", "shadcn-blocks")}
            isShownByDefault
            hasValue={() => !!dismissible}
            onDeselect={() => setAttributes({ dismissible: false })}
          >
            <ToggleControl
              isBlock
              label={__("Dismissible", "shadcn-blocks")}
              onChange={(value) => {
                setAttributes({
                  dismissible: value,
                });
              }}
              checked={dismissible ?? false}
              help={__(
                "Allow users to dismiss the drawer by clicking outside or using a close button.",
                "shadcn-blocks"
              )}
            />
          </ToolsPanelItem>

          <ToolsPanelItem
            label={__("Direction", "shadcn-blocks")}
            isShownByDefault
            hasValue={() => direction !== "bottom"}
            onDeselect={() => setAttributes({ direction: "bottom" })}
          >
            <ToggleGroupControl
              __next40pxDefaultSize
              isBlock
              label={__("Direction", "shadcn-blocks")}
              value={direction ?? "bottom"}
              onChange={(value) => {
                setAttributes({ direction: value });
              }}
            >
              <ToggleGroupControlOption
                label={__("Bottom", "shadcn-blocks")}
                value="bottom"
              />
              <ToggleGroupControlOption
                label={__("Top", "shadcn-blocks")}
                value="top"
              />
              <ToggleGroupControlOption
                label={__("Left", "shadcn-blocks")}
                value="left"
              />
              <ToggleGroupControlOption
                label={__("Right", "shadcn-blocks")}
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
