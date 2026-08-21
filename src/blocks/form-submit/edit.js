/**
 * WordPress dependencies
 */
import {
	InspectorControls,
	RichText,
	useBlockProps,
} from '@wordpress/block-editor';
/* eslint-disable @wordpress/no-unsafe-wp-apis -- same segmented control the accordion block already uses; mirrors core/button's width UI. */
import {
	PanelBody,
	__experimentalToggleGroupControl as ToggleGroupControl,
	__experimentalToggleGroupControlOption as ToggleGroupControlOption,
} from '@wordpress/components';
/* eslint-enable @wordpress/no-unsafe-wp-apis */
import { __ } from '@wordpress/i18n';

/**
 * Width choices mirroring core/button's control: percentages of the form's
 * width, deselectable back to auto (button hugs its label).
 */
const WIDTHS = [ 25, 50, 75, 100 ];

/**
 * Edit component.
 *
 * @param {Object}   props               Block props.
 * @param {Object}   props.attributes    Block attributes.
 * @param {Function} props.setAttributes Attribute setter.
 * @return {Element} Block edit element.
 */
export default function Edit( { attributes, setAttributes } ) {
	const { label, width, alignment } = attributes;

	const blockProps = useBlockProps( {
		className: `wp-block-shadcn-form-submit wp-element-button${
			alignment ? ` is-align-${ alignment }` : ''
		}`,
		style: width ? { width: `${ width }%` } : undefined,
	} );

	return (
		<>
			<InspectorControls>
				<PanelBody title={ __( 'Button Settings', 'shadcn-blocks' ) }>
					<ToggleGroupControl
						label={ __( 'Width', 'shadcn-blocks' ) }
						value={ width }
						isDeselectable
						isBlock
						__nextHasNoMarginBottom
						help={ __(
							'Percentage of the form width; unset stretches to the full form.',
							'shadcn-blocks'
						) }
						onChange={ ( value ) =>
							setAttributes( { width: value } )
						}
					>
						{ WIDTHS.map( ( value ) => (
							<ToggleGroupControlOption
								key={ value }
								value={ value }
								label={ `${ value }%` }
							/>
						) ) }
					</ToggleGroupControl>
					<ToggleGroupControl
						label={ __( 'Alignment', 'shadcn-blocks' ) }
						value={ alignment || undefined }
						isDeselectable
						isBlock
						__nextHasNoMarginBottom
						help={ __(
							'Choosing an alignment stops the full-width stretch.',
							'shadcn-blocks'
						) }
						onChange={ ( value ) =>
							setAttributes( { alignment: value || '' } )
						}
					>
						<ToggleGroupControlOption
							value="left"
							label={ __( 'Left', 'shadcn-blocks' ) }
						/>
						<ToggleGroupControlOption
							value="center"
							label={ __( 'Center', 'shadcn-blocks' ) }
						/>
						<ToggleGroupControlOption
							value="right"
							label={ __( 'Right', 'shadcn-blocks' ) }
						/>
					</ToggleGroupControl>
				</PanelBody>
			</InspectorControls>
			{ /* A div in the editor: a real <button> would swallow typing. */ }
			<div { ...blockProps }>
				<RichText
					tagName="span"
					className="wp-block-shadcn-form-submit__label"
					value={ label }
					allowedFormats={ [] }
					placeholder={ __( 'Submit', 'shadcn-blocks' ) }
					onChange={ ( value ) => setAttributes( { label: value } ) }
				/>
			</div>
		</>
	);
}
