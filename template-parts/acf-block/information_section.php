<?php
    $title = get_sub_field('title');
    $information_list = get_sub_field('information_list');

?>

<?php if ($information_list) : ?>
    <section class="information">
        <div class="horizontal-line"></div>
        <div class="container">
            <div class="information__wrap">
                <?php if ($title) : ?>
                    <div class="information__title">
                        <h3><?php echo $title; ?></h3>
                    </div>
                <?php endif; ?>
                <ul class="information__list row">
                    <?php foreach ($information_list as $list_item) : ?>
                        <?php
                        $title = $list_item['title'];
                        $text = $list_item['text'];
                        ?>

                        <li class="list-item col-12 <?php echo is_page_template('template-pages/lucas-page.php') ? 'col-lg-4': 'col-md-6 col-lg-4';?>">
                            <?php if ($title) : ?>
                                <h4 class="list-item__title text-left"><?php echo $title; ?></h4>
                            <?php endif; ?>
                            <?php if ($text) : ?>
                                <div class="list-item__text text-left">
                                    <?php echo $text; ?>
                                </div>
                            <?php endif; ?>
                        </li>
                    
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>
<?php endif; ?>


