<?php
/*
	=====================
		Custom Post Types
	=====================	
*/
    
    function cptui_register_my_cpt_rooms_and_suites()
    {
        
        /**
         * Post Type: Room & Suites
         */
        
        $labels = array(
            'name' => __('Room & Suites', 'la_gemma'),
            'singular_name' => __('Room & Suites', 'la_gemma'),
        );
        
        $args = array(
            'label' => __('Room & Suites', 'la_gemma'),
            'labels' => $labels,
            'description' => '',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_rest' => true,
            'rest_base' => '',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
            'has_archive' => false,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'delete_with_user' => false,
            'exclude_from_search' => false,
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'rewrite' => array(
                'slug' => 'rooms_and_suites',
                'with_front' => true,
            ),
            'query_var' => true,
            'menu_icon' => 'dashicons-groups',
            'supports' => array('title', 'thumbnail'),
            'show_in_graphql' => false,
        );
        
        register_post_type('rooms_and_suites', $args);
    }
    
    add_action('init', 'cptui_register_my_cpt_rooms_and_suites');


