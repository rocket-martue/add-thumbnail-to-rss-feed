<?php
/**
 * Plugin name: Add thumbnail to rss feed
 * Plugin URI: https://github.com/rocket-martue/add-thumbnail-to-rss-feed
 * Description: Add thumbnail to rss feed.
 * Version: 1.0.1
 * Author: Rocket Martue
 * Created: Mar. 4, 2021
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package AddThumbnailToRSSFeed
 */

/**
 * Add thumbnail to RSS feed.
 *
 * @param string $content The content of the RSS feed.
 * @return string The modified content of the RSS feed.
 */
add_action(
	'rss2_ns',
	function () {
		echo 'xmlns:media="http://search.yahoo.com/mrss/"';
	}
);

/**
 * Add thumbnail to RSS feed items.
 */
add_action(
	'rss2_item',
	function () {
		global $post;
		if ( has_post_thumbnail( $post->ID ) ) {
			$thumbnail = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'full' );
			echo '<media:thumbnail>' . esc_url( $thumbnail ) . '</media:thumbnail>';
		}
	}
);
