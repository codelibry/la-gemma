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

<header class="header shadow-sm">
    <div class="container">
        <div class="header__wrap">
            <div class="header__toggle">
                <?php _e('Menu','lagemmahotel');?>
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
                <?php echo do_shortcode('[wpml_language_switcher type="custom" flags=1 native=1 translated=1][/wpml_language_switcher]');?>
                <!-- <select id="language" name="language" class="button language-btn">
                    <option value="language" selected><?php _e('Language','lagemmahotel');?></option>
                    <option value="italian"><?php _e('Italian','lagemmahotel');?></option>
                    <option value="english"><?php _e('English','lagemmahotel');?></option>
                </select> -->
                <a href="#"
                   class="button booking-btn">
                   <span> <?php _e('Book now','lagemmahotel');?></span>
                </a>
            </div>
            <div class="booking-form">
                <div class="close-form">X</div>
                <form id="booking-form">
                    <div class="form-fields">
                        <div class="form-date-field">
                            <label for="check-in"><?php _e('CHECK-IN','lagemmahotel');?></label>
                            <input type="text" id="check-in" name="arrive" readonly placeholder="DD - MM - YYYY">
                        </div>
                        <div class="form-date-field">
                            <label for="check-out"><?php _e('CHECK-OUT','lagemmahotel');?></label>
                            <input type="text" id="check-out" name="depart" readonly placeholder="DD - MM - YYYY">
                        </div>
                        <div class="form-calendar">
                            <div class="form-select-field">
                                <select id="guests" name="guests">
                                    <option value="0" selected disabled><?php _e('Guests','lagemmahotel');?></option>
                                    <option value="1-0"><?php _e('1 Adult','lagemmahotel');?></option>
                                    <option value="1-1"><?php _e('1 Adult 1 Child','lagemmahotel');?></option>
                                    <option value="2-1"><?php _e('2 Adult 1 Child','lagemmahotel');?></option>
                                    <option value="2-2"><?php _e('2 Adult 2 Child','lagemmahotel');?></option>
                                    <option value="3-2"><?php _e('3 Adult 2 Child','lagemmahotel');?></option>
                                    <option value="3-3"><?php _e('3 Adult 3 Child','lagemmahotel');?></option>
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

