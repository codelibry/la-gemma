<?php $footer_form = get_field('footer_form', 'option')?>

<?php if($footer_form) :?>
    <section class="newsletter">
        <div class="container">
            <div class="newsletter__wrap">
                <div class="newsletter__title">
                    <h3>
                        <?php _e('Newsletter');?>
                    </h3>
                </div>
                <?php echo $footer_form;?>
            </div>
        </div>
    </section>
<?php endif; ?>