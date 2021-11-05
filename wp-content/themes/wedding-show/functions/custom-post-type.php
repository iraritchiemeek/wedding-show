<?php
	add_action( 'init', 'createExhibitors');
	add_action( 'init', 'createExhibitorTypes');

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
			'menu_icon' => 'image', 
			'supports' => array('title', 'editor', 'thumbnail'),
			'show_in_rest' => true,
		 	) 
		); 
	}

	function createExhibitorTypes() {
		register_post_type( 'exhibitor_type',
			array('labels' => array(
				'name' => __('Exhibitor Types'),
				'singular_name' => __('Exhibitor Type'), 
				'all_items' => __('All Exhibitor Types'),
				'add_new_item' => __('Add New Exhibitor Type'),
				'edit' => __( 'Edit' ),
				'edit_item' => __('Edit'), 
				'new_item' => __('New Exhibitor Type'), 
				'view_item' => __('View Exhibitor Types'), 
				'search_items' => __('Search Exhibitor Types'), 
			), 
			'show_in_nav_menus' => true,
			'public' => true,
			'publicly_queryable' => true,
			'menu_icon' => 'aside', 
			'supports' => array('title', 'thumbnail'),
			'show_in_rest' => true,
			'rewrite' => array('slug' => 'exhibitors', 'with_front' => false),
		 	) 
		); 
	}