<?php 

/* variables */

$pageLogo = get_field('page_logo');
$pageLogoMobile = get_field('page_logo_mobile');
$bgImage = get_field('background_image');
$bloquote = get_field('bloquote');
$author = get_field('bloquote_author');

?>

<?php if ($bgImage) : ?>

<div class="section allure-hero">

    <img src="<?php echo $bgImage['url'];?>" alt="<?php echo $bgImage['alt'];?>" class="allure-hero__bg">

    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="allure-hero__content-wrapper">

                    <?php if ($pageLogo) : ?>

                        <img src="<?php echo $pageLogo['url'];?>" alt="<?php echo $bgImage['alt'];?>" class="allure-hero__logo">
                        <img src="<?php echo get_template_directory_uri() . '/assets/image/page-templates/allure/logo-mobile.png';?>" alt="<?php echo $bgImage['alt'];?>" class="allure-hero__logo allure-hero__logo--mobile">
                        

                    <?php endif; ?>

                    <?php if ($bloquote) : ?>

                        <div class="allure-hero__bloquote-mobile">

                            <img src="<?php echo get_template_directory_uri() . '/assets/image/page-templates/allure/blockquote-bg.png';?>" class="allure-hero__bloquote-bg">

                            <?php echo $bloquote;?> 

                            <div class="allure-hero__bloquote-footer">
                                <?php echo'- ' . $author;?>
                            </div>

                        </div>
                    
                    <?php endif; ?>

                    <a href="#" class="button booking-btn button--transparent-text">
                        <span>
                            <?php _e('Book now'); ?>
                        </span>
                    </a>


                </div>

            </div>
        </div>
    </div>
</div>

<?php endif; ?>

<?php if ($bloquote) : ?>

<section class="blockquote blockquote--allure">

    <div class="blockquote__img-wrapper">
        <div class="blockquote__img">
            <img src="<?php echo get_template_directory_uri() . '/assets/image/page-templates/allure/blockquote-bg.png';?>"
             class="blockquote__img-bg">
        </div>
    </div>

    <div class="container">

        <div class="blockquote__wrap">

            <div class="blockquote__content">


                <?php echo $bloquote;?> 

                <div class="blockquote__content-footer">
                    <?php echo '- ' . $author;?>
                </div>
            
            </div>

        </div>

    </div>
    
</section>

<?php endif; ?>