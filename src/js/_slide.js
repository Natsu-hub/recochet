import { Splide } from "@splidejs/splide";
import { AutoScroll } from "@splidejs/splide-extension-auto-scroll";

export function slide() {
    window.addEventListener('DOMContentLoaded', function () {

        const splideElements = document.getElementsByClassName('splide');

        for (let i = 0; i < splideElements.length; i++) {
            new Splide(splideElements[i]).mount();
        }

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


        if (document.querySelector(".js-slide")) {
            new Splide(".js-slide", {
              type: "loop",
              gap: "1rem",
            //   perPage: 4,
            fixedWidth:'19.375rem',
            arrows: false,
            breakpoints: {
                768: {
                    fixedWidth:'22rem',
                },
              },
              perMove: 1,
              autoplay: true,
              interval: 4000,
              pauseOnHover: true,
              pauseOnFocus: false,
              focus: 0,
              speed: 3500,
              focus: "center", // アクティブなスライドを中央にする
              updateOnMove: true, // is-activeクラスを移動前に更新する
              classes: {
                pagination: 'splide__pagination p-top-case-study__pagination',
                page      : 'splide__pagination__page p-top-case-study__page',
          },
          
            }).mount();
          }
        


       


    });
}
