<?php
    $title = get_sub_field('title');
    $slider = get_sub_field('slider');
?>

<?php if ($slider) : ?>
    <section class="follow-slider">
        <div class="container">
            <div class="follow-slider__wrap">
                <?php if ($title) : ?>
                    <div class="follow-slider__title">
                        <?php echo $title; ?>
                    </div>
                <?php endif; ?>
                <div class="follow-slider__slider js-follow-slider">
                    <?php foreach ($slider as $slide) : ?>
                        <?php
                        $image = $slide['image'];
                        $link = $slide['link'];
                        $text = $slide['text'];
                        ?>
                        <div class="follow-slider__slider-item">
                            <?php if ($image) : ?>
                                <div class="slider-item__img">
                                    <a href="<?php echo $link['url'];?>">
                                        <img src="<?php echo $image['url']; ?>"
                                             alt="<?php echo $image['alt'] ?: $image['title']; ?>">
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if ($link) : ?>
                                <div class="slider-item__link">
                                    <a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                                </div>
                            <?php endif; ?>
                            
                            <?php if ($text) : ?>
                                <div class="slider-item__text">
                                    <?php echo $text; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="horizontal-line"></div>
    </section>
<?php endif; ?>

