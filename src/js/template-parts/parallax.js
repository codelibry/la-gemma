import $ from "jquery";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger)

function parrallax_images() {
    $(".parallax-img-wrapper").each(function(){
        let img = $(this).find('.parallax-img');
        let path = $(this).data('path');
        let disabled = false;

        //responsive
        let mm = gsap.matchMedia();

        mm.add("(min-width: 991px)", () => {
        gsap.to(img ,{
            yPercent: -40,
            //stagger: 0.5,
            scrollTrigger: {
                trigger: img,
                start: 'top bottom',
                end: 'bottom top',
                // markers: true,
                scrub: true,
                // pin: true
            }
        });
        });
    });
}

export {parrallax_images}