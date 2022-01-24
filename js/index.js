window.onload = function () {
    $('.humburger').prop('checked', false);
    // ==================== header menu
    const navSlide = function () {
        const burger_btn = document.querySelector('.humburger');
        const menu = document.querySelector('.menu');
        // 點擊 humburger 彈出menu內容
        burger_btn.addEventListener('click', function () {
            menu.classList.toggle('menu-active');
            if ($('.menu').hasClass('menu-active')) {
                console.log('has checked');
                $('.humburger').prop('checked', true);
            } else {
                $('.humburger').prop('checked', false);
            }
        });
    }
    navSlide();
    // ==================== header-m menu
    const navSlide_m = function () {
        const burger_m_btn = document.querySelector('.humburger-m');
        const menu_m = document.querySelector('.menu-m');
        // 點擊 humburger 彈出menu內容
        burger_m_btn.addEventListener('click', function () {
            menu_m.classList.toggle('menu-m-active');
        });
    }
    navSlide_m();
    // ==================== search btn
    const search_btn = document.querySelector('.search-btn');
    const search_input = document.querySelector('.search-input');

    search_btn.addEventListener('click', function () {
        search_input.classList.toggle('search-active');
        search_input.focus();
        // 如果有active 文字就顯示，不然就消失
        if ($('.search-input').hasClass('search-active')) {
            $('.search-input').css('opacity', '1');
        } else {
            $('.search-input').css('opacity', '0');
        }
    });
    // ==================== header-m search btn
    const search_btn_m = document.querySelector('.search-m-btn');
    const search_input_m = document.querySelector('.search-m-input');

    search_btn_m.addEventListener('click', function () {
        search_input_m.classList.toggle('search-m-active');
        search_input_m.focus();
        if ($('.search-m-input').hasClass('search-m-active')) {
            $('.search-m-input').css('opacity', '1');
        } else {
            $('.search-m-input').css('opacity', '0');
        }
    });
    // ==================== header user btn
    const userBtn = document.querySelector(".user-btn");
    const signMenu = document.querySelector(".signOut-menu");

    userBtn.addEventListener('click', function () {
        signMenu.classList.toggle('signOut-dropdown-active');
    });
    // ==================== header-m user btn
    const userBtn_m = document.querySelector(".user-m-btn");
    const signMenu_m = document.querySelector(".signOut-menu-m");

    userBtn_m.addEventListener('click', function () {
        signMenu_m.classList.toggle('signOut-m-dropdown-active');
    });
    // ==================== drop
    $('.list-drop .first-list').click(function () {
        console.log($(this))
        $(this).siblings().toggle();
    })

};


//點擊禮物圖案連結至試飲包頁面
$('div#get_gift').click(function (event) {
    // console.log('hi');
    location.href = 'news_page.php';
});

//點擊icon進入購物車
$('div.shopping-card').click(function (event) {
    // console.log('hi');
    location.href = 'shoppingCart_page.php';
});