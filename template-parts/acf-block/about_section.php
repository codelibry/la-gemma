<?php
    $image_position = get_sub_field('image_position');
    $image = get_sub_field('image');
    $title = get_sub_field('title');
    $subtitle = get_sub_field('subtitle');
    $content = get_sub_field('text');
    $link = get_sub_field('button');
?>

<?php if ($image && $title && $content) : ?>
    <section class="copy-image section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 copy-image__img-wrapper <?php echo $image_position === 'left' ? 'order-1 image-left' : 'order-1 order-lg-2 image-right'; ?>">
                    <img alt="<?php echo $image['alt'];?>" class="copy-image__img" src="<?php echo $image['url'];?>">
                </div>
                <div class="col-lg-6 copy-image__content-wrapper <?php echo $image_position === 'left' ? 'order-2 content-right' : 'order-2 order-lg-1 content-left'; ?>">
                    <div class="copy-image__content">

                        <?php if ($title) : ?>
                            <div class="copy-image__title" >
                                <?php echo $title; ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($subtitle) : ?>

                            <div class="copy-image__subtitle"><?php echo $subtitle;?></div>
                        
                        <?php endif; ?>

                        <?php if ($content) : ?>
                        
                            <div class="copy-image__content"><?php echo $content; ?></div>

                        <?php endif; ?>

                        <?php if ($link) : 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';?>
                            
                            <a href="<?php echo $link['url'];?>" target="<?php echo esc_attr( $link_target ); ?>" class="button">
                                <?php echo esc_html( $link_title ); ?></a>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="horizontal-line"></div>
    </section>
<?php endif; ?>

<?php 

/* variables */



if ($image) :

?>



<?php endif; ?>