<?php
$standart_button_book_here = get_sub_field('standart_button_book_here');

if ($standart_button_book_here) {
	$button = get_field('action_button', 'option');
} else {
	$button = get_sub_field('custom_button');
}
$today = date('Y-m-d');
$tomorrow = new DateTime('tomorrow');
$tomorrow = $tomorrow->format('Y-m-d');
$order_url = sprintf('https://be.synxis.com/?adult=3&arrive=%s&chain=10205&child=1&config=gemma&currency=EUR&depart=%s7&hotel=40864&level=hotel&locale=it-IT&rooms=1&theme=gemma',$today,$tomorrow);

if ($button) {
	$url = $button['url'];
	$target = $button['target'];
	$title = $button['title'];
}

?>

<section class="mb-6 button-section">
    <div class="container">
        <div class="row">
           <div class="col-12 d-flex justify-content-center animate fade-up">
               <?php if($standart_button_book_here): ?>
                   <a href="<?php echo $order_url; ?>" class="button button--bg" target="_blank">
                       <?php echo $title?:'Book Now'; ?>
                   </a>
               <?php else: ?>
                   <a href="<?php echo $url?:''; ?>" class="button button--bg" target="<?php echo $target?:''; ?>">
                       <?php echo $title?:'Book Now'; ?>
                   </a>
               <?php endif; ?>
           </div>
        </div>
    </div>
</section>
