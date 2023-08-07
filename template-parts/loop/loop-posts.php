<?php
    if (isset($args)) {
        $post_type = $args['post_type'];
        $taxonomy = $args['taxonomy'];
    }
    
    $args = [
        'post_type' => $post_type,
        'posts_per_page' => -1,
        'order' => 'ASC'
    ];
    
    $query = new WP_Query($args);
?>

<?php if ($query->have_posts()) : ?>
    
    <section class="loop-posts">
        <div class="loop-posts__filter">
            <div class="container">
                <ul class="filter-list js-filter d-flex">
                    <?php $terms = get_terms(['taxonomy' => $taxonomy, 'hide_empty' => true]); ?>
                    <li class="filter-btn active"
                        data-post-type="<?php echo $post_type; ?>"
                        data-term-slug="all"
                        data-term-taxonomy="<?php echo $taxonomy; ?>"
                    >
                        <?php _e('View All'); ?>
                    </li>
                    <?php foreach ($terms as $term) : ?>
                        <li class="filter-btn"
                            data-post-type="<?php echo $post_type; ?>"
                            data-term-slug="<?php echo $term->slug; ?>"
                            data-term-taxonomy="<?php echo $term->taxonomy; ?>"
                        >
                            <?php echo $term->name; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="loop-posts__response" id="response">
            <div class="container">
                <div class="loop-posts__list js-post-slider">
                    <?php while ($query->have_posts()) :$query->the_post(); ?>
                        <?php get_template_part('template-parts/parts/rooms-card'); ?>
                    <?php endwhile; ?>
        
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
       
    </section>

<?php endif; ?>
