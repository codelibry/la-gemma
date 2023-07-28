import $ from 'jquery';

function scrollToAnchor() {
    $('a[href^="#"]:not(.slider-arrow, .booking-btn)').click(function (e) {
        e.preventDefault();
        const href = $(this).attr('href');
        const headerMenu = $('.header__menu');
        const headerHeight = $('header.header').height();

        headerMenu.removeClass('open');
        $('body, html').removeClass('no-scroll');
        if ($('body').hasClass('logged-in')) {
            if ($(window).width() > 782) {
                $('html, body').animate({scrollTop: $(href).offset().top - headerHeight - 32}, 1000);
            } else if ($(window).width() > 600 && $(window).width() < 782) {
                $('html, body').animate({scrollTop: $(href).offset().top - headerHeight - 46}, 1000);
            } else {
                $('html, body').animate({scrollTop: $(href).offset().top - headerHeight}, 1000);
            }
        } else {
            $('html, body').animate({scrollTop: $(href).offset().top - headerHeight}, 1000);
        }
    })
}

function scrollToHash() {
    $(document).on('ready', function () {
        let hash = window.location.hash.substr(1);
        const headerHeight = $('header.header').height();
        if (hash && $('#' + hash).length) {
            if ($('body').hasClass('logged-in')) {
                if ($(window).width() > 782) {
                    $('html, body').animate({scrollTop: $('#' + hash).offset().top - headerHeight - 32}, 1000);
                } else if ($(window).width() > 600 && $(window).width() < 782) {
                    $('html, body').animate({scrollTop: $('#' + hash).offset().top - headerHeight - 46}, 1000);
                } else {
                    $('html, body').animate({scrollTop: $('#' + hash).offset().top - headerHeight}, 1000);
                }
            } else {
                $('html, body').animate({scrollTop: $('#' + hash).offset().top - headerHeight}, 1000);
            }

            $(window).on('carouselInited', function () {
                if ($('body').hasClass('logged-in')) {
                    if ($(window).width() > 782) {
                        $('html, body').animate({scrollTop: $('#' + hash).offset().top - headerHeight - 32}, 1000);
                    } else if ($(window).width() > 600 && $(window).width() < 782) {
                        $('html, body').animate({scrollTop: $('#' + hash).offset().top - headerHeight - 46}, 1000);
                    } else {
                        $('html, body').animate({scrollTop: $('#' + hash).offset().top - headerHeight}, 1000);
                    }
                } else {
                    $('html, body').animate({scrollTop: $('#' + hash).offset().top - headerHeight}, 1000);
                }
            })
        }
    })
}

function scrollToExistSection() {
    function isElementExists(elementId) {
        return !!$('#' + elementId).length;
    }

    function scrollToSection(elementId) {
        const href = $('#' + elementId);
        const headerMenu = $('.header__menu');
        const headerHeight = $('header.header').height();

        console.log($(href).offset().top);

        headerMenu.removeClass('open');
        $('body, html').removeClass('no-scroll');
        if ($('body').hasClass('logged-in')) {
            if ($(window).width() > 782) {
                $('html, body').animate({scrollTop: $(href).offset().top - headerHeight - 32}, 1000);
            } else if ($(window).width() > 600 && $(window).width() < 782) {
                $('html, body').animate({scrollTop: $(href).offset().top - headerHeight - 46}, 1000);
            } else {
                $('html, body').animate({scrollTop: $(href).offset().top - headerHeight}, 1000);
            }
        } else {
            $('html, body').animate({scrollTop: $(href).offset().top - headerHeight}, 1000);
        }
    }

    $('.header .menu-item a').on('click', function (event) {
        event.preventDefault();

        const linkWithAnchor = $(this).attr('href');

        const anchorId = linkWithAnchor.split('#')[1];

        if (isElementExists(anchorId)) {
            scrollToSection(anchorId);
        } else {
            window.location.href = linkWithAnchor;
        }
    });
}

export {scrollToAnchor, scrollToHash, scrollToExistSection};