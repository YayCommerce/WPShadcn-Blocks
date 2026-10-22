/**
 * WordPress dependencies
 */
import {
  InspectorControls,
  MediaUpload,
  MediaUploadCheck,
  RichText,
  useBlockProps,
} from "@wordpress/block-editor";
import {
  Button,
  PanelBody,
  SelectControl,
  TextControl,
  ToggleControl,
  __experimentalToggleGroupControl as ToggleGroupControl,
  __experimentalToggleGroupControlOption as ToggleGroupControlOption,
} from "@wordpress/components";
import { __ } from "@wordpress/i18n";

/**
 * Internal dependencies
 */
import { IconGlyph, IconPicker } from "../../shared/icons/icon-picker.js";

const STATE_OPTIONS = [
  { label: __("Done", "yaycommerce-blocks-for-shadcn-ui"), value: "done" },
  { label: __("Idle (ready to upload)", "yaycommerce-blocks-for-shadcn-ui"), value: "idle" },
  { label: __("Uploading", "yaycommerce-blocks-for-shadcn-ui"), value: "uploading" },
  { label: __("Processing", "yaycommerce-blocks-for-shadcn-ui"), value: "processing" },
  { label: __("Error", "yaycommerce-blocks-for-shadcn-ui"), value: "error" },
];

const SIZE_OPTIONS = [
  { label: __("Default", "yaycommerce-blocks-for-shadcn-ui"), value: "default" },
  { label: __("Small", "yaycommerce-blocks-for-shadcn-ui"), value: "sm" },
  { label: __("XS", "yaycommerce-blocks-for-shadcn-ui"), value: "xs" },
];

const ORIENTATION_OPTIONS = [
  { label: __("Horizontal", "yaycommerce-blocks-for-shadcn-ui"), value: "horizontal" },
  { label: __("Vertical", "yaycommerce-blocks-for-shadcn-ui"), value: "vertical" },
];

const MEDIA_TYPE_OPTIONS = [
  { label: __("Icon", "yaycommerce-blocks-for-shadcn-ui"), value: "icon" },
  { label: __("Image", "yaycommerce-blocks-for-shadcn-ui"), value: "image" },
  { label: __("None", "yaycommerce-blocks-for-shadcn-ui"), value: "none" },
];

/**
 * Pick a file-type icon from a Media Library item's mime type.
 *
 * @param {string} mime e.g. "application/pdf".
 * @return {string} Icon slug.
 */
const iconForMime = (mime = "") => {
  if (mime.startsWith("image/")) return "file-image";
  if (mime.startsWith("video/")) return "file-video";
  if (mime.startsWith("audio/")) return "file-music";
  if (/zip|compressed|tar|rar|7z/.test(mime)) return "file-archive";
  if (/spreadsheet|excel|csv/.test(mime)) return "file-spreadsheet";
  if (/javascript|json|xml|html|css|php/.test(mime)) return "file-code";
  if (/pdf|word|text|document|presentation/.test(mime)) return "file-text";
  return "file";
};

