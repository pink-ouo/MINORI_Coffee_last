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
    <link rel="stylesheet" href="./css/about_page.css">
</head>

<?php require_once 'tpl/header.inc.php' ?>

<!-- main page -->
<div class="container-fluid main-page">
    <div class="row">
        <!-- leftSide page -->
        <div class="left-side">
            <!-- ================================================= 新頁面加入 -->
            <div class="left-side-push100" style="background-color: black;">
                <div class="hc-left-side-bg hc-about-l-bg" style="background: url('./img/about_l_page_01.jpg') no-repeat ; background-size: cover;">
                    <!-- ======================================================================================= add content -->
                    <!-- ================================================= -->
                </div>
            </div>
            <!-- ================================================= -->
        </div>
        <!-- rightSide page -->
        <div class="right-side" style="overflow: hidden;">
            <div class="right-side-content" style="background: url(./img/bg-dark.png) repeat;">
                <!-- right header -->
                <div class="right-side-header">
                    <!-- main icon -->
                    <?php require_once 'tpl/mainicon.inc.php' ?>
                    <!-- sign out -->
                    <?php require_once 'tpl/signout.inc.php' ?>
                </div>
                <!-- ================================================= 新頁面加入 -->
                <div class="hc-about-section">
                    <!-- box -->
                    <div class="hc-about-box-title" style="background: url(./img/bg-gold.jpg);">
                    </div>
                    <!-- about section -->
                    <div class="hc-about-section-container hc-shopping-bg">
                        <!-- page title -->
                        <div class="hc-page-title">
                            <a href="javascript:;" class="hc-page-title-menu">
                                <span>首頁</span>
                            </a>
                            <span>/</span>
                            <a href="javascript:;" class="hc-page-title-menu">
                                <span>關於我們</span>
                            </a>
                        </div>
                        <!-- about -->
                        <div class="hc-about-section-content">
                            <div class="hc-section-products-content-container">
                                <div class="hc-main-title-control d-flex justify-content-between">
                                    <!-- title -->
                                    <div class="hc-main-title-en d-flex mb-4">ABOUT US</div>
                                    <!-- back -->
                                    <!-- <div class="hc-back">
                                        <div class="hc-back-icon-control">
                                            <a href="landing_page.html">
                                                <div>
                                                    <span class="hc-back-text">BACK to MINORI</span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="hc-back-line"></div>
                                                    <div class="icon hc-back-icon">
                                                        <i class="fas fa-chevron-right"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div> -->
                                </div>
                                <!-- products content -->
                                <div class="hc-products-grp">
                                    <div class="hc-products-grp-control d-flex justify-content-center">
                                        <!-- 關於我們 -->
                                        <div class="hc-about-grp">
                                            <!-- first -->
                                            <div class="hc-about-first-section">
                                                <div class="hc-about-img hc-img-l col-6">
                                                    <img src="./img/about_r_page_02.jpg" alt="">
                                                </div>
                                                <div class="hc-about-content col-6 hc-about-content-r">
                                                    <h4 class="hc-about-content-title">我們的故事</h4>
                                                    <p><span>2020年</span>在台灣集結了四位愛好咖啡的同好，共同創立了MINORI coffee，立志把最完美的咖啡提供給您。
                                                        這塊土地上愛好咖啡的人十分眾多，希望MINORI能在眾多品牌中脫穎而出，帶給咖啡愛好者更完美的咖啡感官體驗。
                                                        因此從生豆採購、烘焙到包裝設計，我們都親自操刀把關！打造充實、豐富的咖啡體驗，透過每一杯咖啡的傳遞，啟發並滋潤人們的心靈，滋潤生活的每一天。
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- scroll -->
                                            <div class="hc-about-scroll">
                                                <div class="hc-about-scroll-img">
                                                    <img src="./img/about_icon.svg" alt="">
                                                </div>
                                                <div class="hc-about-scroll-icon">
                                                    <i class="fas fa-chevron-down"></i>
                                                </div>
                                            </div>
                                            <!-- second -->
                                            <div class="hc-about-second-section">
                                                <!-- part1 -->
                                                <div class="hc-about-second hc-about-second-zindex">
                                                    <div class="hc-about-second-grp">
                                                        <div class="hc-about-content col-6 hc-about-content-l">
                                                            <h4 class="hc-about-content-title">烘豆師精選配方咖啡豆</h4>
                                                            <p>
                                                                MINORI
                                                                注重咖啡品質及品味，在世界各地尋找高質量的咖啡豆，堅持味道絕不妥協，採用專業的技術烘焙，將每一種咖啡豆的最佳風味呈現在您眼前，是對執著咖啡品味的人最佳選擇。
                                                            </p>
                                                            <p>
                                                                烘豆師:「每一果實都是獨特生命，有獨特的風采與滋味，誠如我們每一個人一樣。在你所屬的季節裡，綻放你最美最甜的模樣吧！」
                                                            </p>
                                                        </div>
                                                        <div class="hc-about-img hc-img-r col-6">
                                                            <img src="./img/about_r_page_03.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="hc-about-box hc-about-box-r">
                                                        <img src="./img/bg-gold.jpg" alt="">
                                                    </div>
                                                </div>
                                                <!-- part2 -->
                                                <div class="hc-about-second hc-about-second-zindex">
                                                    <div class="hc-about-second-grp">
                                                        <div class="hc-about-img hc-img-l col-6">
                                                            <img src="./img/about_r_page_04.jpg" alt="">
                                                        </div>
                                                        <div class="hc-about-content col-6 hc-about-content-r">
                                                            <h4 class="hc-about-content-title">天然無污染的新鮮食材</h4>
                                                            <p>
                                                                產地，土壤、氣候、海拔高度都是形塑咖啡味道最根本的元素，MINORI嚴選絕佳產地與咖啡豆栽植方法，以及咖啡豆的採摘過程，嚴格的品質控管，保證送到您手中咖啡豆都是最新鮮的。
                                                            </p>
                                                        </div>

                                                    </div>
                                                    <div class="hc-about-box hc-about-box-l">
                                                        <img src="./img/bg-gold.jpg" alt="">
                                                    </div>
                                                </div>
                                                <!-- part3 -->
                                                <div class="hc-about-second hc-about-second-zindex">
                                                    <div class="hc-about-second-grp">
                                                        <div class="hc-about-content col-6 hc-about-content-l">
                                                            <h4 class="hc-about-content-title">在家就能品嘗嚴選咖啡</h4>
                                                            <p>
                                                                只要有簡單的咖啡器材，在家就能享受MINORI咖啡豆所帶來極品的味道，不再需要出遠門，也能開啟美好的一天。
                                                            </p>
                                                        </div>
                                                        <div class="hc-about-img hc-img-r col-6">
                                                            <img src="./img/about_r_page_05.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="hc-about-box hc-about-box-r">
                                                        <img src="./img/bg-gold.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ================================================= -->

                <?php require_once 'tpl/foot.inc.php' ?>