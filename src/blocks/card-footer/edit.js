/**
 * WordPress dependencies
 */
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';

/**
 * Card footer template.
 */
const TEMPLATE = [
	[
		'core/buttons',
		{
			layout: {
				type: 'flex',
				justifyContent: 'left',
			},
		},
		[
			[
				'core/button',
				{
					text: __( 'Action', 'shadcn-blocks' ),
				},
			],
		],
	],
];

/**
 * Edit component.
 *
 * @return {Element} Block edit element.
 */
export default function Edit() {
	const blockProps = useBlockProps( {
		className: 'wp-block-shadcn-card-footer',
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
