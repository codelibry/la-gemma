<?php
    $taxonomy = 'rooms-type';
    $terms = get_the_terms(get_the_ID(), $taxonomy);
    $term_slug = $terms[0]->slug;
    $term_object = get_term_by('slug', $term_slug, $taxonomy);
?>

<?php get_header(); ?>

<?php if (have_rows('blocks')) : ?>
    <?php while (have_rows('blocks')) : the_row() ?>
        <?php get_template_part('template-parts/acf-block/' . get_row_layout()); ?>
    <?php endwhile; ?>
<?php endif; ?>

    <div class="post-info">
        <div class="container">
            <div class="post-info__wrap">
                <div class="post-info__archive-link">
                    <a href="<?php echo get_term_link($term_object->term_id); ?>"><?php _e('See All ' . $term_object->name); ?></a>
                </div>
                <?php get_template_part('template-parts/parts/rooms-card'); ?>
            </div>
        </div>
    </div>

<?php get_template_part('template-parts/blocks/related-post'); ?>

<?php get_footer(); ?>