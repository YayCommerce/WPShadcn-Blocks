/**
 * WordPress dependencies
 */
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

/**
 * Card block template.
 */
const TEMPLATE = [
	[ 'shadcn/card-header', {} ],
	[ 'shadcn/card-content', {} ],
	[ 'shadcn/card-footer', {} ],
];

/**
 * Allowed inner blocks.
 */
const ALLOWED_BLOCKS = [
	'shadcn/card-header',
	'shadcn/card-content',
	'shadcn/card-footer',
];

/**
 * Edit component.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit( props ) {
	const blockProps = useBlockProps( {
		className: 'wp-block-shadcn-card',
	} );

	return (
		<div { ...blockProps }>
			<InnerBlocks
				template={ TEMPLATE }
				allowedBlocks={ ALLOWED_BLOCKS }
				templateLock={ false }
			/>
		</div>
	);
}
