<?php
/*
	=====================
		Clean up
	=====================	
*/

/*
	=====================
		Clean up the WordPress head
	=====================	
*/

// remove header links
add_action('init', 'wp_head_cleanup');
function wp_head_cleanup() {
    remove_action( 'wp_head', 'feed_links_extra', 3 );                      // Category Feeds
    remove_action( 'wp_head', 'feed_links', 2 );                            // Post and Comment Feeds
    remove_action( 'wp_head', 'rsd_link' );                                 // EditURI link
    remove_action( 'wp_head', 'wlwmanifest_link' );                         // Windows Live Writer
    remove_action( 'wp_head', 'index_rel_link' );                           // index link
    remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );              // previous link
    remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );               // start link
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );   // Links for Adjacent Posts
    remove_action( 'wp_head', 'wp_generator' );                             // WP version
    remove_action( 'wp_head', 'wp_shortlink_wp_head');                      // Remove shortlink
    remove_action('wp_head', 'rest_output_link_wp_head', 10);               // Disable Link header for the REST API
    remove_action('template_redirect', 'rest_output_link_header', 11, 0);   // Disable Link header for the REST API
}

// remove WP version from RSS
add_filter('the_generator', 'wp_rss_version');
function wp_rss_version() { return ''; }

/*
	=====================
		Remove Gutenberg Block Library CSS from loading on the frontend
	=====================	
*/
function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
}
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css' );

/*
	=====================
		Remove emoji icons: styles and 
	=====================	
*/
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

/*
	=====================
		Remove <p> and <br/> from Contact Form 7
	=====================	
*/
add_filter('wpcf7_autop_or_not', '__return_false');

/*
	=====================
		Remove WordPress comment support
	=====================	
*/
// Removes from admin menu
add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
// Removes from post and pages
add_action('init', 'remove_comment_support', 100);

function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}

/*
	=====================
		Limit revision for a cleaner DB
	=====================	
*/
//define( 'WP_POST_REVISIONS', 10 );

/*
	=====================
		Only enque contact form 7 scripts when a shortcode exists
	=====================	
*/
//function dd_wpcf7_dequeue_scripts() {
//
//    $load_scripts = false;
//
//    if( is_singular() ) {
//        $post = get_post();
//        if( has_shortcode($post->post_content, 'contact-form-7') ) {
//            $load_scripts = true;
//        }
//    }
//    if( ! $load_scripts ) {
//        wp_dequeue_script( 'contact-form-7' );
//        wp_dequeue_script('google-recaptcha');
//        wp_dequeue_style( 'contact-form-7' );
//    }
//}
//add_action( 'wp_enqueue_scripts', 'dd_wpcf7_dequeue_scripts', 99 );