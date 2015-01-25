<?php 
/* ==================================== Hotel =========================================*/

function hotel_post_type() {

	register_post_type( 'hotel',
					   array(
						   'labels' => array(
							   'name'               => 'Hotel',
							   'singular_name'      => 'Package',
							   'add_new'            => 'Add New',
							   'add_new_item'       => 'Add New Hotel',
							   'edit_item'          => 'Edit Hotel',
							   'new_item'           => 'New Hotel',
							   'all_items'          => 'All Hotels',
							   'view_item'          => 'View Hotel',
							   'search_items'       => 'Search Hotels',
							   'not_found'          => 'No hotel found',
							   'not_found_in_trash' => 'No hotel found in Trash',
							   'parent_item_colon'  => '',
							   'menu_name'          => 'Hotel'
						   ),
                           'menu_icon' => 'dashicons-admin-home',
						   'public' => true,
						   'has_archive' => true,
						   'rewrite' => array('slug' => 'hotel'),
						   'supports' => array( 'title', 'author', 'editor', 'thumbnail', 'excerpt', 'comments' ),
						   'add_new' => 'Add Hotel',
					   )
					  );
}

add_action( 'init', 'hotel_post_type' );