/**
 * Ready-made "Icon" inspector panel composing the picker + layout controls.
 *
 * Both the Badge block and the core/button extension drop this in so there is
 * exactly one place that reads/writes the shared icon attributes.
 */

import { __ } from '@wordpress/i18n';
import { PanelBody } from '@wordpress/components';
import { IconPicker } from './icon-picker.js';
import { IconControls } from './icon-controls.js';

/**
 * Icon PanelBody bound to the shared `iconName/iconPosition/iconSize` attrs.
 *
 * @param {Object}   props
 * @param {Object}   props.attributes    Block attributes (must include icon attrs).
 * @param {Function} props.setAttributes Block attribute setter.
 * @param {boolean}  [props.initialOpen] PanelBody initial open state.
 * @return {JSX.Element} Panel UI.
 */
export function IconPanelBody( {
	attributes,
	setAttributes,
	initialOpen = false,
} ) {
	const { iconName = '', iconPosition = 'left', iconSize = '' } = attributes;

	return (
		<PanelBody
			title={ __( 'Icon', 'yaycommerce-blocks-for-shadcn-ui' ) }
			initialOpen={ initialOpen }
		>
			<IconPicker
				value={ iconName }
				onChange={ ( name ) => setAttributes( { iconName: name } ) }
			/>
			{ iconName && (
				<IconControls
					position={ iconPosition }
					size={ iconSize }
					onChangePosition={ ( position ) =>
						setAttributes( { iconPosition: position } )
					}
					onChangeSize={ ( size ) =>
						setAttributes( { iconSize: size } )
					}
				/>
			) }
		</PanelBody>
	);
}
