/**
 * WordPress dependencies
 */
import {
	InnerBlocks,
	InspectorControls,
	useBlockProps,
	store as blockEditorStore,
} from '@wordpress/block-editor';
import { PanelBody, TextControl } from '@wordpress/components';
import { useSelect } from '@wordpress/data';
import { __ } from '@wordpress/i18n';

const ALLOWED_BLOCKS = [ 'shadcn/filter-section' ];

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
	const { filterLabel, allOptionLabel } = attributes;

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

	const blockProps = useBlockProps( {
		className: 'wp-block-shadcn-filterable-sections',
	} );

	return (
		<>
			<InspectorControls>
				<PanelBody title={ __( 'Filter Settings', 'shadcn-blocks' ) }>
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
					</div>
				) }

				<div className="wp-block-shadcn-filterable-sections__sections">
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
