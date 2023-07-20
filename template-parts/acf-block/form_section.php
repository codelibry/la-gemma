<?php
    $section_id = get_sub_field('section_id');
    $form = get_sub_field('form');
?>

<?php if ($form) : ?>
    <section id="<?php echo $section_id;?>" class="form" >
        <div class="container">
            <div class="form__wrap">
                <?php echo $form;?>
            </div>
        </div>
        <div class="horizontal-line"></div>
    </section>
<?php endif; ?>

