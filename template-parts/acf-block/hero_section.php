<?php
    $background_image = get_sub_field('background_image');
    $title = get_sub_field('title');
    $text = get_sub_field('text');
?>

<?php if ($background_image && $title) : ?>
    <section class="hero">
        <div class="hero__bg">
            <img src="<?php echo $background_image['url']; ?>"
                 alt="<?php echo $background_image['alt'] ?: $background_image['title']; ?>">
        </div>
        <div class="container">
            <div class="hero__wrap text-center">
                <div class="hero__title">
                    <?php echo $title; ?>
                </div>
                <?php if ($text) : ?>
                    <div class="hero__text">
                        <?php echo $text;?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
