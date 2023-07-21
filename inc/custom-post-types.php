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
            'has_archive' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'delete_with_user' => false,
            'exclude_from_search' => false,
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'rewrite' => array(
                'slug' => 'rooms-and-suites',
                'with_front' => true,
            ),
            'query_var' => true,
            'menu_icon' => 'dashicons-building',
            'supports' => array('title', 'editor', 'thumbnail'),
            'show_in_graphql' => false,
        );
        
        register_post_type('rooms-and-suites', $args);
    }
    
    add_action('init', 'cptui_register_my_cpt_rooms_and_suites');