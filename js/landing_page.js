// ------------------------------ landing page effect
// splide
document.addEventListener('DOMContentLoaded', function () {
    var splide = new Splide('.splide',{
        type   : 'loop',
        padding: '1px',
    });
    splide.mount();
});
// goTop 
$(function () {
    var topBtn = $('#pagetop');
    topBtn.hide();
    $(window).scroll(function () {
        if ($(this).stop().scrollTop() > 200) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
    topBtn.click(function () {
        $('body,html').stop().animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});
// card animation
VanillaTilt.init(document.querySelectorAll(".hc-about-list-img"), {
    max: 15,
    speed: 400
});
// animate
const header = document.querySelector(".header");
const left_bg = document.querySelector("#ldp_left_bg");
const right_page = document.querySelector("#ldp_rightSide");
const right_top_bg = document.querySelector(".hc-r-top-img");
anime({
    // 目標
    targets: header,
    translateY: [-100, 0],
    duration: 1500,// 時間
    delay: function (el, i) {
        return 400 + 100 * i;
    },
    easing: 'easeInOutQuad',
    opacity: [0, 1],
});
anime({
    // 目標
    targets: left_bg,
    translateX: [-100, 0],
    duration: 1500,// 時間
    delay: anime.stagger(200, { start: 600 }),
    easing: 'easeInOutQuad',
    opacity: [0, 1],
});
anime({
    // 目標
    targets: right_page,
    duration: 1500,// 時間
    delay: anime.stagger(200, { start: 1200 }),
    easing: 'easeInOutQuad',
    opacity: [0, 1],
});
anime({
    // 目標
    targets: right_top_bg,
    translateY: [-200, 0],
    duration: 1500,// 時間
    delay: anime.stagger(200, { start: 1600 }),
    easing: 'easeInOutQuad',
    opacity: [0, 1],
});