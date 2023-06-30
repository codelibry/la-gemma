<?php
    $title = get_the_title();
    $content = get_the_content();
    $permalink = get_the_permalink();
    $thumbnail_url = get_the_post_thumbnail_url();
    $thumbnail_caption = get_the_post_thumbnail_caption() ?: get_the_title();
    $facilities = get_field('facilities', get_the_ID());
?>

<div class="rooms-card">
    <div class="rooms-card__wrap">
        <?php if ($thumbnail_url) : ?>
            <div class="rooms-card__img">
                <a href="<?php echo $permalink;?>">
                    <img src="<?php echo $thumbnail_url; ?>" alt="<?php echo $thumbnail_caption; ?>">
                </a>
            </div>
        <?php endif; ?>
        <div class="rooms-card__content">
            <?php if ($title) : ?>
                <div class="rooms-card__title">
                    <h4>
                        <?php echo $title; ?>
                    </h4>
                </div>
            <?php endif; ?>
            <?php if ($content) : ?>
                <div class="rooms-card__text">
                    <a href="<?php echo $permalink;?>">
                        <?php echo $content; ?>
                    </a>
                </div>
            <?php endif; ?>
            <?php if ($facilities) : ?>
                <div class="rooms-card__dropdown js-dropdown">
                    <?php
                        $rooms_amenities = $facilities['rooms_amenities'];
                        $bathrooms_amenities = $facilities['bathrooms_amenities'];
                    ?>
                    <div class="rooms-card__dropdown-title js-dropdown-title">
                    <span>
                        <?php _e('Facilities');?>
                    </span>
                        <?php echo get_inline_svg('dropdown-arrow.svg');?>
                    </div>
                    <div class="rooms-card__dropdown-content js-dropdown-content">
                        <?php if ($rooms_amenities) : ?>
                            <div class="rooms-card__facilities">
                                <div class="rooms-card__facilities-title">
                                    <?php _e('All rooms come equip with the following amenities:'); ?>
                                </div>
                                <ul class="rooms-card__facilities-list">
                                    <?php foreach ($rooms_amenities as $amenity) : ?>
                                        <li>
                                            - <?php echo $amenity; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                
                        <?php if ($bathrooms_amenities) : ?>
                            <div class="rooms-card__facilities">
                                <div class="rooms-card__facilities-title">
                                    <?php _e('All private bathrooms come equip with the following amenities:'); ?>
                                </div>
                                <ul class="rooms-card__facilities-list">
                                    <?php foreach ($bathrooms_amenities as $amenity) : ?>
                                        <li>
                                            - <?php echo $amenity; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($permalink) : ?>
                <div class="d-flex rooms-card__btn">
                    <a href="<?php echo $permalink; ?>" class="button button-transparent"><?php _e('Details'); ?></a>
                    <a href="<?php echo $permalink; ?>" class="button"><?php _e('Book Room'); ?></a>
                </div>
            <?php endif; ?>
        </div>
        
    </div>
</div>