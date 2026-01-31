<?php
/**
 * Plugin Name: Add Thumbnail to RSS Feed
 * Plugin URI:  https://github.com/rocket-martue/add-thumbnail-to-rss-feed
 * Description: Add featured image (thumbnail) to RSS feed.
 * Version:     1.0.2
 * Author:      Rocket Martue
 * Created:     Mar. 4, 2021
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package AddThumbnailToRSSFeed
 */

/**
 * Add the media namespace to the rss2 root element.
 *
 * @return void
 */
add_action(
	'rss2_ns',
	static function () {
		echo ' xmlns:media="http://search.yahoo.com/mrss/"'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
);

/**
 * Output post thumbnail (featured image) in RSS <item> as <media:thumbnail>.
 *
 * @return void
 */
add_action(
	'rss2_item',
	static function () {
		$post_id = get_the_ID();
		if ( ! $post_id ) {
			return;
		}

		if ( has_post_thumbnail( $post_id ) ) {
			$thumbnail_url = wp_get_attachment_image_url( get_post_thumbnail_id( $post_id ), 'full' );
			if ( $thumbnail_url ) {
				printf(
					'<media:thumbnail url="%s" />',
					esc_url( $thumbnail_url )
				);
			}
		}
	}
);
