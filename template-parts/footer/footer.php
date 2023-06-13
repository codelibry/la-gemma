<?php 
/**
 * Footer
 */
$logo_yellow = get_field('logo_yellow', 'option');
$footer_description = get_field('footer_description', 'option');
$hotel_name = get_field('hotel_name', 'option');
$address = get_field('address', 'option');
$contact_title = get_field('contact_title', 'option');
$email = get_field('email', 'option');
$tel = get_field('tel', 'option');
$social_media_list = get_field('social_media_list', 'option');
$copy = get_field('copy', 'option');
$logo_link = get_field('logo_link', 'option');
$logo_footer = get_field('logo_footer_main', 'option');
?>

<footer class="footer">

    <div class="container">
        <div class="row">
            <?php if($logo_yellow || $logo_footer): ?>
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <?php if($logo_footer): ?>
                        <a href="/" class="footer-logo mr-2">
                            <?php echo wp_get_attachment_image($logo_footer['ID'], 'full'); ?>
                        </a>
                    <?php endif; ?>
                    <?php if($logo_yellow): ?>
                        <a href="<?php echo $logo_link['url']?:''; ?>" class="footer-logo ml-2" target="<?php echo $logo_link['target']?:''; ?>">
                            <?php echo wp_get_attachment_image($logo_yellow['ID'], 'full'); ?>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endif;

            if($footer_description): ?>
                <div class="col-12">
                    <div class="footer-description">
                        <span><?php echo $footer_description; ?></span>
                    </div>
                </div>
            <?php endif; ?>

<!--            <div class="col-12 d-flex justify-content-center">-->
<!--                --><?php //wp_nav_menu([
//	                'theme_location' => 'footer-bottom-menu',
//	                'container'            => false,
//	                'menu_class'           => 'footer-menu',
//                ]); ?>
<!--            </div>-->

            <?php if ($hotel_name || $address): ?>
                <div class="col-12">
                    <div class="footer-hotel">
                        <?php if($hotel_name): ?>
                            <div class="footer-hotel__name footer-title">
                                <?php echo $hotel_name; ?>
                            </div>
                        <?php endif;

                        if ($address): ?>
                            <div class="footer-hotel__address  footer-text">
                                <?php echo $address; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif;

            if ($contact_title || $email || $tel): ?>
                <div class="col-12">
                    <div class="footer-contacts">
                        <?php if($contact_title): ?>
                            <div class="footer-contacts__title  footer-title">
                                <?php echo $contact_title; ?>
                            </div>
                        <?php endif;

                        if ($email): ?>
                            <div class="footer-contacts__item footer-text footer-email">
                                <a href="mailto:<?php echo $email; ?>">EMAIL: <?php echo $email; ?></a>
                            </div>
                        <?php endif;

                        if ($tel): ?>
                            <div class="footer-contacts__item  footer-text">
                                <a href="tel:<?php echo $tel; ?>">tel: <?php echo $tel; ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif;

            if ($social_media_list): ?>
                <div class="col-12">
                    <ul class="footer-social">
                        <?php foreach($social_media_list as $item):
                            $icon = $item['icon'];
                            $link = $item['link'];
                            if ($link) {
                                $url = $link['url'];
                                $target = $link['target'];
                            }
                            if ($icon):
                        ?>
                                <li>
                                    <div class="footer-social__item">
                                        <a href="<?php echo ($link && $url) ? $url : ''; ?>" target="<?php echo ($link && $target) ? $target : ''; ?>">
                                            <?php echo wp_get_attachment_image($icon['ID'], 'full'); ?>
                                        </a>
                                    </div>
                            </li>
                            <?php endif;
                        endforeach; ?>
                    </ul>
                </div>
            <?php endif;

            if ($copy): ?>
                <div class="col-12">
                    <div class="footer-copy">
                        <span><?php echo $copy; ?></span>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

</footer>