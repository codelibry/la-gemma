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



<?php if (have_rows('blocks')) : ?>
    <?php while (have_rows('blocks')) : the_row() ?>
        <?php get_template_part('template-parts/acf-block/' . get_row_layout()); ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>