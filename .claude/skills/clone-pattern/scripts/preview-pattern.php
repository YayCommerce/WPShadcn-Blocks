<?php
/**
 * Publish a pattern file to a throwaway page so it can be seen rendering.
 *
 * The mechanical validator proves a pattern parses; it cannot prove the
 * layout is right. Every layout bug found while building these patterns
 * (a grid leaving an empty column, alignwide capped at contentSize, a
 * letterboxed logo) was visible only in a browser, so this script exists to
 * make that look cheap rather than something to skip.
 *
 * Usage (from anywhere):
 *   wp eval-file preview-pattern.php <pattern-file>     # publish, print URL
 *   wp eval-file preview-pattern.php cleanup            # delete every preview
 *
 * The keyword takes no leading dashes: WP-CLI parses `--cleanup` as one of its
 * own flags and rejects the call before the script ever runs.
 *
 * Pages are titled and slugged from the pattern basename and carry the
 * `_shadcn_pattern_preview` meta key, which is what cleanup deletes. Nothing
 * else on the site is touched.
 */

if ( ! defined( 'ABSPATH' ) ) {
	fwrite( STDERR, "Run via: wp eval-file preview-pattern.php <pattern-file|cleanup>\n" );
	exit( 1 );
}

const SHADCN_PREVIEW_META = '_shadcn_pattern_preview';

$arg = isset( $args[0] ) ? $args[0] : '';

if ( 'cleanup' === $arg ) {
	$previews = get_posts(
		array(
			'post_type'   => 'page',
			'post_status' => 'any',
			'numberposts' => -1,
			'meta_key'    => SHADCN_PREVIEW_META,
			'fields'      => 'ids',
		)
	);

	foreach ( $previews as $preview_id ) {
		wp_delete_post( $preview_id, true );
	}

	WP_CLI::success( sprintf( 'Deleted %d preview page(s).', count( $previews ) ) );
	return;
}

if ( '' === $arg || ! is_readable( $arg ) ) {
	WP_CLI::error( 'Pass a readable pattern file path, or the keyword cleanup.' );
}

try {
	ob_start();
	include $arg;
	$content = (string) ob_get_clean();
} catch ( \Throwable $e ) {
	ob_end_clean();
	WP_CLI::error( 'Pattern file threw during include: ' . $e->getMessage() );
}

if ( '' === trim( $content ) ) {
	WP_CLI::error( 'Pattern rendered no content.' );
}

$name = basename( $arg, '.php' );
$slug = 'preview-' . $name;

$existing = get_page_by_path( $slug, OBJECT, 'page' );

$postarr = array(
	'post_title'   => 'Preview: ' . $name,
	'post_name'    => $slug,
	'post_type'    => 'page',
	'post_status'  => 'publish',
	'post_content' => $content,
	'meta_input'   => array( SHADCN_PREVIEW_META => $name ),
);

if ( $existing ) {
	$postarr['ID'] = $existing->ID;
	$id            = wp_update_post( $postarr, true );
} else {
	$id = wp_insert_post( $postarr, true );
}

if ( is_wp_error( $id ) ) {
	WP_CLI::error( $id->get_error_message() );
}

// The editor URL matters as much as the front end: block validity is a
// client-side check, so it only ever shows up in the editor.
WP_CLI::line( 'front:  ' . get_permalink( $id ) );
WP_CLI::line( 'editor: ' . admin_url( 'post.php?post=' . $id . '&action=edit' ) );
WP_CLI::success( 'Preview published for ' . $name . '.' );
