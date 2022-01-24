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
    <link rel="stylesheet" href="./css/news_page.css">
</head>

<?php require_once 'tpl/header.inc.php' ?>

<!-- main page -->
<div class="container-fluid main-page">
    <div class="row">
        <!-- leftSide page -->
        <div class="left-side">
            <!-- ================================================= 新頁面加入 -->
            <div class="left-side-push100">
                <div class="hc-left-side-bg" style="background-color: black; background-size: cover;">
                    <!-- ======================================================================================= add content -->
                    <!-- ============================= img effect -->
                    <div class="hc-left-img-grp d-flex">
                        <div class="hc-left-img hc-left-img-first">
                            <img src="./img/beans_l_page_001.jpg" alt="">
                        </div>
                        <div class="hc-left-img hc-left-img-second">
                            <img src="./img/beans_l_page_002.jpg" alt="">
                        </div>
                        <div class="hc-left-img hc-left-img-third">
                            <img src="./img/beans_l_page_003.jpg" alt="">
                        </div>
                    </div>
                    <!-- ============================= -->
                </div>
            </div>
            <!-- ================================================= -->
        </div>
        <!-- rightSide page -->
        <div class="right-side">
            <div class="right-side-content" style="background: url(./img/bg-dark.png) repeat;">
                <!-- right header -->
                <div class="right-side-header">
                    <!-- main icon -->
                    <?php require_once 'tpl/mainicon.inc.php' ?>
                    <!-- sign out -->
                    <?php require_once 'tpl/signout.inc.php' ?>
                </div>
                <!-- ================================================= 新頁面加入 -->
                <div class="hc-news-products">
                    <!-- box -->
                    <div class="hc-box-title-news" style="background: url(./img/bg-gold.jpg);">
                    </div>
                    <!-- news products -->
                    <div class="hc-news-products-container hc-shopping-bg">
                        <!-- page title -->
                        <div class="hc-page-title">
                            <a href="landing_page.php" class="hc-page-title-menu">
                                <span>首頁</span>
                            </a>
                            <span>/</span>
                            <a href="javascript:;" class="hc-page-title-menu">
                                <span>最新消息</span>
                            </a>
                            <span>/</span>
                            <a href="javascript:;" class="hc-page-title-menu">
                                <span>試飲包</span>
                            </a>
                        </div>
                        <!-- bean products -->
                        <div class="hc-coffee-products-content">
                            <div class="hc-coffee-products-content-container">
                                <div class="hc-main-title-control d-flex justify-content-between">
                                    <!-- title -->
                                    <div class="hc-main-title-en d-flex mb-4">NEWS</div>
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
                                <div class="hc-products-grp-news">
                                    <!-- product grp 1 -->
                                    <div class="hc-products-grp-control-news d-flex justify-content-center">
                                        <!-- 免費試飲包 -->
                                        <div class="hc-news-section">
                                            <div class="hc-products-title">
                                                <h5>免費試飲包</h5>
                                            </div>
                                            <div class="hc-products-question-grp">
                                                <div class="hc-products-question">
                                                    <div class="hc-products-second-title">
                                                        琳瑯滿目的豆子讓您不知如何選擇?
                                                    </div>
                                                    <p>別擔心!我們有提供免費試飲包，可以體驗完再購買喜歡的豆子。</p>
                                                </div>
                                                <div class="hc-products-question">
                                                    <div class="hc-products-third-title d-flex align-items-center">
                                                        <span class="hc-dot"></span>
                                                        <div class="hc-products-content-news">
                                                            加入會員將獲得乙次 <span>免費試飲包</span>
                                                        </div>
                                                    </div>
                                                    <div class="hc-products-third-title d-flex align-items-center">
                                                        <span class="hc-dot"></span>
                                                        <div class="hc-products-content-news">
                                                            點選 <span>加入購物車</span>即可體驗本月份的熱銷商品前三名
                                                        </div>
                                                    </div>
                                                    <p>試飲包內含3包咖啡豆(40g/包)。</p>
                                                </div>
                                            </div>
                                            <div class="hc-warning">
                                                <div class="hc-warning-title">
                                                    試飲包取用注意事項
                                                </div>
                                                <ul>
                                                    <li>
                                                        <p>
                                                            - 試飲包內含3包咖啡豆(40g/包)。
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            - 如當月熱銷商品庫存不足，MINORI將會自動更換試飲包內容。
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            - MINORI保有修正﹑暫停與結束活動之權利。
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            - 如有相關問題，歡迎來信詢問 Minori@gmail.com。
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- button -->
                                    <div class="hc-shopping-btn hc-payment d-flex justify-content-center">
                                        <a href="javascript:;" type="button" class="btn btn-outline-warning px-4 py-2">加入購物車</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ================================================= -->

                <?php require_once 'tpl/foot.inc.php' ?>