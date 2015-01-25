<?php 
/* ==================================== Vacation Package =========================================*/

function destination_post_type() {

	register_post_type( 'destination',
					   array(
						   'labels' => array(
							   'name'               => 'Destination',
							   'singular_name'      => 'Package',
							   'add_new'            => 'Add New',
							   'add_new_item'       => 'Add New Destination',
							   'edit_item'          => 'Edit Destination',
							   'new_item'           => 'New Destination',
							   'all_items'          => 'All Destinations',
							   'view_item'          => 'View Destination',
							   'search_items'       => 'Search Destinations',
							   'not_found'          => 'No destination found',
							   'not_found_in_trash' => 'No destination found in Trash',
							   'parent_item_colon'  => '',
							   'menu_name'          => 'Destination'
						   ),
                           'menu_icon' => 'dashicons-location-alt',
						   'public' => true,
						   'has_archive' => true,
						   'rewrite' => array('slug' => 'destination'),
						   'supports' => array( 'title', 'author', 'editor', 'thumbnail', 'excerpt', 'comments' ),
						   'add_new' => 'Add Destination',
					   )
					  );
}

add_action( 'init', 'destination_post_type' );