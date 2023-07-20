<?php
    /*
        =====================
            Theme functions
        =====================
    */
    
    
    /*
        =====================
            Remove p tags from acf wysiwyg fields
        =====================
    */
//remove_filter ('acf_the_content', 'wpautop');
    
    
    /*
        =====================
            Limit excerpt length function
        =====================
    */
    function excerpt($limit, $post_id = -1)
    {
        if ($post_id == -1):
            $excerpt = explode(' ', get_the_excerpt(), $limit);
        else:
            $excerpt = explode(' ', get_the_excerpt($post_id), $limit);
        endif;
        if (count($excerpt) >= $limit) {
            array_pop($excerpt);
            $excerpt = implode(" ", $excerpt) . '...';
        } else {
            $excerpt = implode(" ", $excerpt);
        }
        $excerpt = preg_replace('`[[^]]*]`', '', $excerpt);
        return $excerpt;
    }
    
    
    /*
        =====================
            Don't scale down large images
        =====================
    */
    add_filter('big_image_size_threshold', '__return_false');
    
    
    /*
        =====================
            Move Yoast to bottom
        =====================
    */
    function yoasttobottom()
    {
        return 'low';
    }
    
    add_filter('wpseo_metabox_prio', 'yoasttobottom');
    
    /*
        =====================
            Get SVG file content
        =====================
    */
    function get_inline_svg($name)
    {
        if ($name):
            return file_get_contents(esc_url(get_template_directory_uri() . '/assets/icons/' . $name));
        endif;
        return '';
    }
    
    function change_menu_item_link_to_file($items, $args) {
            foreach ($items as $item) {
                $file_url = get_field('pdf_file', $item);
                if ($file_url) {
                    $item->url = $file_url;
                    $item->target = '_blank'; // Це додається, якщо ви хочете, щоб файл відкривався у новому вікні/вкладці
                    $item->xfn = 'download'; // Це додається, щоб вказати, що посилання є для завантаження
                }
        }
        return $items;
    }
    add_filter('wp_nav_menu_objects', 'change_menu_item_link_to_file', 10, 2);
    
    function add_download_link_header($item_output, $item, $depth, $args) {
        $file_url = get_field('pdf_file', $item);
        if ($file_url) {
            $item_output = str_replace('<a', '<a download href="' . esc_url($file_url) . '"', $item_output);
        }
        return $item_output;
    }
    add_filter('walker_nav_menu_start_el', 'add_download_link_header', 10, 4);




