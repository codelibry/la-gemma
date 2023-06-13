import $  from 'jquery';
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import Plyr from 'plyr';

function videoBlock(){

    $('.videoBlock__video .video').each(function(){
        let player = false;
        let block = $(this);
        if($(this).hasClass('video--oembed')){
            let block = $(this);
            player = new Plyr($(this).get(0), {
                controls: false,
                autoplay: false,
                muted: true,
                vimeo: {autoplay: false, transparent: true, background: true, loop: true},
                youtube: {autoplay: false},
                fullscreen: {enabled: false},
                loop: {active: true}
            });
        
        } else{
            player = new Plyr($(this).get(0), {
                controls: false,
                autoplay: false,
                muted: true,
                vimeo: {autoplay: false, transparent: true, loop: true},
                youtube: {autoplay: false},
                fullscreen: {enabled: false},
                loop: {active: true}
            });
        }
        if(player){
            player.play();
            gsap.from(block ,{
                scrollTrigger: {
                    trigger: block,
                    pin:false,
                    start: "top bottom",
                    end: "bottom top",
                    scrub: 1,
                    markers: false,
                    onToggle: function(self){
                        if(self.isActive){
                            player.play();
                        } else{
                            player.pause();
                        }
                    },
                },        
            });
            $(window).trigger('heightChanges');
            if(block.offset().top < $(window).height() ){
                setTimeout(function(){ player.play(); }, 1000);
            }
            
        }
    });

    

}

export { videoBlock };