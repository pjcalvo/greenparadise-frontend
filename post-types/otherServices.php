<?php 
/* ==================================== Other Services =========================================*/

function otherService_post_type() {

	register_post_type( 'otherService',
					   array(
						   'labels' => array(
							   'name'               => 'Other Service',
							   'singular_name'      => 'Other Service',
							   'add_new'            => 'Add New',
							   'add_new_item'       => 'Add New Other Service',
							   'edit_item'          => 'Edit Other Service',
							   'new_item'           => 'New Other Service',
							   'all_items'          => 'All Other Services',
							   'view_item'          => 'View Other Service',
							   'search_items'       => 'Search Other Services',
							   'not_found'          => 'No Other Service found',
							   'not_found_in_trash' => 'No Other Service found in Trash',
							   'parent_item_colon'  => '',
							   'menu_name'          => 'Other Service'
						   ),
                           'menu_icon' => 'dashicons-images-alt',
						   'public' => true,
						   'has_archive' => true,
						   'rewrite' => array('slug' => 'otherService'),
						   'supports' => array( 'title', 'author', 'editor', 'thumbnail', 'excerpt', 'comments' ),
						   'add_new' => 'Add Other Service',
					   )
					  );
}


/**
 * Other Service Category taxonomy for Other Service post type.
 *
 */
function create_otherService_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => 'Other Service Category',
		'singular_name'     => 'Other Service Category',
		'search_items'      => 'Search Other Service Categories',
		'all_items'         => 'All Other Service Categorys',
		'parent_item'       => 'Parent Other Service Category',
		'parent_item_colon' => 'Parent Other Service Category:',
		'edit_item'         => 'Edit Other Service Category',
		'update_item'       => 'Update Other Service Category',
		'add_new_item'      => 'Add New Other Service Category',
		'new_item_name'     => 'New Other Service Category Name',
		'menu_name'         => 'Other Service Categories',
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => false,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'otherService-category' ),
	);

	register_taxonomy( 'otherService_category', array( 'otherservice' ), $args );
}

add_action( 'init', 'otherService_post_type' );
add_action( 'init', 'create_otherService_taxonomies', 0 );

/* ============================== Other Services Custom Fields ===================================*/
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_otherServices',
		'title' => 'Other Service',
		'fields' => array (
			array (
				'key' => 'field_54c48df9bed2f',
				'label' => 'Name:',
				'name' => 'otherservice_name',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_54c48e0cbed30',
				'label' => 'Price:',
				'name' => 'otherservice_price',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_54c48ed6bed31',
				'label' => 'Description:',
				'name' => 'otherservice_description',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			)
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'otherService',
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
				1 => 'discussion',
				2 => 'comments',
				3 => 'author',
				4 => 'categories',
			),
		),
		'menu_order' => 0,
	));
}