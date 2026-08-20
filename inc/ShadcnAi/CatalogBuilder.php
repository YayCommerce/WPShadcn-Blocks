<?php
/**
 * Builds the pattern catalog sent to Shadcn AI's LLM endpoint.
 *
 * @package ShadcnBlocks
 * @since 1.0.0
 */

namespace ShadcnBlocks\ShadcnAi;

class CatalogBuilder {

	/**
	 * Prefix identifying this theme's own patterns among all registered patterns.
	 */
	const SLUG_PREFIX = 'shadcn/';

	/**
	 * Block names counted as an image for the structure summary.
	 */
	const IMAGE_BLOCK_NAMES = array( 'core/image', 'core/cover', 'core/media-text' );

	/**
	 * Non-image block names that still mark a pattern as media-bearing.
	 */
	const MEDIA_BLOCK_NAMES = array( 'core/video', 'core/embed' );

	/**
	 * Transient name prefix. The pattern set's fingerprint completes the key.
	 */
	const CACHE_KEY_PREFIX = 'shadcn_ai_catalog_v2_';

	/**
	 * Only garbage collection: a changed pattern produces a different key
	 * rather than a stale hit, so the entry never needs to expire to stay
	 * correct.
	 */
	const CACHE_TTL = WEEK_IN_SECONDS;

	/**
	 * Build the catalog: slug/title/description/categories/textSlots/structure
	 * for every `shadcn/*` registered pattern, including patterns with zero
	 * text slots.
	 *
	 * Cached: building it parses every pattern's block tree, and the result
	 * only changes when a pattern file does.
	 *
	 * @return array[]
	 */
	public function build() {
		$patterns  = $this->registered_patterns();
		$hints     = ( new PatternHintReader() )->hints();
		$cache_key = self::CACHE_KEY_PREFIX . $this->fingerprint( $patterns, $hints );
		$cached    = get_transient( $cache_key );

		if ( is_array( $cached ) ) {
			return $cached;
		}

		$catalog = $this->build_catalog( $patterns, $hints );

		set_transient( $cache_key, $catalog, self::CACHE_TTL );

		return $catalog;
	}

	/**
	 * Every registered pattern whose slug carries this theme's prefix.
	 *
	 * get_all_registered() returns array_values() of its internal registry —
	 * a plain indexed array (0, 1, 2...), NOT keyed by pattern slug. The slug
	 * lives in each element's own 'name' field. (A stub used during standalone
	 * testing returned an associative array keyed by slug, which masked this —
	 * every real pattern was silently skipped in production since the array's
	 * numeric index never matched the 'shadcn/' prefix check.)
	 *
	 * @return array[]
	 */
	private function registered_patterns() {
		$patterns = array();

		foreach ( \WP_Block_Patterns_Registry::get_instance()->get_all_registered() as $pattern ) {
			$slug = isset( $pattern['name'] ) ? $pattern['name'] : '';

			if ( 0 !== strpos( $slug, self::SLUG_PREFIX ) ) {
				continue;
			}

			$patterns[] = $pattern;
		}

		return $patterns;
	}

	/**
	 * Identity of the current pattern set, as a cache key component. Catches a
	 * pattern being added, removed, renamed or edited — including while one is
	 * being authored — without parsing any block markup.
	 *
	 * Hashes each pattern's content rather than its file's modification time:
	 * the registry hydrates content from `filePath` on first read and drops
	 * the path afterwards, so mtime is only available on some calls and a key
	 * built from it changes part-way through a request.
	 *
	 * The hint map is folded in separately because `AI Hint` headers sit above
	 * a pattern file's content — editing only a hint leaves every content hash
	 * untouched and would otherwise keep serving the old catalog.
	 *
	 * @param array[]              $patterns Registered `shadcn/*` patterns.
	 * @param array<string,string> $hints    Slug => AI hint.
	 * @return string
	 */
	private function fingerprint( array $patterns, array $hints ) {
		$parts = array();

		foreach ( $patterns as $pattern ) {
			$content = isset( $pattern['content'] ) ? $pattern['content'] : '';
			$parts[] = $pattern['name'] . ':' . md5( $content );
		}

		sort( $parts );
		ksort( $hints );

		$parts[] = 'hints:' . md5( (string) wp_json_encode( $hints ) );

		return md5( implode( '|', $parts ) );
	}

