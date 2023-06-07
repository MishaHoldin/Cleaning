<?php
	function blog_post_type() {
			$labels = array(
					'name'                  => _x( 'Blog', 'Post Type General Name', 'text_domain' ),
					'singular_name'         => _x( 'Blog', 'Post Type Singular Name', 'text_domain' ),
					'menu_name'             => __( 'Blog', 'text_domain' ),
					'all_items'             => __( 'Blog', 'text_domain' ),
					'add_new_item'          => __( 'Добавити Blog', 'text_domain' ),
					'add_new'               => __( 'Добавити Blog', 'text_domain' ),
			);
			$args = array(
					'label'                 => __( 'Blog', 'text_domain' ),
					'labels'                => $labels,
					'supports'              => array( 'thumbnail','title', 'editor','excerpt' ),// 'title','editor','author','thumbnail',,'trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
					'hierarchical'          => false,
					'public'                => true,
					'show_ui'               => true,
					'show_in_menu'          => true,
					'menu_position'         => 4,
					'menu_icon'             => 'dashicons-images-alt2',
					'show_in_admin_bar'     => true,
					'show_in_nav_menus'     => true,
					'can_export'            => true,
					'has_archive'           => true,
					'exclude_from_search'   => false,
					'publicly_queryable'    => true,
					'capability_type'       => 'page',
					'show_in_rest' => true, // Important !
					add_theme_support( 'post-thumbnails' ),
					// 'taxonomies'          => array( 'category' ),
			);
			register_post_type( 'blog', $args );
			
	}
	add_action( 'init', 'blog_post_type', 0 );

