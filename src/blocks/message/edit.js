/**
 * WordPress dependencies
 */
import {
  InnerBlocks,
  InspectorControls,
  MediaUpload,
  __experimentalUseBorderProps as useBorderProps,
  __experimentalUseColorProps as useColorProps,
  MediaUploadCheck,
  RichText,
  useBlockProps,
} from "@wordpress/block-editor";
import {
  Button,
  Dropdown,
  PanelBody,
  SelectControl,
  TextControl,
  ToggleControl,
  __experimentalToggleGroupControl as ToggleGroupControl,
  __experimentalToggleGroupControlOption as ToggleGroupControlOption,
} from "@wordpress/components";
import { useSelect } from "@wordpress/data";
import { __ } from "@wordpress/i18n";

/**
 * Internal dependencies
 */
import { VARIANT_OPTIONS } from "../../shared/bubble-variants";
import { IconGlyph, IconGrid } from "../../shared/icons/icon-picker.js";

/**
 * Starter actions for a new row: the shadcn Actions example (copy + feedback).
 */
const DEFAULT_ACTIONS = ["copy", "thumbs-up", "thumbs-down"];

/**
 * Readable name for an action: the inspector list and the hover tooltip,
 * mirroring render.php.
 *
 * @param {string} slug Icon slug, e.g. "thumbs-up" or "refresh-cw".
 * @return {string} e.g. "Thumbs up" or "Refresh".
 */
const actionLabel = (slug) => {
  const text = slug.replace(/-c?cw$/, "").replace(/-/g, " ");
  return text.charAt(0).toUpperCase() + text.slice(1);
};

/**
 * Alignment options. Empty value inherits the parent Message Group default.
 */
const ALIGN_OPTIONS = [
  { label: __("Inherit from group", "yaycommerce-blocks-for-shadcn-ui"), value: "" },
  { label: __("Start (left)", "yaycommerce-blocks-for-shadcn-ui"), value: "start" },
  { label: __("End (right)", "yaycommerce-blocks-for-shadcn-ui"), value: "end" },
];

/**
 * Avatar sizes, shared with the Avatar block.
 */
const SIZE_OPTIONS = [
  { value: "sm", label: __("Small", "yaycommerce-blocks-for-shadcn-ui") },
  { value: "md", label: __("Medium", "yaycommerce-blocks-for-shadcn-ui") },
  { value: "lg", label: __("Large", "yaycommerce-blocks-for-shadcn-ui") },
];

/**
 * Only paragraphs are allowed inside a message, as in a bubble.
 */
const ALLOWED_BLOCKS = ["core/paragraph"];

/**
 * Message inner content template.
 */
const TEMPLATE = [
  ["core/paragraph", { placeholder: __("Type a message…", "yaycommerce-blocks-for-shadcn-ui") }],
];

