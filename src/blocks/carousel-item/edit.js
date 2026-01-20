/**
 * WordPress dependencies
 */
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';

/**
 * Default slide template.
 */
const TEMPLATE = [
	[
		'core/heading',
		{
			content: 'Carousel Item 1',
		},
	],
	[
		'core/paragraph',
		{
			content: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
		}
	]
];

/**
 * Edit component.
 *
 * @return {Element} Block edit element.
 */
export default function Edit() {
	const blockProps = useBlockProps( {
		className: 'wp-block-shadcn-carousel-item',
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
