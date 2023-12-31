<?php
    $image_position = get_sub_field('image_position');
    $image = get_sub_field('image');
    $title = get_sub_field('title');
    $subtitle = get_sub_field('subtitle');
    $text = get_sub_field('text');
    $button = get_sub_field('button');
?>

<?php if ($image) : ?>
    <section class="content-image">
        <div class="container">
            <div class="content-image__wrap d-flex justify-content-center justify-content-lg-between">
                <div class="content-image__img <?php echo $image_position === 'left' ? 'order-1 image-left' : 'order-1 order-lg-2 image-right'; ?>">
                    <div class="content-image__img-wrap">
                        <img src="<?php echo $image['url']; ?>"
                             alt="<?php echo $image['alt'] ?: $image['title']; ?>">
                    </div>
                </div>
                <div class="text-center content-image__content <?php echo $image_position === 'left' ? 'order-2 content-right' : 'order-2 order-lg-1 content-left'; ?>">
                    <?php if ($title) : ?>
                        <div class="content-image__title h2">
                            <?php echo $title;?>
                        </div>
                    <?php endif; ?>
                    <?php if ($subtitle) : ?>
                        <div class="content-image__subtitle">
                            <?php echo $subtitle;?>
                        </div>
                    <?php endif; ?>
                    <?php if ($text) : ?>
                        <div class="content-image__text">
                            <?php echo $text;?>
                        </div>
                    <?php endif; ?>
                    <?php if ($button) : ?>
                        <div class="content-image__btn">
                            <a href="<?php echo $button['url']; ?>" class="button">
                                <?php echo $button['title']; ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

