import $  from 'jquery';

function getSlider() {
    const slider = $('.js-slider');

    slider.each(function () {
        $(this).slick({
            infinite: true,
            arrows: true,
            dots: true,
            speed: 1000,
        });
    })

    const postSlider = $('.js-post-slider');

    postSlider.each(function () {
        $(this).slick({
            infinite: false,
            arrows: true,
            dots: false,
            speed: 1000,
            slidesToShow: 1.823,
        });
    })

    setSliderArrowPosition();
}

$(window).on('resize', setSliderArrowPosition);

function setSliderArrowPosition() {
    const postSlider = $('.js-post-slider');
    const postSliderImg = postSlider.find('img');
    const postSliderImgHeight = postSliderImg.height();
    const postSliderArrows = postSlider.find('.slick-arrow');

    postSliderArrows.css('top', (postSliderImgHeight / 2) + 'px');
}

export {getSlider, setSliderArrowPosition}