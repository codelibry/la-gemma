<?php
    $image_position = get_sub_field('image_position');
    $image = get_sub_field('image');
    $text = get_sub_field('text');
?>

<?php if ($image && $text) : ?>
    <section class="text-image">
        <div class="container">
            <div class="row d-flex justify-content-center justify-content-lg-between text-image__wrap">
                <div class="col-12 col-lg-6 text-image__img <?php echo $image_position === 'left' ? 'order-1' : 'order-1 order-lg-2';?>">
                    <div class="text-image__img-wrap">
                        <img src="<?php echo $image['url']; ?>"
                             alt="<?php echo $image['alt'] ?: $image['title']; ?>">
                    </div>
                </div>
                <div class="col-12 col-lg-6 text-image__content <?php echo $image_position === 'left' ? 'order-2' : 'order-2 order-lg-1';?>">
                    <?php echo $text; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

