<?php
    /*
        =====================
            Custom Taxonomies
        =====================
    */
    
    function cptui_register_my_taxes_post_rooms_type()
    {
        
        /**
         * Taxonomy: Rooms type.
         */
        
        $labels = [
            "name" => __("Rooms type", "la_gemma"),
            "singular_name" => __("Rooms type", "la_gemma"),
        ];
        
        
        $args = [
            "label" => __("Rooms type", "la_gemma"),
            "labels" => $labels,
            "public" => true,
            "publicly_queryable" => true,
            "hierarchical" => true,
            "show_ui" => true,
            "show_in_menu" => true,
            "show_in_nav_menus" => true,
            "query_var" => true,
            "rewrite" => ['slug' => 'rooms-type', 'with_front' => true,],
            "show_admin_column" => false,
            "show_in_rest" => true,
            "show_tagcloud" => false,
            "rest_base" => "rooms-type",
            "rest_controller_class" => "WP_REST_Terms_Controller",
            "rest_namespace" => "wp/v2",
            "show_in_quick_edit" => true,
            "sort" => true,
            "show_in_graphql" => false,
        ];
        register_taxonomy("rooms-type", ["rooms-and-suites"], $args);
    }
    
    add_action('init', 'cptui_register_my_taxes_post_rooms_type');