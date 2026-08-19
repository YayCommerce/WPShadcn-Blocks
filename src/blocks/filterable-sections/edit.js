/**
 * WordPress dependencies
 */
import {
	InnerBlocks,
	InspectorControls,
	useBlockProps,
	store as blockEditorStore,
} from '@wordpress/block-editor';
import { PanelBody, SelectControl, TextControl } from '@wordpress/components';
import { useSelect } from '@wordpress/data';
import { __ } from '@wordpress/i18n';

const ALLOWED_BLOCKS = [ 'shadcn/filter-section' ];

/**
 * Resolve a block-gap value to CSS, mirroring render.php.
 *
 * Core only turns `blockGap` into CSS for blocks with layout support, so the
 * editor has to publish the same custom property the frontend does or the two
 * would disagree about how far apart the sections sit.
 *
 * @param {string|Object} blockGap Raw blockGap attribute value.
 * @return {string} A CSS length, or '' when unset or unrecognised.
 */
function resolveSectionsGap( blockGap ) {
	const raw = ( typeof blockGap === 'object' && null !== blockGap ? blockGap?.top : blockGap ) || '';
	const preset = /^var:preset\|spacing\|([A-Za-z0-9-]+)$/.exec( raw.trim() );

	if ( preset ) {
		return `var(--wp--preset--spacing--${ preset[ 1 ] })`;
	}

	return /^(0|[0-9]+(\.[0-9]+)?(px|rem|em|vh|vw|%))$/.test( raw.trim() ) ? raw.trim() : '';
}

/**
 * Two sections, so the dropdown has something to switch between as soon as
 * the block is inserted.
 */
const TEMPLATE = [
	[ 'shadcn/filter-section', { label: __( 'Engineering', 'shadcn-blocks' ) } ],
	[ 'shadcn/filter-section', { label: __( 'Design', 'shadcn-blocks' ) } ],
];

/**
 * Edit component.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit( { attributes, setAttributes, clientId } ) {
	const { filterLabel, allOptionLabel, control, controlPosition } = attributes;

	// Mirror render.php: the options are the children's labels, de-duplicated
	// in author order, so the preview shows exactly what the frontend will.
	const labels = useSelect(
		( select ) => {
			const sections = select( blockEditorStore ).getBlocks( clientId );
			const seen = [];

			sections.forEach( ( section ) => {
				const label = ( section.attributes?.label || '' ).trim();

				if ( '' !== label && ! seen.includes( label ) ) {
					seen.push( label );
				}
			} );

			return seen;
		},
		[ clientId ]
	);

	const sectionsGap = resolveSectionsGap( attributes.style?.spacing?.blockGap );

	// Mirror render.php's class list so the editor lays the block out exactly
	// the way the frontend will.
	const blockProps = useBlockProps( {
		className: `wp-block-shadcn-filterable-sections has-control-${ control } has-control-${ controlPosition }`,
	} );

	return (
		<>
			<InspectorControls>
				<PanelBody title={ __( 'Filter Settings', 'shadcn-blocks' ) }>
					<SelectControl
						label={ __( 'Control', 'shadcn-blocks' ) }
						value={ control }
						options={ [
							{ label: __( 'Dropdown', 'shadcn-blocks' ), value: 'dropdown' },
							{ label: __( 'Buttons', 'shadcn-blocks' ), value: 'buttons' },
						] }
						onChange={ ( value ) => setAttributes( { control: value } ) }
					/>
					<SelectControl
						label={ __( 'Control position', 'shadcn-blocks' ) }
						help={ __(
							'Beside the sections becomes a rail on wide screens and moves above them on narrow ones.',
							'shadcn-blocks'
						) }
						value={ controlPosition }
						options={ [
							{ label: __( 'Above the sections', 'shadcn-blocks' ), value: 'top' },
							{ label: __( 'Beside the sections', 'shadcn-blocks' ), value: 'side' },
						] }
						onChange={ ( value ) => setAttributes( { controlPosition: value } ) }
					/>
					<TextControl
						label={ __( 'Filter label', 'shadcn-blocks' ) }
						help={ __(
							'Leave empty to hide the label and show the dropdown on its own.',
							'shadcn-blocks'
						) }
						value={ filterLabel }
						onChange={ ( value ) => setAttributes( { filterLabel: value } ) }
					/>
					<TextControl
						label={ __( '"Show all" option', 'shadcn-blocks' ) }
						help={ __(
							'The option that clears the filter and shows every section.',
							'shadcn-blocks'
						) }
						value={ allOptionLabel }
						onChange={ ( value ) => setAttributes( { allOptionLabel: value } ) }
					/>
				</PanelBody>
			</InspectorControls>

			<div { ...blockProps }>
				{ /* The control is a faithful preview but inert here (see
				     editor.scss): filtering in the editor would hide the very
				     sections the author is trying to edit. */ }
				{ !! labels.length && (
					<div className="wp-block-shadcn-filterable-sections__control">
						{ !! filterLabel && (
							<span className="wp-block-shadcn-filterable-sections__label">
								{ filterLabel }
							</span>
						) }
						{ 'buttons' === control ? (
							<div
								className="wp-block-shadcn-filterable-sections__buttons"
								aria-hidden="true"
							>
								<span className="wp-block-shadcn-filterable-sections__button is-active">
									{ allOptionLabel }
								</span>
								{ labels.map( ( label ) => (
									<span
										key={ label }
										className="wp-block-shadcn-filterable-sections__button"
									>
										{ label }
									</span>
								) ) }
							</div>
						) : (
							<span className="wp-block-shadcn-filterable-sections__select-wrap">
								<select
									className="wp-block-shadcn-filterable-sections__select"
									tabIndex={ -1 }
									aria-hidden="true"
								>
									<option>{ allOptionLabel }</option>
									{ labels.map( ( label ) => (
										<option key={ label }>{ label }</option>
									) ) }
								</select>
							</span>
						) }
					</div>
				) }

				<div
					className="wp-block-shadcn-filterable-sections__sections"
					style={ sectionsGap ? { '--shadcn-filter-sections-gap': sectionsGap } : undefined }
				>
					<InnerBlocks
						allowedBlocks={ ALLOWED_BLOCKS }
						template={ TEMPLATE }
						templateLock={ false }
					/>
				</div>
			</div>
		</>
	);
}
