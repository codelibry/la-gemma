<?php $banner_list = get_sub_field('banner_list'); ?>

<?php if ($banner_list) : ?>
    <section class="banner">
        <div class="banner__slider js-slider">
            <?php foreach ($banner_list as $list_item) : ?>
                <?php
                $background_image = $list_item['background_image'];
                $logo = $list_item['logo'];
                $text = $list_item['text'];
                ?>
                
                <div class="slider-item">
                    <?php if ($background_image) : ?>
                        <div class="slider-item__bg">
                            <img src="<?php echo $background_image['url']; ?>"
                                 alt="<?php echo $background_image['alt'] ?: $background_image['title']; ?>">
                        </div>
                    <?php endif; ?>
                    <?php if ($logo) : ?>
                        <div class="slider-item__logo">
                            <img src="<?php echo $logo['url']; ?>"
                                 alt="<?php echo $logo['alt'] ?: $logo['title']; ?>">
                        </div>
                    <?php endif; ?>
                    <?php if ($text) : ?>
                        <div class="slider-item__text">
                            <div class="container">
                                <?php echo $text; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>
