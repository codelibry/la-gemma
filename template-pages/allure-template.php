<?php

/**
 * Template Name: Allure template
 */

?>

<?php get_header(); 

get_template_part('template-parts/pages/allure/hero-bloquote');
get_template_part('template-parts/pages/allure/content-image');
get_template_part('template-parts/pages/allure/copy-image');
get_template_part('template-parts/pages/allure/information-list');

?>

<?php if (have_rows('blocks')) : ?>
    <?php while (have_rows('blocks')) : the_row() ?>
        <?php get_template_part('template-parts/acf-block/' . get_row_layout()); ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>