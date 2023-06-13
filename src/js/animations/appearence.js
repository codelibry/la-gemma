import $ from 'jquery';
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollSmoother } from "gsap/ScrollSmoother";
import { SplitText } from "gsap/SplitText";
import { CustomEase } from "gsap/CustomEase";


gsap.registerPlugin(ScrollTrigger, CustomEase, ScrollSmoother, SplitText);


$(document).ready(function () {
    const smoother = ScrollSmoother.create({
        content: "#main",
        smooth: 0,
        effects: true
    });

    //bg parallax
    smoother.effects(".parallax-bg", { speed: 0.7 });
    smoother.effects(".bg-parallax", { speed: 'auto' });


    //texts
    const titles = document.querySelectorAll(".title-appear");

    titles.forEach(title => {

        title.split = new SplitText(title, {
            type: "lines,words",
            linesClass: "split-line",
            wordsClass: "split-word"
        });

        // Set up the anim
        title.anim = gsap.set(title.split.words, {
            yPercent: 100,
            opacity: 0
        });
    });

    const texts = document.querySelectorAll(".text-appear p");

    texts.forEach(text => {

        text.split = new SplitText(text, {
            type: "lines",
            linesClass: "split-line",
        });
        $(text).addClass('splitted');
        $(text).find('.split-line').wrap('<div class="line-wrapper">');

        // Set up the anim
        text.anim = gsap.set(text.split.lines, {
            yPercent: 100,
        });
    });

    var buttons, newContent = "";
    // on stock tous les objets du DOM ayant la classe "split-character" dans un tableau "elements"
    buttons = document.getElementsByClassName('button');
    // pour chaque objet du DOM ayant la classe "split-character"
    for (var button = 0; button < buttons.length; ++button) {
        // on initialise la variable qui va contenir le nouveau contenu en ouvrant le span qui contiendra le premier mot
        newContent += "<span>"
        // pour chaque caractère existant dans cet objet
        for (var character = 0; character < buttons[button].innerText.length; character++) {
            // si c'est un caractère on le met dans un span
            if (buttons[button].innerText[character] !== " ") {
                // Pour que chaque lettre apparaisse après l'autre, on ajoute un délai de 35 millisecondes entre chacune d'elle. La deuxième partie de l'animation devant se jouer après la première, on ajoute aussi un délai initial de 1s.
                newContent += "<span style='animation-delay: " + 0.035 * character + "s, " + (0.035 * character + 0.6) + "s'>" + buttons[button].innerText[character] + "</span>";
            }
            // si c'est un espace vide c'est la fin d'un mot, on ferme le span qui englobe ce mot et on ouvre le span du mot suivant (tout en gardant l'espace)
            else {
                newContent += "</span>&nbsp;<span>";
            }
        }
        // on ferme le span du dernier mot
        newContent += "</span>"
        // on remplace le contenu actuel par notre nouveau contenu
        buttons[button].innerHTML = newContent;
        // on réinitialise la variable newContent puisqu'elle va accueillir le contenu de l'objet suivant dans la boucle
        newContent = "";
    }


    function appearenceAnimations() {
        $('.animate').each(function () {
            let el = $(this);
            let disabled = false;
            gsap.from(el, {
                scrollTrigger: {
                    trigger: el,
                    pin: false,
                    start: "top 80%",
                    end: "bottom 20%",
                    scrub: 1,
                    markers: false,
                    onToggle: function (self) {
                        if (self.isActive && !disabled) {

                            el.addClass('in');

                            self.disable();
                            disabled = true;
                        } else {
                            self.disable();
                        }
                    },
                },
            });
        });

        //titles appearing
        const titles = document.querySelectorAll(".title-appear");

        titles.forEach(title => {


            title.anim = gsap.to(title.split.words, {
                scrollTrigger: {
                    trigger: title,
                    toggleActions: "play",
                    start: "top 80%",
                    markers: false,
                },
                duration: 0.4,
                ease: "circ.out",
                yPercent: 0,
                opacity: 1,
                stagger: 0.1,
            });
        });

        const texts = document.querySelectorAll(".text-appear p");

        texts.forEach(text => {
            // Set up the anim
            text.anim = gsap.to(text.split.lines, {
                scrollTrigger: {
                    trigger: text,
                    toggleActions: "play",
                    start: "top 80%",
                    markers: false,
                },
                duration: 0.4,
                ease: "circ.out",
                yPercent: 0,
                stagger: 0.1,
            });
        });

    }

    //loader
    const loader = $('.loader');
    loader.anim = gsap.fromTo(loader,
        {
            opacity: 1
        },
        {
            duration: 0.5,
            delay: 1.5,
            ease: "circ.out",
            opacity: 0,
            onComplete: function () {
                loader.hide();
                $('body').removeClass('not-loaded').addClass('site-loaded');
                appearenceAnimations();
            }
        }
    );


});
