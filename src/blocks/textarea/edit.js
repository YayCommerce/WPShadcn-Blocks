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
	RangeControl,
	TextControl,
	ToggleControl,
} from '@wordpress/components';
import { __ } from '@wordpress/i18n';

/**
 * Edit component.
 *
 * @param {Object}   props               Block props.
 * @param {Object}   props.attributes    Block attributes.
 * @param {Function} props.setAttributes Attribute setter.
 * @return {Element} Block edit element.
 */
export default function Edit( { attributes, setAttributes } ) {
	const { label, fieldName, placeholder, required, rows } = attributes;

	const blockProps = useBlockProps( {
		className: `wp-block-shadcn-textarea${
			required ? ' is-required' : ''
		}`,
	} );

	return (
		<>
			<InspectorControls>
				<PanelBody title={ __( 'Field Settings', 'yaycommerce-blocks-for-shadcn-ui' ) }>
					<TextControl
						label={ __( 'Placeholder', 'yaycommerce-blocks-for-shadcn-ui' ) }
						value={ placeholder }
						onChange={ ( value ) =>
							setAttributes( { placeholder: value } )
						}
					/>
					<RangeControl
						label={ __( 'Rows', 'yaycommerce-blocks-for-shadcn-ui' ) }
						value={ rows }
						min={ 2 }
						max={ 20 }
						onChange={ ( value ) =>
							setAttributes( { rows: value } )
						}
					/>
					<ToggleControl
						label={ __( 'Required', 'yaycommerce-blocks-for-shadcn-ui' ) }
						checked={ required }
						onChange={ ( value ) =>
							setAttributes( { required: value } )
						}
					/>
					<TextControl
						label={ __( 'Field name', 'yaycommerce-blocks-for-shadcn-ui' ) }
						value={ fieldName }
						help={ __(
							'Optional. The submitted field key; derived from the label when empty.',
							'yaycommerce-blocks-for-shadcn-ui'
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
					className="wp-block-shadcn-textarea__label"
					value={ label }
					allowedFormats={ [] }
					placeholder={ __( 'Label', 'yaycommerce-blocks-for-shadcn-ui' ) }
					onChange={ ( value ) => setAttributes( { label: value } ) }
				/>
				{ /* readOnly: the control is a preview; typing belongs to the frontend. */ }
				<textarea
					className="wp-block-shadcn-textarea__control"
					placeholder={ placeholder }
					rows={ rows }
					readOnly
				/>
			</div>
		</>
	);
}
