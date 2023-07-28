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
                <?php _e('Menu', 'lagemmahotel'); ?>
            </div>
            <?php if ($logo_icon) : ?>
                <div class="header__logo">
                    <a href="<?php echo get_home_url(); ?>">
                    
                        <?php if (is_page_template('template-pages/allure-template.php') || is_page_template('template-parts/page-template-allure-page.php')) : ?>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="59.215" height="59.215" viewBox="0 0 59.215 59.215">
                                <defs>
                                    <clipPath id="clip-path">
                                    <path id="Path_40" data-name="Path 40" d="M659.563,277.18l-3.9-14.675.033,15.185-7.563-13.167,3.963,14.656-10.715-10.759L649,281.552l-13.135-7.619,10.762,10.712-14.659-3.96,13.167,7.561-15.185-.03,14.675,3.9-14.675,3.9,15.185-.033-13.167,7.563,14.659-3.963L635.87,310.292,649,302.67,641.383,315.8,652.1,305.043,648.135,319.7l7.563-13.165-.033,15.185,3.9-14.678,3.9,14.678-.035-15.185,7.563,13.165-3.963-14.657L677.743,315.8l-7.622-13.134,13.135,7.622-10.762-10.715,14.659,3.963-13.17-7.563,15.187.033-14.678-3.9,14.678-3.9-15.187.03,13.17-7.561-14.659,3.96,10.762-10.712-13.135,7.619,7.622-13.132-10.715,10.759,3.963-14.656-7.563,13.167.035-15.185Z" transform="translate(-629.955 -262.504)" fill="none"/>
                                    </clipPath>
                                    <clipPath id="clip-path-2">
                                    <rect id="Rectangle_213" data-name="Rectangle 213" width="59.725" height="59.725" fill="none"/>
                                    </clipPath>
                                </defs>
                                <g id="Group_188" data-name="Group 188" clip-path="url(#clip-path)">
                                    <g id="Group_187" data-name="Group 187" transform="translate(-0.15 -0.214)">
                                    <g id="Group_186" data-name="Group 186" clip-path="url(#clip-path-2)">
                                        <image id="Rectangle_212" data-name="Rectangle 212" width="59.725" height="59.725" xlink:href="data:image/png;base64,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"/>
                                    </g>
                                    </g>
                                </g>
                            </svg>
                        <?php else : ?>

                        <img src="<?php echo $logo_icon['url']; ?>"
                             alt="<?php echo $logo_icon['alt'] ?: $logo_icon['title']; ?>">

                        <?php endif; ?>

                    </a>
                </div>
            <?php endif; ?>
            <div class="header__btn">
                <?php echo do_shortcode('[wpml_language_switcher type="custom" flags=1 native=1 translated=1][/wpml_language_switcher]'); ?>
                <a href="#"
                   class="button booking-btn">
                    <span> <?php _e('Book now', 'lagemmahotel'); ?></span>
                </a>
            </div>
            <div class="booking-form">
                <div class="close-form">X</div>
                <form id="booking-form">
                    <div class="form-fields">
                        <div class="form-date-field">
                            <label for="check-in"><?php _e('CHECK-IN', 'lagemmahotel'); ?></label>
                            <input type="text" id="check-in" name="arrive" readonly placeholder="DD - MM - YYYY">
                        </div>
                        <div class="form-date-field">
                            <label for="check-out"><?php _e('CHECK-OUT', 'lagemmahotel'); ?></label>
                            <input type="text" id="check-out" name="depart" readonly placeholder="DD - MM - YYYY">
                        </div>
                        <div class="form-calendar">
                            <div class="form-dropdown-fields">
                                <div class="field-label">
                                    <span>
                                        <?php _e('Guests'); ?>
                                    </span>
                                </div>
                                <div class="field-content">
                                    <label class="field-item adult">
                                        <span class="label"><?php _e('Adult'); ?></span>
                                        <span class="minus">-</span>
                                        <input type="number" name="adult" disabled value="0">
                                        <span class="plus">+</span>
                                    </label>
                                    <label class="field-item child">
                                        <span class="label"><?php _e('Сhild'); ?></span>
                                        <span class="minus">-</span>
                                        <input type="number" name="child" disabled value="0">
                                        <span class="plus">+</span>
                                    </label>
                                </div>
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
        <div class="header__close">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="46" viewBox="0 0 28 46">
            <text id="X" fill="#213932" font-size="40" font-family="GillSans-Light, Gill Sans" font-weight="300" letter-spacing="-0.022em"><tspan x="0" y="36">X</tspan></text>
            </svg>
        </div>
    </nav>

</header>

