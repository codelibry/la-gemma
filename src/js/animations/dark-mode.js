import $  from 'jquery';
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

function darkMode(){
        let queue = 0;
        $('.dark-block').each(function(index){
            let block = $(this);
            gsap.from(block ,{

                scrollTrigger: {
                    trigger: block,
                    pin:false,
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    markers: false,
                    onToggle: function(self){
                        if(self.isActive){
                            queue++;
                            $('body').addClass('dark-mode');
                        } else{
                            queue--;
                            if(queue == 0){
                                $('body').removeClass('dark-mode');
                            }
                        }
                    }
                },
        
                //defaults:{duration:1, ease:'none'}
            });
            //tl.from(wave,{ x:'0'})
            //tl.to(wave,{ x:'-50%'})
            //tl.to({},{duration:1})
        });

}

$(window).on('heightChanges', function(){
    ScrollTrigger.refresh();
})
$(window).on('pageLeave', function(){
    let Alltrigger = ScrollTrigger.getAll()
    for (let i = 0; i < Alltrigger.length; i++) {
        Alltrigger[i].kill(true)
    }
})

export { darkMode };