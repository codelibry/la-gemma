<?php
$text = get_sub_field('text');
$image = get_sub_field('image');
if ($image): ?>

	<section class="image-text">
		<div class="container">
			<div class="row">
                <div class="col-12">
                    <div class="image-text__content">
                        <?php echo wp_get_attachment_image($image['ID'], 'full' , false , array( 'class' => 'image-text__img bg-parallax' )); ?>
                        <?php if($text): ?>
                            <span class="image-text__title">
                                <span><?php echo $text; ?></span>
                            </span>

                        <?php endif; ?>
                    </div>
                </div>
			</div>
		</div>
	</section>

<?php endif; ?>