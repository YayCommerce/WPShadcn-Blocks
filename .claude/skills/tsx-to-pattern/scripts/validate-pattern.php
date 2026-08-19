<?php
/**
 * Mechanical validator for shadcn block pattern files.
 *
 * Usage (from any WP-aware directory, e.g. the plugin dir):
 *   wp eval-file validate-pattern.php /abs/path/to/pattern.php
 *
 * Exits non-zero with human-readable failures. Checks:
 *   1. File parses (include throws no Throwable).
 *   2. Headers: Title, Slug (shadcn/ ns, no header-/footer- substrings),
 *      Categories incl. shadcn, Description, AI Hint.
 *   3. parse_blocks() yields real blocks, no freeform/unnamed content.
 *   4. Every block name is registered in WP_Block_Type_Registry.
 *   5. serialize→parse round-trip preserves the block-name sequence.
 *   6. No style= attribute inside a block that carries no style attrs
 *      (heuristic: hand-written inline CSS is not attr-derived).
 *   7. Every class token belongs to an allowed family (attr-derived WP
 *      classes, audited block-style variations, button sizes).
 */

if ( ! defined( 'ABSPATH' ) ) {
	fwrite( STDERR, "Run via: wp eval-file validate-pattern.php <pattern-file>\n" );
	exit( 1 );
}

$file = isset( $args[0] ) ? $args[0] : '';

if ( '' === $file || ! is_readable( $file ) ) {
	WP_CLI::error( 'Pass a readable pattern file path: wp eval-file validate-pattern.php <pattern-file>' );
}

$failures = array();

// -- 1. Render the file; a parse/runtime error fails immediately. ----------
try {
	ob_start();
	include $file;
	$content = (string) ob_get_clean();
} catch ( \Throwable $e ) {
	ob_end_clean();
	WP_CLI::error( 'Pattern file threw during include: ' . $e->getMessage() );
}

if ( '' === trim( $content ) ) {
	$failures[] = 'Rendered content is empty.';
}

// -- 2. Headers. ------------------------------------------------------------
$headers = get_file_data(
	$file,
	array(
		'title'       => 'Title',
		'slug'        => 'Slug',
		'description' => 'Description',
		'categories'  => 'Categories',
		'aiHint'      => 'AI Hint',
	)
);

foreach ( array( 'title', 'slug', 'description', 'aiHint' ) as $key ) {
	if ( '' === $headers[ $key ] ) {
		$failures[] = "Missing '{$key}' header.";
	}
}

if ( '' !== $headers['slug'] ) {
	if ( 0 !== strpos( $headers['slug'], 'shadcn/' ) ) {
		$failures[] = "Slug '{$headers['slug']}' must use the shadcn/ namespace (AI catalog only indexes shadcn/*).";
	}
	foreach ( array( 'header-1', 'header-2', 'footer-' ) as $banned ) {
		if ( false !== strpos( $headers['slug'], $banned ) ) {
			$failures[] = "Slug contains '{$banned}' — PromptBuilder treats that as template-part territory.";
		}
	}
	$theme_pattern = get_theme_file_path( 'patterns/' . basename( $file ) );
	if ( file_exists( $theme_pattern ) ) {
		$failures[] = 'A theme pattern file with the same basename exists — pick a distinct name.';
	}
}

$categories = array_filter( array_map( 'trim', explode( ',', $headers['categories'] ) ) );
if ( ! in_array( 'shadcn', $categories, true ) ) {
	$failures[] = "Categories must include 'shadcn'.";
}

// -- 3-4. Parse and check block registry. -----------------------------------
$blocks   = parse_blocks( $content );
$registry = WP_Block_Type_Registry::get_instance();
$names    = array();

$walk = function ( $list ) use ( &$walk, &$names, &$failures, $registry ) {
	foreach ( $list as $block ) {
		if ( null === $block['blockName'] ) {
			if ( '' !== trim( $block['innerHTML'] ) ) {
				$failures[] = 'Unwrapped content outside block comments: ' . substr( trim( $block['innerHTML'] ), 0, 80 );
			}
			continue;
		}

		$names[] = $block['blockName'];

		if ( ! $registry->is_registered( $block['blockName'] ) ) {
			$failures[] = "Block '{$block['blockName']}' is not registered (typo, or plugin/theme inactive, or missing build).";
		}

		// -- 6. Inline style heuristic. Some core blocks serialize style=
		// from non-'style' attrs: spacer height, column/image width. --
		$has_style_attr = isset( $block['attrs']['style'] )
			|| isset( $block['attrs']['svgCode'] )
			|| isset( $block['attrs']['height'] )
			|| isset( $block['attrs']['width'] );
		if ( ! $has_style_attr && false !== strpos( $block['innerHTML'], 'style="' ) ) {
			$failures[] = "Block '{$block['blockName']}' has inline style= but no style attr JSON — hand-written CSS is not allowed.";
		}

		if ( ! empty( $block['innerBlocks'] ) ) {
			$walk( $block['innerBlocks'] );
		}
	}
};
$walk( $blocks );

