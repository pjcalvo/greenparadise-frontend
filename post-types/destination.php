<?php 
/* ==================================== Destination =========================================*/

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


/**
 * Destination Category taxonomy for Destination post type.
 *
 */
function create_destination_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => 'Destination Category',
		'singular_name'     => 'Destination Category',
		'search_items'      => 'Search Destination Categories',
		'all_items'         => 'All Destination Categorys',
		'parent_item'       => 'Parent Destination Category',
		'parent_item_colon' => 'Parent Destination Category:',
		'edit_item'         => 'Edit Destination Category',
		'update_item'       => 'Update Destination Category',
		'add_new_item'      => 'Add New Destination Category',
		'new_item_name'     => 'New Destination Category Name',
		'menu_name'         => 'Destination Categories',
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => false,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'desination-category' ),
	);

	register_taxonomy( 'destination_category', array( 'destination' ), $args );
}

add_action( 'init', 'destination_post_type' );
add_action( 'init', 'create_destination_taxonomies', 0 );

/* =============================== Destination Custom Fields ====================================*/

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_destinations',
		'title' => 'Destinations',
		'fields' => array (
			array (
				'key' => 'field_54fb6ff84dc3b',
				'label' => 'Price',
				'name' => 'destination_price',
				'type' => 'number',
				'required' => 1,
				'default_value' => 0,
				'placeholder' => '$0',
				'prepend' => '$',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_54fb70694dc3c',
				'label' => 'Description',
				'name' => 'destination_description',
				'type' => 'text',
				'instructions' => 'Destination Description',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'destination',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'custom_fields',
				3 => 'discussion',
				4 => 'comments',
				5 => 'revisions',
				6 => 'author',
				7 => 'format',
				8 => 'tags',
				9 => 'send-trackbacks',
			),
		),
		'menu_order' => 1,
	));
}
