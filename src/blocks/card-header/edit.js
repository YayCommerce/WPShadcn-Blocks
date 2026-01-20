/**
 * WordPress dependencies
 */
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';

/**
 * Card header template.
 */
const TEMPLATE = [
	[
		'core/heading',
		{
			level: 3,
			placeholder: __( 'Card Title', 'shadcn-blocks' ),
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
			placeholder: __( 'Card description', 'shadcn-blocks' ),
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
];

/**
 * Edit component.
 *
 * @return {Element} Block edit element.
 */
export default function Edit() {
	const blockProps = useBlockProps( {
		className: 'wp-block-shadcn-card-header',
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
