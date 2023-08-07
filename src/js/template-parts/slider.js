import $  from 'jquery';

function getSlider() {
    const slider = $('.js-slider');
    const sliderNoArrow = $('.js-slider-no-arrow');
    const postSlider = $('.js-post-slider');
    const followSlider = $('.js-follow-slider');

    slider.slick({
        infinite: true,
        arrows: true,
        dots: true,
        speed: 1000,
        slidesToShow: 1
    });

    sliderNoArrow.slick({
        infinite: true,
        arrows: false,
        dots: true,
        speed: 1000,
        slidesToShow: 1
    });

    if ($(window).width() > 769) {
        postSlider.slick({
            infinite: false,
            arrows: true,
            dots: false,
            speed: 1000,
            slidesToShow: 1.823,
            responsive: [
                {
                    breakpoint: 1735,
                    settings: {
                        slidesToShow: 1.823,
                    }

                },
                {
                    breakpoint: 1440,
                    settings: {
                        slidesToShow: 1.5,
                    }

                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1.25,
                    }

                },
                // {
                //     breakpoint: 769,
                //     settings: {
                //         slidesToShow: 1,
                //         arrows: false,
                //         dots: true
                //     }
                //
                // },
            ]
        });
    }


    followSlider.slick({
        infinite: false,
        arrows: true,
        dots: false,
        speed: 1000,
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 1440,
                settings: {
                    slidesToShow: 2,
                }

            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1.6,
                }

            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1.3,
                }

            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                }

            },
        ]
    });

    $(document).on('ready', setSliderArrowPosition)
}

//$(window).on('resize', setSliderArrowPosition);

function setSliderArrowPosition() {
    const postSlider = $('.js-post-slider, .js-follow-slider');
    const postSliderImg = postSlider.find('img');
    const postSliderImgHeight = postSliderImg.height();
    const postSliderArrows = postSlider.find('.slick-arrow');

    postSliderArrows.css('top', (postSliderImgHeight / 2) + 'px');
}

export {getSlider, setSliderArrowPosition}