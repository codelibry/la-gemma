<?php
while(have_rows('content')) {
	the_row();
	if(get_row_layout() == 'banner_section') {
		get_template_part( '/template-parts/block-part/hero');
	} elseif(get_row_layout() == 'green_text_section') {
		get_template_part( '/template-parts/block-part/text');
	} elseif (get_row_layout() == 'text_button_slider_section') {
		get_template_part( '/template-parts/block-part/text-button-slider');
	} elseif (get_row_layout() == 'text_image_section') {
		get_template_part( '/template-parts/block-part/image-text');
	} elseif (get_row_layout() == 'card_slider_with_text') {
		get_template_part( '/template-parts/block-part/card-slider-with-text');
	} elseif (get_row_layout() == 'button_section') {
		get_template_part( '/template-parts/block-part/block-button');
	} elseif (get_row_layout() == 'image_list_section') {
		get_template_part( '/template-parts/block-part/image-list');
	}
}


