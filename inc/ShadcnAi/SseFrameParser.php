<?php
/**
 * Splits a Server-Sent-Events byte stream into named {event, data} frames.
 *
 * The relay's cURL write callback hands over arbitrary byte runs that can
 * split anywhere — mid-frame, mid-JSON, mid-UTF-8 — so frames are only
 * surfaced once their blank-line boundary has arrived; everything after the
 * last boundary stays buffered.
 *
 * @package ShadcnBlocks
 * @since 1.2.0
 */

namespace ShadcnBlocks\ShadcnAi;

defined( 'ABSPATH' ) || exit;

class SseFrameParser {

	/** @var string Bytes received but not yet forming a complete frame. */
	private $buffer = '';

	/**
	 * Feed the next raw bytes; get back every frame they completed.
	 *
	 * @param string $chunk arbitrary byte run.
	 * @return array[] frames, each {event: string, data: array}.
	 */
	public function push( $chunk ) {
		$this->buffer .= $chunk;
		$frames        = array();

		// The spec spells the blank-line boundary three ways; scanning for
		// "\n\n" alone would buffer a CRLF stream forever.
		while ( preg_match( '/\r\n\r\n|\n\n|\r\r/', $this->buffer, $m, PREG_OFFSET_CAPTURE ) ) {
			$end          = $m[0][1];
			$raw          = substr( $this->buffer, 0, $end );
			$this->buffer = substr( $this->buffer, $end + strlen( $m[0][0] ) );

			$event = '';
			$data  = '';
			foreach ( preg_split( '/\r\n|\r|\n/', $raw ) as $line ) {
				if ( 0 === strpos( $line, 'event:' ) ) {
					$event = trim( substr( $line, 6 ) );
				} elseif ( 0 === strpos( $line, 'data:' ) ) {
					$value = substr( $line, 5 );
					$data .= ( '' !== $data ? "\n" : '' ) . ( 0 === strpos( $value, ' ' ) ? substr( $value, 1 ) : $value );
				}
			}

			if ( '' === $event || '' === $data ) {
				continue; // Keep-alive comment or fieldless frame.
			}

			$decoded = json_decode( $data, true );
			if ( ! is_array( $decoded ) ) {
				continue; // One unreadable frame is not worth killing the stream.
			}

			$frames[] = array(
				'event' => $event,
				'data'  => $decoded,
			);
		}

		return $frames;
	}
}
