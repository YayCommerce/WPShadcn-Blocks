/**
 * Alert frontend script.
 *
 * Handles dismissible alert functionality.
 */

/**
 * Initialize a single alert.
 *
 * @param {HTMLElement} alert The alert container element.
 */
function initAlert( alert ) {
	const dismissButton = alert.querySelector( '.alert-dismiss' );
	
	if ( ! dismissButton ) {
		return;
	}

	dismissButton.addEventListener( 'click', () => {
		// Add fade-out animation class
		alert.classList.add( 'alert-dismissing' );
		
		// Remove alert after animation
		setTimeout( () => {
			alert.style.display = 'none';
		}, 300 );
	} );
}

/**
 * Initialize all alerts on the page.
 */
function initAllAlerts() {
	const alerts = document.querySelectorAll( '.wp-block-wpshadcn-alert.alert-dismissible' );
	alerts.forEach( initAlert );
}

// Initialize when DOM is ready.
if ( document.readyState === 'loading' ) {
	document.addEventListener( 'DOMContentLoaded', initAllAlerts );
} else {
	initAllAlerts();
}
