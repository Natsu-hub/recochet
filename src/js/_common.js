import { gsap } from "gsap";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollToPlugin);
gsap.registerPlugin(ScrollTrigger);

export function common() {
    window.addEventListener('DOMContentLoaded', function () {
        gsap.config({ nullTargetWarn: false })

        // 電話PC時は無効
        var ua = navigator.userAgent.toLowerCase();
        var isMobile = /iphone/.test(ua) || /android(.+)?mobile/.test(ua);

        if (!isMobile) {
            document.querySelectorAll('a[href^="tel:"]').forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                });
                link.style.cursor = 'default'; // カーソルのスタイルをデフォルトに設定
                link.style.opacity = '1';      // 不透明度を1に設定
            });
        }

        // ctaボタンをクリックしたら非表示
        document.querySelector(".js-cta").addEventListener("click", function () {
            var ctaContainer = document.querySelector(".c-cta--pc");
            ctaContainer.style.opacity = "0";
            ctaContainer.style.visibility = "hidden";
        });

    })

}
