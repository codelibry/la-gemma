<?php get_header(); ?>

<?php if (have_rows('blocks')) : ?>
    <?php while (have_rows('blocks')) : the_row() ?>
        <?php get_template_part('template-parts/acf-block/' . get_row_layout()); ?>
    <?php endwhile; ?>
<?php endif; ?>

    <div class="post-info">
        <div class="container">
            <div class="post-info__wrap">
                <?php get_template_part('template-parts/parts/rooms-card'); ?>
            </div>
        </div>
    </div>

<?php get_template_part('template-parts/blocks/related-post'); ?>

<?php get_footer(); ?>