<?php
    $image = get_sub_field('image');
    $text = get_sub_field('text');
    $button = get_sub_field('button');
?>

<?php if ($image || $text) : ?>
    <section class="about">
        <div class="container">
            <div class="about__wrap">
                <?php if ($image) : ?>
                    <div class="about__image">
                        <img src="<?php echo $image['url']; ?>"
                             alt="<?php echo $image['alt'] ?: $image['title']; ?>">
                    </div>
                <?php endif; ?>
                
                <?php if ($text) : ?>
                    <div class="about__text">
                        <?php echo $text; ?>
                        
                        <?php if ($button) : ?>
                            <div class="about__btn">
                                <a href="<?php echo $button['url']; ?>"
                                   class="button"> <?php echo $button['title']; ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
