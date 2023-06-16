import $  from 'jquery';

function header(){
    const headerToggle = $('.header__toggle');
    const headerMenu = $('.header__menu');

    $(document).on('click', function (e) {
        if(!headerMenu.is(e.target) && !headerToggle.is(e.target)) {
            headerMenu.removeClass('open');
            $('body, html').removeClass('no-scroll');
        }
    });

    headerToggle.on('click', function () {
        headerMenu.toggleClass('open');
        $('body, html').toggleClass('no-scroll');
    });
}


export { header };