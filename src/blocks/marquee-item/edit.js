/**
 * WordPress dependencies
 */
import { useBlockProps, InnerBlocks } from "@wordpress/block-editor";

const TEMPLATE = [
  [
    "core/image",
    {
      url: window.shadcnBlocksEditor?.placeholderImage ?? "",
      alt: "Partner logo placeholder",
      sizeSlug: "thumbnail",
    },
  ],
];

/**
 * Edit component.
 *
 * @return {Element} Block edit element.
 */
export default function Edit() {
  const blockProps = useBlockProps({
    className: "wp-block-shadcn-marquee-item",
  });

  return (
    <div {...blockProps}>
      <InnerBlocks template={TEMPLATE} templateLock={false} />
    </div>
  );
}
