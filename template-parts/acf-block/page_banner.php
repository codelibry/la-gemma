<?php
    if (is_archive()) {
        $page_title = get_field('page_title', 'option');
        $page_banner_list = get_field('page_banner_list', 'option');
    } else {
        $page_title = get_sub_field('page_title');
        $page_banner_list = get_sub_field('page_banner_list');
    }
?>

<?php if ($page_title && $page_banner_list) : ?>
    <section class="page-banner">
        <div class="container">
            <div class="page-banner__title">
                <h1><?php echo $page_title; ?></h1>
            </div>
            <div class="page-banner__banner js-slider">
                <?php foreach ($page_banner_list as $slide) : ?>
                    <?php $slide_img = $slide['image']; ?>

                    <img src="<?php echo $slide_img['url']; ?>"
                         alt="<?php echo $slide_img['alt'] ?: $slide_img['title']; ?>">
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>