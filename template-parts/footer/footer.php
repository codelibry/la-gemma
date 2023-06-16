<?php
    $footer_logo = get_field('footer_logo', 'option');
    $footer_info = get_field('footer_info', 'option');
    $footer_address = get_field('footer_address', 'option');
?>

<footer class="footer">
    <div class="container">
        <div class="footer__wrap">
            <?php if ($footer_logo) : ?>
                <div class="footer__logo">
                    <img src="<?php echo $footer_logo['url']; ?>"
                         alt="<?php echo $footer_logo['alt'] ?: $footer_logo['title']; ?>">
                </div>
            <?php endif; ?>
            
            <?php if ($footer_info) : ?>
                <div class="footer__info">
                    <ul class="info__list">
                        <?php foreach ($footer_info as $info_item) : ?>
                            <?php $info = $info_item['info_item']; ?>
                            <li class="info__list-item">
                                <a href="<?php echo preg_match("/@|\.com/", $info) ? 'mailto:' . $info : 'tel: ' . $info; ?>">
                                    <?php echo $info; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            
            <?php endif; ?>
            
            <?php if ($footer_address) : ?>
                <div class="footer__address">
                    <?php echo $footer_address; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</footer>
