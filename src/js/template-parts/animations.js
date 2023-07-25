import $ from "jquery";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger)

function headerAnimation() {
    let timeline = gsap.timeline({defaults:{duration: .5 }});
    timeline
        .from(".header__toggle", { opacity: '0', delay: 2 , ease: 'power0' })
        .from(".header__logo", { opacity: '0', ease: 'power4' })
        .from(".header__btn", { opacity: '0', ease: 'power4' });
}

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

export {parrallax_images , headerAnimation}