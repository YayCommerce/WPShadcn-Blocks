/**
 * Form frontend script.
 *
 * Intercepts submit on every .wp-block-shadcn-form, posts the fields as JSON
 * to the REST endpoint named in data-rest-url, and toggles the server-rendered
 * (already localized) success/error messages. Native HTML validation runs
 * before the submit event fires, so required fields are enforced without any
 * code here.
 *
 * Plain script on purpose — mirrors countdown/view.js rather than the
 * Interactivity API blocks: interactivity view modules in this plugin need a
 * three-place registration (webpack FixInteractivityPlugin, Plugin.php config,
 * no viewScript field) and their content-scan enqueue misses FSE template
 * areas, while a block.json viewScript loads wherever the block renders.
 */

const FORM_SELECTOR = '.wp-block-shadcn-form';

/**
 * Collect submittable fields as { label, value } pairs.
 *
 * The label travels on data-field-label (stamped by the field renders); the
 * honeypot and anything unnamed is skipped. Order follows DOM order so the
 * mail body reads like the form.
 *
 * @param {HTMLFormElement} form The form element.
 * @return {Array<{label: string, value: string}>} Field pairs.
 */
function collectFields( form ) {
	const fields = [];
	Array.prototype.forEach.call( form.elements, ( element ) => {
		const name = element.name;
		if ( ! name || name === 'website' ) {
			return;
		}
		if ( element.tagName === 'BUTTON' || element.type === 'submit' ) {
			return;
		}
		fields.push( {
			label:
				element.getAttribute( 'data-field-label' ) ||
				element.getAttribute( 'aria-label' ) ||
				name,
			value: element.value,
		} );
	} );
	return fields;
}

/**
 * Flip the form's pending state: guards double submits and drives the
 * button spinner styling (.is-pending).
 *
 * @param {HTMLFormElement} form    The form element.
 * @param {boolean}         pending Whether a request is in flight.
 */
function setPending( form, pending ) {
	form.classList.toggle( 'is-pending', pending );
	Array.prototype.forEach.call(
		form.querySelectorAll( 'button[type="submit"]' ),
		( button ) => {
			button.disabled = pending;
		}
	);
}

/**
 * Wire one form.
 *
 * @param {HTMLFormElement} form The form element.
 */
function initForm( form ) {
	const errorEl = form.querySelector( '.wp-block-shadcn-form__error' );
	const successEl = form.querySelector( '.wp-block-shadcn-form__success' );
	const fieldsEl = form.querySelector( '.wp-block-shadcn-form__fields' );

	form.addEventListener( 'submit', ( event ) => {
		event.preventDefault();

		if ( form.classList.contains( 'is-pending' ) ) {
			return;
		}

		if ( errorEl ) {
			errorEl.hidden = true;
		}
		setPending( form, true );

		const honeypot = form.querySelector( 'input[name="website"]' );

		fetch( form.getAttribute( 'data-rest-url' ), {
			method: 'POST',
			headers: { 'Content-Type': 'application/json' },
			body: JSON.stringify( {
				formName: form.getAttribute( 'data-form-name' ) || '',
				recipient: form.getAttribute( 'data-recipient' ) || '',
				recipientSig: form.getAttribute( 'data-recipient-sig' ) || '',
				website: honeypot ? honeypot.value : '',
				fields: collectFields( form ),
			} ),
		} )
			.then( ( response ) => {
				if ( ! response.ok ) {
					throw new Error( String( response.status ) );
				}
				// Success: the fields give way to the confirmation; the user's
				// input is gone on purpose — it was delivered.
				if ( fieldsEl ) {
					fieldsEl.hidden = true;
				}
				if ( successEl ) {
					successEl.hidden = false;
				}
			} )
			.catch( () => {
				// One generic, server-rendered message for every failure mode;
				// the form keeps the user's input for a retry.
				setPending( form, false );
				if ( errorEl ) {
					errorEl.hidden = false;
				}
			} );
	} );
}

function init() {
	document.querySelectorAll( FORM_SELECTOR ).forEach( initForm );
}

if ( document.readyState === 'loading' ) {
	document.addEventListener( 'DOMContentLoaded', init );
} else {
	init();
}
