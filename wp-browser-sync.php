<?php
/**
 * Plugin Name: WP Browser Sync
 * Plugin URI: https://github.com/tranthethang/WP-Browser-Sync
 * Description: Enable browser sync client for your site.
 * Version: 1.0
 * Author: tranthethang
 * Author URI: https://github.com/tranthethang
 * License: GNU General Public License v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 * WP Browser Sync plugin, Copyright 2018 tranthethang
 * WP Browser Sync is distributed under the terms of the GNU GPL
 *
 * Requires at least: 4.1
 * Tested up to: 4.9.4
 * Text Domain: wp-browser-sync
 * Domain Path: /languages/
 *
 * @package WP_Browser_Sync
 */


add_action( 'wp_footer', 'wpbs_add_host' );

if( !function_exists('wpbs_add_host')) {

	function wpbs_add_host() {
		?>
		<script id="__bs_script__">
			//<![CDATA[
				document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.13'><\/script>".replace("HOST", location.hostname));
			//]]>
		</script>		
		<?php
	}

}
