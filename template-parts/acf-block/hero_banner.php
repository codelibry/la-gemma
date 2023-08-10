<?php $banner_list = get_sub_field('banner_list'); ?>

<?php if ($banner_list) : ?>
    <section class="hero-banner">
        <div class="hero-banner__slider js-slider-no-arrow">
            <?php foreach ($banner_list as $list_item) : ?>
                <?php
                $background_image = $list_item['background_image'];
                $title = $list_item['title'];
                $subtitle = $list_item['subtitle'];
                $text = $list_item['text'];
                ?>
                
                <?php if ($background_image) : ?>
                    <div class="slider-item">
                        <div class="slider-item__bg">
                            <img src="<?php echo $background_image['url']; ?>"
                                 alt="<?php echo $background_image['alt'] ?: $background_image['title']; ?>">
                        </div>

                        <div class="slider-item__wrap">
                            <?php if ($title || $text) : ?>
    
                                <?php if ($text) : ?>
                                    <div class="slider-item__text">
                                        <div class="container">
                                            <?php echo $text; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if ($title) : ?>
                                    <div class="slider-item__title">
                                        <div class="container">
                                            <?php echo $title; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if ($subtitle) : ?>
                                    <div class="slider-item__subtitle">
                                        <div class="container">
                                            <?php echo $subtitle; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>
