<?php 
/* ==================================== One Day Tour =========================================*/

function oneDay_post_type() {

	register_post_type( 'OneDay',
					   array(
						   'labels' => array(
							   'name'               => 'One Day Tour',
							   'singular_name'      => 'One Day Tour',
							   'add_new'            => 'Add New',
							   'add_new_item'       => 'Add New One Day Tour',
							   'edit_item'          => 'Edit One Day Tour',
							   'new_item'           => 'New One Day Tour',
							   'all_items'          => 'All One Day Tours',
							   'view_item'          => 'View One Day Tour',
							   'search_items'       => 'Search One Day Tours',
							   'not_found'          => 'No one day tour found',
							   'not_found_in_trash' => 'No one day tour found in Trash',
							   'parent_item_colon'  => '',
							   'menu_name'          => 'One Day'
						   ),
                           'menu_icon' => 'dashicons-palmtree',
						   'public' => true,
						   'has_archive' => true,
						   'rewrite' => array('slug' => 'oneday'),
						   'supports' => array( 'title', 'author', 'editor', 'thumbnail', 'excerpt', 'comments' ),
						   'add_new' => 'Add One Day Tour',
					   )
					  );
}

add_action( 'init', 'oneDay_post_type' );

/* ============================== One Day Tour Custom Fields ===================================*/
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_one-day-tour',
		'title' => 'One Day Tour',
		'fields' => array (
			array (
				'key' => 'field_54c48df9bed2f',
				'label' => 'Name:',
				'name' => 'name',
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
				'name' => 'oneday_price',
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
				'name' => 'description',
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
					'value' => 'oneday',
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
				2 => 'discussion',
				3 => 'comments',
				4 => 'author',
				5 => 'categories',
			),
		),
		'menu_order' => 0,
	));
}