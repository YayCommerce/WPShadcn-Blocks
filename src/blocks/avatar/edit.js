/**
 * WordPress dependencies
 */
import {
  useBlockProps,
  InspectorControls,
  MediaUpload,
  MediaUploadCheck,
} from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";
import {
  PanelBody,
  TextControl,
  Button,
  __experimentalToggleGroupControl as ToggleGroupControl,
  __experimentalToggleGroupControlOption as ToggleGroupControlOption,
} from "@wordpress/components";

/**
 * Available avatar sizes.
 */
const SIZE_OPTIONS = [
  { value: "sm", label: __("Small", "yaycommerce-blocks-for-shadcn-ui") },
  { value: "md", label: __("Medium", "yaycommerce-blocks-for-shadcn-ui") },
  { value: "lg", label: __("Large", "yaycommerce-blocks-for-shadcn-ui") },
];

/**
 * Edit component.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit(props) {
  const { attributes, setAttributes } = props;
  const { mediaId, mediaUrl, mediaAlt, size, fallback } = attributes;

  const blockProps = useBlockProps({
    className: "wp-block-shadcn-avatar",
  });

  const onSelectMedia = (media) => {
    setAttributes({
      mediaId: media.id,
      mediaUrl: media.url,
      mediaAlt: media.alt || "",
    });
  };

  const onRemoveMedia = () => {
    setAttributes({ mediaId: 0, mediaUrl: "", mediaAlt: "" });
  };

  return (
    <>
      <InspectorControls>
        <PanelBody
          title={__("Avatar Settings", "yaycommerce-blocks-for-shadcn-ui")}
          initialOpen
        >
          <ToggleGroupControl
            __next40pxDefaultSize
            isBlock
            label={__("Size", "yaycommerce-blocks-for-shadcn-ui")}
            value={size}
            onChange={(value) => setAttributes({ size: value })}
          >
            {SIZE_OPTIONS.map((option) => (
              <ToggleGroupControlOption
                key={option.value}
                value={option.value}
                label={option.label}
              />
            ))}
          </ToggleGroupControl>
          <TextControl
            label={__("Fallback initials", "yaycommerce-blocks-for-shadcn-ui")}
            help={__(
              "Shown when no image is set or it fails to load.",
              "yaycommerce-blocks-for-shadcn-ui"
            )}
            value={fallback}
            onChange={(value) => setAttributes({ fallback: value })}
          />
          <MediaUploadCheck>
            <MediaUpload
              onSelect={onSelectMedia}
              allowedTypes={["image"]}
              value={mediaId}
              render={({ open }) => (
                <div className="wp-block-shadcn-avatar__controls">
                  <Button variant="secondary" onClick={open}>
                    {mediaUrl
                      ? __("Replace image", "yaycommerce-blocks-for-shadcn-ui")
                      : __("Select image", "yaycommerce-blocks-for-shadcn-ui")}
                  </Button>
                  {mediaUrl && (
                    <Button
                      variant="tertiary"
                      isDestructive
                      onClick={onRemoveMedia}
                    >
                      {__("Remove", "yaycommerce-blocks-for-shadcn-ui")}
                    </Button>
                  )}
                </div>
              )}
            />
          </MediaUploadCheck>
        </PanelBody>
      </InspectorControls>
      <div {...blockProps}>
        <span className={`shadcn-avatar shadcn-avatar--${size}`}>
          {mediaUrl ? (
            <img
              src={mediaUrl}
              alt={mediaAlt}
              className="shadcn-avatar__image"
            />
          ) : (
            <span className="shadcn-avatar__fallback">{fallback}</span>
          )}
        </span>
      </div>
    </>
  );
}
