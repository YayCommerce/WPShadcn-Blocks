<?php
/**
 * Settings page for Shadcn AI's external endpoint configuration.
 *
 * @package ShadcnBlocks
 * @since 1.0.0
 */

namespace ShadcnBlocks\ShadcnAi;

use ShadcnBlocks\Traits\SingletonTrait;

class SettingsPage {
	use SingletonTrait;

	const OPTION_GROUP      = 'shadcn_ai_settings';
	const OPTION_ENDPOINT   = 'shadcn_ai_endpoint_url';
	const OPTION_AUTH_TOKEN = 'shadcn_ai_auth_token';

	protected function __construct() {
		add_action( 'admin_menu', array( $this, 'add_admin_menu' ) );
		add_action( 'admin_init', array( $this, 'register_settings' ) );
	}

	public function add_admin_menu() {
		// Top-level "Shadcn" menu, config as a submenu — no longer buried under
		// Settings. The sibling plugin (shadcn-ai-proxy) may be active on the
		// same site and registers the very same parent slug; whichever's
		// admin_menu fires first creates the top-level, the other only attaches
		// its submenu. The guard on $admin_page_hooks (which add_menu_page
		// populates) is what stops a duplicate top-level entry.
		global $admin_page_hooks;

		if ( empty( $admin_page_hooks['shadcn'] ) ) {
			add_menu_page(
				__( 'Shadcn', 'shadcn-blocks' ),
				__( 'Shadcn', 'shadcn-blocks' ),
				'manage_options',
				'shadcn',
				'',
				'dashicons-layout',
				59
			);
		}

		add_submenu_page(
			'shadcn',
			__( 'Shadcn AI', 'shadcn-blocks' ),
			__( 'Shadcn AI', 'shadcn-blocks' ),
			'manage_options',
			'shadcn-ai',
			array( $this, 'render_settings_page' )
		);

		// add_menu_page auto-adds a first submenu mirroring the parent slug
		// ("Shadcn" → an empty page). Drop it so the first real submenu becomes
		// the menu's landing. Idempotent: a no-op once the sibling removed it.
		remove_submenu_page( 'shadcn', 'shadcn' );
	}

	public function register_settings() {
		register_setting(
			self::OPTION_GROUP,
			self::OPTION_ENDPOINT,
			array(
				'type'              => 'string',
				'sanitize_callback' => array( $this, 'sanitize_endpoint_url' ),
				'default'           => '',
			)
		);

		// Create the row with autoload=no BEFORE registering the setting, not
		// inside the sanitize callback: update_option() unconditionally calls
		// sanitize_option(), which re-fires the sanitize_option_{$option}
		// filter register_setting() attaches below — calling update_option()
		// from inside that same callback recurses infinitely. add_option()
		// is a no-op if the row already exists, so this only sets autoload
		// once, at creation.
		add_option( self::OPTION_AUTH_TOKEN, '', '', false );

		register_setting(
			self::OPTION_GROUP,
			self::OPTION_AUTH_TOKEN,
			array(
				'type'              => 'string',
				'sanitize_callback' => array( $this, 'sanitize_auth_token' ),
				'show_in_rest'      => false,
				'default'           => '',
			)
		);
	}

	/**
	 * esc_url_raw() alone doesn't enforce a scheme — reject non-HTTPS so the
	 * bearer auth token is never sent in cleartext.
	 */
	public function sanitize_endpoint_url( $value ) {
		$url = esc_url_raw( trim( (string) $value ) );

		if ( '' !== $url && 0 !== strpos( $url, 'https://' ) ) {
			add_settings_error(
				self::OPTION_ENDPOINT,
				'shadcn_ai_non_https',
				__( 'AI Endpoint URL must use https://. The previous value was kept.', 'shadcn-blocks' )
			);

			return get_option( self::OPTION_ENDPOINT, '' );
		}

		return $url;
	}

	/**
	 * Plain sanitize-and-return — autoload=no is handled once, at option
	 * creation, in register_settings() (see the add_option() call there).
	 * This callback must NOT call update_option() itself: WP's
	 * update_option() unconditionally calls sanitize_option(), which
	 * re-fires this exact sanitize_callback, causing infinite recursion.
	 */
	public function sanitize_auth_token( $value ) {
		return sanitize_text_field( (string) $value );
	}

	public function render_settings_page() {
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}
		?>
		<div class="wrap">
			<h1><?php esc_html_e( 'Shadcn AI', 'shadcn-blocks' ); ?></h1>
			<?php settings_errors(); ?>
			<form method="post" action="options.php">
				<?php settings_fields( self::OPTION_GROUP ); ?>
				<table class="form-table" role="presentation">
					<tr>
						<th scope="row">
							<label for="<?php echo esc_attr( self::OPTION_ENDPOINT ); ?>">
								<?php esc_html_e( 'AI Endpoint URL', 'shadcn-blocks' ); ?>
							</label>
						</th>
						<td>
							<input
								type="url"
								id="<?php echo esc_attr( self::OPTION_ENDPOINT ); ?>"
								name="<?php echo esc_attr( self::OPTION_ENDPOINT ); ?>"
								value="<?php echo esc_attr( get_option( self::OPTION_ENDPOINT, '' ) ); ?>"
								class="regular-text"
								placeholder="https://"
							/>
							<p class="description">
								<?php esc_html_e( 'HTTPS endpoint that accepts { prompt, catalog } and returns a layout plan.', 'shadcn-blocks' ); ?>
							</p>
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="<?php echo esc_attr( self::OPTION_AUTH_TOKEN ); ?>">
								<?php esc_html_e( 'Auth Token', 'shadcn-blocks' ); ?>
							</label>
						</th>
						<td>
							<input
								type="password"
								id="<?php echo esc_attr( self::OPTION_AUTH_TOKEN ); ?>"
								name="<?php echo esc_attr( self::OPTION_AUTH_TOKEN ); ?>"
								value="<?php echo esc_attr( get_option( self::OPTION_AUTH_TOKEN, '' ) ); ?>"
								class="regular-text"
								autocomplete="off"
							/>
							<p class="description">
								<?php esc_html_e( 'Sent as a Bearer token. Never shown elsewhere in the admin or in the REST API.', 'shadcn-blocks' ); ?>
							</p>
						</td>
					</tr>
				</table>
				<?php submit_button(); ?>
			</form>
		</div>
		<?php
	}
}
