<?php require_once 'db.inc.php'; ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINORI coffee</title>
    <!-- bootstrap@4.6 -->
    <link rel="stylesheet" href="./lib/bootstrap.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="./lib/awesome.all.min.css">
    <!--jquery UI-->
    <link rel="stylesheet" href="./lib/jquery-ui.css">
    <!-- swiper -->
    <link rel="stylesheet" href="./lib/swiper-bundle.min.css">
    <!-- splide 3.6.9 js -->
    <link rel="stylesheet" href="./lib/splide.min.css">
    <!-- css -->
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/landing_page.css">
</head>

<?php require_once 'tpl/header.inc.php' ?>

<!-- main page -->
<div class="container-fluid main-page">
    <div class="row">
        <!-- leftSide page -->
        <div class="left-side" style="background-color:black;">
            <div class="left-side-bg" id="ldp_left_bg" style="background: url(./img/main_left.jpg) no-repeat; background-size: cover;">
                <!-- ======================================================================================= add content -->
            </div>
        </div>
        <!-- rightSide page -->
        <div class="right-side" id="ldp_rightSide">
            <div class="right-side-content" style="background: url(./img/bg-dark.png) repeat;">
                <!-- right header -->
                <div class="right-side-header">
                    <!-- main icon -->
                    <?php require_once 'tpl/mainicon.inc.php' ?>
                    <!-- sign out -->
                    <?php require_once 'tpl/signout.inc.php' ?>
                </div>
                <!-- ================================================= 新頁面加入 -->
                <div class="hc-landing-page">
                    <div class="landing-page-content" style="background: url(./img/bg-dark.png) repeat;">
                        <div class="hc-first-page hc-r-top-img" style="background: url(./img/main_right.jpg) no-repeat; background-size: cover;">
                        </div>
                        <div class="hc-first-page-bottom d-flex justify-content-center align-items-center">
                            <div class="hc-first-page-bottom-control">
                                実りある
                            </div>
                        </div>
                        <!-- main-page -->
                        <div class="hc-main-page">
                            <div class="hc-main-container">
                                <!-- about -->
                                <div class="hc-main-about">
                                    <div class="hc-about-container hc-about-bg">
                                        <!-- title -->
                                        <div class="hc-main-title-control d-flex flex-row-reverse">
                                            <div class="hc-main-title d-flex">
                                                <div class="hc-more"><span>more</span>
                                                    <div class="hc-line-control d-flex align-items-center">
                                                        <div class="hc-line"></div>
                                                        <div class="hc-more-icon"><a href="javascript:;">
                                                                <i class="fas fa-angle-right"></i>
                                                            </a></div>
                                                    </div>
                                                </div>
                                                <div class="hc-text"><a href="about_page.php">
                                                        <h4>關於我們</h4>
                                                    </a></div>
                                            </div>
                                        </div>
                                        <div class="hc-main-title-en d-flex flex-row-reverse mb-4">ABOUT US</div>
                                        <!-- main content -->
                                        <div class="hc-about-content-ldp d-flex flex-row-reverse mb-4">
                                            <div class="hc-about-content-control-ldp">
                                                <div class="hc-about-content-title-ldp">
                                                    <h5>淬鍊過後的美好，讓生活更豐富充實</h5>
                                                </div>
                                                <div class="hc-about-content-p">
                                                    <p> MINORI源自日文実りある，実り(みのり)有充實、豐富的意思，希望透過每一杯咖啡的傳遞，啟發並滋潤人們的心靈，把全世界最好咖啡分享給你們。
                                                    </p>
                                                    <p> 2020年四位愛好咖啡的同好共同創立於台灣，嚴選咖啡風味與品質把關，提供不同產區的精品咖啡豆，讓對咖啡挑嘴的您，可以一次滿足您的需求。
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hc-about-lists d-flex">
                                            <div class="hc-about-list-ldp">
                                                <div class="hc-about-list-img">
                                                    <img src="./img/insist_1.jpg" alt="">
                                                </div>
                                                <span>烘豆師精選配方咖啡豆</span>
                                            </div>
                                            <div class="hc-about-list-ldp">
                                                <div class="hc-about-list-img"><img src="./img/insist_2.jpg" alt="">
                                                </div>
                                                <span>天然無污染的新鮮食材</span>
                                            </div>
                                            <div class="hc-about-list-ldp">
                                                <div class="hc-about-list-img" style="background-size: cover;"><img src="./img/insist_3.jpg" alt="">
                                                </div>
                                                <span>在家就能品嘗嚴選咖啡</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- news -->
                                <div class="hc-main-news">
                                    <div class="hc-news-container">
                                        <!-- title -->
                                        <div class="hc-main-title-control d-flex flex-row-reverse">
                                            <div class="hc-main-title d-flex">

                                                <div class="hc-text"><a href="javascript:;">
                                                        <h4>最新消息</h4>
                                                    </a></div>
                                            </div>
                                        </div>
                                        <div class="hc-main-title-en d-flex flex-row-reverse mb-4">NEWS</div>
                                        <!-- box -->
                                        <div class="hc-box-title-ldp" style="background: url(./img/bg-gold.jpg);">
                                        </div>
                                        <!-- cards -->
                                        <div class="hc-news-cards d-flex justify-content-center align-item-center">
                                            <!-- card 01 -->
                                            <div class="hc-card">
                                                <div class="hc-card-control d-flex flex-column">
                                                    <div class="hc-child-card1 hc-child-card hc-first-card hc-news-bg-01">
                                                        <a href="javascript:;"><span>咖啡專欄</span> </a>
                                                    </div>
                                                    <div class="hc-child-card2 hc-child-card hc-news-bg-02">
                                                        <a href="news_page.php"><span>試飲包</span> </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card 02 -->
                                            <div class="hc-card hc-mid-card">
                                                <div class="hc-card-control d-flex flex-column">
                                                    <div class="hc-child-card2 hc-child-card hc-first-card hc-news-bg-03">
                                                        <a href="http://localhost/MINORI_Coffee_last/beanList_page.php?cat_id=1&sub_cat_id=13"><span>新品上市</span> </a>
                                                    </div>
                                                    <div class="hc-child-card1 hc-child-card hc-news-bg-04">
                                                        <a href="classpage.php"><span>最新課程</span> </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card 03 -->
                                            <div class="hc-card">
                                                <div class="hc-card-control d-flex flex-column">
                                                    <div class="hc-child-card1 hc-child-card hc-first-card hc-news-bg-05">
                                                        <a href="javascript:;"><span>優惠活動</span> </a>
                                                    </div>
                                                    <div class="hc-child-card2 hc-child-card hc-news-bg-06">
                                                        <a href="http://localhost/MINORI_Coffee_last/beanList_page.php?cat_id=1&sub_cat_id=9"><span>熱銷商品</span> </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- products 1-->
                                <div class="hc-main-products">
                                    <div class="hc-products-container">
                                        <!-- title -->
                                        <div class="hc-main-title-control d-flex flex-row-reverse">
                                            <div class="hc-main-title d-flex">
                                                <div class="hc-more"> <span>more</span>
                                                    <div class="hc-line-control d-flex align-items-center">
                                                        <div class="hc-line"></div>
                                                        <div class="hc-more-icon"><a href="javascript:;">
                                                                <i class="fas fa-angle-right"></i>
                                                            </a></div>
                                                    </div>
                                                </div>
                                                <div class="hc-text"><a href="featured.php">
                                                        <h4>嚴選商品</h4>
                                                    </a></div>
                                            </div>
                                        </div>
                                        <div class="hc-main-title-en d-flex flex-row-reverse mb-4">COFFEE</div>
                                        <!-- box -->
                                        <div class="hc-box-title-ldp" style="background: url(./img/bg-gold.jpg);">
                                        </div>
                                        <!-- product card -->
                                        <div class="hc-products-cards">
                                            <div class="hc-pds-card-control d-flex">
                                                <!-- card 1 -->
                                                <div class="hc-pds">
                                                    <div class="hc-pds-card">
                                                        <div class="hc-pds-img">
                                                            <a href="http://localhost/MINORI_Coffee_last/beanList_detail_page.php?cat_id=1&sub_cat_id=9&prod_id=5"><img src="./img/beans_s_005.jpg" alt=""></a>
                                                        </div>
                                                        <div class="hc-card-content-container">
                                                            <div class="hc-card-content-title">
                                                                <h5>碧雅莊園 藝妓</h5>
                                                            </div>
                                                            <div class="hc-card-content-price">
                                                                <span>NT$1,399~</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- card 2 -->
                                                <div class="hc-pds">
                                                    <div class="hc-pds-card hc-pds-card-mid-ldp">
                                                        <div class="hc-pds-img">
                                                            <a href="http://localhost/MINORI_Coffee_last/beanList_detail_page.php?cat_id=1&sub_cat_id=16&prod_id=34"><img src="./img/beans_s_034.jpg" alt=""></a>
                                                        </div>
                                                        <div class="hc-card-content-container">
                                                            <div class="hc-card-content-title">
                                                                <h5>凱薩路易斯 火山藝伎</h5>
                                                            </div>
                                                            <div class="hc-card-content-price">
                                                                <span>NT$1,198~</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- card 3 -->
                                                <div class="hc-pds">
                                                    <div class="hc-pds-card">
                                                        <div class="hc-pds-img">
                                                            <a href="http://localhost/MINORI_Coffee_last/beanList_detail_page.php?cat_id=1&sub_cat_id=13&prod_id=9"><img src="./img/beans_s_009.jpg" alt=""></a>
                                                        </div>
                                                        <div class="hc-card-content-container">
                                                            <div class="hc-card-content-title">
                                                                <h5>巨石莊園 藝妓</h5>
                                                            </div>
                                                            <div class="hc-card-content-price">
                                                                <span>NT$599~</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- products 2-->
                                <div class="hc-main-products">
                                    <div class="hc-products-container">
                                        <!-- title -->
                                        <div class="hc-main-title-control d-flex flex-row-reverse">
                                            <div class="hc-main-title d-flex">
                                                <div class="hc-more"> <span>more</span>
                                                    <div class="hc-line-control d-flex align-items-center">
                                                        <div class="hc-line"></div>
                                                        <div class="hc-more-icon"><a href="javascript:;">
                                                                <i class="fas fa-angle-right"></i>
                                                            </a></div>
                                                    </div>
                                                </div>
                                                <div class="hc-text"><a href="beans_hot.php">
                                                        <h4>熱銷排行</h4>
                                                    </a></div>
                                            </div>
                                        </div>
                                        <div class="hc-main-title-en d-flex flex-row-reverse mb-4">COFFEE</div>

                                        <!-- product card -->
                                        <div class="hc-products-cards">
                                            <div class="hc-pds-card-control d-flex">
                                                <!-- card 1 -->
                                                <div class="hc-pds">
                                                    <div class="hc-pds-card">
                                                        <div class="hc-pds-img">
                                                            <a href="http://localhost/MINORI_Coffee_last/beanList_detail_page.php?cat_id=1&sub_cat_id=13&prod_id=2"><img src="./img/beans_s_002.jpg" alt=""></a>
                                                        </div>
                                                        <div class="hc-card-content-container">
                                                            <div class="hc-card-content-title">
                                                                <h5>花神</h5>
                                                            </div>
                                                            <div class="hc-card-content-price">
                                                                <span>NT$349~</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- card 2 -->
                                                <div class="hc-pds">
                                                    <div class="hc-pds-card hc-pds-card-mid-ldp">
                                                        <div class="hc-pds-img">
                                                            <a href="http://localhost/MINORI_Coffee_last/beanList_detail_page.php?cat_id=1&sub_cat_id=11&prod_id=4"><img src="./img/beans_s_004.jpg" alt=""></a>
                                                        </div>
                                                        <div class="hc-card-content-container">
                                                            <div class="hc-card-content-title">
                                                                <h5>吉格薩</h5>
                                                            </div>
                                                            <div class="hc-card-content-price">
                                                                <span>NT$399</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- card 3 -->
                                                <div class="hc-pds">
                                                    <div class="hc-pds-card">
                                                        <div class="hc-pds-img">
                                                            <a href="http://localhost/MINORI_Coffee_last/beanList_detail_page.php?cat_id=1&sub_cat_id=16&prod_id=13">
                                                                <img src="./img/beans_s_013.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="hc-card-content-container">
                                                            <div class="hc-card-content-title">
                                                                <h5>斯里蘭卡的調酒師</h5>
                                                            </div>
                                                            <div class="hc-card-content-price">
                                                                <span>NT$519~</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- course -->
                                <div class="hc-main-courses">
                                    <div class="hc-courses-container">
                                        <!-- title -->
                                        <div class="hc-main-title-control d-flex flex-row-reverse">
                                            <div class="hc-main-title d-flex">
                                                <div class="hc-more"> <span>more</span>
                                                    <div class="hc-line-control d-flex align-items-center">
                                                        <div class="hc-line"></div>
                                                        <div class="hc-more-icon"><a href="javascript:;">
                                                                <i class="fas fa-angle-right"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="hc-text"><a href="javascript:;">
                                                        <h4>課程資訊</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hc-main-title-en d-flex flex-row-reverse mb-4">COURSE</div>
                                        <!-- box -->
                                        <div class="hc-box-title-ldp" style="background: url(./img/bg-gold.jpg);">
                                        </div>
                                        <!-- carousel -->
                                        <div class="hc-carousel">
                                            <div class="hc-carousel-container">
                                                <!-- ============================ slide-->
                                                <div class="splide">
                                                    <div class="splide__track">
                                                        <ul class="splide__list">
                                                            <!-- list 01 -->
                                                            <li class="splide__slide hc-slide">
                                                                <div class="hc-slide-control">
                                                                    <div class="hc-slide-img">
                                                                        <img src="./img/course_001.jpg" alt="">
                                                                    </div>
                                                                    <div class="hc-slide-content">
                                                                        <div class="slide-container">
                                                                            <div class="slide-content-top-num">
                                                                                <span>01</span>
                                                                                <div class="line-sp"></div>
                                                                                <span>03</span>
                                                                            </div>
                                                                            <div class="slide-content-card">
                                                                                <a href="classpage.php">
                                                                                    <h5>個人課程</h5>
                                                                                </a>
                                                                                <p>拉花、咖啡入門、手沖入門，愛鑽研咖啡知識的您，歡迎來與我們交流。
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <!-- list 02 -->
                                                            <li class="splide__slide hc-slide">
                                                                <div class="hc-slide-control">
                                                                    <div class="hc-slide-img">
                                                                        <img src="./img/course_002.jpg" alt="">
                                                                    </div>
                                                                    <div class="hc-slide-content">
                                                                        <div class="slide-container">
                                                                            <div class="slide-content-top-num">
                                                                                <span>02</span>
                                                                                <div class="line-sp"></div>
                                                                                <span>03</span>
                                                                            </div>
                                                                            <div class="slide-content-card">
                                                                                <h5>團體課程</h5>
                                                                                <p>10人以上即可團體報名，優惠更多，快和三五好友一同參與！
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <!-- list 03 -->
                                                            <li class="splide__slide hc-slide">
                                                                <div class="hc-slide-control">
                                                                    <div class="hc-slide-img">
                                                                        <img src="./img/course_003.jpg" alt="">
                                                                    </div>
                                                                    <div class="hc-slide-content">
                                                                        <div class="slide-container">
                                                                            <div class="slide-content-top-num">
                                                                                <span>03</span>
                                                                                <div class="line-sp"></div>
                                                                                <span>03</span>
                                                                            </div>
                                                                            <div class="slide-content-card">
                                                                                <h5>企業包班</h5>
                                                                                <p>企業福利首選，提升企業凝聚力的最佳選擇!
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- ============================ -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ================================================= -->
                <!-- footer -->
                <div class="footer" style="background: url(./img/footer_bg.jpg) no-repeat; background-size:cover">
                    <div class="footer_container">
                        <div div class="col-lg-12 footer-content">
                            <div class="footer-logo" style="width:20%">
                                <a href="landing_page.php"><img src="./img/logo.png" alt="" style="width: 100%;"></a>
                            </div>
                            <ul class="text-center d-flex flex-column ">
                                <li class="link_list">
                                    <a href="about_page.php">關於我們</a>
                                </li>
                                <li class="link_list">
                                    <a href="javascript:;">最新消息</a>
                                </li>
                                <?php if (!isset($_SESSION['name'])) { ?>
                                    <li class="link_list">
                                        <a href='loginSignup.php'>會員中心</a>
                                    </li>
                                <?php } else { ?>
                                    <li class="link_list">
                                        <a href='memberData.php'>會員中心</a>
                                    </li>
                                <?php } ?>
                                <li class="link_list">
                                    <a href="coffeemap.php">咖啡地圖</a>
                                </li>
                                <li class="link_list">
                                    <a href="faq.php">常見問題</a>
                                </li>
                            </ul>
                            <ul class="text-center d-flex flex-column ">
                                <li class="link_list">
                                    <a href="javascript:;">所有商品</a>
                                </li>
                                <li class="link_list" style="font-size:12px;">
                                    <a href='http://localhost/MINORI_Coffee_last/beanList_page.php?cat_id=1'>豆單</a>
                                </li>
                                <li class="link_list" style="font-size:12px;">
                                    <a href="featured.php">嚴選商品</a>
                                </li>
                                <li class="link_list" style="font-size:12px;">
                                    <a href="beans_hot.php">熱銷排行</a>
                                </li>
                                <li class="link_list" style="font-size:12px;">
                                    <a href="coffeeAccessories_page.php">咖啡器材</a>
                                </li>
                            </ul>
                            <ul class="text-center d-flex flex-column ">
                                <li class="link_list">
                                    <a href="javascript:;">課程資訊</a>
                                </li>
                                <li class="link_list" style="font-size:12px;">
                                    <a href="companyclass.php">企業包班</a>
                                </li>
                                <li class="link_list" style="font-size:12px;">
                                    <a href="groupclass.php">團體課程</a>
                                </li>
                                <li class="link_list" style="font-size:12px;">
                                    <a href="classpage.php">個人課程</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-bottom" style="font-size:10px;">
                            <p>版權所有 © minori. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
                <!-- footer-m -->
                <footer class="footer-m" style="background: url(./img/footer_bg.jpg) no-repeat;">
                    <div class="footer-m-content">
                        <div class="col-md-6 col-12 footer-img pt-5 pb-5">
                            <div class="img-container" style="width: 25%; margin: 0 auto;">
                                <a href="landing_page.php"><img src="./img/logo.png" alt="" style="width: 100%;"></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 d-flex text-center pb-5">
                            <div class="col">
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2">
                                        <a href="about_page.php" class="nav-link p-0 text-white">關於我們</a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a href="#" class="nav-link p-0 text-white">最新消息</a>
                                    </li>
                                    <?php if (!isset($_SESSION['name'])) { ?>
                                        <li class="nav-item mb-2">
                                            <a href="loginSignup.php" class="nav-link p-0 text-white">會員中心</a>
                                        </li>
                                    <?php } else { ?>
                                        <li class="nav-item mb-2">
                                            <a href="memberData.php" class="nav-link p-0 text-white">會員中心</a>
                                        </li>
                                    <?php } ?>
                                    <li class="nav-item mb-2">
                                        <a href="coffeemap.php" class="nav-link p-0 text-white">咖啡地圖</a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a href="faq.php" class="nav-link p-0 text-white">常見問題</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">所有商品</a></li>
                                    <li class="nav-item mb-2"><a href="http://localhost/MINORI_Coffee_last/beanList_page.php?cat_id=1" class="nav-link p-0 text-white" style="font-size: 12px;">豆單</a></li>
                                    <li class="nav-item mb-2"><a href="featured.php" class="nav-link p-0 text-white" style="font-size: 12px;">嚴選商品</a></li>
                                    <li class="nav-item mb-2"><a href="beans_hot.php" class="nav-link p-0 text-white" style="font-size: 12px;">熱銷排行</a></li>
                                    <li class="nav-item mb-2"><a href="coffeeAccessories_page.php" class="nav-link p-0 text-white" style="font-size: 12px;">咖啡器材</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">課程資訊</a></li>
                                    <li class="nav-item mb-2"><a href="companyclass.php" class="nav-link p-0 text-white" style="font-size: 12px;">企業包班</a></li>
                                    <li class="nav-item mb-2"><a href="groupclass.php" class="nav-link p-0 text-white" style="font-size: 12px;">團體課程</a></li>
                                    <li class="nav-item mb-2"><a href="classpage.php" class="nav-link p-0 text-white" style="font-size: 12px;">個人課程</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-m-bottom d-flex justify-content-center" style="color: #fff; font-size: 12px;">
                        <p>版權所有 © minori. All Rights Reserved.</p>
                    </div>
                </footer>
                <!-- goTop -->
                <span class="hc-goTop" id="pagetop" style="display: block;"><a href="#pages">
                        <i class="fas fa-chevron-up hc-icon-top"></i>
                    </a>
                </span>
            </div>
        </div>
    </div>
    <!--//////////////////////////////////////// script -->
    <!-- jQ -->
    <script src="./lib/jquery-3.6.0.min.js"></script>
    <!-- animate -->
    <script src="./lib/anime.min.js"></script>
    <!-- jquery UI-->
    <script src="./lib/jquery-ui.min.js"></script>
    <!-- fontawesome -->
    <script src="./lib/awesome.all.min.js"></script>
    <!-- bootstrap@4.6 -->
    <script src="./lib/bootstrap.bundle.min.js"></script>
    <!-- swiper -->
    <script src="./lib/swiper-bundle.min.js"></script>
    <!-- splide 3.6.9 js -->
    <script src="./lib/splide.min.js"></script>
    <!-- vanilla js -->
    <script src="./lib/vanilla-tilt.js"></script>
    <!-- sweetalert2 -->
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <script src="./lib/sweetalert2.all.min.js"></script>


    <!-- js -->
    <script src="./js/index.js"></script>
    <script src="./js/login-and-signup.js"></script>
    <script src="./js/landing_page.js"></script>

    </body>

</html>