/**
 * WordPress dependencies
 */
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

/**
 * Card block template.
 */
const TEMPLATE = [
	[
		'shadcn/card-header',
		{},
		[
			[
				'core/heading',
				{
					content: 'Billing Address',
					style: {
						typography: {
							fontWeight: '600',
						},
						spacing: {
							margin: {
								top: '0',
								bottom: '0',
							},
						},
					},
				},
			],
			[
				'core/paragraph',
				{
					content: 'The following addresses will be used on the checkout page by default.',
					style: {
						typography: {
							fontSize: 'var(--wp--preset--font-size--sm)',
						},
						color: {
							text: 'var(--wp--preset--color--muted-foreground)',
						},
						spacing: {
							margin: {
								top: '0',
								bottom: '0',
							},
						},
					},
				},
			],
		],
	],
	[
		'shadcn/card-content',
		{},
		[
			[
				'core/paragraph',
				{
					content: 'EBECKS SYSTEMS\nSP.O.Box TK 348\nTarkwa\nHU5 1BA\nUnited Kingdom (UK)\nTarkwa\nHU5 1BA\nUnited Kingdom (UK)',
				},
			],
		],
	],
	[
		'shadcn/card-footer',
		{},
		[
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
							text: 'Details',
						},
					],
				],
			],
		],
	],
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
