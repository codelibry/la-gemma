import $ from 'jquery';

function postFilter() {
    const fitlerBtn = $('.js-filter .filter-btn');


    fitlerBtn.on('click', function (e) {
        const postType = $(this).data('post-type');
        const termSlug = $(this).data('term-slug');
        const termTaxonomy = $(this).data('term-taxonomy');

        fitlerBtn.removeClass('active');

        $(this).addClass('active');

        let data = {
            action: 'filter_posts',
            postType: postType,
            termSlug: termSlug,
            termTaxonomy: termTaxonomy
        }

        $.ajax({
            url: customjs_ajax_object.ajax_url,
            type: 'POST',
            data: data,
            success: function (res) {
                $('#response').html(res);

            },
            error: function (res) {
                console.warn(res)
            },
            complete: function () {
                $('.js-post-slider').slick({
                    infinite: false,
                    arrows: true,
                    dots: false,
                    speed: 1000,
                    slidesToShow: 1.823,
                });

                const postSlider = $('.js-post-slider');
                const postSliderImg = postSlider.find('img');
                const postSliderImgHeight = postSliderImg.height();
                const postSliderArrows = postSlider.find('.slick-arrow');

                postSliderArrows.css('top', (postSliderImgHeight / 2) + 'px');
            }
        })
    })
}

export {postFilter}