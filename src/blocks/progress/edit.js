import { useBlockProps, InspectorControls } from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";
import {
  PanelBody,
  RangeControl,
  __experimentalToggleGroupControl as ToggleGroupControl,
  __experimentalToggleGroupControlOption as ToggleGroupControlOption,
  __experimentalToolsPanel as ToolsPanel,
  __experimentalToolsPanelItem as ToolsPanelItem,
} from "@wordpress/components";

export default function Edit(props) {
  const { attributes, setAttributes } = props;
  const { maxValue, currentValue } = attributes;
  const { type, value } = currentValue;

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
            });
          }}
        >
          <ToolsPanelItem
            label={__("Max Value", "wpshadcn-blocks")}
            isShownByDefault
            hasValue={() => !!maxValue}
            onDeselect={() => setAttributes({ maxValue: 100 })}
          >
            <RangeControl
              label={__("Max Value", "wpshadcn-blocks")}
              value={maxValue}
              onChange={(value) => setAttributes({ maxValue: value })}
              min={1}
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
              hasValue={() => !!value}
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
        </ToolsPanel>
      </InspectorControls>
      <div {...blockProps}>progress</div>
    </>
  );
}
