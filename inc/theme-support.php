<?php
    
    /*
        =====================
            Theme support
        =====================
    */
    
    function cc_mime_types($mimes)
    {
        $mimes['svg'] = 'image/svg+xml';
        $mimes['json'] = 'application/json';
        return $mimes;
    }
    
    add_filter('upload_mimes', 'cc_mime_types');
    
    add_filter('upload_mimes', 'svg_upload_allow');
    function svg_upload_allow($mimes)
    {
        $mimes['svg'] = 'image/svg+xml';
        
        return $mimes;
    }
    
    add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);
    
    function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
    {
        
        if (version_compare($GLOBALS['wp_version'], '5.1.0', '>='))
            $dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
        else
            $dosvg = ('.svg' === strtolower(substr($filename, -4)));
        if ($dosvg) {
            
            if (current_user_can('manage_options')) {
                
                $data['ext'] = 'svg';
                $data['type'] = 'image/svg+xml';
            } else {
                $data['ext'] = $type_and_ext['type'] = false;
            }
            
        }
        
        return $data;
    }
    
    add_theme_support('post-thumbnails');
    
    function custom_language_switcher( $content ) {
        $desktop_view = '<span class="full-lang">[wpml_language_selector dropdown=0]</span>';
        $mobile_view  = '<span class="short-lang">[wpml_language_selector type=native]</span>';
        
        ob_start();
        
        echo '<div class="language-switcher-desktop">' . do_shortcode( $desktop_view ) . '</div>';
        
        echo '<div class="language-switcher-mobile">' . do_shortcode( $mobile_view ) . '</div>';
        
        $output = ob_get_clean();
        return $output . $content;
    }
    add_filter( 'the_content', 'custom_language_switcher' );
