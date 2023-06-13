import $  from 'jquery';
import { gsap } from "gsap";
import bodymovin from 'lottie-web/build/player/lottie_svg.min.js';

function loader(){
    let tl = gsap.timeline();
    let tl1 = gsap.timeline({ defaults: { ease: "Power3.easeIn" } });
    let tl2 = gsap.timeline({ defaults: { ease: "Power3.easeOut" } });
    $('.loader__animation').each(function(){
        let path = $(this).data('path');
        let animation = bodymovin.loadAnimation({
            container: this, // Required
            path: path, // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            autoplay: true, // Optional
            name: "Loading",
            
        });
        $('.transition__blue').hide();
        animation.addEventListener('complete', function(){
            
            $('.transition__blue').show();
            tl1.fromTo('.transition__blue', {x: '100%' }, {x: 0, duration: 0.8, onComplete: function(){ 
                $('.loader').hide();
                $('.loader__grey').hide();
                $(window).scrollTop(0);
                tl2.fromTo('.transition__blue', {x: '0' }, {x: '-100%', duration: 0.75, onComplete: function(){ $(window).scrollTop(0); $(window).trigger('loadCompleted'); }},'finish')
                .fromTo('#main', {x: 0, opacity: 0 }, {x: 0, opacity: 1, duration: 0.7 , delay: 0.74, onComplete: function(){ $('#main').attr('style',''); $('body').addClass('loaded');}},'finish')
                .fromTo($('.header__main__container'), {x: 0, y: 30, opacity: 0 }, {x: 0, y: 0, opacity: 1, duration: 0.7 , delay: 0.75, onComplete: function(){ $('.header__main__container').attr('style','');}},'finish')
                .fromTo($('.header__side'), {x: 0, opacity: 0 }, {x: 0, opacity: 0, duration: 0.7 , delay:  0.75, onComplete: function(){ $('.header__side').attr('style','');}},'finish')
                .fromTo($('#footer'), {x: 0, opacity: 0 }, {x: 0, opacity: 1, duration: 0.7 , delay:  0.75, onComplete: function(){ $('#footer').attr('style','');  }},'finish');
            }},'start')
            .fromTo($('.loader'), {x: 0, opacity: 1 }, {x: '-20%', opacity: 0, duration: 0.8},'start');
            
            //gsap.timeline().fromTo('.loader__logo', {opacity: 0 }, {opacity: 1, duration: 0.05, delay: 0.2, onComplete: function(){setTimeout(()=>{$('.loader__animation').hide(),200}); gsap.timeline().fromTo('.loader__logo', {opacity: 1 }, {opacity: 0, duration: 0.5,delay:0.5});}},'start');
        });
    });
}


export { loader };