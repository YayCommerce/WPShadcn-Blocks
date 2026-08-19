/**
 * Filterable Sections frontend script.
 *
 * Shows only the sections matching the chosen filter. Sections are hidden by
 * class rather than the `hidden` attribute: `hidden` carries its
 * `display: none` from the UA stylesheet, so any author-set `display` on a
 * section would quietly outrank it and leave a "hidden" section on screen.
 *
 * Either control ends up calling the same `applyFilter`, so the dropdown and
 * the button rail can never drift apart in what they actually filter.
 */

const ROOT_SELECTOR = '.wp-block-shadcn-filterable-sections';
const HIDDEN_CLASS = 'is-filtered-out';
const ACTIVE_CLASS = 'is-active';

/**
 * Wire up a single filterable sections block.
 *
 * @param {HTMLElement} root The block's root element.
 */
function initFilterableSections( root ) {
	const container = root.querySelector( '.wp-block-shadcn-filterable-sections__sections' );

	if ( ! container ) {
		return;
	}

	const select = root.querySelector( '.wp-block-shadcn-filterable-sections__select' );
	const buttons = Array.from(
		root.querySelectorAll( '.wp-block-shadcn-filterable-sections__button' )
	);

	if ( ! select && ! buttons.length ) {
		return;
	}

	const sections = Array.from( container.children ).filter( ( child ) =>
		child.classList.contains( 'wp-block-shadcn-filter-section' )
	);

	if ( ! sections.length ) {
		return;
	}

	const applyFilter = ( selected ) => {
		sections.forEach( ( section ) => {
			const label = section.dataset.filterLabel || '';

			// An empty selection is "show everything"; an unlabelled section has
			// opted out of filtering and stays put whatever is chosen.
			const isVisible = '' === selected || '' === label || label === selected;

			section.classList.toggle( HIDDEN_CLASS, ! isVisible );
		} );

		buttons.forEach( ( button ) => {
			const isActive = button.value === selected;

			button.classList.toggle( ACTIVE_CLASS, isActive );
			button.setAttribute( 'aria-pressed', isActive ? 'true' : 'false' );
		} );
	};

	if ( select ) {
		select.addEventListener( 'change', () => applyFilter( select.value ) );
	}

	buttons.forEach( ( button ) => {
		button.addEventListener( 'click', () => applyFilter( button.value ) );
	} );

	// A browser restoring the previous selection on reload would otherwise
	// leave the markup showing every section while the control says otherwise.
	applyFilter( select ? select.value : '' );
}

/**
 * Initialize every filterable sections block on the page.
 */
function initAllFilterableSections() {
	document.querySelectorAll( ROOT_SELECTOR ).forEach( initFilterableSections );
}

// Initialize when DOM is ready.
if ( document.readyState === 'loading' ) {
	document.addEventListener( 'DOMContentLoaded', initAllFilterableSections );
} else {
	initAllFilterableSections();
}
