<?php
    $slider_position = get_sub_field('slider_position');
    $slides = get_sub_field('slides');
    $title = get_sub_field('title');
    $text = get_sub_field('text');
?>

<?php if ($slides) : ?>
    <section class="products">
<!--        <div class="horizontal-line"></div>-->
        <div class="container">
            <div class="products__wrap d-flex align-items-center justify-content-center justify-content-lg-between">
                <div class="products__slider js-slider <?php echo $slider_position === 'left' ? 'order-1 order-lg-2 slider-left' : 'order-2 order-lg-2 slider-right'; ?>">
                    <?php foreach ($slides as $image) : ?>
                        <div class="products__slider-item">
                            <img src="<?php echo $image['url']; ?>"
                                 alt="<?php echo $image['alt'] ?: $image['title']; ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php if ($title && $text) : ?>
                    <div class="products__content <?php echo $slider_position === 'left' ? 'order-2 order-lg-1 content-right' : 'order-1 order-lg-1 content-left'; ?>">
                        <div class="products__title">
                            <?php echo $title; ?>
                        </div>
                        <div class="products__text">
                            <?php echo $text; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

