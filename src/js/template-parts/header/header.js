import $  from 'jquery';

function header(){
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


export { header };