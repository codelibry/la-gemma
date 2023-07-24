import $  from 'jquery';
import { gsap } from "gsap";


function scrollToAnchor(){
    $('a[href^="#"]:not(.slider-arrow, .booking-btn)').click(function(e){
        e.preventDefault();
        const href = $(this).attr('href');
        const headerMenu = $('.header__menu');
        const headerHeight = $('header.header').height();

        headerMenu.removeClass('open');
        $('body, html').removeClass('no-scroll');
        if($('body').hasClass('logged-in')) {
            if ($(window).width() > 782) {
                $('html, body').animate({ scrollTop: $(href).offset().top - headerHeight - 32}, 1000);
            } else if($(window).width() > 600 && $(window).width() < 782) {
                $('html, body').animate({ scrollTop: $(href).offset().top - headerHeight - 46}, 1000);
            } else {
                $('html, body').animate({ scrollTop: $(href).offset().top - headerHeight}, 1000);
            }
        } else {
            $('html, body').animate({ scrollTop: $(href).offset().top - headerHeight}, 1000);
        }
    })
        
}

function scrollToHash(){
    let hash = window.location.hash.substr(1);
    if(hash && $('#'+hash).length){
        $('html, body').animate({ scrollTop: $('#'+hash).offset().top}, 1700);
        $(window).on('carouselInited', function(){
            $('html, body').animate({ scrollTop: $('#'+hash).offset().top}, 1700);
        })
    }
}

export { scrollToAnchor,scrollToHash };