<?php 

/* variables */

$title = get_field('title_section_2');
$subtitle = get_field('subtitle_section_2');
$content = get_field('content_section_2');
$image = get_field('image_section_2');
$link = get_field('link_section_2');

if ($image) :  

?>


<section class="content-image content-image--allure">
    <div class="container">
        <div class="content-image__wrap d-flex justify-content-center justify-content-lg-between" >
            <div class="content-image__img order-1 order-lg-2 image-right" >
                <div class="content-image__img-wrap">
                    <img alt="<?php echo $image['alt'];?>" class="" src="<?php echo $image['url'];?>">
                    <div class="content-image__img-content">
                        
                        <?php if ($title) : ?>
                        <div class="content-image__title" >
                            <?php echo $title; ?>
                        </div>
                        <?php endif; ?>
                        
                        <?php if ($subtitle) : ?>

                            <div class="content-image__subtitle">
                                <?php echo $subtitle; ?>
                            </div>

                        <?php endif; ?>

                    </div>

                </div>
            </div>
            <div class="text-center content-image__content order-2 order-lg-1 content-left" >

                <?php if ($title) : ?>

                    <div class="content-image__title" >

                        <?php echo $title; ?>

                    </div>

                <?php endif; ?>

                <?php if ($subtitle) : ?>

                    <div class="content-image__subtitle">

                        <?php echo $subtitle; ?>

                    </div>

                <?php endif; ?>

                <?php if ($content) : ?>

                    <div class="content-image__text">

                        <?php echo $content; ?>

                    </div>

                <?php endif; ?>

                <?php if ($link) : 
                    $link_target = $link['target'] ? $link['target'] : '_self';?>

                        <div class="content-image__btn" >
                            <a href="<?php echo $link['url'];?>" target="<?php echo esc_attr( $link_target ); ?>" class="button">
                                <?php echo esc_html( $link['title'] ); ?></a>
                        </div>
                    </div>
            
                <?php endif; ?>
                
                
        </div>
    </div>
</section>

<?php endif; ?>