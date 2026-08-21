/**
 * WordPress dependencies
 */
import {
	InspectorControls,
	RichText,
	useBlockProps,
} from '@wordpress/block-editor';
import {
	PanelBody,
	TextControl,
	TextareaControl,
	ToggleControl,
} from '@wordpress/components';
import { __ } from '@wordpress/i18n';

/**
 * Edit component.
 *
 * Options are edited one-per-line; empty lines are dropped on save so authors
 * can space the list while typing without shipping blank options.
 *
 * @param {Object}   props               Block props.
 * @param {Object}   props.attributes    Block attributes.
 * @param {Function} props.setAttributes Attribute setter.
 * @return {Element} Block edit element.
 */
export default function Edit( { attributes, setAttributes } ) {
	const { label, fieldName, placeholder, required, options } = attributes;

	const blockProps = useBlockProps( {
		className: `wp-block-shadcn-select${ required ? ' is-required' : '' }`,
	} );

	return (
		<>
			<InspectorControls>
				<PanelBody title={ __( 'Field Settings', 'shadcn-blocks' ) }>
					<TextareaControl
						label={ __(
							'Options (one per line)',
							'shadcn-blocks'
						) }
						value={ options.join( '\n' ) }
						rows={ 6 }
						onChange={ ( value ) =>
							setAttributes( {
								options: value
									.split( '\n' )
									.map( ( line ) => line.trim() )
									.filter( ( line, index, lines ) =>
										// Keep trailing empty lines while typing; only drop
										// intermediate blanks on the stored value's edges.
										index === lines.length - 1
											? true
											: line !== ''
									),
							} )
						}
					/>
					<TextControl
						label={ __( 'Placeholder', 'shadcn-blocks' ) }
						value={ placeholder }
						help={ __(
							'Shown as the disabled first choice.',
							'shadcn-blocks'
						) }
						onChange={ ( value ) =>
							setAttributes( { placeholder: value } )
						}
					/>
					<ToggleControl
						label={ __( 'Required', 'shadcn-blocks' ) }
						checked={ required }
						onChange={ ( value ) =>
							setAttributes( { required: value } )
						}
					/>
					<TextControl
						label={ __( 'Field name', 'shadcn-blocks' ) }
						value={ fieldName }
						help={ __(
							'Optional. The submitted field key; derived from the label when empty.',
							'shadcn-blocks'
						) }
						onChange={ ( value ) =>
							setAttributes( { fieldName: value } )
						}
					/>
				</PanelBody>
			</InspectorControls>
			<div { ...blockProps }>
				<RichText
					tagName="label"
					className="wp-block-shadcn-select__label"
					value={ label }
					allowedFormats={ [] }
					placeholder={ __( 'Label', 'shadcn-blocks' ) }
					onChange={ ( value ) => setAttributes( { label: value } ) }
				/>
				<select
					className="wp-block-shadcn-select__control"
					disabled
					aria-hidden="true"
				>
					<option>
						{ placeholder ||
							( options.filter( Boolean ).length
								? options.filter( Boolean )[ 0 ]
								: __(
										'Add options in the sidebar',
										'shadcn-blocks'
								  ) ) }
					</option>
				</select>
			</div>
		</>
	);
}
