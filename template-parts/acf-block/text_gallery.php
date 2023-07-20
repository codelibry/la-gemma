<?php
    $gallery_position = get_sub_field('gallery_position');
    $gallery = get_sub_field('gallery');
    $title = get_sub_field('title');
    $text = get_sub_field('text');
    $button = get_sub_field('button');
?>

<?php if ($gallery) : ?>
    <section class="text-gallery">
        <div class="container">
            <div class="text-gallery__wrap d-flex align-items-center justify-content-center justify-content-lg-between">
                <div class="text-gallery__slider js-slider desktop <?php echo $gallery_position === 'left' ? 'order-1 gallery-left' : 'order-1 order-lg-2 gallery-right'; ?>">
                    <?php foreach ($gallery as $image) : ?>
                        <div class="text-gallery__slider-item">
                            <img src="<?php echo $image['url']; ?>"
                                 alt="<?php echo $image['alt'] ?: $image['title']; ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php if ($title && $text) : ?>
                    <div class="text-gallery__content <?php echo $gallery_position === 'left' ? 'order-2 content-right' : 'order-2 order-lg-1 content-left'; ?>">
                        <div class="text-gallery__title">
                            <?php echo $title; ?>
                        </div>
                        <div class="text-gallery__slider js-slider mobile <?php echo $gallery_position === 'left' ? 'order-1 gallery-left' : 'order-1 order-lg-2 gallery-right'; ?>">
                            <?php foreach ($gallery as $image) : ?>
                                <div class="text-gallery__slider-item">
                                    <img src="<?php echo $image['url']; ?>"
                                         alt="<?php echo $image['alt'] ?: $image['title']; ?>">
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="text-gallery__text">
                            <?php echo $text; ?>
                        </div>
                        <?php if ($button) : ?>
                            <div class="text-gallery__btn">
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

