<?php
    $image_position = get_sub_field('image_position');
    $image = get_sub_field('image');
    $title = get_sub_field('title');
    $text = get_sub_field('text');
    $button = get_sub_field('button');
?>

<?php if ($image) : ?>
    <section class="text-with-btn-image">
        <div class="container">
            <div class="row d-flex justify-content-center justify-content-lg-between text-with-btn-image__wrap">
                <div class="col-12 col-lg-6 text-with-btn-image__img <?php echo $image_position === 'left' ? 'order-1 image-left' : 'order-1 order-lg-2 image-right'; ?>">
                    <div class="text-with-btn-image__img-wrap parallax-img-wrapper">
                        <img src="<?php echo $image['url']; ?>"
                             alt="<?php echo $image['alt'] ?: $image['title']; ?>" class="parallax-img">
                    </div>
                </div>
                <?php if ($title || $text || $button) : ?>
                    <div class="col-12 col-lg-6 text-center text-with-btn-image__content <?php echo $image_position === 'left' ? 'order-2 content-right' : 'order-2 order-lg-1 content-left'; ?>">
                        <?php if ($title) : ?>
                            <div class="text-with-btn-image__title">
                                <?php echo $title; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($text) : ?>
                            <div class="text-with-btn-image__text">
                                <?php echo $text; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($button) : ?>
                            <div class="text-with-btn-image__btn">
                                <a href="<?php echo $button['url']; ?>"
                                   class="button">
                                    <?php echo $button['title']; ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="horizontal-line"></div>
    </section>
<?php endif; ?>

