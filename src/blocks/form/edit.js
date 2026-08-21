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
		{ label: __( 'Name', 'shadcn-blocks' ), required: true },
	],
	[
		'shadcn/input',
		{
			label: __( 'Email', 'shadcn-blocks' ),
			type: 'email',
			required: true,
		},
	],
	[ 'shadcn/textarea', { label: __( 'Message', 'shadcn-blocks' ) } ],
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
				<PanelBody title={ __( 'Form Settings', 'shadcn-blocks' ) }>
					<TextControl
						label={ __( 'Form name', 'shadcn-blocks' ) }
						value={ formName }
						help={ __(
							'Used as the email subject.',
							'shadcn-blocks'
						) }
						onChange={ ( value ) =>
							setAttributes( { formName: value } )
						}
					/>
					<TextControl
						label={ __( 'Recipient email', 'shadcn-blocks' ) }
						type="email"
						value={ recipient }
						help={
							recipientLooksWrong
								? __(
										'This does not look like an email address; the site admin email will be used instead.',
										'shadcn-blocks'
								  )
								: __(
										'Optional. Defaults to the site admin email.',
										'shadcn-blocks'
								  )
						}
						onChange={ ( value ) =>
							setAttributes( { recipient: value } )
						}
					/>
					<TextControl
						label={ __( 'Success message', 'shadcn-blocks' ) }
						value={ successMessage }
						help={ __(
							'Shown in place of the fields after a successful submit.',
							'shadcn-blocks'
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