	/**
	 * Do the actual parsing work behind the cache.
	 *
	 * @param array[]              $patterns Registered `shadcn/*` patterns.
	 * @param array<string,string> $hints    Slug => AI hint.
	 * @return array[]
	 */
	private function build_catalog( array $patterns, array $hints ) {
		$catalog = array();

		foreach ( $patterns as $pattern ) {
			$slug = $pattern['name'];

			// Parse once; both the slot extractor and the structure
			// collector walk the same tree.
			$blocks = parse_blocks( isset( $pattern['content'] ) ? $pattern['content'] : '' );

			$slots = array();
			$index = 0;
			$stats = array(
				'headings'   => array(), // level => count.
				'paragraphs' => 0,
				'buttons'    => 0,
				'images'     => 0,
				'columns'    => 0,
				'hasMedia'   => false,
			);

			$this->walk( $blocks, $slots, $index, $stats );

			$catalog[] = array(
				'slug'        => $slug,
				'title'       => isset( $pattern['title'] ) ? $pattern['title'] : '',
				'description' => isset( $pattern['description'] ) ? $pattern['description'] : '',
				'categories'  => isset( $pattern['categories'] ) ? $pattern['categories'] : array(),
				'aiHint'      => isset( $hints[ $slug ] ) ? $hints[ $slug ] : '',
				'textSlots'   => $slots,
				'structure'   => $this->format_structure( $stats, $blocks ),
			);
		}

		// Registration order is file-alphabetical, so each family's "-1"
		// pattern always leads and soaks up the LLM's primacy bias. Ordering
		// by slug hash keeps the sequence byte-stable between requests (the
		// proxy's prompt-prefix cache depends on that) while making which
		// pattern happens to appear first arbitrary instead of always the
		// lowest-numbered one.
		usort(
			$catalog,
			function ( $a, $b ) {
				return strcmp( md5( $a['slug'] ), md5( $b['slug'] ) );
			}
		);

		return $catalog;
	}

	/**
	 * Single walk over a pattern's parsed block tree: collects text slots in
	 * document order (same semantics as before) and structural counts.
	 *
	 * @param array $blocks Parsed block array.
	 * @param array $slots  Slot accumulator, passed by reference.
	 * @param int   $index  Running slot index across the whole tree, passed by reference.
	 * @param array $stats  Structure counters, passed by reference.
	 */
	private function walk( array $blocks, array &$slots, &$index, array &$stats ) {
		foreach ( $blocks as $block ) {
			if ( null === $block['blockName'] ) {
				continue; // Whitespace-only fragment between sibling blocks.
			}

			$this->count_block( $block, $stats );

			if ( TextSlotHtml::is_slot_block( $block['blockName'] ) ) {
				$slots[] = array(
					'index'       => $index,
					'blockName'   => $block['blockName'],
					'defaultText' => TextSlotHtml::read( $block['blockName'], $block['innerHTML'] ),
				);
				++$index;
				continue;
			}

			// core/cover and core/media-text carry text slots inside their
			// innerBlocks — always keep recursing.
			if ( ! empty( $block['innerBlocks'] ) ) {
				$this->walk( $block['innerBlocks'], $slots, $index, $stats );
			}
		}
	}

	/**
	 * Update structure counters for one block.
	 *
	 * @param array $block Parsed block.
	 * @param array $stats Structure counters, passed by reference.
	 */
	private function count_block( array $block, array &$stats ) {
		$name = $block['blockName'];

		if ( 'core/heading' === $name ) {
			$level                        = isset( $block['attrs']['level'] ) ? (int) $block['attrs']['level'] : 2;
			$stats['headings'][ $level ]  = isset( $stats['headings'][ $level ] ) ? $stats['headings'][ $level ] + 1 : 1;
			return;
		}

		if ( 'core/paragraph' === $name ) {
			++$stats['paragraphs'];
			return;
		}

		if ( 'core/button' === $name ) {
			++$stats['buttons'];
			return;
		}

		if ( in_array( $name, self::IMAGE_BLOCK_NAMES, true ) || false !== strpos( $name, 'svg-image' ) ) {
			++$stats['images'];
			$stats['hasMedia'] = true;
			return;
		}

		if ( in_array( $name, self::MEDIA_BLOCK_NAMES, true ) ) {
			$stats['hasMedia'] = true;
			return;
		}

		// Record the column count of the first columns row only — enough to
		// convey the pattern's dominant grid without over-describing it.
		if ( 'core/columns' === $name && 0 === $stats['columns'] && ! empty( $block['innerBlocks'] ) ) {
			foreach ( $block['innerBlocks'] as $child ) {
				if ( 'core/column' === $child['blockName'] ) {
					++$stats['columns'];
				}
			}
		}
	}

	/**
	 * Shape the raw counters into the catalog's `structure` object.
	 *
	 * @param array $stats  Filled counters.
	 * @param array $blocks Top-level parsed blocks (for root alignment).
	 * @return array
	 */
	private function format_structure( array $stats, array $blocks ) {
		ksort( $stats['headings'] );

		$headings = array();
		foreach ( $stats['headings'] as $level => $count ) {
			$headings[] = array(
				'level' => $level,
				'count' => $count,
			);
		}

		return array(
			'headings'   => $headings,
			'paragraphs' => $stats['paragraphs'],
			'buttons'    => $stats['buttons'],
			'images'     => $stats['images'],
			'columns'    => $stats['columns'],
			'hasMedia'   => $stats['hasMedia'],
			'fullWidth'  => $this->is_full_width( $blocks ),
		);
	}

	/**
	 * Whether the pattern's first real block is full-aligned.
	 *
	 * @param array $blocks Top-level parsed blocks.
	 * @return bool
	 */
	private function is_full_width( array $blocks ) {
		foreach ( $blocks as $block ) {
			if ( null === $block['blockName'] ) {
				continue;
			}

			return isset( $block['attrs']['align'] ) && 'full' === $block['attrs']['align'];
		}

		return false;
	}
}
