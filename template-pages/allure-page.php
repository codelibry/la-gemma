<?php
//    Template Name: Allure Page
//    Template Post Type: page
?>

<?php get_header(); ?>

<?php if (have_rows('blocks')) : ?>
    <?php while (have_rows('blocks')) : the_row() ?>
        <?php get_template_part('template-parts/acf-block/' . get_row_layout()); ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>