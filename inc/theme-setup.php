<?php
/*
=====================
	Theme Setup Function
=====================
*/

function theme_setup(){
	
	register_nav_menus(
		array( 
			 'main-menu' => __( 'Main Menu', 'vi' ),
             'footer-bottom-menu' => __( 'Footer Bottom Menu', 'vi'),
		)
    );
}

add_action( 'after_setup_theme', 'theme_setup' );


/**
 * Admin styles
 */
add_action( 'admin_enqueue_scripts', 'load_admin_style' );
function load_admin_style() {
    wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/inc/admin/admin-style.css', false, '1.0.0' );
}

