<?php
    $image = get_sub_field('image');
    $text = get_sub_field('text');
?>

<?php if ($image || $text) : ?>
    <section class="product-qualities">
        <div class="container">
            <div class="product-qualities__wrap">
                <?php if ($image) : ?>
                    <div class="product-qualities__image">
                        <img src="<?php echo $image['url']; ?>"
                             alt="<?php echo $image['alt'] ?: $image['title']; ?>">
                    </div>
                <?php endif; ?>
                <?php if ($text) : ?>
                    <div class="product-qualities__text">
                        <?php echo $text; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
