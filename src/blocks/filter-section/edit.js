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
			placeholder: __( 'Add the content for this section…', 'shadcn-blocks' ),
		},
	],
];

const HEADING_LEVELS = [
	{ label: __( 'H2', 'shadcn-blocks' ), value: 2 },
	{ label: __( 'H3', 'shadcn-blocks' ), value: 3 },
	{ label: __( 'H4', 'shadcn-blocks' ), value: 4 },
	{ label: __( 'H5', 'shadcn-blocks' ), value: 5 },
	{ label: __( 'H6', 'shadcn-blocks' ), value: 6 },
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
				<PanelBody title={ __( 'Section Settings', 'shadcn-blocks' ) }>
					<TextControl
						label={ __( 'Label', 'shadcn-blocks' ) }
						help={ __(
							'Shown as this section’s heading and as its option in the filter. Leave empty to keep the section visible under every filter.',
							'shadcn-blocks'
						) }
						value={ label }
						onChange={ ( value ) => setAttributes( { label: value } ) }
					/>
					<ToggleControl
						label={ __( 'Show label as heading', 'shadcn-blocks' ) }
						help={ __(
							'Turn off to keep this section filterable without printing a heading above it.',
							'shadcn-blocks'
						) }
						checked={ showLabel }
						onChange={ ( value ) => setAttributes( { showLabel: value } ) }
					/>
					{ showLabel && (
						<SelectControl
							label={ __( 'Heading level', 'shadcn-blocks' ) }
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
						{ __( 'Unlabelled section — always visible', 'shadcn-blocks' ) }
					</p>
				) }

				<InnerBlocks template={ TEMPLATE } templateLock={ false } />
			</div>
		</>
	);
}
