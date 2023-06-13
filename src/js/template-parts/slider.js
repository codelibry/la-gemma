import $  from 'jquery';

function getSlider() {
    const slider = $('.js-slider');
    const cardSliderWrapper = $('.card-slider__list-wrapper');
    // const cardSlider = $('.js-card-slider');
    slider.each(function () {
        $(this).slick({
            infinite: true,
            arrows: false,
            dots: true,
            speed: 1000,
        });
    })
    cardSliderWrapper.each(function () {
        const cardSlider = $(this).find('.js-card-slider');
        let prev = $(this).find(".js-prev");
        let next = $(this).find(".js-next");

        cardSlider.slick({
            infinite: true,
            centerMode: true,
            variableWidth: true,
            slidesToShow: 1,
            prevArrow: prev,
            nextArrow: next,
            dots: false,
            focusOnSelect: true,
            speed: 1000,

        });
        console.log($('body').width())
        if ($('body').width() > 992) {
            $('.js-tab').each(function () {
                if ($(this).data('name') === 'about') {
                    $(this).addClass('active');
                }
            })
            $('.js-content').each(function () {
                if ($(this).data('name') === 'about') {
                    $(this).addClass('active');
                }
            })
        }
        $('.js-tab').each(function () {
            $(this).click(function () {
                let tabName = $(this).data('name');
                $('.js-tab').each(function () {
                    if (tabName == $(this).data('name')) {
                        $(this).addClass('active');
                    } else {
                        $(this).removeClass('active');
                    }
                })
                $('.js-content').each(function () {
                    if (tabName == $(this).data('name')) {
                        $(this).addClass('active');
                    } else {
                        $(this).removeClass('active');
                    }
                })
            })
        })
    })


}

export {getSlider}