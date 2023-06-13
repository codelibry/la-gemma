<?php
/*
=====================
	ACF Custom Blocks
=====================
*/

add_action('acf/init', 'my_acf_init');
  
function my_acf_init() {
  // check function exists
  if( function_exists('acf_register_block') ) {
    
    // register a full width image block
    acf_register_block(array(
      'name'        => 'text',
      'title'       => __('Text Block'),
      'description'   => __('Text Block'),
      'render_callback' => 'my_acf_block_render_callback',
      'category'      => 'custom',
      'icon'        => 'welcome-add-page',
    ));
  acf_register_block(array(
	  'name'        => 'content',
	  'title'       => __('Content'),
	  'render_callback' => 'my_acf_block_render_callback',
	  'category'      => 'custom',
	  'mode'        => 'edit',
	  'keywords'      => array( 'content' ),
	  'example' => [
		  'attributes' => [
			  'mode' => 'preview',
			  'data' => ['is_example' => true],
		  ]
	  ]
  ));
  }
}
  
function my_acf_block_render_callback( $block ) {
  
    // convert name ("acf/testimonial") into path friendly slug ("testimonial")
    $slug = str_replace('acf/', '', $block['name']);
  
    // include a template part from within the "template-parts" folder
    if( file_exists( get_theme_file_path("/template-parts/blocks/block-{$slug}.php") ) ) {
      include( get_theme_file_path("/template-parts/blocks/block-{$slug}.php") );
    }
}

/*
	=====================
		Remove unused gutenberg blocks support
	=====================	
*/
add_filter( 'allowed_block_types', 'allowed_block_types' );
 
function allowed_block_types( $allowed_blocks ) {
 
	return array(
		'acf/content',
        
	);
 
}