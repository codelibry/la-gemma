<?php
    $form = get_sub_field('form');
?>

<?php if ($form) : ?>
    <section class="form">
        <div class="container">
            <div class="form__wrap">
                <?php echo $form;?>
            </div>
        </div>
        <div class="horizontal-line"></div>
    </section>
<?php endif; ?>

