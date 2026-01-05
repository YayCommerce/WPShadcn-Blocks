/**
 * WordPress dependencies
 */
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

/**
 * Card block template.
 */
const TEMPLATE = [
	[ 'wpshadcn/card-header', {} ],
	[ 'wpshadcn/card-content', {} ],
	[ 'wpshadcn/card-footer', {} ],
];

/**
 * Allowed inner blocks.
 */
const ALLOWED_BLOCKS = [
	'wpshadcn/card-header',
	'wpshadcn/card-content',
	'wpshadcn/card-footer',
];

/**
 * Edit component.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit( props ) {
	const blockProps = useBlockProps( {
		className: 'wp-block-wpshadcn-card',
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
