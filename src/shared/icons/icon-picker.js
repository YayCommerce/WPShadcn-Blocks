/**
 * Shared icon picker: a searchable grid over the curated Lucide registry.
 *
 * Block-agnostic — consumed by the Badge block, the core/button extension and
 * the Message block's action list (which reuses IconGrid directly).
 * Selecting sets the `iconName` slug; the registry SVG (build-generated and
 * already normalized) is injected via RawHTML for the editor preview.
 */

import { __ } from '@wordpress/i18n';
import { useState, useMemo, RawHTML } from '@wordpress/element';
import { Button, Dropdown, SearchControl } from '@wordpress/components';
import { ICON_REGISTRY, ICON_SLUGS } from './icon-registry.js';

/**
 * Inline SVG glyph for a slug (empty output when unknown).
 *
 * @param {Object} props
 * @param {string} props.name Icon slug.
 * @return {JSX.Element|null} RawHTML SVG or null.
 */
export function IconGlyph( { name } ) {
	const svg = name ? ICON_REGISTRY[ name ] : '';
	if ( ! svg ) {
		return null;
	}
	return <RawHTML>{ svg }</RawHTML>;
}

/**
 * The searchable grid shown inside the picker dropdown.
 *
 * @param {Object}   props
 * @param {string}   props.value    Current slug.
 * @param {Function} props.onSelect Called with the picked slug, then closes.
 * @return {JSX.Element} Grid UI.
 */
export function IconGrid( { value, onSelect } ) {
	const [ query, setQuery ] = useState( '' );

	const results = useMemo( () => {
		const q = query.trim().toLowerCase();
		if ( ! q ) {
			return ICON_SLUGS;
		}
		return ICON_SLUGS.filter( ( slug ) => slug.includes( q ) );
	}, [ query ] );

	return (
		<div className="shadcn-icon-picker__panel">
			<SearchControl
				__nextHasNoMarginBottom
				value={ query }
				onChange={ setQuery }
				placeholder={ __( 'Search icons…', 'yaycommerce-blocks-for-shadcn-ui' ) }
			/>
			{ results.length === 0 ? (
				<p className="shadcn-icon-picker__empty">
					{ __( 'No icons found.', 'yaycommerce-blocks-for-shadcn-ui' ) }
				</p>
			) : (
				<div
					className="shadcn-icon-picker__grid"
					role="listbox"
					aria-label={ __( 'Icons', 'yaycommerce-blocks-for-shadcn-ui' ) }
				>
					{ results.map( ( slug ) => (
						<Button
							key={ slug }
							className="shadcn-icon-picker__cell"
							isPressed={ slug === value }
							label={ slug }
							showTooltip
							role="option"
							aria-selected={ slug === value }
							onClick={ () => onSelect( slug ) }
						>
							<IconGlyph name={ slug } />
						</Button>
					) ) }
				</div>
			) }
		</div>
	);
}

/**
 * Icon picker control: trigger button + dropdown grid + remove action.
 *
 * @param {Object}   props
 * @param {string}   props.value    Current slug ('' = none).
 * @param {Function} props.onChange Called with the new slug ('' to clear).
 * @return {JSX.Element} Picker UI.
 */
export function IconPicker( { value, onChange } ) {
	return (
		<div className="shadcn-icon-picker">
			<Dropdown
				className="shadcn-icon-picker__dropdown"
				contentClassName="shadcn-icon-picker__content"
				popoverProps={ { placement: 'bottom-start' } }
				renderToggle={ ( { isOpen, onToggle } ) => (
					<Button
						variant="secondary"
						onClick={ onToggle }
						aria-expanded={ isOpen }
						className="shadcn-icon-picker__toggle"
					>
						{ value ? (
							<>
								<span className="shadcn-icon-picker__toggle-glyph">
									<IconGlyph name={ value } />
								</span>
								<span className="shadcn-icon-picker__toggle-label">
									{ value }
								</span>
							</>
						) : (
							__( 'Select icon', 'yaycommerce-blocks-for-shadcn-ui' )
						) }
					</Button>
				) }
				renderContent={ ( { onClose } ) => (
					<IconGrid
						value={ value }
						onSelect={ ( slug ) => {
							onChange( slug );
							onClose();
						} }
					/>
				) }
			/>
			{ value && (
				<Button
					variant="tertiary"
					isDestructive
					className="shadcn-icon-picker__remove"
					onClick={ () => onChange( '' ) }
				>
					{ __( 'Remove', 'yaycommerce-blocks-for-shadcn-ui' ) }
				</Button>
			) }
		</div>
	);
}
