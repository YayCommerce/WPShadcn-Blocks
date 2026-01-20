import { useBlockProps, InspectorControls } from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";
import {
  RangeControl,
  ToggleControl,
  SelectControl,
  __experimentalToggleGroupControl as ToggleGroupControl,
  __experimentalToggleGroupControlOption as ToggleGroupControlOption,
  __experimentalToolsPanel as ToolsPanel,
  __experimentalToolsPanelItem as ToolsPanelItem,
} from "@wordpress/components";

export default function Edit(props) {
  const { attributes, setAttributes } = props;
  const { maxValue, currentValue, staticValue, dynamicValue, showLabel, type } =
    attributes;

  // Calculate percentage for display
  const percentage = Math.min(Math.max((staticValue / maxValue) * 100, 0), 100);

  const blockProps = useBlockProps({
    className: "wp-block-wpshadcn-progress",
  });

  return (
    <>
      <InspectorControls>
        <ToolsPanel
          label={__("Settings")}
          resetAll={() => {
            setAttributes({
              maxValue: 100,
              currentValue: "static",
              staticValue: 50,
              dynamicValue: "free_shipping",
              showLabel: true,
            });
          }}
        >
          <ToolsPanelItem
            label={__("Max Value", "wpshadcn-blocks")}
            isShownByDefault
            hasValue={() => maxValue !== 100}
            onDeselect={() => setAttributes({ maxValue: 100 })}
          >
            <RangeControl
              label={__("Max Value", "wpshadcn-blocks")}
              value={maxValue}
              onChange={(value) => setAttributes({ maxValue: value })}
              min={1}
              max={1000}
              step={1}
            />
          </ToolsPanelItem>

          <ToolsPanelItem
            label={__("Current Value")}
            isShownByDefault
            hasValue={() => currentValue !== "static"}
            onDeselect={() => setAttributes({ currentValue: "static" })}
          >
            <ToggleGroupControl
              __next40pxDefaultSize
              isBlock
              label={__("Current Value")}
              value={currentValue}
              onChange={(value) => setAttributes({ currentValue: value })}
            >
              <ToggleGroupControlOption label={__("Static")} value="static" />
              <ToggleGroupControlOption label={__("Dynamic")} value="dynamic" />
            </ToggleGroupControl>
          </ToolsPanelItem>
          {currentValue === "static" && (
            <ToolsPanelItem
              label={__("Value", "wpshadcn-blocks")}
              isShownByDefault
              hasValue={() => staticValue !== 50}
              onDeselect={() =>
                setAttributes({
                  staticValue: 50,
                })
              }
            >
              <RangeControl
                label={__("Value", "wpshadcn-blocks")}
                value={staticValue}
                onChange={(value) =>
                  setAttributes({
                    staticValue: value,
                  })
                }
                min={0}
                max={maxValue}
                step={1}
              />
            </ToolsPanelItem>
          )}
          {currentValue === "dynamic" && (
            <ToolsPanelItem
              label={__("Value", "wpshadcn-blocks")}
              isShownByDefault
              hasValue={() => dynamicValue !== "free_shipping"}
              onDeselect={() =>
                setAttributes({ dynamicValue: "free_shipping" })
              }
            >
              <SelectControl
                label={__("Value", "wpshadcn-blocks")}
                value={dynamicValue}
                onChange={(value) => setAttributes({ dynamicValue: value })}
                options={[
                  {
                    label: __("Free Shipping", "wpshadcn-blocks"),
                    value: "free_shipping",
                  },
                ]}
              />
            </ToolsPanelItem>
          )}
          <ToolsPanelItem
            label={__("Show Label", "wpshadcn-blocks")}
            isShownByDefault
            hasValue={() => showLabel !== false}
            onDeselect={() => setAttributes({ showLabel: false })}
          >
            <ToggleControl
              label={__("Show Label", "wpshadcn-blocks")}
              onChange={(value) => setAttributes({ showLabel: value })}
              checked={showLabel !== false}
            />
          </ToolsPanelItem>
        </ToolsPanel>
      </InspectorControls>
      <div {...blockProps}>
        <div className="progress-container">
          <div
            className="progress-indicator"
            role="progressbar"
            aria-valuenow={staticValue}
            aria-valuemin={0}
            aria-valuemax={maxValue}
            style={{ width: `${percentage}%` }}
          />
        </div>
        {showLabel !== false && type === "static" && (
          <div className="progress-label">
            {staticValue} / {maxValue} ({Math.round(percentage)}%)
          </div>
        )}
        {showLabel !== false && type === "dynamic" && (
          <div className="progress-label">
            {__("Dynamic progress", "wpshadcn-blocks")}
          </div>
        )}
      </div>
    </>
  );
}
