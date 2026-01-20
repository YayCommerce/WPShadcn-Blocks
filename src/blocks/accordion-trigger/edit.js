/**
 * WordPress dependencies
 */
import { __ } from "@wordpress/i18n";
import { useEffect } from "@wordpress/element";
import {
  useBlockProps,
  __experimentalGetSpacingClassesAndStyles as useSpacingProps,
  RichText,
  getTypographyClassesAndStyles as useTypographyProps,
  useSettings,
  store as blockEditorStore,
} from "@wordpress/block-editor";
import { useDispatch } from "@wordpress/data";

export default function Edit({ attributes, setAttributes, context }) {
  const { title } = attributes;
  const {
    "wpshadcn/accordion-icon-position": iconPosition,
    "wpshadcn/accordion-show-icon": showIcon,
  } = context;
  const { __unstableMarkNextChangeAsNotPersistent } =
    useDispatch(blockEditorStore);

  // Set icon attributes.
  useEffect(() => {
    if (iconPosition !== undefined && showIcon !== undefined) {
      __unstableMarkNextChangeAsNotPersistent();
      setAttributes({
        iconPosition,
        showIcon,
      });
    }
  }, [
    iconPosition,
    showIcon,
    setAttributes,
    __unstableMarkNextChangeAsNotPersistent,
  ]);

  const [fluidTypographySettings, layout] = useSettings(
    "typography.fluid",
    "layout"
  );
  const typographyProps = useTypographyProps(attributes, {
    typography: {
      fluid: fluidTypographySettings,
    },
    layout: {
      wideSize: layout?.wideSize,
    },
  });

  const blockProps = useBlockProps();
  const spacingProps = useSpacingProps(attributes);

  return (
    <h3 {...blockProps}>
      <button
        className="wp-block-wpshadcn-accordion-trigger-button"
        style={spacingProps.style}
        tabIndex="-1"
      >
        {showIcon && iconPosition === "left" && (
          <span
            className="wp-block-wpshadcn-accordion-trigger-icon"
            aria-hidden="true"
          />
        )}
        <RichText
          withoutInteractiveFormatting
          disableLineBreaks
          tagName="span"
          value={title}
          onChange={(newTitle) => setAttributes({ title: newTitle })}
          placeholder={__("Accordion title")}
          className="wp-block-wpshadcn-accordion-trigger-title"
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
