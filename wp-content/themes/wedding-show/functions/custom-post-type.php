<?php
	add_action( 'init', 'createExhibitors');

	function createExhibitors() {
		register_post_type( 'exhibitor',
			array('labels' => array(
				'name' => __('Exhibitors'),
				'singular_name' => __('Exhibitor'), 
				'all_items' => __('All Exhibitors'),
				'add_new_item' => __('Add New Exhibitor'),
				'edit' => __( 'Edit' ),
				'edit_item' => __('Edit'), 
				'new_item' => __('New Exhibitor'), 
				'view_item' => __('View Exhibitors'), 
				'search_items' => __('Search Exhibitors'), 
			), 
			'show_in_nav_menus' => true,
			'public' => true,
			'publicly_queryable' => true,
			'menu_icon' => 'dashicons-id', 
			'supports' => array('title', 'editor'),
			'show_in_rest' => true,
		 	) 
		); 
	}