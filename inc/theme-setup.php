<?php
    /*
    =====================
        Theme Setup Function
    =====================
    */
    
    function theme_setup()
    {
        
        register_nav_menus(
            array(
                'header-menu' => __('Header Menu', 'la_gemma'),
                'footer-menu' => __('Footer Menu', 'la_gemma'),
            )
        );
    }
    
    add_action('after_setup_theme', 'theme_setup');
    
    
    /**
     * Admin styles
     */
    function load_admin_style()
    {
        wp_enqueue_style('admin_css', get_template_directory_uri() . '/inc/admin/admin-style.css', false, '1.0.0');
    }
    
    add_action('admin_enqueue_scripts', 'load_admin_style');
