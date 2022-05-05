<?php
/**
 * Plugin Name: ACF Site Options
 * Plugin URI: https://github.com/nickdavis/acf-site-options
 * Description: Registers a Site Options admin page with Advanced Custom Fields.
 * Version: 1.0.0
 * Author: Nick Davis
 * Author URI: https://nickdavis.net
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation. You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

namespace NickDavis\ACFSiteOptions;

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Cheatin&#8217; uh?' );
}

add_action( 'acf/init', __NAMESPACE__ . '\register_site_settings_page', 9 );
/**
 * Registers the Site Settings page with Advanced Custom Fields.
 *
 * @since 1.0.0
 */
function register_site_settings_page(): void {
	// Redirect = false if you want to use the parent page as a page + sub pages.
	acf_add_options_page( [ 'page_title' => 'Site Options', 'redirect' => true ] );
}
