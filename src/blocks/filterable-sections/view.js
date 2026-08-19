/**
 * Filterable Sections frontend script.
 *
 * Shows only the sections matching the chosen filter. Sections are hidden by
 * class rather than the `hidden` attribute: `hidden` carries its
 * `display: none` from the UA stylesheet, so any author-set `display` on a
 * section would quietly outrank it and leave a "hidden" section on screen.
 */

const ROOT_SELECTOR = '.wp-block-shadcn-filterable-sections';
const HIDDEN_CLASS = 'is-filtered-out';

/**
 * Wire up a single filterable sections block.
 *
 * @param {HTMLElement} root The block's root element.
 */
function initFilterableSections( root ) {
	const select = root.querySelector( '.wp-block-shadcn-filterable-sections__select' );
	const container = root.querySelector( '.wp-block-shadcn-filterable-sections__sections' );

	if ( ! select || ! container ) {
		return;
	}

	const sections = Array.from( container.children ).filter( ( child ) =>
		child.classList.contains( 'wp-block-shadcn-filter-section' )
	);

	if ( ! sections.length ) {
		return;
	}

	const applyFilter = () => {
		const selected = select.value;

		sections.forEach( ( section ) => {
			const label = section.dataset.filterLabel || '';

			// An empty selection is "show everything"; an unlabelled section has
			// opted out of filtering and stays put whatever is chosen.
			const isVisible = '' === selected || '' === label || label === selected;

			section.classList.toggle( HIDDEN_CLASS, ! isVisible );
		} );
	};

	select.addEventListener( 'change', applyFilter );

	// A browser restoring the previous selection on reload would otherwise
	// leave the markup showing every section while the control says otherwise.
	applyFilter();
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
