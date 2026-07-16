/**
 * Shared icon layout controls: position (left/right) + size.
 *
 * Block-agnostic — pairs with IconPicker. Only meaningful once an icon is set,
 * so callers should render it after a non-empty `iconName`.
 */

import { __ } from '@wordpress/i18n';
import {
	__experimentalToggleGroupControl as ToggleGroupControl,
	__experimentalToggleGroupControlOption as ToggleGroupControlOption,
	__experimentalUnitControl as UnitControl,
} from '@wordpress/components';

/**
 * Position + size controls for a selected icon.
 *
 * @param {Object}   props
 * @param {string}   props.position         'left' | 'right'.
 * @param {string}   props.size             CSS size string ('' = inherit).
 * @param {Function} props.onChangePosition Position setter.
 * @param {Function} props.onChangeSize     Size setter (receives '' when cleared).
 * @return {JSX.Element} Controls UI.
 */
export function IconControls( {
	position,
	size,
	onChangePosition,
	onChangeSize,
} ) {
	return (
		<>
			<ToggleGroupControl
				__nextHasNoMarginBottom
				__next40pxDefaultSize
				isBlock
				label={ __( 'Icon position', 'shadcn-blocks' ) }
				value={ position || 'left' }
				onChange={ ( next ) => onChangePosition( next ) }
			>
				<ToggleGroupControlOption
					value="left"
					label={ __( 'Left', 'shadcn-blocks' ) }
				/>
				<ToggleGroupControlOption
					value="right"
					label={ __( 'Right', 'shadcn-blocks' ) }
				/>
			</ToggleGroupControl>
			<UnitControl
				__next40pxDefaultSize
				label={ __( 'Icon size', 'shadcn-blocks' ) }
				value={ size }
				onChange={ ( next ) => onChangeSize( next || '' ) }
				units={ [
					{ value: 'px', label: 'px' },
					{ value: 'em', label: 'em' },
					{ value: 'rem', label: 'rem' },
				] }
				placeholder={ __( 'Inherit', 'shadcn-blocks' ) }
			/>
		</>
	);
}
