<?php
    $section_id = get_sub_field('section_id');
    $menu_list = get_sub_field('menu_list');
?>

<?php if ($menu_list) : ?>
    <section id="<?php echo $section_id; ?>" class="menu">
        <div class="container">
            <div class="menu__wrap">
                <div class="menu__list">
                    <?php foreach ($menu_list as $idx => $menu_item) : ?>
                        <?php get_template_part('template-parts/parts/menu-card', null, array(
                            'image_position' => $idx % 2 ? 'left' : 'right',
                            'menu_item' => $menu_item
                        )); ?>
                    <?php endforeach; ?>
                    
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>