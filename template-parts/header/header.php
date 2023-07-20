<?php
    $logo_white = get_field('logo_white', 'option');
    $logo_green = get_field('logo_green', 'option');
    $logo_allure = get_field('logo_allure', 'option');
    $logo_lucas = get_field('logo_lucas', 'option');
    $logo_paulo_airaudo = get_field('logo_paulo_airaudo', 'option');
    
    $logo_icon = '';
    
    if (is_front_page()) {
        $logo_icon = $logo_white;
    } elseif (is_page_template('template-pages/allure-page.php')) {
        $logo_icon = $logo_allure;
    } elseif (is_page_template('template-pages/lucas-page.php')) {
        $logo_icon = $logo_lucas;
    } elseif (is_page_template('template-pages/paulo-airaudo-page.php')) {
        $logo_icon = $logo_paulo_airaudo;
    } elseif (!is_front_page()) {
        $logo_icon = $logo_green;
    }
?>

<header class="header">
    <div class="container">
        <div class="header__wrap">
            <div class="header__toggle">
                Menu
            </div>
            <?php if ($logo_icon) : ?>
                <div class="header__logo">
                    <a href="<?php echo get_home_url(); ?>">
                        <img src="<?php echo $logo_icon['url']; ?>"
                             alt="<?php echo $logo_icon['alt'] ?: $logo_icon['title']; ?>">
                    </a>
                </div>
            <?php endif; ?>

            <div class="header__btn">
                <select id="language" name="language" class="button language-btn">
                    <option value="language" selected>Language</option>
                    <option value="italian">Italian</option>
                    <option value="english">English</option>
                </select>
                <a href="#"
                   class="button booking-btn">
                   <span>Book</span>
                    
                </a>
            </div>
            <div class="booking-form">
                <form id="booking-form">
                    <div class="form-fields">
                        <div class="form-date-field">
                            <label for="check-in">CHECK-IN</label>
                            <input type="text" id="check-in" name="arrive" readonly placeholder="DD - MM - YYYY">
                        </div>
                        <div class="form-date-field">
                            <label for="check-out">CHECK-OUT</label>
                            <input type="text" id="check-out" name="depart" readonly placeholder="DD - MM - YYYY">
                        </div>
                        <div class="form-calendar">
                            <div class="form-select-field">
                                <select id="guests" name="guests">
                                    <option value="0" selected disabled>Guests</option>
                                    <option value="1-0">1 Adult</option>
                                    <option value="1-1">1 Adult 1 Child</option>
                                    <option value="2-1">2 Adult 1 Child</option>
                                    <option value="2-2">2 Adult 2 Child</option>
                                    <option value="3-2">3 Adult 2 Child</option>
                                    <option value="3-3">3 Adult 3 Child</option>
                                </select>
                            </div>
                            <input type="text" id="datepicker" readonly>
                        </div>

                    </div>
                    <div class="form-submit">
                        <input type="submit" class="button" value="CHECK AVAILABILITY">
                    </div>
                </form>
            </div>
        </div>
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

</header>
