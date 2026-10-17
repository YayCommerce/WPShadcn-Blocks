/**
 * WordPress dependencies
 */
import {
	InnerBlocks,
	InspectorControls,
	useBlockProps,
} from '@wordpress/block-editor';
import {
	PanelBody,
	SelectControl,
	TextControl,
	ToggleControl,
} from '@wordpress/components';
import { __ } from '@wordpress/i18n';

/**
 * A heading is not part of the template: the section renders its own from the
 * label, so a heading block here would duplicate it.
 */
const TEMPLATE = [
	[
		'core/paragraph',
		{
			placeholder: __( 'Add the content for this section…', 'yaycommerce-blocks-for-shadcn-ui' ),
		},
	],
];

const HEADING_LEVELS = [
	{ label: __( 'H2', 'yaycommerce-blocks-for-shadcn-ui' ), value: 2 },
	{ label: __( 'H3', 'yaycommerce-blocks-for-shadcn-ui' ), value: 3 },
	{ label: __( 'H4', 'yaycommerce-blocks-for-shadcn-ui' ), value: 4 },
	{ label: __( 'H5', 'yaycommerce-blocks-for-shadcn-ui' ), value: 5 },
	{ label: __( 'H6', 'yaycommerce-blocks-for-shadcn-ui' ), value: 6 },
];

/**
 * Edit component.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit( { attributes, setAttributes } ) {
	const { label, headingLevel, showLabel } = attributes;

	const blockProps = useBlockProps( {
		className: 'wp-block-shadcn-filter-section',
	} );

	const HeadingTag = `h${ headingLevel }`;

	return (
		<>
			<InspectorControls>
				<PanelBody title={ __( 'Section Settings', 'yaycommerce-blocks-for-shadcn-ui' ) }>
					<TextControl
						label={ __( 'Label', 'yaycommerce-blocks-for-shadcn-ui' ) }
						help={ __(
							'Shown as this section’s heading and as its option in the filter. Leave empty to keep the section visible under every filter.',
							'yaycommerce-blocks-for-shadcn-ui'
						) }
						value={ label }
						onChange={ ( value ) => setAttributes( { label: value } ) }
					/>
					<ToggleControl
						label={ __( 'Show label as heading', 'yaycommerce-blocks-for-shadcn-ui' ) }
						help={ __(
							'Turn off to keep this section filterable without printing a heading above it.',
							'yaycommerce-blocks-for-shadcn-ui'
						) }
						checked={ showLabel }
						onChange={ ( value ) => setAttributes( { showLabel: value } ) }
					/>
					{ showLabel && (
						<SelectControl
							label={ __( 'Heading level', 'yaycommerce-blocks-for-shadcn-ui' ) }
							value={ headingLevel }
							options={ HEADING_LEVELS }
							onChange={ ( value ) =>
								setAttributes( { headingLevel: parseInt( value, 10 ) } )
							}
						/>
					) }
				</PanelBody>
			</InspectorControls>

			<div { ...blockProps }>
				{ /* With the heading turned off the label still matters — it is what
				     the filter matches on — so the editor keeps showing it as a
				     caption, or the author cannot tell these sections apart. */ }
				{ label && showLabel && (
					<HeadingTag className="wp-block-shadcn-filter-section__title">
						{ label }
					</HeadingTag>
				) }
				{ label && ! showLabel && (
					<p className="wp-block-shadcn-filter-section__title-placeholder">
						{ label }
					</p>
				) }
				{ ! label && (
					<p className="wp-block-shadcn-filter-section__title-placeholder">
						{ __( 'Unlabelled section — always visible', 'yaycommerce-blocks-for-shadcn-ui' ) }
					</p>
				) }

				<InnerBlocks template={ TEMPLATE } templateLock={ false } />
			</div>
		</>
	);
}
