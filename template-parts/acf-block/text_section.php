<?php $text = get_sub_field('text');?>

<?php if($text) :?>
    <section class="text">
        <div class="container">
            <div class="text__wrap">
                <?php echo $text;?>
            </div>
        </div>
    </section>
<?php endif; ?>
