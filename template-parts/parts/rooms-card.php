<?php
    $title = get_the_title();
    $content = get_the_content();
    $permalink = get_the_permalink();
    $thumbnail_url = get_the_post_thumbnail_url();
    $thumbnail_text = get_field('banner_title', get_the_ID());
    $thumbnail_caption = get_the_post_thumbnail_caption() ?: get_the_title();
    $gallery = get_field('gallery', get_the_ID());
    $facilities = get_field('facilities', get_the_ID());
?>

<div class="rooms-card">
    <div class="rooms-card__wrap">
        <?php if ($thumbnail_url) : ?>
            <div class="rooms-card__img">
                <a href="<?php echo $permalink; ?>">
                    <img src="<?php echo $thumbnail_url; ?>" alt="<?php echo $thumbnail_caption; ?>">
                </a>
                <?php if ($thumbnail_text) : ?>
                    <div class="rooms-card__img-text">
                        <h4>
                            <?php echo $thumbnail_text; ?>
                        </h4>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        
        <?php if ($gallery) : ?>
            <div class="rooms-card__gallery js-slider-no-arrow">
                <?php foreach ($gallery as $image) : ?>
                    <div class="slider-item">
                        <div class="slider-item__wrap">
                            <img src="<?php echo $image['url']; ?>"
                                 alt="<?php echo $image['alt'] ?: $image['title']; ?>">
                        </div>
                    </div>
                <?php endforeach; ?>
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
                    <a href="<?php echo $permalink; ?>">
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
                        <?php _e('Facilities'); ?>
                    </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="47.149" height="19.032"
                             viewBox="0 0 47.149 19.032">
                            <path id="Union_2" data-name="Union 2"
                                  d="M-2841.972,1488.986-2865,1472l23.028,16.985,22.934-16.915-22.934,16.915.146.108-.146-.108-.242.178Z"
                                  transform="translate(2865.594 -1471.196)" fill="none" stroke="#2d4c42"
                                  stroke-width="2"/>
                        </svg>
                        <!--                        --><?php //echo get_inline_svg('dropdown-arrow.svg');?>
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
                    <a href="#" class="button booking-btn"><?php _e('Book Room'); ?></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>