<?php $banner_list = get_sub_field('banner_list'); ?>

<?php if ($banner_list) : ?>
    <section class="banner-with-logo">
        <div class="banner-with-logo__wrap">
            <div class="banner-with-logo__slider js-slider">
                <?php foreach ($banner_list as $list_item) : ?>
                    <?php
                    $background_image = $list_item['background_image'];
                    $logo = $list_item['logo'];
                    ?>
            
                    <?php if ($background_image) : ?>
                        <div class="slider-item">
                            <div class="slider-item__bg">
                                <img src="<?php echo $background_image['url']; ?>"
                                     alt="<?php echo $background_image['alt'] ?: $background_image['title']; ?>">
                            </div>
                    
                            <div class="slider-item__wrap">
                                <div class="slider-item__logo">
                                    <img src="<?php echo $logo['url']; ?>"
                                         alt="<?php echo $logo['alt'] ?: $logo['title']; ?>">
                                </div>
                        
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
