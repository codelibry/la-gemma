<?php
    $image_position = get_sub_field('image_position');
    $image = get_sub_field('image');
    $title = get_sub_field('title');
    $subtitle = get_sub_field('subtitle');
    $text = get_sub_field('text');
    $button = get_sub_field('button');
?>

<?php if ($image && $title && $text) : ?>
    <section class="about">
        <div class="container">
            <div class="about__wrap row d-flex align-items-center justify-content-between">
                <div class="col-12 col-lg-6 about__img <?php echo $image_position === 'left' ? 'order-1 image-left' : 'order-1 order-lg-2 image-right'; ?>">
                    <div class="about__img-wrap">
                        <img src="<?php echo $image['url']; ?>"
                             alt="<?php echo $image['alt'] ?: $image['title']; ?>">
                    </div>
                </div>
                <div class="col-12 col-lg-6 about__content <?php echo $image_position === 'left' ? 'order-2 content-right' : 'order-2 order-lg-1 content-left'; ?>">
                    <div class="about__title">
                        <?php echo $title; ?>
                    </div>
                    <?php if ($subtitle) : ?>
                        <div class="about__subtitle">
                            <?php echo $subtitle; ?>
                        </div>
                    <?php endif; ?>
                    <div class="about__text">
                        <?php echo $text; ?>
                    </div>
                    <?php if ($button) : ?>
                        <div class="about__btn">
                            <a href="<?php echo $button['url']; ?>"
                               class="button">
                                <?php echo $button['title']; ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="horizontal-line"></div>
    </section>
<?php endif; ?>

