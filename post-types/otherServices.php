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

add_action( 'init', 'otherService_post_type' );

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
					'value' => 'otherservice',
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