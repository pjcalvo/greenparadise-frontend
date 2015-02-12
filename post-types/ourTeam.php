<?php 
/* ==================================== Our Team =========================================*/

function ourTeam_post_type() {

	register_post_type( 'ourTeam',
					   array(
						   'labels' => array(
							   'name'               => 'Our Team',
							   'singular_name'      => 'Our Team',
							   'add_new'            => 'Add New',
							   'add_new_item'       => 'Add New Our Team',
							   'edit_item'          => 'Edit Our Team',
							   'new_item'           => 'New Our Team',
							   'all_items'          => 'All Our Teams',
							   'view_item'          => 'View Our Team',
							   'search_items'       => 'Search Our Teams',
							   'not_found'          => 'No Our Team found',
							   'not_found_in_trash' => 'No Our Team found in Trash',
							   'parent_item_colon'  => '',
							   'menu_name'          => 'Our Team'
						   ),
                           'menu_icon' => 'dashicons-groups',
						   'public' => true,
						   'has_archive' => true,
						   'rewrite' => array('slug' => 'oneday'),
						   'supports' => array( 'title', 'author', 'editor', 'thumbnail', 'excerpt', 'comments' ),
						   'add_new' => 'Add Our Team',
					   )
					  );
}

add_action( 'init', 'ourTeam_post_type' );
