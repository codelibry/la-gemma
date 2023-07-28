<?php
    $background_image = get_sub_field('background_image');
    $title = get_sub_field('title');
    $text = get_sub_field('text');
?>

<?php if ($background_image && $title) : ?>
    <section class="hero hero--static">
        <div class="hero__bg">
            <img src="<?php echo $background_image['url']; ?>"
                 alt="<?php echo $background_image['alt'] ?: $background_image['title']; ?>">
        </div>
        <div class="container">
            <div class="hero__wrap text-center">
                <div class="header-spa">
                    <span><?php _e('Our Spa', 'lagemmahotel');?></span>
                    <?php _e('TREATMENTS', 'lagemmahotel');?>
                    <div class="hero__button-wrapper">
                        <a href="#" class="button booking-btn">
                            <span>
                                <?php _e('Book now'); ?>
                            </span>
                        </a>
                    </div>

                </div>
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
