import $  from 'jquery';

function header(){
    const logoWhite = $('#white-logo');
    const logoGreen = $('#green-logo');
    const header = $('header');
    $(window).on('scroll', function () {
        if (window.pageYOffset !== 0) {
            header.addClass('active');
            logoWhite.removeClass('show');
            logoGreen.addClass('show');
        } else {
            header.removeClass('active');
            logoWhite.addClass('show');
            logoGreen.removeClass('show');
        }
    })
}


export { header };