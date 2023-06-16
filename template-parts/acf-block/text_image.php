<?php
    $image_position = get_sub_field('image_position');
    $image = get_sub_field('image');
    $text = get_sub_field('text');
    $button = get_sub_field('button');
?>

<?php if ($image && $text) : ?>
    <section class="text-image">
        <div class="container">
            <div class="text-image__wrap">
                <div class="text-image__img image-<?php echo $image_position; ?>">
                    <img src="<?php echo $image['url']; ?>"
                         alt="<?php echo $image['alt'] ?: $image['title']; ?>">
                </div>
                <div class="text-image__content">
                    <?php echo $text; ?>
                    <?php if ($button) : ?>
                        <div class="text-image__btn">
                            <a href="<?php echo $button['url']; ?>" class="button"> <?php echo $button['title']; ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

