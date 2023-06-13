<?php
/*
	=====================
		Theme basic components
	=====================	
*/


/*
	=====================
		Output styled button functions
	=====================	
*/
function button($label='Button', $href='#', $target = '_self',$class=''){
    return '<a class="button '.$class.'" href="'.$href.'" target="'.$target.'"><span><span class="button__text">'.$label.'</span><span class="button__icon">'.get_inline_svg('link-arrow.svg').'</span></span></a>';
}

function button_acf($link,$class=''){
    if( $link ): 
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        return '<a class="button '.$class.'" href="'.esc_url( $link_url ).'" target="'.esc_attr( $link_target ).'"><span><span class="button__text">'.esc_html( $link_title ).'</span><span class="button__icon"><span class="button__icon__main">'.get_inline_svg('link-arrow.svg').'</span><span class="button__icon__secondary">'.get_inline_svg('link-arrow.svg').'</span></span></span></a>';
    endif;
}


/*
	=====================
		Output image function
	=====================	
*/
function image_acf($image,$classes=''){
    if( !empty( $image ) ): ?>
      <?php
        $imgWidth = $image['width'];
        $imgHeight = $image['height'];
  
        if($image['mime_type'] === 'image/svg+xml') {
          $img = wp_get_attachment_image_src($image['id'], 'full');
          $imgWidth = $img[1];
          $imgHeight = $img[2];
        }
  
        $imgRatio = 100*$imgHeight/$imgWidth;
        $blockPadding = 'style="padding-bottom:'.$imgRatio.'%;"';
  
      ?>
      <div class="img-block <?php echo $classes; ?>" <?php echo $blockPadding; ?>>
        <img data-src="<?php echo esc_url($image['url']); ?>" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" class="lazy-img" alt="<?php echo esc_attr($image['alt']); ?>" />
      </div>
      <noscript>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      </noscript>
    <?php endif; 
}