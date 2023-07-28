<?php
    $taxonomy = 'rooms-type';
    $terms = get_the_terms(get_the_ID(), $taxonomy);
    $term_slug = $terms[0]->slug;
    $term_object = get_term_by('slug', $term_slug, $taxonomy);
    
    $banner_title = get_field('banner_title');
    $banner_images = get_field('banner_images');
?>

<?php get_header(); ?>

<?php if ($banner_title && $banner_images) : ?>
    <section class="single-banner">
        <div class="container">
            <div class="single-banner__wrap">
                <div class="single-banner__title">
                    <h1><?php echo $banner_title; ?></h1>
                </div>
                <div class="single-banner__banner js-slider-no-arrow">
                    <?php foreach ($banner_images as $image) : ?>
                        <?php $img = $image['image']; ?>
                        <div class="slider-item">
                            <div class="slider-item__bg">
                                <img src="<?php echo $img['url']; ?>"
                                     alt="<?php echo $img['alt'] ?: $img['title']; ?>">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
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