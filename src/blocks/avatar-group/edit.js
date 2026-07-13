/**
 * WordPress dependencies
 */
import {
  useBlockProps,
  useInnerBlocksProps,
  InspectorControls,
} from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";
import { PanelBody, RangeControl } from "@wordpress/components";

/**
 * Avatar Group block template.
 */
const TEMPLATE = [
  ["shadcn/avatar", {}],
  ["shadcn/avatar", {}],
  ["shadcn/avatar", {}],
];

/**
 * Allowed inner blocks.
 */
const ALLOWED_BLOCKS = ["shadcn/avatar"];

/**
 * Edit component.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit(props) {
  const { attributes, setAttributes } = props;
  const { maxVisible } = attributes;

  const blockProps = useBlockProps({
    className: "wp-block-shadcn-avatar-group shadcn-avatar-group",
  });

  // useInnerBlocksProps (not the legacy <InnerBlocks> component) puts child
  // blocks as direct children of blockProps' own element instead of an extra
  // nested wrapper div — required so the group's `display: flex` in
  // style.scss actually lays out the avatars horizontally in the editor
  // (the frontend render.php already echoes them as direct children).
  const innerBlocksProps = useInnerBlocksProps(blockProps, {
    template: TEMPLATE,
    allowedBlocks: ALLOWED_BLOCKS,
    templateLock: false,
    orientation: "horizontal",
  });

  return (
    <>
      <InspectorControls>
        <PanelBody
          title={__("Avatar Group Settings", "shadcn-blocks")}
          initialOpen
        >
          <RangeControl
            label={__("Max visible", "shadcn-blocks")}
            help={__(
              'Avatars beyond this count collapse into a "+N" indicator on the frontend. The editor still shows all avatars for editing.',
              "shadcn-blocks"
            )}
            value={maxVisible}
            min={1}
            max={10}
            onChange={(value) => setAttributes({ maxVisible: value })}
          />
        </PanelBody>
      </InspectorControls>
      <div {...innerBlocksProps} />
    </>
  );
}
