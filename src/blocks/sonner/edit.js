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
          label={__("Toast", "yaycommerce-blocks-for-shadcn-ui")}
          resetAll={() =>
            setAttributes({
              toastType: "default",
              toastTitle: "",
              toastDescription: "",
            })
          }
        >
          <ToolsPanelItem
            label={__("Type", "yaycommerce-blocks-for-shadcn-ui")}
            isShownByDefault
            hasValue={() => toastType !== "default"}
            onDeselect={() => setAttributes({ toastType: "default" })}
          >
            <ToggleGroupControl
              __next40pxDefaultSize
              __nextHasNoMarginBottom
              isBlock
              label={__("Type", "yaycommerce-blocks-for-shadcn-ui")}
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
            label={__("Title", "yaycommerce-blocks-for-shadcn-ui")}
            isShownByDefault
            hasValue={() => !!toastTitle}
            onDeselect={() => setAttributes({ toastTitle: "" })}
          >
            <TextControl
              __next40pxDefaultSize
              __nextHasNoMarginBottom
              label={__("Title", "yaycommerce-blocks-for-shadcn-ui")}
              value={toastTitle ?? ""}
              onChange={(value) => setAttributes({ toastTitle: value })}
              placeholder={__("Event has been created", "yaycommerce-blocks-for-shadcn-ui")}
            />
          </ToolsPanelItem>

          <ToolsPanelItem
            label={__("Description", "yaycommerce-blocks-for-shadcn-ui")}
            isShownByDefault
            hasValue={() => !!toastDescription}
            onDeselect={() => setAttributes({ toastDescription: "" })}
          >
            <TextareaControl
              __nextHasNoMarginBottom
              label={__("Description", "yaycommerce-blocks-for-shadcn-ui")}
              value={toastDescription ?? ""}
              onChange={(value) => setAttributes({ toastDescription: value })}
              placeholder={__("Optional supporting text", "yaycommerce-blocks-for-shadcn-ui")}
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
            placeholder={__("Show Toast", "yaycommerce-blocks-for-shadcn-ui")}
            allowedFormats={[]}
          />
        </button>
      </div>
    </>
  );
}
