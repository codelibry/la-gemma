<?php
    $image = get_sub_field('image');
    $text = get_sub_field('text');
?>

<?php if ($text) : ?>
    <section class="blockquote">
        <div class="container">
            <div class="blockquote__wrap">
                <?php if ($image) : ?>
                    <div class="blockquote__img">
                        <img src="<?php echo $image['url']; ?>"
                             alt="<?php echo $image['alt'] ?: $image['title']; ?>">
                    </div>
                <?php endif; ?>
                <div class="blockquote__content">
                    <?php echo $text; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

