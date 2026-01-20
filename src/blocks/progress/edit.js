import {
  useBlockProps,
  InspectorControls,
  __experimentalColorGradientSettingsDropdown as ColorGradientSettingsDropdown,
  __experimentalUseMultipleOriginColorsAndGradients as useMultipleOriginColorsAndGradients,
} from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";
import {
  RangeControl,
  SelectControl,
  __experimentalToggleGroupControl as ToggleGroupControl,
  __experimentalToggleGroupControlOption as ToggleGroupControlOption,
  __experimentalToolsPanel as ToolsPanel,
  __experimentalToolsPanelItem as ToolsPanelItem,
} from "@wordpress/components";

export default function Edit(props) {
  const { attributes, setAttributes, clientId } = props;
  const { maxValue, currentValue, staticValue, dynamicValue } = attributes;

  const { trackColor = "#f5f5f5", fillColor = "#171717" } =
    attributes.style ?? {};

  const colorGradientSettings = useMultipleOriginColorsAndGradients();

  // Calculate percentage for display
  const percentage = Math.min(Math.max((staticValue / maxValue) * 100, 0), 100);

  const blockProps = useBlockProps({
    className: "wp-block-shadcn-progress",
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
            label={__("Max Value", "shadcn-blocks")}
            isShownByDefault
            hasValue={() => maxValue !== 100}
            onDeselect={() => setAttributes({ maxValue: 100 })}
          >
            <RangeControl
              label={__("Max Value", "shadcn-blocks")}
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
              label={__("Value", "shadcn-blocks")}
              isShownByDefault
              hasValue={() => staticValue !== 50}
              onDeselect={() =>
                setAttributes({
                  staticValue: 50,
                })
              }
            >
              <RangeControl
                label={__("Value", "shadcn-blocks")}
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
              label={__("Value", "shadcn-blocks")}
              isShownByDefault
              hasValue={() => dynamicValue !== "free_shipping"}
              onDeselect={() =>
                setAttributes({ dynamicValue: "free_shipping" })
              }
            >
              <SelectControl
                label={__("Value", "shadcn-blocks")}
                value={dynamicValue}
                onChange={(value) => setAttributes({ dynamicValue: value })}
                options={[
                  {
                    label: __("Free Shipping", "shadcn-blocks"),
                    value: "free_shipping",
                  },
                ]}
              />
            </ToolsPanelItem>
          )}
        </ToolsPanel>
      </InspectorControls>
      <InspectorControls group="color">
        <ColorGradientSettingsDropdown
          settings={[
            {
              label: __("Track Color", "shadcn-blocks"),
              colorValue: trackColor,
              clearable: true,
              onColorChange: (value) => {
                setAttributes({
                  style: {
                    ...(attributes.style ?? {}),
                    trackColor: value,
                  },
                });
              },
              resetAllFilter: (prev) => {
                prev.style.trackColor = "#f5f5f5";
                return prev;
              },
            },
            {
              label: __("Fill Color", "shadcn-blocks"),
              colorValue: fillColor,
              clearable: true,
              onColorChange: (value) => {
                setAttributes({
                  style: {
                    ...(attributes.style ?? {}),
                    fillColor: value,
                  },
                });
              },
              resetAllFilter: (prev) => {
                prev.style.fillColor = "#171717";
                return prev;
              },
            },
          ]}
          panelId={clientId}
          hasColorsOrGradients={false}
          disableCustomColors={false}
          __experimentalIsRenderedInSidebar
          {...colorGradientSettings}
        />
      </InspectorControls>
      <div {...blockProps}>
        <div
          className="progress-container"
          style={{ backgroundColor: trackColor }}
        >
          <div
            className="progress-indicator"
            role="progressbar"
            aria-valuenow={staticValue}
            aria-valuemin={0}
            aria-valuemax={maxValue}
            style={{ width: `${percentage}%`, backgroundColor: fillColor }}
          />
        </div>
      </div>
    </>
  );
}
