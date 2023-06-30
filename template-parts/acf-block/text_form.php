<?php
    $title = get_sub_field('title');
    $text_1 = get_sub_field('text_1');
    $text_2 = get_sub_field('text_2');
    $form = get_sub_field('form');
?>

<?php if ($form) : ?>
    <section class="text-form">
        <div class="container">
            <div class="text-form__wrap d-flex flex-column flex-lg-row align-items-center align-items-xl-start">
                <?php if ($title && ($text_1 || $text_2)) : ?>
                    <div class="text-form__content row">
                        <div class="text-form__title col-12">
                            <?php echo $title; ?>
                        </div>
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
    </section>
<?php endif; ?>