<?php
    $logo_white = get_field('logo_white', 'option');

?>

<header class="header">
    <div class="container">
        <div class="header__wrap">
            <div class="header__toggle">
                Menu
            </div>
            <nav class="header__menu">
                <?php
                    wp_nav_menu([
                        'menu' => 'header-menu',
                        'depth' => 0,
                        'container' => 'null',
                        'menu_class' => 'menu',
                        'echo' => true
                    ]);
                ?>
            </nav>
            <?php if (is_front_page() && $logo_white) : ?>
                <div class="header__logo logo-white">
                    <img src="<?php echo $logo_white['url']; ?>"
                         alt="<?php echo $logo_white['alt'] ?: $logo_white['title']; ?>">
                </div>
            <?php endif; ?>

            <div class="header__btn">
                <a href="#" class="button button-white-transparent">
                    <span>Language</span>
                </a>
                <a href="#" class="button button-white">
                    <span>Book now</span>
                </a>
            </div>
        </div>
    </div>
</header>
