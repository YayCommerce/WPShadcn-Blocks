/**
 * core/button icon extension (editor side).
 *
 * Adds the SHARED icon picker to the core Button block from inside this plugin
 * (Approach 1 — no cross-build bridge to the theme). Three hooks:
 *   1. blocks.registerBlockType  → declare the shared icon attributes.
 *   2. editor.BlockEdit          → add the "Icon" inspector panel.
 *   3. editor.BlockListBlock     → canvas preview (icon via CSS mask so it
 *                                  inherits the button's text color).
 *
 * The FRONTEND render is handled server-side in inc/Icons.php via a
 * render_block_core/button filter (real inline SVG), so nothing is saved into
 * the button markup here.
 */

import { addFilter } from '@wordpress/hooks';
import { createHigherOrderComponent } from '@wordpress/compose';
import { Fragment } from '@wordpress/element';
import { InspectorControls } from '@wordpress/block-editor';
import {
	ICON_ATTRIBUTES,
	buildIconClasses,
} from '../../shared/icons/icon-attributes.js';
import { ICON_REGISTRY } from '../../shared/icons/icon-registry.js';
import { IconPanelBody } from '../../shared/icons/icon-panel.js';

const TARGET = 'core/button';

/**
 * 1. Declare the shared icon attributes on core/button.
 */
addFilter(
	'blocks.registerBlockType',
	'shadcn-blocks/button-icon-attributes',
	( settings, name ) => {
		if ( TARGET !== name || ! settings.attributes ) {
			return settings;
		}
		settings.attributes = { ...settings.attributes, ...ICON_ATTRIBUTES };
		return settings;
	}
);

/**
 * 2. Add the shared Icon inspector panel to core/button.
 */
const withIconInspector = createHigherOrderComponent( ( BlockEdit ) => {
	return ( props ) => {
		if ( TARGET !== props.name ) {
			return <BlockEdit { ...props } />;
		}
		return (
			<Fragment>
				<BlockEdit { ...props } />
				{ props.isSelected && (
					<InspectorControls>
						<IconPanelBody
							attributes={ props.attributes }
							setAttributes={ props.setAttributes }
						/>
					</InspectorControls>
				) }
			</Fragment>
		);
	};
}, 'withIconInspector' );

addFilter(
	'editor.BlockEdit',
	'shadcn-blocks/button-icon-inspector',
	withIconInspector
);

/**
 * 3. Canvas preview: expose the selected icon as a CSS mask on the wrapper so
 *    the editor button shows the icon in the correct position/size/color.
 *    (Frontend uses a real inline SVG; this is editor-only.)
 */
const withIconPreview = createHigherOrderComponent( ( BlockListBlock ) => {
	return ( props ) => {
		const { name, attributes } = props;
		if ( TARGET !== name || ! attributes || ! attributes.iconName ) {
			return <BlockListBlock { ...props } />;
		}

		const svg = ICON_REGISTRY[ attributes.iconName ];
		if ( ! svg ) {
			return <BlockListBlock { ...props } />;
		}

		const dataUri = 'data:image/svg+xml;utf8,' + encodeURIComponent( svg );

		// Shared class contract (single source: buildIconClasses()).
		const iconClasses = buildIconClasses(
			attributes.iconName,
			attributes.iconPosition
		);

		const wrapperProps = { ...( props.wrapperProps || {} ) };
		wrapperProps.className = `${
			wrapperProps.className || ''
		} ${ iconClasses }`.trim();
		wrapperProps.style = {
			...( wrapperProps.style || {} ),
			'--shadcn-btn-icon': `url("${ dataUri }")`,
		};
		if ( attributes.iconSize ) {
			wrapperProps.style[ '--shadcn-btn-icon-size' ] =
				attributes.iconSize;
		}

		return <BlockListBlock { ...props } wrapperProps={ wrapperProps } />;
	};
}, 'withIconPreview' );

addFilter(
	'editor.BlockListBlock',
	'shadcn-blocks/button-icon-preview',
	withIconPreview
);
