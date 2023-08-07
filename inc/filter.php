<?php
    add_action('wp_ajax_filter_posts', 'filter_posts');
    add_action('wp_ajax_nopriv_filter_posts', 'filter_posts');
    
    function filter_posts()
    {
        $post_type = $_REQUEST['postType'];
        $term_slug = $_REQUEST['termSlug'];
        $term_taxonomy = $_REQUEST['termTaxonomy'];
        
        if ($term_slug === 'all') {
            $args = [
                'post_type' => $post_type,
                'posts_per_page' => -1
            ];
        } else {
            $args = [
                'post_type' => $post_type,
                'posts_per_page' => -1,
                'tax_query' => array(
                    [
                        'taxonomy' => $term_taxonomy,
                        'field' => 'slug',
                        'terms' => $term_slug
                    ]
                )
            ];
        }
        
        $query = new WP_Query($args);
        
        if ($query->have_posts()) :?>
            <div class="container">
                <div class="loop-posts__list js-post-slider">
                    <?php while ($query->have_posts()) :$query->the_post(); ?>
                        <?php get_template_part('template-parts/parts/rooms-card'); ?>
                    <?php endwhile; ?>
                    
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        <?php endif;
        
        wp_die();
    }
    
