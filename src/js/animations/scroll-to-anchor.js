import $  from 'jquery';
import { gsap } from "gsap";


function scrollToAnchor(){

    $('a[href^="#"]:not(.slider-arrow)').click(function(e){
        e.preventDefault();
        let href = $(this).attr('href');
        $('.header__side').removeClass('active');
        $('html, body').animate({ scrollTop: $(href).offset().top}, 1700);
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