/**
 * Edit component.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit({ attributes, setAttributes, clientId, isSelected }) {
  const { variant, align, header, footer, reaction, actions, showAvatar, mediaId, mediaUrl, mediaAlt, size, fallback } =
    attributes;

  const { isEditing, hasInnerBlocks, groupAlign } = useSelect(
    (select) => {
      const editor = select("core/block-editor");
      // The editor passes a nested group's unset align down as undefined,
      // shadowing the outer group's context, so walk up to the nearest group
      // that sets one. render.php gets this from context: core skips unset
      // attributes there, letting the outer value through.
      const groups = editor.getBlockParentsByBlockName(clientId, "shadcn/message-group", true);
      const setGroup = groups.find((id) => editor.getBlockAttributes(id)?.align);
      return {
        // Empty header/footer slots only show while the message is being edited.
        isEditing: isSelected || editor.hasSelectedInnerBlock(clientId, true),
        hasInnerBlocks: editor.getBlockCount(clientId) > 0,
        groupAlign: setGroup ? editor.getBlockAttributes(setGroup).align : "",
      };
    },
    [isSelected, clientId]
  );

  // Own align wins; otherwise inherit the nearest group's; otherwise "start".
  const resolvedAlign = (align || groupAlign) === "end" ? "end" : "start";

  // The footer slot also renders (empty) while editing, so the avatar lifts with it.
  // Actions are hidden for now (panel commented out below); was:
  // const hasActions = actions.length > 0;
  const hasActions = false;
  const showFooter = !!footer || hasActions || isEditing;

  const blockProps = useBlockProps({
    className: `wp-block-shadcn-message message message-align-${resolvedAlign}${
      showFooter ? " message-has-footer" : ""
    }${hasActions ? " message-has-actions" : ""}${reaction ? " message-has-reaction" : ""}`,
  });

  const setAction = (index, slug) =>
    setAttributes({
      actions: slug
        ? actions.map((item, i) => (i === index ? slug : item))
        : actions.filter((item, i) => i !== index),
    });

  // Color and radius skip the row wrapper and style the bubble surface, as in render.php.
  const colorProps = useColorProps(attributes);
  const borderProps = useBorderProps(attributes);

  // The surface reuses the Bubble block's classes so its variant styles apply.
  const bubbleClassName = [
    `wp-block-shadcn-bubble bubble bubble-${variant || "default"}`,
    colorProps.className,
    borderProps.className,
  ]
    .filter(Boolean)
    .join(" ");

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
        <PanelBody title={__("Message Settings", "yaycommerce-blocks-for-shadcn-ui")}>
          <SelectControl
            label={__("Variant", "yaycommerce-blocks-for-shadcn-ui")}
            value={variant}
            options={VARIANT_OPTIONS}
            onChange={(value) => setAttributes({ variant: value })}
          />
          <SelectControl
            label={__("Alignment", "yaycommerce-blocks-for-shadcn-ui")}
            value={align}
            options={ALIGN_OPTIONS}
            help={__(
              "Start is the receiver side, End is the sender side. Inherit uses the Message Group default.",
              "yaycommerce-blocks-for-shadcn-ui"
            )}
            onChange={(value) => setAttributes({ align: value })}
          />
          <TextControl
            label={__("Reaction", "yaycommerce-blocks-for-shadcn-ui")}
            help={__("An emoji pinned to the bubble's corner, e.g. 👍.", "yaycommerce-blocks-for-shadcn-ui")}
            value={reaction}
            onChange={(value) => setAttributes({ reaction: value })}
          />
        </PanelBody>
        {/* Actions are hidden for now. To bring them back, remove this
            comment and restore hasActions above (and the loop in render.php).
        <PanelBody
          title={__("Actions", "yaycommerce-blocks-for-shadcn-ui")}
          initialOpen={hasActions}
        >
          {hasActions && (
            <div className="wp-block-shadcn-message__action-list">
              {actions.map((slug, index) => (
                <div key={index} className="wp-block-shadcn-message__action-row">
                  <Dropdown
                    className="wp-block-shadcn-message__action-dropdown"
                    contentClassName="shadcn-icon-picker__content"
                    popoverProps={{ placement: "left-start" }}
                    renderToggle={({ isOpen, onToggle }) => (
                      <Button
                        className="wp-block-shadcn-message__action-toggle"
                        onClick={onToggle}
                        aria-expanded={isOpen}
                        label={__("Change icon", "yaycommerce-blocks-for-shadcn-ui")}
                      >
                        <span className="wp-block-shadcn-message__action-glyph">
                          <IconGlyph name={slug} />
                        </span>
                        {actionLabel(slug)}
                      </Button>
                    )}
                    renderContent={({ onClose }) => (
                      <IconGrid
                        value={slug}
                        onSelect={(value) => {
                          setAction(index, value);
                          onClose();
                        }}
                      />
                    )}
                  />
                  <Button
                    className="wp-block-shadcn-message__action-remove"
                    size="small"
                    label={__("Remove", "yaycommerce-blocks-for-shadcn-ui")}
                    icon={
                      <span className="wp-block-shadcn-message__action-glyph">
                        <IconGlyph name="trash-2" />
                      </span>
                    }
                    onClick={() => setAction(index, "")}
                  />
                </div>
              ))}
            </div>
          )}
          <Button
            className="wp-block-shadcn-message__action-add"
            variant="secondary"
            icon={
              <span className="wp-block-shadcn-message__action-glyph">
                <IconGlyph name="plus" />
              </span>
            }
            onClick={() =>
              setAttributes({ actions: hasActions ? [...actions, "copy"] : DEFAULT_ACTIONS })
            }
          >
            {hasActions
              ? __("Add action", "yaycommerce-blocks-for-shadcn-ui")
              : __("Add actions", "yaycommerce-blocks-for-shadcn-ui")}
          </Button>
          <p className="components-base-control__help wp-block-shadcn-message__action-help">
            {__(
              "Icon buttons in the footer, such as copy, feedback or retry. Click an action to change its icon.",
              "yaycommerce-blocks-for-shadcn-ui"
            )}
          </p>
        </PanelBody>
        */}
        <PanelBody title={__("Avatar", "yaycommerce-blocks-for-shadcn-ui")}>
          <ToggleControl
            label={__("Show avatar", "yaycommerce-blocks-for-shadcn-ui")}
            checked={showAvatar}
            onChange={(value) => setAttributes({ showAvatar: value })}
          />
          {showAvatar && (
            <>
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
                  "Shown when no image is set or it fails to load. Leave empty with no image to keep a blank slot that lines messages up in a group.",
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
                        <Button variant="tertiary" isDestructive onClick={onRemoveMedia}>
                          {__("Remove", "yaycommerce-blocks-for-shadcn-ui")}
                        </Button>
                      )}
                    </div>
                  )}
                />
              </MediaUploadCheck>
            </>
          )}
        </PanelBody>
      </InspectorControls>
      <div {...blockProps}>
        {showAvatar && (
          <div className={`message-avatar message-avatar--${size}`}>
            {(mediaUrl || fallback) && (
              <span className={`shadcn-avatar shadcn-avatar--${size}`}>
                {mediaUrl ? (
                  <img src={mediaUrl} alt={mediaAlt} className="shadcn-avatar__image" />
                ) : (
                  <span className="shadcn-avatar__fallback">{fallback}</span>
                )}
              </span>
            )}
          </div>
        )}
        <div className="message-content">
          {(header || isEditing) && (
            <RichText
              tagName="div"
              className="message-header"
              value={header}
              onChange={(value) => setAttributes({ header: value })}
              placeholder={__("Sender name", "yaycommerce-blocks-for-shadcn-ui")}
              allowedFormats={["core/bold", "core/italic", "core/link"]}
            />
          )}
          {/* InnerBlocks inside the surface, as in the Bubble block. Appender
              only when empty: core pins it over the last line of the bubble. */}
          <div className={bubbleClassName} style={{ ...colorProps.style, ...borderProps.style }}>
            <InnerBlocks
              template={TEMPLATE}
              allowedBlocks={ALLOWED_BLOCKS}
              templateLock={false}
              renderAppender={hasInnerBlocks ? false : InnerBlocks.ButtonBlockAppender}
            />
            {reaction && <span className="message-reaction">{reaction}</span>}
          </div>
          {showFooter && (
            <div className="message-footer">
              {(footer || isEditing) && (
                <RichText
                  tagName="span"
                  className="message-footer-text"
                  value={footer}
                  onChange={(value) => setAttributes({ footer: value })}
                  placeholder={__("Status, e.g. Delivered", "yaycommerce-blocks-for-shadcn-ui")}
                  allowedFormats={["core/bold", "core/italic", "core/link", "core/text-color"]}
                />
              )}
              {hasActions && (
                <span className="message-actions" aria-hidden="true">
                  {actions.map((slug, index) => (
                    <span key={index} className="message-action" title={actionLabel(slug)}>
                      <span className="shadcn-icon">
                        <IconGlyph name={slug} />
                      </span>
                    </span>
                  ))}
                </span>
              )}
            </div>
          )}
        </div>
      </div>
    </>
  );
}
