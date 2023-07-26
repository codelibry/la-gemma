import $  from 'jquery';

function headerMenu(){
    const headerToggle = $('.header__toggle');
    const headerMenu = $('.header__menu');
    const headerParentMenuItem = $('.menu-item-has-children > a');
    const headerClose = $('.header__close');

    $(document).on('click', function (e) {
        if(!headerToggle.is(e.target) && !$(e.target).closest(".header__menu").length && $(window).width() > 769) {
            headerMenu.removeClass('open');
            $('body, html').removeClass('no-scroll');
        }
    });

    headerToggle.on('click', function () {
        headerMenu.toggleClass('open');
        $('body, html').toggleClass('no-scroll');
    });

    headerClose.on('click', function () {
        headerMenu.removeClass('open');
        $('body, html').removeClass('no-scroll');
    });

    headerParentMenuItem.on('click', function (e) {
        e.preventDefault();
    })
}

function setHeaderPositionFixed() {
    const header = $('header.header');

    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 30) {
            header.addClass('header-fixed');
            header.removeClass('header-unfixed');
        } else if($(window).scrollTop() < 30 && header.hasClass('header-fixed')) {
            header.addClass('header-unfixed');
            header.removeClass('header-fixed');
        }
    })
}

$(document).on('scroll', setHeaderPositionFixed)

export { headerMenu, setHeaderPositionFixed };