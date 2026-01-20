/**
 * WordPress dependencies
 */
import { useBlockProps, RichText } from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";

/**
 * Edit component.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit({ attributes, setAttributes }) {
  const { title } = attributes;

  const blockProps = useBlockProps({
    className: "wp-block-shadcn-alert-title alert-title",
  });

  return (
    <div {...blockProps}>
      <RichText
        tagName="div"
        value={title || ""}
        onChange={(value) => setAttributes({ title: value })}
        placeholder={__("Alert Title", "shadcn-blocks")}
        allowedFormats={["core/bold", "core/italic", "core/link"]}
      />
    </div>
  );
}
