<?php
    $title = get_sub_field('title');
    $text_1 = get_sub_field('text_1');
    $text_2 = get_sub_field('text_2');
    $form = get_sub_field('form');
?>

<?php if ($form) : ?>
    <section class="subscribe-form">
        <div class="container">
            <div class="subscribe-form__wrap row">
                <?php if ($title && ($text_1 || $text_2)) : ?>
                    <div class="subscribe-form__text col-lg-7 col-xl-8 d-flex flex-wrap">
                        <div class="subscribe-form__title col-12">
                            <?php echo $title; ?>
                        </div>
                        <?php if ($text_1) : ?>
                            <div class="subscribe-form__text-left col-12 col-xl-6">
                                <?php echo $text_1; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($text_2) : ?>
                            <div class="subscribe-form__text-right col-12 col-xl-6">
                                <?php echo $text_2; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <div class="subscribe-form__form col-lg-5 col-xl-4">
                    <div class="subscribe-form__form-img">
                        <img src="<?php echo get_template_directory_uri() . '/assets/image/subscribe-form-1.png';?>" alt="form-image">
                    </div>
                    <div class="subscribe-form__form-title">
                        <span>
                            <?php _e('SIGN UP TO THE');?>
                        </span>
                        <?php _e('GOLDEN KEY CLUB');?>
                    </div>
                    <?php echo $form; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>