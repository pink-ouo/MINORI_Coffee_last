
const left_bg_all = document.querySelectorAll(".hc-left-img");
anime({
    // 目標
    targets: left_bg_all,
    translateY: ['-100%', 0],
    // height: [0, '100%'],
    duration: 1500,// 時間
    delay: function (el, i) {
        return 400 + 100 * i;
    },
    easing: 'easeInOutSine',
    opacity: [0, 1],
});