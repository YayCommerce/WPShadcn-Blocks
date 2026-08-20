<?php
/**
 * File-based block pattern loader.
 *
 * Registers every PHP file in the plugin's `patterns/` directory as a block
 * pattern, using the same file-header convention as the Shadcn theme's
 * `patterns/` directory (Title, Slug, Categories, Description, AI Hint).
 *
 * WordPress core only auto-loads pattern files from themes, so a plugin has
 * to replicate that behavior itself. Slugs use the `shadcn/` namespace: the
 * Shadcn AI catalog only indexes `shadcn/*` patterns.
 *
 * @package ShadcnBlocks
 */

namespace ShadcnBlocks;

defined( 'ABSPATH' ) || exit;

/**
 * Patterns class.
 */
class Patterns {

	/**
	 * Instance.
	 *
	 * @var Patterns|null
	 */
	private static $instance = null;

	/**
	 * Per-request cache of file => parsed headers.
	 *
	 * @var array<string,array<string,string>>|null
	 */
	private $headers = null;

	/**
	 * Get instance.
	 *
	 * @return Patterns
	 */
	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Constructor.
	 */
	private function __construct() {
		// Default priority runs after the theme registers the `shadcn`
		// pattern categories on init priority 1.
		add_action( 'init', array( $this, 'register_pattern_categories' ), 2 );
		add_action( 'init', array( $this, 'register_patterns' ) );
		add_filter( 'shadcn_ai_pattern_hints', array( $this, 'add_pattern_hints' ) );
	}

	/**
	 * Register the section categories this plugin's pattern files declare.
	 *
	 * The theme registers the `shadcn` categories, but not the per-section
	 * ones. A pattern naming a category that nobody registered is filed under
	 * `shadcn` alone and the declaration silently does nothing, so register
	 * them here rather than leave the headers decorative.
	 */
	public function register_pattern_categories() {
		if ( ! function_exists( 'register_block_pattern_category' ) ) {
			return;
		}

		$categories = array(
			'hero'    => __( 'Hero', 'shadcn-blocks' ),
			'pricing' => __( 'Pricing', 'shadcn-blocks' ),
			'careers' => __( 'Careers', 'shadcn-blocks' ),
			'awards'  => __( 'Awards', 'shadcn-blocks' ),
			'case-studies' => __( 'Case Studies', 'shadcn-blocks' ),
			'community'    => __( 'Community', 'shadcn-blocks' ),
		);

		$registry = \WP_Block_Pattern_Categories_Registry::get_instance();

		foreach ( $categories as $slug => $label ) {
			if ( $registry->is_registered( $slug ) ) {
				continue;
			}

			register_block_pattern_category( $slug, array( 'label' => $label ) );
		}
	}

	/**
	 * Register every valid pattern file in `patterns/`.
	 *
	 * Content is registered lazily via `filePath` (WP 6.5+) so pattern
	 * files are only rendered when something actually reads the pattern.
	 */
	public function register_patterns() {
		if ( ! function_exists( 'register_block_pattern' ) ) {
			return;
		}

		$registry = \WP_Block_Patterns_Registry::get_instance();

		foreach ( $this->pattern_headers() as $file => $data ) {
			if ( '' === $data['slug'] || '' === $data['title'] ) {
				continue;
			}

			// The theme wins on slug collisions (it registers its own
			// patterns before plugins run on init).
			if ( $registry->is_registered( $data['slug'] ) ) {
				continue;
			}

			$pattern = array(
				'title'    => $data['title'],
				'filePath' => $file,
			);

			if ( '' !== $data['description'] ) {
				$pattern['description'] = $data['description'];
			}

			if ( '' !== $data['categories'] ) {
				$pattern['categories'] = array_filter( array_map( 'trim', explode( ',', $data['categories'] ) ) );
			}

			register_block_pattern( $data['slug'], $pattern );
		}
	}

	/**
	 * Merge this plugin's `AI Hint:` headers into the theme's hint map.
	 *
	 * @param array<string,string> $hints Slug => hint map from the theme.
	 * @return array<string,string>
	 */
	public function add_pattern_hints( $hints ) {
		foreach ( $this->pattern_headers() as $data ) {
			if ( '' !== $data['slug'] && '' !== $data['aiHint'] && ! isset( $hints[ $data['slug'] ] ) ) {
				$hints[ $data['slug'] ] = $data['aiHint'];
			}
		}

		return $hints;
	}

	/**
	 * Parsed headers for every pattern file, keyed by absolute path.
	 *
	 * @return array<string,array<string,string>>
	 */
	private function pattern_headers() {
		if ( null !== $this->headers ) {
			return $this->headers;
		}

		$this->headers = array();

		$files = glob( SHADCN_BLOCKS_DIR . 'patterns/*.php' );

		foreach ( $files ? $files : array() as $file ) {
			if ( 'index.php' === basename( $file ) ) {
				continue;
			}

			$this->headers[ $file ] = get_file_data(
				$file,
				array(
					'title'       => 'Title',
					'slug'        => 'Slug',
					'description' => 'Description',
					'categories'  => 'Categories',
					'aiHint'      => 'AI Hint',
				)
			);
		}

		return $this->headers;
	}
}

// Initialize the pattern loader.
Patterns::get_instance();
