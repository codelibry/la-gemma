<?php $banner_list = get_sub_field('banner_list'); ?>

<?php if ($banner_list) : ?>
    <section class="banner-with-text">
        <div class="banner-with-text__wrap">
            <div class="banner-with-text__slider js-slider-no-arrow">
                <?php foreach ($banner_list as $list_item) : ?>
                    <?php
                    $background_image = $list_item['background_image'];
                    $title = $list_item['title'];
                    $text = $list_item['text'];
                    ?>
                    
                    <?php if ($background_image) : ?>
                        <div class="slider-item">
                            <div class="slider-item__bg">
                                <img src="<?php echo $background_image['url']; ?>"
                                     alt="<?php echo $background_image['alt'] ?: $background_image['title']; ?>">
                            </div>

                            <div class="slider-item__wrap">
                                <?php if ($title) : ?>
                                    <div class="slider-item__title">
                                        <?php echo $title; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($text) : ?>
                                    <div class="slider-item__text">
                                        <?php echo $text; ?>
                                    </div>
                                <?php endif; ?>
                                
                                
                                <?php if (!is_page_template('template-pages/about-page.php')) : ?>
                                    <div class="slider-item__btn">
                                        <a href="#" class="button booking-btn button--transparent-text">
                                        <span>
                                            <?php _e('Book now'); ?>
                                        </span>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
