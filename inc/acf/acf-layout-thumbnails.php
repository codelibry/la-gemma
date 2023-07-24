<?php
    
    /**
     * ACF Extended plugin + ACF PRO required
     */
    
    
    // Hero section
    
    add_filter('acfe/flexible/thumbnail/layout=hero_section', 'hero_section_layout_thumbnail', 10, 3);
    function hero_section_layout_thumbnail($thumbnail, $field, $layout)
    {
        
        // Must return an URL or Attachment ID
        return get_template_directory_uri() . '/assets/image/layout-thumbnails/hero-section-thumbnail.png';
    }
    
    // Hero banner
    
    add_filter('acfe/flexible/thumbnail/layout=hero_banner', 'hero_banner_layout_thumbnail', 10, 3);
    function hero_banner_layout_thumbnail($thumbnail, $field, $layout)
    {
        
        // Must return an URL or Attachment ID
        return get_template_directory_uri() . '/assets/image/layout-thumbnails/hero-banner-thumbnail.png';
    }
    
    // Page banner
    
    add_filter('acfe/flexible/thumbnail/layout=page_banner', 'page_banner_layout_thumbnail', 10, 3);
    function page_banner_layout_thumbnail($thumbnail, $field, $layout)
    {
        
        // Must return an URL or Attachment ID
        return get_template_directory_uri() . '/assets/image/layout-thumbnails/page-banner-thumbnail.png';
    }
    
    // Text Image
    
    add_filter('acfe/flexible/thumbnail/layout=text_image', 'text_image_layout_thumbnail', 10, 3);
    function text_image_layout_thumbnail($thumbnail, $field, $layout)
    {
        
        // Must return an URL or Attachment ID
        return get_template_directory_uri() . '/assets/image/layout-thumbnails/text-image-thumbnail.png';
    }
    
    // Text with button Image
    
    add_filter('acfe/flexible/thumbnail/layout=text_with_button_image', 'text_with_button_image_layout_thumbnail', 10, 3);
    function text_with_button_image_layout_thumbnail($thumbnail, $field, $layout)
    {
        
        // Must return an URL or Attachment ID
        return get_template_directory_uri() . '/assets/image/layout-thumbnails/text-with-button-image-thumbnail.png';
    }
    
    // Text Gallery
    
    add_filter('acfe/flexible/thumbnail/layout=text_gallery', 'text_gallery_layout_thumbnail', 10, 3);
    function text_gallery_layout_thumbnail($thumbnail, $field, $layout)
    {
        
        // Must return an URL or Attachment ID
        return get_template_directory_uri() . '/assets/image/layout-thumbnails/text-gallery-thumbnail.png';
    }
    
    // Products slider
    
    add_filter('acfe/flexible/thumbnail/layout=products_slider', 'products_slider_layout_thumbnail', 10, 3);
    function products_slider_layout_thumbnail($thumbnail, $field, $layout)
    {
        
        // Must return an URL or Attachment ID
        return get_template_directory_uri() . '/assets/image/layout-thumbnails/products-slider-thumbnail.png';
    }
    
    // About section
    
    add_filter('acfe/flexible/thumbnail/layout=about_section', 'about_section_layout_thumbnail', 10, 3);
    function about_section_layout_thumbnail($thumbnail, $field, $layout)
    {
        
        // Must return an URL or Attachment ID
        return get_template_directory_uri() . '/assets/image/layout-thumbnails/about-section-thumbnail.png';
    }
    
    // Menu list
    
    add_filter('acfe/flexible/thumbnail/layout=menu_list', 'menu_list_layout_thumbnail', 10, 3);
    function menu_list_layout_thumbnail($thumbnail, $field, $layout)
    {
        
        // Must return an URL or Attachment ID
        return get_template_directory_uri() . '/assets/image/layout-thumbnails/menu-list-thumbnail.png';
    }
    
    // Content Image
    
    add_filter('acfe/flexible/thumbnail/layout=content_image', 'content_image_layout_thumbnail', 10, 3);
    function content_image_layout_thumbnail($thumbnail, $field, $layout)
    {
        
        // Must return an URL or Attachment ID
        return get_template_directory_uri() . '/assets/image/layout-thumbnails/content-image-thumbnail.png';
    }
    
    // Text Form
    
    add_filter('acfe/flexible/thumbnail/layout=text_form', 'text_form_layout_thumbnail', 10, 3);
    function text_form_layout_thumbnail($thumbnail, $field, $layout)
    {
        
        // Must return an URL or Attachment ID
        return get_template_directory_uri() . '/assets/image/layout-thumbnails/text-form-thumbnail.png';
    }
    
    // Information section
    
    add_filter('acfe/flexible/thumbnail/layout=information_section', 'information_section_layout_thumbnail', 10, 3);
    function information_section_layout_thumbnail($thumbnail, $field, $layout)
    {
        
        // Must return an URL or Attachment ID
        return get_template_directory_uri() . '/assets/image/layout-thumbnails/information-section-thumbnail.png';
    }
    
    // Blockquote section
    
    add_filter('acfe/flexible/thumbnail/layout=blockquote_section', 'blockquote_section_layout_thumbnail', 10, 3);
    function blockquote_section_layout_thumbnail($thumbnail, $field, $layout)
    {
        
        // Must return an URL or Attachment ID
        return get_template_directory_uri() . '/assets/image/layout-thumbnails/blockquote-section-thumbnail.png';
    }
    
    // Text section
    
    add_filter('acfe/flexible/thumbnail/layout=text_section', 'text_section_layout_thumbnail', 10, 3);
    function text_section_layout_thumbnail($thumbnail, $field, $layout)
    {
        
        // Must return an URL or Attachment ID
        return get_template_directory_uri() . '/assets/image/layout-thumbnails/text-section-thumbnail.png';
    }
    
    // Follow slider
    
    add_filter('acfe/flexible/thumbnail/layout=follow_slider', 'follow_slider_layout_thumbnail', 10, 3);
    function follow_slider_layout_thumbnail($thumbnail, $field, $layout)
    {
        
        // Must return an URL or Attachment ID
        return get_template_directory_uri() . '/assets/image/layout-thumbnails/follow-slider-thumbnail.png';
    }
    
    // Reservation form
    
    add_filter('acfe/flexible/thumbnail/layout=reservation_form', 'reservation_form_layout_thumbnail', 10, 3);
    function reservation_form_layout_thumbnail($thumbnail, $field, $layout)
    {
        
        // Must return an URL or Attachment ID
        return get_template_directory_uri() . '/assets/image/layout-thumbnails/reservation-form-thumbnail.png';
    }