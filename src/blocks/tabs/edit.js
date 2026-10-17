/**
 * WordPress dependencies
 */
import {
  useBlockProps,
  useInnerBlocksProps,
  InspectorControls,
  store as blockEditorStore,
} from "@wordpress/block-editor";
import { useSelect } from "@wordpress/data";
import { useInstanceId } from "@wordpress/compose";
import { useState } from "@wordpress/element";
import { __, sprintf } from "@wordpress/i18n";
import {
  SelectControl,
  ToggleControl,
  __experimentalToolsPanel as ToolsPanel,
  __experimentalToolsPanelItem as ToolsPanelItem,
} from "@wordpress/components";

/**
 * Default template: start with two tabs.
 */
const TEMPLATE = [
  ["shadcn/tab", { label: __("Account", "yaycommerce-blocks-for-shadcn-ui") }],
  ["shadcn/tab", { label: __("Password", "yaycommerce-blocks-for-shadcn-ui") }],
];

const ALLOWED_BLOCKS = ["shadcn/tab"];

/**
 * Edit component.
 *
 * The editor mirrors the frontend structure: a real trigger row above the
 * panels. Only the active panel is shown, using a scoped style rule keyed on
 * the block's instance id — inner blocks render themselves, so their
 * visibility cannot be controlled from here any other way.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit({ attributes, setAttributes, clientId }) {
  const { defaultTab, fitted } = attributes;
  const [activeIndex, setActiveIndex] = useState(defaultTab || 0);
  const instanceId = useInstanceId(Edit, "shadcn-tabs");

  // Child labels drive the trigger row and the "Open by default" control.
  const tabs = useSelect(
    (select) => {
      const { getBlocks } = select(blockEditorStore);
      return getBlocks(clientId)
        .filter((block) => "shadcn/tab" === block.name)
        .map((block) => ({
          label: block.attributes.label || "",
          disabled: !!block.attributes.disabled,
        }));
    },
    [clientId]
  );

  // A removed tab can leave the selection past the end of the list.
  const current = activeIndex < tabs.length ? activeIndex : 0;

  const blockProps = useBlockProps({
    className: fitted
      ? "wp-block-shadcn-tabs is-fitted"
      : "wp-block-shadcn-tabs",
    id: instanceId,
  });

  const innerBlocksProps = useInnerBlocksProps(
    { className: "wp-block-shadcn-tabs__panels" },
    {
      allowedBlocks: ALLOWED_BLOCKS,
      template: TEMPLATE,
      templateLock: false,
      orientation: "vertical",
    }
  );

  const labelFor = (tab, index) =>
    tab.label.trim() ||
    /* translators: %d: position of the tab within the tab list. */
    sprintf(__("Tab %d", "yaycommerce-blocks-for-shadcn-ui"), index + 1);

  return (
    <>
      <InspectorControls>
        <ToolsPanel
          label={__("Settings", "yaycommerce-blocks-for-shadcn-ui")}
          resetAll={() => setAttributes({ defaultTab: 0, fitted: false })}
        >
          <ToolsPanelItem
            label={__("Open by default", "yaycommerce-blocks-for-shadcn-ui")}
            isShownByDefault
            hasValue={() => 0 !== defaultTab}
            onDeselect={() => setAttributes({ defaultTab: 0 })}
          >
            <SelectControl
              __next40pxDefaultSize
              __nextHasNoMarginBottom
              label={__("Open by default", "yaycommerce-blocks-for-shadcn-ui")}
              help={__(
                "Which tab is open when the page loads.",
                "yaycommerce-blocks-for-shadcn-ui"
              )}
              value={String(defaultTab ?? 0)}
              options={tabs.map((tab, index) => ({
                label: labelFor(tab, index),
                value: String(index),
              }))}
              onChange={(value) =>
                setAttributes({ defaultTab: Number(value) })
              }
            />
          </ToolsPanelItem>

          <ToolsPanelItem
            label={__("Fit to width", "yaycommerce-blocks-for-shadcn-ui")}
            isShownByDefault
            hasValue={() => !!fitted}
            onDeselect={() => setAttributes({ fitted: false })}
          >
            <ToggleControl
              __nextHasNoMarginBottom
              label={__("Fit to width", "yaycommerce-blocks-for-shadcn-ui")}
              help={__(
                "Stretch the tabs to fill the full width of the block.",
                "yaycommerce-blocks-for-shadcn-ui"
              )}
              checked={!!fitted}
              onChange={(value) => setAttributes({ fitted: value })}
            />
          </ToolsPanelItem>
        </ToolsPanel>
      </InspectorControls>

      <div {...blockProps}>
        {/* Show only the selected panel; inner blocks all render themselves. */}
        <style>
          {`#${instanceId} > .wp-block-shadcn-tabs__panels > .wp-block-shadcn-tab:not(:nth-child(${
            current + 1
          })) { display: none; }`}
        </style>

        <div className="wp-block-shadcn-tabs__list" role="tablist">
          {tabs.map((tab, index) => (
            <button
              key={index}
              type="button"
              role="tab"
              aria-selected={index === current}
              disabled={tab.disabled}
              className={
                index === current
                  ? "wp-block-shadcn-tabs__trigger is-active"
                  : "wp-block-shadcn-tabs__trigger"
              }
              onClick={() => setActiveIndex(index)}
            >
              {labelFor(tab, index)}
            </button>
          ))}
        </div>

        <div {...innerBlocksProps} />
      </div>
    </>
  );
}
