<?php
    $column_1 = get_sub_field('column_1');
    $column_2 = get_sub_field('column_2');
    $column_3 = get_sub_field('column_3');
?>

<?php if ($column_1 || $column_2 || $column_3) : ?>
    <section class="information">
        <div class="container">
            <div class="information__wrap row">
                <?php if ($column_1) : ?>
                    <ul class="information__list col-12 col-md-4">
                        <?php foreach ($column_1 as $list_item) : ?>
                            <?php
                            $title = $list_item['title'];
                            $text = $list_item['text'];
                            ?>
                            
                            <li class="list-item">
                                <?php if ($title) : ?>
                                    <h4 class="list-item__title"><?php echo $title; ?></h4>
                                <?php endif; ?>
                                <?php if ($text) : ?>
                                    <div class="list-item__text">
                                        <?php echo $text; ?>
                                    </div>
                                <?php endif; ?>
                            </li>
                            
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <?php if ($column_2) : ?>
                    <ul class="information__list col-12 col-md-4">
                        <?php foreach ($column_2 as $list_item) : ?>
                            <?php
                            $title = $list_item['title'];
                            $text = $list_item['text'];
                            ?>

                            <li class="list-item">
                                <?php if ($title) : ?>
                                    <h4 class="list-item__title"><?php echo $title; ?></h4>
                                <?php endif; ?>
                                <?php if ($text) : ?>
                                    <div class="list-item__text">
                                        <?php echo $text; ?>
                                    </div>
                                <?php endif; ?>
                            </li>

                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <?php if ($column_3) : ?>
                    <ul class="information__list col-12 col-md-4">
                        <?php foreach ($column_3 as $list_item) : ?>
                            <?php
                            $title = $list_item['title'];
                            $text = $list_item['text'];
                            ?>

                            <li class="list-item">
                                <?php if ($title) : ?>
                                    <h4 class="list-item__title"><?php echo $title; ?></h4>
                                <?php endif; ?>
                                <?php if ($text) : ?>
                                    <div class="list-item__text">
                                        <?php echo $text; ?>
                                    </div>
                                <?php endif; ?>
                            </li>

                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>


