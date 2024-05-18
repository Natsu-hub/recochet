import { Splide } from "@splidejs/splide";
import { AutoScroll } from "@splidejs/splide-extension-auto-scroll";

export function slide() {
    window.addEventListener('DOMContentLoaded', function () {

        const splideElements = document.getElementsByClassName('splide');

        for (let i = 0; i < splideElements.length; i++) {
            new Splide(splideElements[i]).mount();
        }

        //FVの流れる人物画像
        if (document.querySelector(".js-slide-img")) {
            const slideImgMv = new Splide(".js-slide-img", {
                fixedWidth: '14.125rem',
                type: "loop",
                gap: '1.25rem',
                focus: 0,
                pagination: false,
                arrows: false,
                breakpoints: {
                    768: {
                        fixedWidth: '12.5625rem',
                        gap: '1.125rem',
                    },
                },
                autoScroll: {
                    speed: .5,
                    pauseOnHover: false,
                    pauseOnTouch: false,
                },
            });
            slideImgMv.mount({ AutoScroll });
        }
        


       


    });
}
