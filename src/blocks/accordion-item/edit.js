/**
 * WordPress dependencies
 */
import {
  useBlockProps,
  useInnerBlocksProps,
  RichText,
  InspectorControls,
  MediaUpload,
  MediaUploadCheck,
} from "@wordpress/block-editor";
import {
  Button,
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
 * Chevron indicator (static in the editor).
 *
 * @return {Element} SVG element.
 */
function Chevron() {
  return (
    <svg
      className="wp-block-shadcn-accordion-item__chevron"
      xmlns="http://www.w3.org/2000/svg"
      width="16"
      height="16"
      viewBox="0 0 24 24"
      fill="none"
      stroke="currentColor"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round"
      aria-hidden="true"
    >
      <path d="m6 9 6 6 6-6"></path>
    </svg>
  );
}

/**
 * Edit component.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit({ attributes, setAttributes, context }) {
  const { title, summary, iconId, iconUrl, iconAlt, disabled } = attributes;
  const headingLevel = context["shadcn/headingLevel"] || 3;
  const TagName = `h${headingLevel}`;

  const blockProps = useBlockProps({
    className: disabled
      ? "wp-block-shadcn-accordion-item is-disabled"
      : "wp-block-shadcn-accordion-item",
  });

  const panelProps = useInnerBlocksProps(
    { className: "wp-block-shadcn-accordion-item__panel" },
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
          resetAll={() =>
            setAttributes({
              disabled: false,
              iconId: 0,
              iconUrl: "",
              iconAlt: "",
            })
          }
        >
          <ToolsPanelItem
            label={__("Icon", "shadcn-blocks")}
            isShownByDefault
            hasValue={() => !!iconUrl}
            onDeselect={() =>
              setAttributes({ iconId: 0, iconUrl: "", iconAlt: "" })
            }
          >
            <MediaUploadCheck>
              <MediaUpload
                allowedTypes={["image"]}
                value={iconId || undefined}
                onSelect={(media) =>
                  setAttributes({
                    iconId: media?.id ?? 0,
                    iconUrl: media?.url ?? "",
                    iconAlt: media?.alt ?? "",
                  })
                }
                render={({ open }) => (
                  <div className="shadcn-accordion-item__icon-control">
                    {iconUrl && (
                      <img
                        src={iconUrl}
                        alt={iconAlt}
                        width="28"
                        height="28"
                        style={{ borderRadius: "0.375rem" }}
                      />
                    )}
                    <Button
                      __next40pxDefaultSize
                      variant="secondary"
                      onClick={open}
                    >
                      {iconUrl
                        ? __("Replace icon", "shadcn-blocks")
                        : __("Select icon", "shadcn-blocks")}
                    </Button>
                    {iconUrl && (
                      <Button
                        __next40pxDefaultSize
                        variant="tertiary"
                        isDestructive
                        onClick={() =>
                          setAttributes({
                            iconId: 0,
                            iconUrl: "",
                            iconAlt: "",
                          })
                        }
                      >
                        {__("Remove", "shadcn-blocks")}
                      </Button>
                    )}
                  </div>
                )}
              />
            </MediaUploadCheck>
          </ToolsPanelItem>

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
                "Prevent this item from being opened or closed.",
                "shadcn-blocks"
              )}
              checked={!!disabled}
              onChange={(value) => setAttributes({ disabled: value })}
            />
          </ToolsPanelItem>
        </ToolsPanel>
      </InspectorControls>
      <div {...blockProps}>
        <TagName className="wp-block-shadcn-accordion-item__heading">
          <span className="wp-block-shadcn-accordion-item__trigger">
            <span className="wp-block-shadcn-accordion-item__label">
              {iconUrl && (
                <img
                  className="wp-block-shadcn-accordion-item__icon"
                  src={iconUrl}
                  alt={iconAlt}
                />
              )}
              <RichText
                tagName="span"
                className="wp-block-shadcn-accordion-item__title"
                value={title || ""}
                onChange={(value) => setAttributes({ title: value })}
                placeholder={__("Accordion title", "shadcn-blocks")}
                allowedFormats={[]}
              />
            </span>
            <RichText
              tagName="span"
              className="wp-block-shadcn-accordion-item__summary"
              value={summary || ""}
              onChange={(value) => setAttributes({ summary: value })}
              placeholder={__("Summary (optional)", "shadcn-blocks")}
              allowedFormats={["core/bold", "core/italic"]}
            />
            <Chevron />
          </span>
        </TagName>
        <div {...panelProps} />
      </div>
    </>
  );
}
