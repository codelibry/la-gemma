<?php
    $section_id = get_sub_field('section_id');
    $posts = get_sub_field('posts')
?>

<?php if ($posts) : ?>
    <section id="<?php echo $section_id;?>" class="menu" >
        <div class="container">
            <div class="menu__wrap">
                <div class="menu__list">
                    <?php foreach ($posts as $idx => $post) : ?>
                        <?php setup_postdata($post); ?>
                        <?php get_template_part('template-parts/parts/menu-card', null, array(
                                'image_position' => $idx % 2 ? 'left' : 'right'
                        )); ?>
                    <?php endforeach; ?>
                    
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>