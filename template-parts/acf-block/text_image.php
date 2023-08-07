<?php
    $image_position = get_sub_field('image_position');
    $image = get_sub_field('image');
    $title = get_sub_field('title');
    $text = get_sub_field('text');
?>

<?php if ($image) : ?>
    <section class="text-image">
        <div class="container">
            <div class="row d-flex justify-content-center justify-content-lg-between text-image__wrap">
                <div class="col-12 col-lg-6 text-image__img <?php echo $image_position === 'left' ? 'order-2 order-lg-1 image-left' : 'order-2 image-right'; ?>">
                    <div class="text-image__img-wrap">
                        <img src="<?php echo $image['url']; ?>"
                             alt="<?php echo $image['alt'] ?: $image['title']; ?>">

                        <?php if($title) :?>
                            <div class="text-image__img-title">
                                <?php echo $title;?>
                            </div>
                        <?php endif; ?>
                        
                    </div>
                </div>
                <?php if($title || $text) :?>
                    <div class="col-12 col-lg-6 text-center text-image__content <?php echo $image_position === 'left' ? 'order-1 order-lg-2 content-right' : 'order-1 content-left'; ?>">
                        <?php if($title) :?>
                            <div class="text-image__title">
                                <?php echo $title;?>
                            </div>
                        <?php endif; ?>
                        <?php if($text) :?>
                            <div class="text-image__text">
                                <?php echo $text; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="horizontal-line"></div>
    </section>
<?php endif; ?>

