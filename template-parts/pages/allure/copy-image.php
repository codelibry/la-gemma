<?php 

/* variables */

$title = get_field('title_section_3');
$subtitle = get_field('subtitle_section_3');
$content = get_field('content_section_3');
$image = get_field('image_section_3');
$link = get_field('link_section_3');

if ($image) :

?>

<section class="copy-image section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 copy-image__img-wrapper">
                <img alt="<?php echo $image['alt'];?>" class="copy-image__img" src="<?php echo $image['url'];?>">
            </div>
            <div class="col-lg-6 copy-image__content-wrapper">
                <div class="copy-image__content">

                    <?php if ($title) : ?>
                        <div class="copy-image__title" >
                            <h2>
                                <?php echo $title; ?>
                            </h2>
                        </div>
                    <?php endif; ?>

                    <?php if ($content) : ?>
                    
                        <div class="copy-image__content"><?php echo $content; ?></div>

                    <?php endif; ?>

                    <?php if ($link) : 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? : '_self';?>
                        
                        <a href="<?php echo $link['url'];?>" target="<?php echo esc_attr( $link_target ); ?>" class="button">
                            <?php echo esc_html( $link_title ); ?></a>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>