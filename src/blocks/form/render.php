<?php
/**
 * Form block render.
 *
 * A real <form> so Enter-to-submit and native required validation work without
 * script; view.js intercepts the submit event and posts JSON to the REST
 * endpoint. All config the script needs travels as data attributes — there is
 * deliberately no nonce: the endpoint serves logged-out visitors and a cookie
 * nonce baked into a full-page-cached response would expire inside the cached
 * HTML. Spam defense is the honeypot below plus server-side rate limiting.
 *
 * The messages are server-rendered (localized) and hidden; view.js only
 * toggles visibility, so no user-facing string lives in JavaScript.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (InnerBlocks).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

$form_name       = isset( $attributes['formName'] ) ? trim( wp_strip_all_tags( (string) $attributes['formName'] ) ) : '';
$recipient       = isset( $attributes['recipient'] ) ? trim( (string) $attributes['recipient'] ) : '';
$success_message = isset( $attributes['successMessage'] ) ? trim( (string) $attributes['successMessage'] ) : '';

if ( '' === $form_name ) {
	$form_name = __( 'Contact', 'yaycommerce-blocks-for-shadcn-ui' );
}
if ( '' === $success_message ) {
	$success_message = __( 'Thanks — we’ll get back to you soon.', 'yaycommerce-blocks-for-shadcn-ui' );
}
// An invalid recipient silently falls back server-side; drop it here too so
// the payload never advertises a broken address.
if ( '' !== $recipient && ! is_email( $recipient ) ) {
	$recipient = '';
}

$form_attributes = array(
	'class'          => 'wp-block-shadcn-form',
	'method'         => 'post',
	'data-form-name' => $form_name,
	'data-rest-url'  => esc_url( rest_url( 'shadcn/v1/form/submit' ) ),
);

// The recipient travels with an HMAC so the endpoint can tell an
// editor-saved address from one substituted by the visitor; the server
// falls back to the admin email on any mismatch.
if ( '' !== $recipient && class_exists( '\ShadcnBlocks\Form\RestController' ) ) {
	$form_attributes['data-recipient']     = $recipient;
	$form_attributes['data-recipient-sig'] = \ShadcnBlocks\Form\RestController::recipient_signature( $recipient );
}

$wrapper_attributes = get_block_wrapper_attributes( $form_attributes );

// The honeypot is hidden with the screen-reader-safe clip pattern rather than
// display:none — trivially naive bots fill anything focus-reachable in source
// order, and the field must stay out of the tab order and accessibility tree
// for humans either way.
?>
<form <?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<div class="wp-block-shadcn-form__hp" aria-hidden="true">
		<input type="text" name="website" tabindex="-1" autocomplete="off" />
	</div>
	<div class="wp-block-shadcn-form__fields">
		<?php echo $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	</div>
	<p class="wp-block-shadcn-form__error" role="alert" hidden>
		<?php esc_html_e( 'Something went wrong. Please try again.', 'yaycommerce-blocks-for-shadcn-ui' ); ?>
	</p>
	<p class="wp-block-shadcn-form__success" role="status" hidden>
		<?php echo esc_html( $success_message ); ?>
	</p>
</form>
