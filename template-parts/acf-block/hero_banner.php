<?php $banner_list = get_sub_field('banner_list'); ?>

<?php if ($banner_list) : ?>
    <section class="hero-banner">
        <div class="hero-banner__slider js-slider">
            <?php foreach ($banner_list as $list_item) : ?>
                <?php
                $background_image = $list_item['background_image'];
                $what_show = $list_item['what_show'];
                $logo = $list_item['logo'];
                $title = $list_item['title'];
                $text = $list_item['text'];
                ?>
                
                <div class="slider-item">
                    <?php if ($background_image) :?>
                        <div class="slider-item__bg">
                            <img src="<?php echo $background_image['sizes']['1536x1536']; ?>"
                                 alt="<?php echo $background_image['alt'] ?: $background_image['title']; ?>">
                        </div>
                    <?php endif; ?>
                    
                    <?php if ($what_show === 'logo' && $logo) : ?>
                        <div class="slider-item__logo">
                            <img src="<?php echo $logo['url']; ?>"
                                 alt="<?php echo $logo['alt'] ?: $logo['title']; ?>">
                        </div>
                    <?php endif; ?>
    
                    <?php if ($what_show === 'content') : ?>
                        <div class="slider-item__content">
                            <?php if ($title) : ?>
                                <div class="slider-item__content-title">
                                    <div class="container">
                                        <?php echo $title; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($text) : ?>
                                <div class="slider-item__content-text">
                                    <div class="container">
                                        <?php echo $text; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>
