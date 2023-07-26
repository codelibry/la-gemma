<?php
    if (isset($args)) {
        $image_position = $args['image_position'];
        $menu_item = $args['menu_item'];
    }
    
    $menu_title = $menu_item['menu_title'];
    $menu_description = $menu_item['menu_description'];
    $menu_image = $menu_item['menu_image'];
    $default_link_or_download_file = $menu_item['default_link_or_download_file'];
    $menu_default_link = $menu_item['menu_default_link'];
    $menu_download_file = $menu_item['menu_download_file'];
    $menu_button_text = $menu_item['menu_button_text'];
    $menu_schedule = $menu_item['menu_schedule'];
    
    $pdf_file = get_field('pdf_file', 'option');
?>

<div class="menu-card d-flex flex-wrap flex-lg-nowrap align-items-end justify-content-center justify-content-lg-between">
    <?php if($menu_image) :?>
        <div class="menu-card__img <?php echo $image_position === 'left' ? 'order-1 image-left' : 'order-1 order-lg-2 image-right'; ?>">
            <div class="menu-card__img-wrap parallax-img-wrapper">
                <img src="<?php echo $menu_image['url']; ?>"
                     alt="<?php echo $menu_image['alt'] ? : $menu_image['title']; ?>" class="parallax-img">
            </div>
        </div>
    <?php endif; ?>
    
    <div class="menu-card__content <?php echo $image_position === 'left' ? 'order-2 content-right' : 'order-2 order-lg-1 content-left'; ?>">
        <?php if($menu_title) :?>
            <div class="menu-card__title">
                <?php echo $menu_title; ?>
            </div>
        <?php endif; ?>
        <?php if($menu_description) :?>
            <div class="menu-card__text">
                <?php echo $menu_description; ?>
            </div>
        <?php endif; ?>
        
        <?php if($default_link_or_download_file === 'default' && $menu_default_link) :?>
                <div class="menu-card__btn">
                    <a href="<?php echo $menu_default_link['url'];?>"
                       class="button">
                        <?php echo $menu_default_link['title']; ?>
                    </a>
                </div>
        <?php endif; ?>
    
        <?php if($default_link_or_download_file === 'download' && $menu_download_file && $menu_button_text) :?>
            <div class="menu-card__btn">
                <a download href="<?php echo $menu_download_file['url'];?>"
                   class="button">
                    <?php echo $menu_button_text; ?>
                </a>
            </div>
        <?php endif; ?>
        
        <?php if ($menu_schedule) : ?>
            <div class="menu-card__schedule d-flex flex-column">
                <?php echo $menu_schedule; ?>
            </div>
        <?php endif; ?>
    </div>
</div>