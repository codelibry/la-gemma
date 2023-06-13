import $  from 'jquery';
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import bodymovin from 'lottie-web/build/player/lottie_svg.min.js';

gsap.registerPlugin(ScrollTrigger)


function circle(){
    let tl = gsap.timeline({ defaults: { ease: "power3.inOut" } });
    $('.circle-word').each(function(){
        let el = $(this);
        let svg = $(this).find('.circle-lottie');
        let path = svg.data('path');
        let disabled = false;
        gsap.from(el ,{
            scrollTrigger: {
                trigger: el,
                pin:false,
                start: "top 80%",
                end: "bottom 20%",
                scrub: 1,
                markers: false,
                onToggle: function(self){
                    if(self.isActive && !disabled){
                        if (el.parents('.banner').length) {
                            $(window).on('pageEnter',function(){
                                setTimeout(function(){
                                    let animation = bodymovin.loadAnimation({
                                        container: svg.get(0), 
                                        path: path, 
                                        renderer: 'svg',
                                        loop: false,
                                        autoplay: true,
                                        name: "Question",
                                    });
                                }, 1500);
                            });
                        } else{
                            let animation = bodymovin.loadAnimation({
                                container: svg.get(0), 
                                path: path, 
                                renderer: 'svg',
                                loop: false,
                                autoplay: true,
                                name: "Question",
                            });
                        }
                        self.disable();
                        disabled = true;
                    } else{
                        self.disable();
                    }

                }
                
            },        
        });
        
        //$(window).trigger('scroll');
    });
}

function crossed(){
    let tl = gsap.timeline({ defaults: { ease: "power3.inOut" } });
    $('.crossed-word').each(function(){
        let el = $(this);
        let svg = $(this).find('.crossed-word__svg');
        let path = svg.data('path');
        let disabled = false;
        gsap.from(el ,{
            scrollTrigger: {
                trigger: el,
                pin:false,
                start: "top 80%",
                end: "bottom 20%",
                scrub: 1,
                markers: false,
                onToggle: function(self){
                    if(self.isActive && !disabled){
                        let animation = bodymovin.loadAnimation({
                            container: svg.get(0), 
                            path: path, 
                            renderer: 'svg',
                            loop: false,
                            autoplay: true,
                            name: "Question",
                        });
                        self.disable();
                        disabled = true;
                    } else{
                        self.disable()
                    }
                }
                
            },        
        });
        
        //$(window).trigger('scroll');
    });
}

function arrow(){
    let tl = gsap.timeline({ defaults: { ease: "power3.inOut" } });
    $('.arrow-word').each(function(){
        let el = $(this);
        let svg = $(this).find('.arrow-word__svg');
        let path = svg.data('path');
        let disabled = false;
        gsap.from(el ,{
            scrollTrigger: {
                trigger: el,
                pin:false,
                start: "top 50%",
                end: "bottom 50%",
                scrub: 1,
                markers: false,
                onToggle: function(self){
                    if(self.isActive && !disabled){
                        let animation = bodymovin.loadAnimation({
                            container: svg.get(0), 
                            path: path, 
                            renderer: 'svg',
                            loop: false,
                            autoplay: true,
                            name: "Arrow",
                        });
                        self.disable();
                        disabled = true;
                    } else{
                        self.disable()
                    }
                }
                
            },        
        });
        
    });
}

function question(){
    $('.question').each(function(){
        let el = $(this);
        let path = $(this).data('path');
        let disabled = false;
        gsap.from(el ,{
                scrollTrigger: {
                    trigger: el,
                    pin:false,
                    start: "top 80%",
                    end: "bottom 20%",
                    scrub: 1,
                    markers: false,
                    onToggle: function(self){
                        if(self.isActive && !disabled){
                            let animation = bodymovin.loadAnimation({
                                container: el.get(0), 
                                path: path, 
                                renderer: 'svg',
                                loop: false,
                                autoplay: true,
                                name: "Question",
                            });
                            self.disable();
                            disabled = true;
                        } else{
                            self.disable();
                        }
                    },
                },        
        });
        
    });
}

function animation404(){
    $('.animation-404').each(function(){
        let el = $(this);
        let path = $(this).data('path');
        let disabled = false;
        gsap.from(el ,{
                scrollTrigger: {
                    trigger: el,
                    pin:false,
                    start: "top 80%",
                    end: "bottom 20%",
                    scrub: 1,
                    markers: false,
                    onToggle: function(self){
                        if(self.isActive && !disabled){
                            let animation = bodymovin.loadAnimation({
                                container: el.get(0), 
                                path: path, 
                                renderer: 'svg',
                                loop: false,
                                autoplay: true,
                                name: "404",
                            });
                            self.disable();
                            disabled = true;
                        } else{
                            self.disable();
                        }
                    },
                },        
        });
        
    });
}


function navItemsHover(){
    $('.menu-item__animation').each(function(){
        let el = $(this);
        let item = $(this).parent();
        let path = $(this).data('path');
        let animation = bodymovin.loadAnimation({
            container: el.get(0), 
            path: path, 
            renderer: 'svg',
            loop: false,
            autoplay: false,
            name: "nav",
        });
        item.hover(
            function(){
                animation.setDirection(1);
                animation.play();
            },
            function(){
                animation.setDirection(-1);
                animation.play();
            }
        );
    });
}

function conversationHover(){
    $('.conversationComponent').each(function(){
        let el = $(this);
        let animationEl = $(this).find('.conversationComponent__animation');
        if(animationEl.length){
            let path = animationEl.data('path');
            let animation = bodymovin.loadAnimation({
                container: animationEl.get(0), 
                path: path, 
                renderer: 'svg',
                loop: false,
                autoplay: false,
                name: "conversation",
            });
            el.hover(
                function(){
                    animation.setDirection(1);
                    animation.play();
                },
                function(){
                    animation.setDirection(-1);
                    animation.play();
                }
            );
            gsap.from(el ,{
                scrollTrigger: {
                    trigger: el,
                    pin:false,
                    start: "top 80%",
                    end: "bottom 20%",
                    scrub: 1,
                    markers: false,
                    onToggle: function(self){
                        if($(window).width() < 768){
                            if(self.isActive){
                                animation.setDirection(1);
                                animation.play();
                                //self.disable();
                                //disabled = true;
                            } else{
                                animation.setDirection(-1);
                                animation.play();
                                //self.disable();
                            }
                        }
                    },
                },        
            });
        }        
    });
}

export { circle , crossed, arrow, question , animation404, navItemsHover, conversationHover };