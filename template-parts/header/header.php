<?php
    $logo_white = get_field('logo_white', 'option');
    $logo_green = get_field('logo_green', 'option');
    $logo_allure = get_field('logo_allure', 'option');
    $logo_lucas = get_field('logo_lucas', 'option');
    
    $logo_icon = '';
    
    if (is_front_page() && $logo_white) {
        $logo_icon = $logo_white;
    } elseif (is_page_template('template-pages/allure-page.php')) {
        $logo_icon = $logo_allure;
    } elseif (is_page_template('template-pages/lucas-page.php')) {
        $logo_icon = $logo_lucas;
    } elseif (!is_front_page() && $logo_green) {
        $logo_icon = $logo_green;
    }
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
            <?php if ($logo_icon) : ?>
                <div class="header__logo">
                    <a href="<?php echo get_home_url(); ?>">
                        <img src="<?php echo $logo_icon['url']; ?>"
                             alt="<?php echo $logo_icon['alt'] ?: $logo_icon['title']; ?>">
                    </a>
                </div>
            <?php endif; ?>

            <div class="header__btn">
                <a href="#"
                   class="button button-transparent">
                    <span>Language</span>
                </a>
                <a href="#"
                   class="button">
                    Book now
                </a>
            </div>
        </div>
    </div>
</header>
