/**
 * WordPress dependencies
 */
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';

/**
 * Card content template.
 */
const TEMPLATE = [
	[
		'core/paragraph',
		{
			placeholder: __( 'Add card content here...', 'yaycommerce-blocks-for-shadcn-ui' ),
		},
	],
];

/**
 * Edit component.
 *
 * @return {Element} Block edit element.
 */
export default function Edit() {
	const blockProps = useBlockProps( {
		className: 'wp-block-shadcn-card-content',
	} );

	return (
		<div { ...blockProps }>
			<InnerBlocks
				template={ TEMPLATE }
				templateLock={ false }
			/>
		</div>
	);
}
