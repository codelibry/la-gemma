<?php

/**
 * Template Name: Allure template
 */

?>

<?php get_header(); ?>


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

<?php 

/* variables */

?>


<section class="content-image content-image--allure">
    <div class="container">
        <div class="content-image__wrap d-flex justify-content-center justify-content-lg-between" >
            <div class="content-image__img order-1 order-lg-2 image-right" >
                <div class="content-image__img-wrap" >
                    <img alt="about-allure-1" data-src="https://hotellagemma.wp-coder.tech/wp-content/uploads/2023/06/about-allure-1.png" class=" ls-is-cached lazyloaded" src="https://hotellagemma.wp-coder.tech/wp-content/uploads/2023/06/about-allure-1.png"><noscript><img src="https://hotellagemma.wp-coder.tech/wp-content/uploads/2023/06/about-allure-1.png"
                            alt="about-allure-1"></noscript>

                    <div class="content-image__img-content">
                        <div class="content-image__title" >
                            <span>EXPERIENCE</span> 
                            WELLBEING
                        </div>
                        <div class="content-image__subtitle">
                            IN THE HEART OF FLORENCE
                        </div>
                    </div>

                </div>
            </div>
            <div class="text-center content-image__content order-2 order-lg-1 content-left" >
                <div class="content-image__title" >
                        <span>EXPERIENCE</span> WELLBEING
                    </div>
                                                            <div class="content-image__subtitle" >
                                                            IN THE HEART OF FLORENCE                        </div>
                                                            <div class="content-image__text" >
                                                            With personalized treatments designed around high performance lifestyles our approach restores energy and harmony, leading to a sense of inner calm and a radiant outer glow.                        </div>
                                                            <div class="content-image__btn" >
                        <a href="https://hotellagemma.wp-coder.tech/treatment-menu/" class="button">
                            DISCOVER TREATMENTS                            </a>
                    </div>
                                </div>
        </div>
    </div>
</section>

<?php 

/* variables */

?>

<section class="copy-image section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 copy-image__img-wrapper">
                <img src="https://hotellagemma.wp-coder.tech/wp-content/uploads/2023/07/logo-recherche.png" class="copy-image__img">
            </div>
            <div class="col-lg-6 copy-image__content-wrapper">
                <div class="copy-image__content">
                    <div class="copy-image__title">
                        Treatments by
                        <span>Biologique Recherche</span>
                    </div>
                    <div class="copy-image__content">All therapist at Allure Wellness Spa are highly trained and accredited by Biologique Recherche who hold a reputation for astounding effectiveness based on a clinical and personalized approach to skin care using intentionally pure, raw active ingredients.</div>
                    <a href="" class="button">FIND OUT MORE</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

/* variables */

$title = get_field('title_information');
$information_list = get_field('information_list');

?>

<?php if ($information_list) : ?>
    <section class="information">
        <div class="horizontal-line"></div>
        <div class="container">
            <div class="information__wrap">
                <?php if ($title) : ?>
                    <div class="information__title">
                        <h3><?php echo $title; ?></h3>
                    </div>
                <?php endif; ?>
                <ul class="information__list row">
                    <?php foreach ($information_list as $list_item) : ?>
                        <?php
                        $title = $list_item['label'];
                        $text = $list_item['content'];
                        ?>

                        <li class="list-item col-12 col-md-6 col-lg-4">
                            <?php if ($title) : ?>
                                <h4 class="list-item__title text-left"><?php echo $title; ?></h4>
                            <?php endif; ?>
                            <?php if ($text) : ?>
                                <div class="list-item__text text-left">
                                    <?php echo $text; ?>
                                </div>
                            <?php endif; ?>
                        </li>
                    
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>
<?php endif; ?>


<?php if (have_rows('blocks')) : ?>
    <?php while (have_rows('blocks')) : the_row() ?>
        <?php get_template_part('template-parts/acf-block/' . get_row_layout()); ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>