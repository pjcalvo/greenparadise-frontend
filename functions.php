<?php
/**
 * Roots includes
 */
require_once locate_template('/lib/utils.php');           // Utility functions
require_once locate_template('/lib/init.php');            // Initial theme setup and constants
require_once locate_template('/lib/wrapper.php');         // Theme wrapper class
require_once locate_template('/lib/sidebar.php');         // Sidebar class
require_once locate_template('/lib/config.php');          // Configuration
require_once locate_template('/lib/activation.php');      // Theme activation
require_once locate_template('/lib/titles.php');          // Page titles
require_once locate_template('/lib/cleanup.php');         // Cleanup
require_once locate_template('/lib/nav.php');             // Custom nav modifications
require_once locate_template('/lib/gallery.php');         // Custom [gallery] modifications
require_once locate_template('/lib/comments.php');        // Custom comments modifications
require_once locate_template('/lib/relative-urls.php');   // Root relative URLs
require_once locate_template('/lib/widgets.php');         // Sidebars and widgets
require_once locate_template('/lib/scripts.php');         // Scripts and stylesheets
require_once locate_template('/lib/custom.php');          // Custom functions
require_once locate_template('/lib/ajax-handler.php');    // Ajax Handler

/*Post Types*/
require_once locate_template('/post-types/one_day.php');// One Day Tour
require_once locate_template('/post-types/vacation_package.php');// Vacation Packages
require_once locate_template('/post-types/hotel.php');// Hotel
require_once locate_template('/post-types/destination.php');// Destinations
require_once locate_template('/post-types/ourTeam.php');// Our Team

/*Post 2 Posts relations */
require_once locate_template('/post-types/relations/post2post.php');          // Custom functions

/* Add Logo Field*/
add_action( 'customize_register', 'themename_customize_register' );
function themename_customize_register($wp_customize) {

	$wp_customize->add_section( 'ignite_custom_logo', array(
		'title'          => 'Logo',
		'description'    => 'Display a custom logo?',
		'priority'       => 25,
	) );

	$wp_customize->add_setting( 'custom_logo', array(
		'default'        => '',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'custom_logo', array(
		'label'   => 'Custom logo',
		'section' => 'ignite_custom_logo',
		'settings'   => 'custom_logo',
	) ) );
}