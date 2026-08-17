/**
 * WordPress dependencies
 */
import {
  useBlockProps,
  useInnerBlocksProps,
  RichText,
  InspectorControls,
} from "@wordpress/block-editor";
import {
  ToggleControl,
  __experimentalToolsPanel as ToolsPanel,
  __experimentalToolsPanelItem as ToolsPanelItem,
} from "@wordpress/components";
import { __ } from "@wordpress/i18n";

/**
 * Default panel content.
 */
const TEMPLATE = [
  ["core/paragraph", { placeholder: __("Add content…", "shadcn-blocks") }],
];

/**
 * Edit component.
 *
 * The label is edited here rather than on the parent's trigger row: the
 * attribute belongs to this block, and the parent only mirrors it. Matches
 * how accordion-item owns its own title.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit({ attributes, setAttributes }) {
  const { label, disabled } = attributes;

  const blockProps = useBlockProps({
    className: disabled ? "wp-block-shadcn-tab is-disabled" : "wp-block-shadcn-tab",
  });

  const panelProps = useInnerBlocksProps(
    { className: "wp-block-shadcn-tab__panel" },
    {
      template: TEMPLATE,
      templateLock: false,
    }
  );

  return (
    <>
      <InspectorControls>
        <ToolsPanel
          label={__("Settings", "shadcn-blocks")}
          resetAll={() => setAttributes({ disabled: false })}
        >
          <ToolsPanelItem
            label={__("Disabled", "shadcn-blocks")}
            isShownByDefault
            hasValue={() => !!disabled}
            onDeselect={() => setAttributes({ disabled: false })}
          >
            <ToggleControl
              __nextHasNoMarginBottom
              label={__("Disabled", "shadcn-blocks")}
              help={__(
                "Prevent this tab from being opened.",
                "shadcn-blocks"
              )}
              checked={!!disabled}
              onChange={(value) => setAttributes({ disabled: value })}
            />
          </ToolsPanelItem>
        </ToolsPanel>
      </InspectorControls>

      <div {...blockProps}>
        <RichText
          tagName="span"
          className="wp-block-shadcn-tab__label"
          value={label || ""}
          onChange={(value) => setAttributes({ label: value })}
          placeholder={__("Tab label", "shadcn-blocks")}
          allowedFormats={[]}
        />
        <div {...panelProps} />
      </div>
    </>
  );
}
