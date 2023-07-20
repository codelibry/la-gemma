import $  from 'jquery';

function toggleHeaderMenu(){
    const headerToggle = $('.header__toggle');
    const headerMenu = $('.header__menu');
    const headerParentMenuItem = $('.menu-item-has-children > a');


    $(document).on('click', function (e) {
        if(!headerToggle.is(e.target) && !$(e.target).closest(".header__menu").length) {
            headerMenu.removeClass('open');
            $('body, html').removeClass('no-scroll');
        }
    });

    headerToggle.on('click', function () {
        headerMenu.toggleClass('open');
        $('body, html').toggleClass('no-scroll');
    });

    headerParentMenuItem.on('click', function (e) {
        e.preventDefault();
    })
}

function setHeaderPositionFixed() {
    const header = $('header.header');

    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 100) {
            header.addClass('header-fixed');
            header.removeClass('header-unfixed');
        } else if($(window).scrollTop() < 100 && header.hasClass('header-fixed')) {
            header.addClass('header-unfixed');
            header.removeClass('header-fixed');
        }
    })
}

$(document).on('scroll', setHeaderPositionFixed)

export { toggleHeaderMenu, setHeaderPositionFixed };