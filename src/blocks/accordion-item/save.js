/**
 * WordPress dependencies
 */
import { useBlockProps, useInnerBlocksProps } from "@wordpress/block-editor";
/**
 * External dependencies
 */
import clsx from "clsx";

export default function save({ attributes }) {
  const { isOpen } = attributes;
  const blockProps = useBlockProps.save({
    className: clsx({
      "is-open": isOpen,
    }),
  });
  const innerBlocksProps = useInnerBlocksProps.save(blockProps);
  return <div {...innerBlocksProps} />;
}
