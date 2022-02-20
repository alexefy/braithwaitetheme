<?php
/**
 * WP Rig functions and definitions
 *
 * This file must be parseable by PHP 5.2.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp_rig
 */

define( 'WP_RIG_MINIMUM_WP_VERSION', '4.7' );
define( 'WP_RIG_MINIMUM_PHP_VERSION', '7.0' );

// Bail if requirements are not met.
if ( version_compare( $GLOBALS['wp_version'], WP_RIG_MINIMUM_WP_VERSION, '<' ) || version_compare( phpversion(), WP_RIG_MINIMUM_PHP_VERSION, '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

// Include WordPress shims.
require get_template_directory() . '/inc/wordpress-shims.php';

// Setup autoloader (via Composer or custom).
if ( file_exists( get_template_directory() . '/vendor/autoload.php' ) ) {
	require get_template_directory() . '/vendor/autoload.php';
} else {
	/**
	 * Custom autoloader function for theme classes.
	 *
	 * @access private
	 *
	 * @param string $class_name Class name to load.
	 * @return bool True if the class was loaded, false otherwise.
	 */
	function _wp_rig_autoload( $class_name ) {
		$namespace = 'WP_Rig\WP_Rig';

		if ( strpos( $class_name, $namespace . '\\' ) !== 0 ) {
			return false;
		}

		$parts = explode( '\\', substr( $class_name, strlen( $namespace . '\\' ) ) );

		$path = get_template_directory() . '/inc';
		foreach ( $parts as $part ) {
			$path .= '/' . $part;
		}
		$path .= '.php';

		if ( ! file_exists( $path ) ) {
			return false;
		}

		require_once $path;

		return true;
	}
	spl_autoload_register( '_wp_rig_autoload' );
}

// Load the `wp_rig()` entry point function.
require get_template_directory() . '/inc/functions.php';

// Initialize the theme.
call_user_func( 'WP_Rig\WP_Rig\wp_rig' );

add_action('init', 'create_post_type_sector'); 

function create_post_type_sector()
{
    register_taxonomy_for_object_type('category', 'sector'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'sector');
    register_post_type('sector', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Sector', 'braithwaitetheme'), // Rename these to suit
            'singular_name' => __('Sector', 'braithwaitetheme'),
            'add_new' => __('Add New', 'braithwaitetheme'),
            'add_new_item' => __('Add New Sector', 'braithwaitetheme'),
            'edit' => __('Edit', 'braithwaitetheme'),
            'edit_item' => __('Edit Sector', 'braithwaitetheme'),
            'new_item' => __('New Sector', 'braithwaitetheme'),
            'view' => __('View Sector', 'braithwaitetheme'),
            'view_item' => __('View Sector', 'braithwaitetheme'),
            'search_items' => __('Search Sector', 'braithwaitetheme'),
            'not_found' => __('No Sector found', 'braithwaitetheme'),
            'not_found_in_trash' => __('No Sector found in Trash', 'braithwaitetheme')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'menu_icon' => 'dashicons-building',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
    flush_rewrite_rules();
}
