<?php
/*
=====================
	Add Styles And Scripts
=====================
*/

function vi_load_scripts(){
    
    $js_path = get_template_directory().'/dist/main.min.js';
    $style_ver = get_stylesheet_directory().'/dist/main.min.css';

    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', false , false , true);
    wp_enqueue_script( 'vendors', get_template_directory_uri() . '/dist/vendors.min.js', false , false , true);
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/dist/slick.js', false , false , true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/dist/main.min.js', array('jquery'), filemtime( $js_path ) , true);
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/dist/wow.min.js', false , false , true);
    //send PHP variables to JS
    wp_localize_script( 'main', 'customjs_ajax_object',
        array( 
            'ajax_url' => admin_url( 'admin-ajax.php' ),
            'ajax_nonce' => wp_create_nonce( "secure_nonce_name" ),
            'site_url' => get_site_url(),
            'theme_url' => get_template_directory_uri()
        )
    );
	/*theme css*/
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/dist/slick.css', array(), filemtime( $style_ver ), 'all');
	wp_enqueue_style( 'main', get_template_directory_uri() . '/dist/main.min.css', array(), filemtime( $style_ver ), 'all');
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/dist/animate.css', array(), filemtime( $style_ver ), 'all');
}
add_action( 'wp_enqueue_scripts', 'vi_load_scripts' );