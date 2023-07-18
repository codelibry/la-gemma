<?php
    if (isset($args)) {
        $image_position = $args['image_position'];
    }
    
    $thumbnail = get_the_post_thumbnail_url();
    $thumbnailCaption = get_the_post_thumbnail_caption() ? : get_the_title();
    $permalink = get_the_permalink();
    
    $title = get_field('title');
    $description = get_field('description');
    $button = get_field('button');
    $schedule = get_field('schedule');
?>

<div class="menu-card d-flex flex-wrap flex-lg-nowrap align-items-end justify-content-center justify-content-lg-between">
    <?php if($thumbnail) :?>
        <div class="menu-card__img <?php echo $image_position === 'left' ? 'order-1 image-left' : 'order-1 order-lg-2 image-right'; ?>">
            <div class="menu-card__img-wrap">
                <img src="<?php echo $thumbnail; ?>"
                     alt="<?php echo $thumbnailCaption; ?>">
            </div>
        </div>
    <?php endif; ?>
    
    <div class="menu-card__content <?php echo $image_position === 'left' ? 'order-2 content-right' : 'order-2 order-lg-1 content-left'; ?>">
        <?php if($title) :?>
            <div class="menu-card__title">
                <?php echo $title; ?>
            </div>
        <?php endif; ?>
        <?php if($description) :?>
            <div class="menu-card__text">
                <?php echo $description; ?>
            </div>
        <?php endif; ?>
        
        <?php if ($button) : ?>
            <div class="menu-card__btn">
                <a href="<?php echo $permalink;?>"
                   class="button">
                    <?php echo $button; ?>
                </a>
            </div>
        <?php endif; ?>
        
        <?php if ($schedule) : ?>
            <div class="menu-card__schedule d-flex flex-column">
                <?php echo $schedule; ?>
            </div>
        <?php endif; ?>
    </div>
</div>