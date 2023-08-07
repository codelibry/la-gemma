<?php
    $post_type = 'rooms-and-suites';
    $taxonomy = 'rooms-type';
?>

<?php get_header(); ?>

<?php //get_template_part('template-parts/acf-block/page_banner') ?>

<?php get_template_part('template-parts/loop/loop-posts', null, [
    'post_type' => $post_type,
    'taxonomy' => $taxonomy
]); ?>

<?php get_footer(); ?>