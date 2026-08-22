/**
 * WordPress dependencies
 */
import {
  useBlockProps,
  InnerBlocks,
  store as blockEditorStore,
} from "@wordpress/block-editor";
import { useSelect } from "@wordpress/data";
import { __ } from "@wordpress/i18n";

/**
 * Tooltip content template.
 */
const TEMPLATE = [
  [
    "core/paragraph",
    {
      "content": "This is a tooltip content",
      placeholder: __("Add tooltip content here...", "shadcn-blocks"),
    },
  ],
];

/**
 * Edit component.
 *
 * @return {Element} Block edit element.
 */
export default function Edit() {
  // The inserter preview draws this block on its own: there is no tooltip to
  // hover and no trigger to anchor to, so the bubble would sit off-canvas at
  // zero opacity and the preview would read as empty. A marker class lets the
  // stylesheet put it in normal flow for that case only.
  const isPreview = useSelect(
    (select) => !!select(blockEditorStore).getSettings().isPreviewMode,
    []
  );

  const blockProps = useBlockProps({
    className: `wp-block-shadcn-tooltip-content${
      isPreview ? " is-editor-preview" : ""
    }`,
  });

  return (
    <div {...blockProps}>
      <InnerBlocks template={TEMPLATE} templateLock={false} />
    </div>
  );
}
