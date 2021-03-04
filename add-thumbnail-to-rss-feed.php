<?php
/**
 * Plugin name: Add thumbnail to rss feed
 * Plugin URI:
 * Description: Add thumbnail to rss feed.
 * Version: 1.0.0
 * Author: Rocket Martue
 * Created: Mar. 4, 2021
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

add_action (
	'rss2_ns',
	function() {
		echo 'xmlns:media="http://search.yahoo.com/mrss/"';
	}
);
add_action (
	'rss2_item',
	function() {
		global $post;
		if ( has_post_thumbnail( $post->ID ) ) {
			$thumbnail = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
			echo "<media:thumbnail>" .$thumbnail. "</media:thumbnail>";
		}
	}
);
