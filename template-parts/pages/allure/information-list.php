<?php

/* variables */

$title = get_field('title_information');
$information_list = get_field('information_list');

?>

<?php if ($information_list) : ?>
    <section class="information">
        <div class="horizontal-line"></div>
        <div class="container">
            <div class="information__wrap">
                <?php if ($title) : ?>
                    <div class="information__title">
                        <h2 class="h5"><?php echo $title; ?></h2>
                    </div>
                <?php endif; ?>
                <ul class="information__list row">
                    <?php foreach ($information_list as $list_item) : ?>
                        <?php
                        $title = $list_item['label'];
                        $text = $list_item['content'];
                        ?>

                        <li class="list-item col-12 col-md-6 col-lg-4">
                            <?php if ($title) : ?>
                                <h5 class="list-item__title text-left h3"><?php echo $title; ?></h5>
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