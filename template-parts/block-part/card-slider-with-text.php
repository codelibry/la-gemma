<?php
$title = get_sub_field('title');
$description = get_sub_field('description');
$card_list = get_sub_field('card_list');
$arrow_to_bottom = get_sub_field('arrow_to_bottom');
$description_title = get_sub_field('description_title');

?>

<section class="card-slider section animate fade-up">

    <?php if($title || $description): ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card-slider__text mx-auto">
                        <?php echo $title?'<h3 class="card-slider__title animate fade-up">'.$title.'</h3>':'';
                        echo $description?'<span class="card-slider__description d-block animate fade-up delay-1">'.$description.'</span>':''; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="card-slider__list-wrapper">
        <?php if($card_list): ?>
            <ul class="card-slider__list js-card-slider animate fade-up">
                <?php foreach($card_list as $card):
                    $name = $card['name'];
                    $description = $card['description'];
                    $image = $card['image'];
                    $is_room = $card['is_room'];
                    if ($is_room) {
                        $size = $card['size'];
                        $characteristics = $card['characteristics'];
                        $list_titlw = $card['list_title'];
                        $list = $card['services'];
                    }
                ?>
                    <li class="">
                        <div class="card-slider__list-item">
                            <?php echo wp_get_attachment_image($image['ID'], 'full' , false , array( 'class' => 'card-slider__list-item__img' )); ?>
                            <div class="card-slider__list-item-content">
                                <?php if($name || ($is_room && ($size || $characteristics))): ?>
                                    <div class="card-slider__list-item-title">
                                        <?php echo $name?'<h3>'.$name.'</h3>':'';
                                        if ($is_room) {
                                            echo '<div class="card-slider__list-item-info">';
                                            echo $size?'<span>'.$size.'</span>':'';
                                            if ($characteristics) {
                                                echo '<ul>';
                                                foreach ($characteristics as $item) {
                                                    echo '<li>'.$item['item'].'</li>';
                                                }
                                                echo '</ul';
                                            }
                                            echo '</div>';
                                        } ?>
                                    </div>
                                <?php endif; ?>

                                <?php if($description || $list): ?>
                                    <?php if($is_room): ?>
                                        <div class="card-slider__list-item-tabs">
                                            <?php if($description): ?>
                                                <div class="card-slider__list-item-tab card-slider__services js-tab" data-name="about"><?php echo $description_title?:'About'; ?></div>
                                            <?php endif; ?>
                                            <?php if($list): ?>
                                                <div class="card-slider__list-item-tab card-slider__services js-tab" data-name="services"><?php echo $list_titlw?:'Services'; ?></div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="card-slider__list-item-tab-content">
                                        <?php if($description): ?>
                                            <div class="card-slider__list-item-description js-content <?php echo $is_room?'':'not-room'; ?>" data-name="about">
                                                <?php echo $description; ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if($is_room): ?>
                                            <?php if($list ): ?>
                                                <ul class="card-slider__services-list js-content" data-name="services">
                                                    <?php foreach($list as $item): ?>
                                                        <li><?php echo $item['item']; ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <div class="arrow d-flex justify-content-center mt-4">
            <div class="arrow-left js-prev mr-1">
                <svg width="32px" height="32px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                    <polygon fill="#e2d3b8" points="497.333 239.999 80.092 239.999 176.087 144.004 153.46 121.377 18.837 256 153.46 390.623 176.087 367.996 80.09 271.999 497.333 271.999 497.333 239.999" class="ci-primary"/>
                </svg>
            </div>
            <div class="arrow-right js-next ml-1">
                <svg width="32px" height="32px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                    <polygon fill="#e2d3b8" points="359.873 121.377 337.246 144.004 433.243 240.001 16 240.001 16 240.002 16 272.001 16 272.002 433.24 272.002 337.246 367.996 359.873 390.623 494.498 256 359.873 121.377" class="ci-primary"/>
                </svg>
            </div>
        </div>
    </div>
    <?php echo $arrow_to_bottom?'<div class="card-slider__arrow-wrapper"><div class="card-slider__arrow"></div></div>':''; ?>

</section>
