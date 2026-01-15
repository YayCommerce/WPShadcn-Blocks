import { useBlockProps, InspectorControls } from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";
import {
  RangeControl,
  ToggleControl,
  __experimentalToggleGroupControl as ToggleGroupControl,
  __experimentalToggleGroupControlOption as ToggleGroupControlOption,
  __experimentalToolsPanel as ToolsPanel,
  __experimentalToolsPanelItem as ToolsPanelItem,
} from "@wordpress/components";

export default function Edit(props) {
  const { attributes, setAttributes } = props;
  const { maxValue, currentValue, showLabel } = attributes;
  const { type, value } = currentValue;

  // Calculate percentage for display
  const percentage = Math.min(Math.max((value / maxValue) * 100, 0), 100);

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
              currentValue: {
                type: "static",
                value: 50,
              },
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
            label={__("Type")}
            isShownByDefault
            hasValue={() => type !== "static"}
            onDeselect={() =>
              setAttributes({
                currentValue: { ...currentValue, type: "static" },
              })
            }
          >
            <ToggleGroupControl
              __next40pxDefaultSize
              isBlock
              label={__("Type")}
              value={type}
              onChange={(value) => {
                setAttributes({
                  currentValue: { ...currentValue, type: value },
                });
              }}
            >
              <ToggleGroupControlOption label={__("Static")} value="static" />
              <ToggleGroupControlOption label={__("Dynamic")} value="dynamic" />
            </ToggleGroupControl>
          </ToolsPanelItem>
          {type === "static" && (
            <ToolsPanelItem
              label={__("Value", "wpshadcn-blocks")}
              isShownByDefault
              hasValue={() => value !== 50}
              onDeselect={() =>
                setAttributes({
                  currentValue: { ...currentValue, value: 50 },
                })
              }
            >
              <RangeControl
                label={__("Value", "wpshadcn-blocks")}
                value={value}
                onChange={(value) =>
                  setAttributes({
                    currentValue: { ...currentValue, value: value },
                  })
                }
                min={0}
                max={maxValue}
                step={1}
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
            aria-valuenow={value}
            aria-valuemin={0}
            aria-valuemax={maxValue}
            style={{ width: `${percentage}%` }}
          />
        </div>
        {showLabel !== false && type === "static" && (
          <div className="progress-label">
            {value} / {maxValue} ({Math.round(percentage)}%)
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
