<?php $footer_form = get_field('footer_form', 'option')?>

<?php if ($footer_form) : ?>
    <section class="newsletter">
        <div class="container">
            <div class="newsletter__wrap">
                <?php echo $footer_form;?>
            </div>
        </div>
        <div class="horizontal-line"></div>
    </section>
<?php endif; ?>