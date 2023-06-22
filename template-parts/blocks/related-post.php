<?php
    global $post;
    
    $taxonomies = get_post_taxonomies($post->ID);
    $terms = get_the_terms($post->ID, $taxonomies[0]);
    
    $args = [
        'post_type' => $post->post_type,
        'posts_per_page' => -1,
        'order' => 'ASC',
        'post__not_in' => [$post->ID],
        'tax_query' => array([
            'taxonomy' => $taxonomies[0],
            'field' => 'slug',
            'terms' => $terms[0]->slug
        ])
    ];
    
    $query = new WP_Query($args);
?>

<?php if ($query->have_posts()) : ?>

    <div class="related-post">
        <div class="related-post__wrap">
            <div class="related-post__title container">
                <h2><?php _e('Elegant Alternatives');?></h2>
            </div>
            <div class="related-post__list js-post-slider">
                <?php while ($query->have_posts()) :$query->the_post(); ?>
                    <?php get_template_part('template-parts/parts/rooms-card'); ?>
                <?php endwhile; ?>
                
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>

<?php endif; ?>
