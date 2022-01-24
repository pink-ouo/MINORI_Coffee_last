const btn = document.querySelector(".send-btn");
const widget = document.querySelector(".star-widget");
const star_grp = document.querySelectorAll('.star-grp');
const star_icon = document.querySelectorAll('.hc-star');


for (let i = 0; i < star_grp.length; i++) {
    $('.hc-star').click(function (e) {
        $(this).next("input[type='radio']").prop('checked', true);
        console.log("hello");
    });
    // console.log(star_icon);
}
