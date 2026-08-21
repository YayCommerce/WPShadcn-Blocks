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
	SelectControl,
	TextControl,
	ToggleControl,
} from '@wordpress/components';
import { __ } from '@wordpress/i18n';

/**
 * Type options shared with render.php's allow-list.
 */
const TYPE_OPTIONS = [
	{ label: __( 'Text', 'shadcn-blocks' ), value: 'text' },
	{ label: __( 'Email', 'shadcn-blocks' ), value: 'email' },
	{ label: __( 'Phone', 'shadcn-blocks' ), value: 'tel' },
];

/**
 * Edit component.
 *
 * @param {Object}   props               Block props.
 * @param {Object}   props.attributes    Block attributes.
 * @param {Function} props.setAttributes Attribute setter.
 * @return {Element} Block edit element.
 */
export default function Edit( { attributes, setAttributes } ) {
	const { label, fieldName, type, placeholder, required } = attributes;

	const blockProps = useBlockProps( {
		className: `wp-block-shadcn-input${ required ? ' is-required' : '' }`,
	} );

	return (
		<>
			<InspectorControls>
				<PanelBody title={ __( 'Field Settings', 'shadcn-blocks' ) }>
					<SelectControl
						label={ __( 'Type', 'shadcn-blocks' ) }
						value={ type }
						options={ TYPE_OPTIONS }
						onChange={ ( value ) =>
							setAttributes( { type: value } )
						}
					/>
					<TextControl
						label={ __( 'Placeholder', 'shadcn-blocks' ) }
						value={ placeholder }
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
					className="wp-block-shadcn-input__label"
					value={ label }
					allowedFormats={ [] }
					placeholder={ __( 'Label', 'shadcn-blocks' ) }
					onChange={ ( value ) => setAttributes( { label: value } ) }
				/>
				{ /* readOnly: the control is a preview; typing belongs to the frontend. */ }
				<input
					type="text"
					className="wp-block-shadcn-input__control"
					placeholder={ placeholder }
					readOnly
				/>
			</div>
		</>
	);
}
