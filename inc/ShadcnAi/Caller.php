<?php
/**
 * Bootstrap for the Shadcn AI feature.
 *
 * Lives in the plugin rather than the theme because everything the builder
 * offers comes from here: the `shadcn/*` patterns it plans with and the
 * `shadcn/*` blocks those patterns are made of both ship with this plugin.
 *
 * @package ShadcnBlocks
 * @since 1.0.0
 */

namespace ShadcnBlocks\ShadcnAi;

use ShadcnBlocks\Traits\SingletonTrait;

class Caller {
	use SingletonTrait;

	/**
	 * Whether the builder is allowed to run at all.
	 *
	 * It plans pages out of `shadcn/*` patterns built from `shadcn/*` blocks,
	 * and the markup it inserts only renders as designed under the Shadcn
	 * theme's presets — so it requires that theme, or a child of it. The
	 * plugin bootstrap already refuses to load under any other theme; this
	 * repeats the check so the feature stays inert if the file is ever loaded
	 * some other way.
	 *
	 * @return bool
	 */
	public static function is_supported() {
		return function_exists( 'shadcn_blocks_is_theme_active' )
			&& shadcn_blocks_is_theme_active();
	}

	protected function __construct() {
		require_once __DIR__ . '/TextSlotHtml.php';
		require_once __DIR__ . '/PatternHintReader.php';
		require_once __DIR__ . '/SiteContextBuilder.php';
		require_once __DIR__ . '/CatalogBuilder.php';
		require_once __DIR__ . '/UnknownPatternSlugException.php';
		require_once __DIR__ . '/PlanResolver.php';
		require_once __DIR__ . '/LlmRequestException.php';
		require_once __DIR__ . '/LlmClient.php';
		require_once __DIR__ . '/RateLimiter.php';
		require_once __DIR__ . '/RestController.php';
		require_once __DIR__ . '/SettingsPage.php';

		RestController::get_instance();
		SettingsPage::get_instance();

		if ( defined( 'WP_CLI' ) && WP_CLI ) {
			require_once __DIR__ . '/EvalCommand.php';
			\WP_CLI::add_command( 'shadcn-ai-eval', EvalCommand::class );
		}

		add_action( 'enqueue_block_editor_assets', array( $this, 'enqueue_editor_assets' ) );
	}

	/**
	 * Editor-only sidebar panel assets — never enqueued on the frontend.
	 */
	public function enqueue_editor_assets() {
		$version = SHADCN_BLOCKS_VERSION;

		wp_enqueue_script(
			'shadcn-ai',
			SHADCN_BLOCKS_URL . 'inc/ShadcnAi/script.js',
			array(
				'wp-plugins',
				'wp-editor',
				'wp-edit-post',
				'wp-element',
				'wp-components',
				'wp-block-editor',
				'wp-blocks',
				'wp-api-fetch',
				'wp-i18n',
				'wp-data',
			),
			$version,
			true
		);

		// Without this the panel's __() calls have no JSON translations to
		// read and every string stays in English, however complete the
		// plugin's .po files are.
		wp_set_script_translations(
			'shadcn-ai',
			'shadcn-blocks',
			SHADCN_BLOCKS_DIR . 'languages'
		);

		wp_enqueue_style(
			'shadcn-ai',
			SHADCN_BLOCKS_URL . 'inc/ShadcnAi/style.css',
			array(),
			$version
		);
	}
}

if ( Caller::is_supported() ) {
	Caller::get_instance();
}
