/**
 * WordPress dependencies
 */
import { useBlockProps, RichText, InspectorControls } from "@wordpress/block-editor";
import {
  TextControl,
  TextareaControl,
  __experimentalToggleGroupControl as ToggleGroupControl,
  __experimentalToggleGroupControlOption as ToggleGroupControlOption,
  __experimentalToolsPanel as ToolsPanel,
  __experimentalToolsPanelItem as ToolsPanelItem,
} from "@wordpress/components";
import { __ } from "@wordpress/i18n";

const TYPES = ["default", "success", "error", "warning", "info"];

/**
 * Edit component.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit({ attributes, setAttributes }) {
  const { buttonLabel, toastType, toastTitle, toastDescription } = attributes;

  const blockProps = useBlockProps({
    className: "wp-block-shadcn-sonner",
  });

  return (
    <>
      <InspectorControls>
        <ToolsPanel
          label={__("Toast", "shadcn-blocks")}
          resetAll={() =>
            setAttributes({
              toastType: "default",
              toastTitle: "",
              toastDescription: "",
            })
          }
        >
          <ToolsPanelItem
            label={__("Type", "shadcn-blocks")}
            isShownByDefault
            hasValue={() => toastType !== "default"}
            onDeselect={() => setAttributes({ toastType: "default" })}
          >
            <ToggleGroupControl
              __next40pxDefaultSize
              __nextHasNoMarginBottom
              isBlock
              label={__("Type", "shadcn-blocks")}
              value={toastType ?? "default"}
              onChange={(value) => setAttributes({ toastType: value })}
            >
              {TYPES.map((type) => (
                <ToggleGroupControlOption
                  key={type}
                  label={type.charAt(0).toUpperCase() + type.slice(1)}
                  value={type}
                />
              ))}
            </ToggleGroupControl>
          </ToolsPanelItem>

          <ToolsPanelItem
            label={__("Title", "shadcn-blocks")}
            isShownByDefault
            hasValue={() => !!toastTitle}
            onDeselect={() => setAttributes({ toastTitle: "" })}
          >
            <TextControl
              __next40pxDefaultSize
              __nextHasNoMarginBottom
              label={__("Title", "shadcn-blocks")}
              value={toastTitle ?? ""}
              onChange={(value) => setAttributes({ toastTitle: value })}
              placeholder={__("Event has been created", "shadcn-blocks")}
            />
          </ToolsPanelItem>

          <ToolsPanelItem
            label={__("Description", "shadcn-blocks")}
            isShownByDefault
            hasValue={() => !!toastDescription}
            onDeselect={() => setAttributes({ toastDescription: "" })}
          >
            <TextareaControl
              __nextHasNoMarginBottom
              label={__("Description", "shadcn-blocks")}
              value={toastDescription ?? ""}
              onChange={(value) => setAttributes({ toastDescription: value })}
              placeholder={__("Optional supporting text", "shadcn-blocks")}
            />
          </ToolsPanelItem>
        </ToolsPanel>
      </InspectorControls>
      <div {...blockProps}>
        <button type="button" className="wp-block-shadcn-sonner__trigger">
          <RichText
            tagName="span"
            value={buttonLabel || ""}
            onChange={(value) => setAttributes({ buttonLabel: value })}
            placeholder={__("Show Toast", "shadcn-blocks")}
            allowedFormats={[]}
          />
        </button>
      </div>
    </>
  );
}
