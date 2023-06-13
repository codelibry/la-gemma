import $  from 'jquery';
import { gsap } from "gsap";


function transitionOut(e, transition){
    if(transition == 'work' && $('.transition-image').length){
        let image = $('.transition-image');
        let tl = gsap.timeline({ defaults: { ease: "Power3.easeOut" } });
        return new Promise(async (resolve) => {
            await tl.to('.transition-image',{left: 0,top: 0, width: $(window).innerWidth(), height: window.innerHeight , duration: 0.8, onComplete: function(){ $('body').addClass('loading'); }},'start')
                .fromTo('.transition-image img',{scale:1.05},{scale: 1, duration: 0.8, onComplete: function(){ }},'start')
                .fromTo($('.header__main__container'), {x: 0, opacity: 1 }, {x: 0, opacity: 0, duration: 0.8},'start')
                .then();
            console.log('transition out');
            resolve();
        });
    } else if(transition == 'work-filter'){
        return new Promise(async (resolve) => {
            $('body').addClass('loading-works-nav');
            resolve();
        });
    } else{
        let tl = gsap.timeline({ defaults: { ease: "Power3.easeIn" } });
        return new Promise(async (resolve) => {
            await tl.fromTo('.transition__blue', {x: '100%' }, {x: 0, duration: 0.8, onComplete: function(){ }},'start')
                .fromTo(e, {x: 0, opacity: 1 }, {x: '-20%', opacity: 0, duration: 0.8},'start')
                .fromTo($('.header__main__container'), {x: 0, opacity: 1 }, {x: '-20%', opacity: 0, duration: 0.8},'start')
                .fromTo($('.header__side'), {x: 0, opacity: 1 }, {x: '-20%', opacity: 1, duration: 0.8, },'start')
                .fromTo($('#footer'), {x: 0, opacity: 1 }, {x: '-20%', opacity: 0, duration: 0.8, onComplete: function(){ }},'start')
                .then();
            console.log('transition out');
            resolve();
        });
    }
}

function transitionIn(e , transition){
    if(transition == 'work'){
        let tl = gsap.timeline({ defaults: { ease: "Power3.easeOut" } });
            $('.header__side').attr('style','');
            return new Promise(async (resolve) => {
                await tl.fromTo(e, {x: 0, opacity: 0 }, {x: 0, opacity: 1, duration: 0.2 , delay: 0, onComplete: function(){  }},'finish')
                    .fromTo($('.header__main__container'), {x: 0, y: 30, opacity: 0 }, {x: 0, y: 0, opacity: 1, duration: 0.7 , delay: 0.1, onComplete: function(){ $('.header__main__container').attr('style','');}},'finish')
                    .fromTo($('#footer'), {x: 0, opacity: 0 }, {x: 0, opacity: 1, duration: 0.7 , delay: 0.1, onComplete: function(){ $('#footer').attr('style','');}},'finish')
                    .then();
                console.log('transition in');
                $('.heroBanner__inner').css('height',window.innerHeight);
                resolve();
            });
    } else if(transition == 'work-filter'){
        return new Promise(async (resolve) => {
            $('body').removeClass('loading');
            $('body').removeClass('loading-works-nav');
            resolve();
        });
    } else{
        if($('#app').data('hero')){
            let tl = gsap.timeline({ defaults: { ease: "Power3.easeOut" } });
            $('.header__side').attr('style','');
            return new Promise(async (resolve) => {
                await tl.fromTo('.transition__blue', {x: '0' }, {x: '-100%', duration: 0.75, onComplete: function(){   }},'finish')
                    .fromTo(e, {x: 0, opacity: 0 }, {x: 0, opacity: 1, duration: 0.2 , delay: 0, onComplete: function(){  }},'finish')
                    .fromTo($('.header__main__container'), {x: 0, y: 30, opacity: 0 }, {x: 0, y: 0, opacity: 1, duration: 0.7 , delay: 0.75, onComplete: function(){ $('.header__main__container').attr('style','');}},'finish')
                    .fromTo($('#footer'), {x: 0, opacity: 0 }, {x: 0, opacity: 1, duration: 0.7 , delay: 0.75, onComplete: function(){ $('#footer').attr('style','');}},'finish')
                    .then();
                console.log('transition in');
                resolve();
            });
        } else{
            let tl = gsap.timeline({ defaults: { ease: "Power3.easeOut" } });
            $('.header__side').attr('style','');
            return new Promise(async (resolve) => {
                await tl.fromTo('.transition__blue', {x: '0' }, {x: '-100%', duration: 0.75, onComplete: function(){ $(window).scrollTop(0); $(window).trigger('loadCompleted'); }},'finish')
                    .fromTo(e, {x: 0, opacity: 0 }, {x: 0, opacity: 1, duration: 0.7 , delay: 0.74, onComplete: function(){ e.removeAttribute('style'); }},'finish')
                    .fromTo($('.header__main__container'), {x: 0, y: 30, opacity: 0 }, {x: 0, y: 0, opacity: 1, duration: 0.7 , delay: 0.75, onComplete: function(){ $('.header__main__container').attr('style','');}},'finish')
                    .fromTo($('#footer'), {x: 0, opacity: 0 }, {x: 0, opacity: 1, duration: 0.7 , delay: 0.75, onComplete: function(){ $('#footer').attr('style','');}},'finish')
                    .then();
                console.log('transition in');
                resolve();
            });
        }
    }
}

export { transitionIn , transitionOut };