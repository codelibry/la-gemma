<?php
/*
=====================
	ACF functions
=====================
*/


/*
=====================
	ACF options page
=====================
*/
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title'  => __('Theme Options'),
            'menu_title'  => __('Theme Options'),
            'redirect'    => false,
        ));

        // Add sub page.
//        $headerOptions = acf_add_options_page(array(
//            'page_title'  => __('Header Options'),
//            'menu_title'  => __('Header'),
//            'parent_slug' => $parent['menu_slug'],
//        ));
//        $footerOptions = acf_add_options_page(array(
//            'page_title'  => __('Footer Options'),
//            'menu_title'  => __('Footer'),
//            'parent_slug' => $parent['menu_slug'],
//        ));
        $scripts = acf_add_options_page(array(
            'page_title'  => __('Scripts'),
            'menu_title'  => __('Scripts'),
            'parent_slug' => $parent['menu_slug'],
        ));
//        $contacts = acf_add_options_page(array(
//          'page_title'  => __('Contacts'),
//          'menu_title'  => __('Contacts'),
//          'parent_slug' => $parent['menu_slug'],
//        ));
    }
}
add_action('acf/init', 'my_acf_op_init');



/*
=====================
	ACF Section Options Handler
=====================
*/

function get_acf_block_options(){
    $options = get_sub_field('options');

    $params = array(
        'id' => '',
        'class' => '',
        'style' => ''
    );

    if($options):

        //Block spacings
        if($options['change_topbottom_spacings']):

            //spacings desktop
            $params['class'] .= ' pt-lg-'.$options['spacing_top_desktop'];
            $params['class'] .= ' pb-lg-'.$options['spacing_bottom_desktop'];

            //spacings tablet
            $params['class'] .= ' pt-md-'.$options['spacing_top_tablet'];
            $params['class'] .= ' pb-md-'.$options['spacing_bottom_tablet'];

            //spacings mobile
            $params['class'] .= ' pt-'.$options['spacing_top_mobile'];
            $params['class'] .= ' pb-'.$options['spacing_bottom_mobile'];

        endif;

        //Block custom classes
        if($options['block_custom_classes']):
            $params['class'] .= ' '.$options['block_custom_classes'];
        endif; 

        //Block background color
        if($options['change_background_color']):
            $params['style'] .= 'background-color:'.$options['background_color'].';';
        endif; 

        //Block text color
        if($options['text_color'] != 'default'):
            $params['class'] .= ' text-color-'.$options['text_color'];
        endif;

        //Block ID
        $params['id'] = $options['block_id']?$options['block_id']:'';
    endif;

    return $params;
}