/**
 * Edit component.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit({ attributes, setAttributes }) {
  const {
    fileId,
    url,
    linkTarget,
    title,
    description,
    mediaType,
    iconName,
    imageId,
    imageUrl,
    imageAlt,
    state,
    size,
    orientation,
    showDownload,
  } = attributes;

  const blockProps = useBlockProps({
    "data-state": state,
    "data-size": size,
    "data-orientation": orientation,
  });

  // Picking a file fills the card: link, name, "PDF · 2.4 MB" and a matching icon or picture.
  const onSelectFile = (media) => {
    const isImage = (media.mime || "").startsWith("image/");
    const details = [(media.subtype || "").toUpperCase(), media.filesizeHumanReadable]
      .filter(Boolean)
      .join(" · ");

    setAttributes({
      fileId: media.id,
      url: media.url,
      title: media.filename || media.title || "",
      description: details,
      iconName: iconForMime(media.mime),
      // A non-image pick must also leave image media, or the old picture stays.
      mediaType: isImage ? "image" : "icon",
      ...(isImage ? { imageId: media.id, imageUrl: media.url, imageAlt: media.alt || "" } : {}),
    });
  };

  const onSelectImage = (media) =>
    setAttributes({ imageId: media.id, imageUrl: media.url, imageAlt: media.alt || "" });

  // The spinner replaces the icon while uploading, as on the frontend.
  const glyph = <IconGlyph name={state === "uploading" ? "loader-circle" : iconName} />;
  const showImage = mediaType === "image" && imageUrl;
  const showIcon = mediaType === "icon" || (mediaType === "image" && !imageUrl);

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Attachment Settings", "yaycommerce-blocks-for-shadcn-ui")}>
          <MediaUploadCheck>
            <MediaUpload
              onSelect={onSelectFile}
              value={fileId}
              render={({ open }) => (
                <div style={{ display: "flex", gap: 8, marginBottom: 16 }}>
                  <Button variant="secondary" onClick={open}>
                    {fileId
                      ? __("Replace file", "yaycommerce-blocks-for-shadcn-ui")
                      : __("Select file", "yaycommerce-blocks-for-shadcn-ui")}
                  </Button>
                </div>
              )}
            />
          </MediaUploadCheck>
          <TextControl
            label={__("Link URL", "yaycommerce-blocks-for-shadcn-ui")}
            type="url"
            value={url}
            placeholder="https://"
            help={__(
              "Filled when you select a file. When set, the whole card is a link.",
              "yaycommerce-blocks-for-shadcn-ui"
            )}
            onChange={(value) =>
              setAttributes(value ? { url: value } : { url: "", fileId: 0, linkTarget: "", showDownload: false })
            }
          />
          <ToggleControl
            label={__("Open in new tab", "yaycommerce-blocks-for-shadcn-ui")}
            checked={linkTarget === "_blank"}
            disabled={!url}
            onChange={(checked) => setAttributes({ linkTarget: checked ? "_blank" : "" })}
          />
          <ToggleControl
            label={__("Show download button", "yaycommerce-blocks-for-shadcn-ui")}
            checked={showDownload}
            disabled={!url}
            onChange={(checked) => setAttributes({ showDownload: checked })}
          />
          <SelectControl
            label={__("State", "yaycommerce-blocks-for-shadcn-ui")}
            value={state}
            options={STATE_OPTIONS}
            help={__(
              "Visual state only: uploading and processing shimmer the title, error turns the card red.",
              "yaycommerce-blocks-for-shadcn-ui"
            )}
            onChange={(value) => setAttributes({ state: value })}
          />
          <ToggleGroupControl
            __next40pxDefaultSize
            isBlock
            label={__("Size", "yaycommerce-blocks-for-shadcn-ui")}
            value={size}
            onChange={(value) => setAttributes({ size: value })}
          >
            {SIZE_OPTIONS.map((option) => (
              <ToggleGroupControlOption key={option.value} value={option.value} label={option.label} />
            ))}
          </ToggleGroupControl>
          <ToggleGroupControl
            __next40pxDefaultSize
            isBlock
            label={__("Orientation", "yaycommerce-blocks-for-shadcn-ui")}
            value={orientation}
            onChange={(value) => setAttributes({ orientation: value })}
          >
            {ORIENTATION_OPTIONS.map((option) => (
              <ToggleGroupControlOption key={option.value} value={option.value} label={option.label} />
            ))}
          </ToggleGroupControl>
        </PanelBody>
        <PanelBody title={__("Media", "yaycommerce-blocks-for-shadcn-ui")} initialOpen={false}>
          <SelectControl
            label={__("Type", "yaycommerce-blocks-for-shadcn-ui")}
            value={mediaType}
            options={MEDIA_TYPE_OPTIONS}
            onChange={(value) => setAttributes({ mediaType: value })}
          />
          {mediaType === "icon" && (
            <IconPicker value={iconName} onChange={(name) => setAttributes({ iconName: name })} />
          )}
          {mediaType === "image" && (
            <MediaUploadCheck>
              <MediaUpload
                onSelect={onSelectImage}
                allowedTypes={["image"]}
                value={imageId}
                render={({ open }) => (
                  <div style={{ display: "flex", gap: 8, marginBottom: 16 }}>
                    <Button variant="secondary" onClick={open}>
                      {imageUrl
                        ? __("Replace image", "yaycommerce-blocks-for-shadcn-ui")
                        : __("Select image", "yaycommerce-blocks-for-shadcn-ui")}
                    </Button>
                    {imageUrl && (
                      <Button
                        variant="tertiary"
                        isDestructive
                        onClick={() => setAttributes({ imageId: 0, imageUrl: "", imageAlt: "" })}
                      >
                        {__("Remove", "yaycommerce-blocks-for-shadcn-ui")}
                      </Button>
                    )}
                  </div>
                )}
              />
            </MediaUploadCheck>
          )}
        </PanelBody>
      </InspectorControls>
      <div {...blockProps}>
        {(showImage || showIcon) && (
          <div
            className={`wp-block-shadcn-attachment__media wp-block-shadcn-attachment__media--${
              showImage ? "image" : "icon"
            }${state === "uploading" && !showImage ? " is-spinning" : ""}`}
          >
            {showImage ? (
              <img src={imageUrl} alt={imageAlt} />
            ) : (
              <span className="shadcn-icon">{glyph}</span>
            )}
          </div>
        )}
        <div className="wp-block-shadcn-attachment__content">
          <RichText
            tagName="span"
            className="wp-block-shadcn-attachment__title"
            value={title}
            onChange={(value) => setAttributes({ title: value })}
            placeholder={__("File name", "yaycommerce-blocks-for-shadcn-ui")}
            allowedFormats={[]}
          />
          <RichText
            tagName="span"
            className="wp-block-shadcn-attachment__description"
            value={description}
            onChange={(value) => setAttributes({ description: value })}
            placeholder={__("PDF · 2.4 MB", "yaycommerce-blocks-for-shadcn-ui")}
            allowedFormats={[]}
          />
        </div>
        {showDownload && url && (
          <div className="wp-block-shadcn-attachment__actions">
            <span className="wp-block-shadcn-attachment__action">
              <span className="shadcn-icon">
                <IconGlyph name="download" />
              </span>
            </span>
          </div>
        )}
      </div>
    </>
  );
}
