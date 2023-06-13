import $  from 'jquery';

function getFormAccept() {
    const form = $('.form-section__form').find('form');

    $('.wpcf7-acceptance').find('.wpcf7-list-item-label').click(function () {
        $('.wpcf7-acceptance').toggleClass('check');
    });

    $('.js-submit').click(function () {
        setTimeout(sendSuccess, 1000);
        function sendSuccess() {
            if(form.hasClass('sent')) {
                $('.form-section__success').addClass('open');
            }
        }
    });

    $('.js-close-popup').click(function () {
        $('.form-section__success').removeClass('open');
    })
}

export {getFormAccept}