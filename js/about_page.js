const about_l_bg = document.querySelector(".hc-about-l-bg");
anime({
    // 目標
    targets: about_l_bg,
    duration: 1500,// 時間
    delay: function (el, i) {
        return 400 + 100 * i;
    },
    easing: 'easeInOutSine',
    opacity: [0, 1],
});

const about_l_img = document.querySelectorAll(".hc-img-l");
anime({
    // 目標
    targets: about_l_img,
    translateX: [-100, 0],
    duration: 1500,// 時間
    delay: function (el, i) {
        return 400 + 100 * i;
    },
    easing: 'easeInOutSine',
    opacity: [0, 1],
});
const about_r_img = document.querySelectorAll(".hc-img-r");
anime({
    // 目標
    targets: about_r_img,
    translateX: [100, 0],
    duration: 1500,// 時間
    delay: function (el, i) {
        return 400 + 100 * i;
    },
    easing: 'easeInOutSine',
    opacity: [0, 1],
});