if ( empty( $names ) ) {
	$failures[] = 'No blocks found in pattern content.';
}

// -- 5. Round-trip. -----------------------------------------------------------
$reparsed       = parse_blocks( serialize_blocks( $blocks ) );
$reparsed_names = array();
$collect        = function ( $list ) use ( &$collect, &$reparsed_names ) {
	foreach ( $list as $block ) {
		if ( null !== $block['blockName'] ) {
			$reparsed_names[] = $block['blockName'];
			if ( ! empty( $block['innerBlocks'] ) ) {
				$collect( $block['innerBlocks'] );
			}
		}
	}
};
$collect( $reparsed );

if ( $names !== $reparsed_names ) {
	$failures[] = 'serialize/parse round-trip changed the block sequence — markup and block comments disagree.';
}

// -- 7. Class allowlist. -------------------------------------------------------
$allowed_exact = array(
	'screen-reader-text',
	'alignwide',
	'alignfull',
	'alignleft',
	'alignright',
	'aligncenter',
	// core/image adds this whenever width or height is set.
	'is-resized',
);

$allowed_prefixes = array(
	'wp-',
	'has-',
	'is-layout-',
	'is-size-',
	// core/image sizeSlug, e.g. size-large.
	'size-',
	// core/column vertical alignment (align-self on the single column).
	'is-vertically-aligned-',
	// core/columns vertical alignment (align-items on the row). Core styles
	// it in wp-includes/blocks/columns/style.css.
	'are-vertically-aligned-',
	// core flex layout justification, e.g. is-content-justification-center.
	'is-content-justification-',
	// core/cover position support.
	'is-position-',
);

// Style variations are read from the registry rather than hardcoded, so a
// style registered by the theme or by inc/BlockStyles.php is accepted the
// moment it exists. A hardcoded list silently rejects every new variation.
$allowed_styles = array();

foreach ( WP_Block_Type_Registry::get_instance()->get_all_registered() as $block_name => $unused_type ) {
	foreach ( WP_Block_Styles_Registry::get_instance()->get_registered_styles_for_block( $block_name ) as $style ) {
		$allowed_styles[] = 'is-style-' . $style['name'];
	}
}

// Core registers these variations from JavaScript only, so they never appear
// in the PHP registry even though core patterns use them freely.
$allowed_styles = array_merge(
	$allowed_styles,
	array(
		'is-style-fill',
		'is-style-outline',
		'is-style-default',
		'is-style-rounded',
		'is-style-wide',
		'is-style-dots',
		'is-style-plain',
		'is-style-stripes',
		'is-style-logos-only',
		'is-style-pill-shape',
	)
);

$allowed_styles = array_values( array_unique( $allowed_styles ) );

preg_match_all( '/class="([^"]*)"/', $content, $matches );
$bad_classes = array();

foreach ( $matches[1] as $class_attr ) {
	foreach ( preg_split( '/\s+/', trim( $class_attr ) ) as $token ) {
		if ( '' === $token || in_array( $token, $allowed_exact, true ) || in_array( $token, $allowed_styles, true ) ) {
			continue;
		}
		$ok = false;
		foreach ( $allowed_prefixes as $prefix ) {
			if ( 0 === strpos( $token, $prefix ) ) {
				$ok = true;
				break;
			}
		}
		if ( ! $ok ) {
			$bad_classes[ $token ] = true;
		}
	}
}

if ( $bad_classes ) {
	$failures[] = 'Classes outside the audited allowlist (unstyled utilities are banned): ' . implode( ', ', array_keys( $bad_classes ) );
}

// -- Report. --------------------------------------------------------------------
if ( $failures ) {
	foreach ( $failures as $failure ) {
		WP_CLI::warning( $failure );
	}
	WP_CLI::error( count( $failures ) . ' check(s) failed for ' . basename( $file ) );
}

WP_CLI::success( basename( $file ) . ' passed all pattern checks (' . count( $names ) . ' blocks).' );
