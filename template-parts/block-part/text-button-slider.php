<?php
$position = get_sub_field('position');
$content_title = get_sub_field('title');
$description = get_sub_field('description');
$button = get_sub_field('button');
$today = date('Y-m-d');
$tomorrow = new DateTime('tomorrow');
$tomorrow = $tomorrow->format('Y-m-d');
if ($button) {
	$url = sprintf('https://be.synxis.com/?adult=3&arrive=%s&chain=10205&child=1&config=gemma&currency=EUR&depart=%s7&hotel=40864&level=hotel&locale=it-IT&rooms=1&theme=gemma',$today,$tomorrow);;
	$title = $button['title'];
	$target = $button['target'];
}
$image_list = get_sub_field('image_list');
?>

<section class="text-slider section">
	<div class="container">
		<div class="row  <?php echo $position == 'left'?'flex-row-reverse':''; ?>">
            <div class="col-lg-5">
                <div class="text-slider__information ">
                    <?php echo $content_title?'<h3 class="text-slider__title animate fade-up">'.$content_title.'</h3>':'';
                    echo $description?'<span class="text-slider__description animate fade-up delay-1">'.$description.'</span>':'';
                    if($button): ?>
                        <div class="animate fade-up delay-2 text-slider__button">
                            <a href="<?php echo $url?:''; ?>" class="button button--bg" target="<?php echo $target?:''; ?>">
                                <?php echo $title?:'Book Now'; ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6 animate fade-up d-flex <?php echo $position == 'left'?'justify-content-start':'justify-content-end'; ?>">
                <ul class="text-slider__gallery js-slider">
                    <?php if($image_list) {
                        foreach ($image_list as $image) {
                            echo '<li><div class="text-slider__gallery-item">'.wp_get_attachment_image($image['image']['ID'], 'full', false , array( 'class' => 'text-slider__gallery-item__img' )).'</div></li>';
                        }
                    } ?>
                </ul>
            </div>
		</div>
	</div>
</section>
