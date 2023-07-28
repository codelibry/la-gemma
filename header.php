<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>"/>
    <?php wp_head(); ?>
    <meta name="google-site-verification" content="C52pH6EMLF5FjnGqlOst8sAvUjN3MHyMYjmB4K-oZFs"/>
    <style>
        html {
            margin-top: 0 !important;
        }

        @media screen and ( max-width: 782px ) {
            html {
                margin-top: 0 !important;
            }
        }
    </style>
</head>

<?php
    /**
     * Additional body classes
     */
    $body_classes = 'not-loaded ';
    
    $rooms_suites_background_color = get_field('rooms_suites_background_color', 'option');
    $allure_spa_background_color = get_field('allure_spa_background_color', 'option');
    $lucas_background_color = get_field('lucas_background_color', 'option');
    
    $logo_white = get_field('logo_white', 'option');
    $logo_allure = get_field('logo_allure', 'option');
    $logo_lucas = get_field('logo_lucas', 'option');
    
    if (is_page_template('template-pages/allure-page.php')) {
        $loader_logo = $logo_allure;
    } elseif (is_page_template('template-pages/lucas-page.php') || is_page_template('template-pages/paulo-airaudo-page.php')) {
        $loader_logo = $logo_lucas;
    } else {
        $loader_logo = $logo_white;
    }
    
    if (is_page_template('template-pages/allure-page.php')) {
        $body_classes = 'allure-page';
    } else if (is_page_template('template-pages/lucas-page.php')) {
        $body_classes = 'lucas-page';
    } else if (is_page_template('template-pages/about-page.php')) {
        $body_classes = 'about-page';
    } else if (is_page_template('template-pages/paulo-airaudo-page.php')) {
        $body_classes = 'paulo-airaudo-page';
    } else {
        $body_classes = 'default-page';
    }
?>

<style>
    body {
        background-color: <?php echo $rooms_suites_background_color;?> !important;
    }

    body.allure-page {
        background-color: <?php echo $allure_spa_background_color;?> !important;
    }

    body.lucas-page, body.paulo-airaudo-page {
        background-color: <?php echo $lucas_background_color;?> !important;
    }
</style>

<body <?php body_class($body_classes); ?>>

<div class="loader">
    <img src="<?php echo $loader_logo['url']; ?>" alt="Preloader logo"
         class="loader__logo">
</div>

<div class="loading-spinner">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
         style="margin: auto; display: block; shape-rendering: auto;" width="200px" height="200px" viewBox="0 0 100 100"
         preserveAspectRatio="xMidYMid">
        <path fill="none" stroke="#2d4c42" stroke-width="8" stroke-dasharray="42.76482137044271 42.76482137044271"
              d="M24.3 30C11.4 30 5 43.3 5 50s6.4 20 19.3 20c19.3 0 32.1-40 51.4-40 C88.6 30 95 43.3 95 50s-6.4 20-19.3 20C56.4 70 43.6 30 24.3 30z"
              stroke-linecap="round" style="transform:scale(0.8);transform-origin:50px 50px">
            <animate attributeName="stroke-dashoffset" repeatCount="indefinite" dur="2.6315789473684212s" keyTimes="0;1"
                     values="0;256.58892822265625"></animate>
        </path>
    </svg>
<!--    --><?php //echo get_inline_svg('loader-spinner.svg'); ?>
</div>

<?php get_template_part('template-parts/header/header'); ?>


<main id="main">