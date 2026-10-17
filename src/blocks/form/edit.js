/**
 * WordPress dependencies
 */
import {
	InnerBlocks,
	InspectorControls,
	useBlockProps,
} from '@wordpress/block-editor';
import { PanelBody, TextControl } from '@wordpress/components';
import { __ } from '@wordpress/i18n';

/**
 * Starter layout: the classic contact trio plus a submit button. Authors can
 * remove or add fields freely; this only seeds the first insert.
 */
const TEMPLATE = [
	[
		'shadcn/input',
		{ label: __( 'Name', 'yaycommerce-blocks-for-shadcn-ui' ), required: true },
	],
	[
		'shadcn/input',
		{
			label: __( 'Email', 'yaycommerce-blocks-for-shadcn-ui' ),
			type: 'email',
			required: true,
		},
	],
	[ 'shadcn/textarea', { label: __( 'Message', 'yaycommerce-blocks-for-shadcn-ui' ) } ],
	[ 'shadcn/form-submit', {} ],
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
	const { formName, recipient, successMessage } = attributes;

	const blockProps = useBlockProps( {
		className: 'wp-block-shadcn-form',
	} );

	const recipientLooksWrong =
		recipient !== '' && ! /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test( recipient );

	return (
		<>
			<InspectorControls>
				<PanelBody title={ __( 'Form Settings', 'yaycommerce-blocks-for-shadcn-ui' ) }>
					<TextControl
						label={ __( 'Form name', 'yaycommerce-blocks-for-shadcn-ui' ) }
						value={ formName }
						help={ __(
							'Used as the email subject.',
							'yaycommerce-blocks-for-shadcn-ui'
						) }
						onChange={ ( value ) =>
							setAttributes( { formName: value } )
						}
					/>
					<TextControl
						label={ __( 'Recipient email', 'yaycommerce-blocks-for-shadcn-ui' ) }
						type="email"
						value={ recipient }
						help={
							recipientLooksWrong
								? __(
										'This does not look like an email address; the site admin email will be used instead.',
										'yaycommerce-blocks-for-shadcn-ui'
								  )
								: __(
										'Optional. Defaults to the site admin email.',
										'yaycommerce-blocks-for-shadcn-ui'
								  )
						}
						onChange={ ( value ) =>
							setAttributes( { recipient: value } )
						}
					/>
					<TextControl
						label={ __( 'Success message', 'yaycommerce-blocks-for-shadcn-ui' ) }
						value={ successMessage }
						help={ __(
							'Shown in place of the fields after a successful submit.',
							'yaycommerce-blocks-for-shadcn-ui'
						) }
						onChange={ ( value ) =>
							setAttributes( { successMessage: value } )
						}
					/>
				</PanelBody>
			</InspectorControls>
			<div { ...blockProps }>
				<div className="wp-block-shadcn-form__fields">
					<InnerBlocks template={ TEMPLATE } />
				</div>
			</div>
		</>
	);
}
