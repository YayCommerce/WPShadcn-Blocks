/**
 * WordPress dependencies
 */
import { InspectorControls, RichText, useBlockProps } from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";

/**
 * Internal dependencies — shared icon picker.
 */
import { IconPanelBody } from "../../shared/icons/icon-panel.js";
import { IconGlyph } from "../../shared/icons/icon-picker.js";
import { buildIconClasses } from "../../shared/icons/icon-attributes.js";

/**
 * Edit component.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit({ attributes, setAttributes, isSelected }) {
  const { text, iconName = "", iconPosition = "left", iconSize = "" } = attributes;

  const isRight = iconPosition === "right";
  // Shared class contract (single source: buildIconClasses()).
  const iconClasses = buildIconClasses(iconName, iconPosition);

  const blockProps = useBlockProps({
    className: `kbd${iconClasses ? ` ${iconClasses}` : ""}`,
  });

  // Editor icon preview mirrors the frontend render (DOM order = position).
  const glyph = iconName ? (
    <span
      className="shadcn-icon"
      style={iconSize ? { width: iconSize, height: iconSize } : undefined}
    >
      <IconGlyph name={iconName} />
    </span>
  ) : null;

  return (
    <>
      <InspectorControls>
        <IconPanelBody
          attributes={attributes}
          setAttributes={setAttributes}
          initialOpen
        />
      </InspectorControls>
      <kbd {...blockProps}>
        {!isRight && glyph}
        {/* An icon-only key drops the empty text unless selected: as a flex item
            it would still take the gap and push the icon off-center. */}
        {(text || !iconName || isSelected) && (
          <RichText
            tagName="span"
            className="wp-block-shadcn-kbd__text"
            value={text}
            allowedFormats={[]}
            placeholder={__("Key", "yaycommerce-blocks-for-shadcn-ui")}
            onChange={(value) => setAttributes({ text: value })}
          />
        )}
        {isRight && glyph}
      </kbd>
    </>
  );
}
