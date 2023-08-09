<?php
    $section_id = get_sub_field('section_id');
    $title = get_sub_field('title');
    $text_1 = get_sub_field('text_1');
    $text_2 = get_sub_field('text_2');
    $form = get_sub_field('form');
?>

<?php if ($form) : ?>
    <section id="<?php echo $section_id;?>" class="text-form">
        <div class="container">
            <div class="text-form__wrap d-flex flex-column flex-lg-row align-items-center align-items-xl-start">
                <?php if ($title && ($text_1 || $text_2)) : ?>
                    <div class="text-form__content row">
                        <div class="text-form__title col-12">
                            <h2>
                                <?php echo $title; ?>
                            </h2>
                        </div>
                        <div class="text-form__img d-flex d-lg-none"></div>
                        <?php if ($text_1) : ?>
                            <div class="text-form__text col-left col-12 col-xl-6">
                                <?php echo $text_1; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($text_2) : ?>
                            <div class="text-form__text col-right col-12 col-xl-6">
                                <?php echo $text_2; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <div class="text-form__form">
                    <?php echo $form; ?>
                </div>
            </div>
        </div>
        <div class="show-hidden-content">
            <svg xmlns="http://www.w3.org/2000/svg" width="47.149" height="19.032" viewBox="0 0 47.149 19.032">
                <path id="Union_2" data-name="Union 2" d="M-2841.972,1488.986-2865,1472l23.028,16.985,22.934-16.915-22.934,16.915.146.108-.146-.108-.242.178Z" transform="translate(2865.594 -1471.196)" fill="none" stroke="#2d4c42" stroke-width="2"/>
            </svg>
        </div>
    </section>
<?php endif; ?>