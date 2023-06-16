<?php
    $image = get_sub_field('image');
    $text = get_sub_field('text');
?>

<?php if ($image || $text) : ?>
    <section class="hero">
        <div class="container">
            <div class="hero__wrap">
                <?php if ($image) : ?>
                    <div class="hero__image">
                        <img src="<?php echo $image['url']; ?>"
                             alt="<?php echo $image['alt'] ?: $image['title']; ?>">
                    </div>
                <?php endif; ?>
                <?php if ($text) : ?>
                    <div class="hero__text">
                        <?php echo $text; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
