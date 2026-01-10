/**
 * WordPress dependencies
 */
import {
  useBlockProps,
  __experimentalGetSpacingClassesAndStyles as getSpacingClassesAndStyles,
  RichText,
  getTypographyClassesAndStyles,
} from "@wordpress/block-editor";

export default function save({ attributes }) {
  const { title, iconPosition, showIcon } = attributes;
  const typographyProps = getTypographyClassesAndStyles(attributes);

  const blockProps = useBlockProps.save();
  const spacingProps = getSpacingClassesAndStyles(attributes);

  return (
    <h3 {...blockProps}>
      <button
        type="button"
        className="wp-block-wpshadcn-accordion-trigger-button"
        style={spacingProps.style}
      >
        {showIcon && iconPosition === "left" && (
          <span
            className="wp-block-wpshadcn-accordion-trigger-icon"
            aria-hidden="true"
          />
        )}
        <RichText.Content
          className="wp-block-wpshadcn-accordion-trigger-title"
          tagName="span"
          value={title}
          style={{
            letterSpacing: typographyProps.style.letterSpacing,
            textDecoration: typographyProps.style.textDecoration,
          }}
        />
        {showIcon && iconPosition === "right" && (
          <span
            className="wp-block-wpshadcn-accordion-trigger-icon"
            aria-hidden="true"
          />
        )}
      </button>
    </h3>
  );
}
