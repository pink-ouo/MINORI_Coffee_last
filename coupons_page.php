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
    <link rel="stylesheet" href="./css/coupons_page.css">
</head>

<?php require_once 'tpl/header.inc.php' ?>
<!-- main page -->
<div class="container-fluid main-page">
    <div class="row">
        <!-- leftSide page -->
        <div class="left-side">
            <!-- ================================================= 新頁面加入 -->
            <div class="left-side-push100">
                <div class="hc-left-side-bg" style="background: url(./img/news_003.jpg) no-repeat; background-size: cover; background-position: center">
                    <!-- ======================================================================================= add content -->
                    <!-- head -->
                    <div class="hc-top-menus">
                        <div class="hc-top-menu-container-pushTop">
                            <div class="hc-top-menu-control">
                                <!-- menu 1 -->
                                <div class="hc-top-menu">
                                    <a href="memberData.php">
                                        個人資料
                                    </a>
                                </div>
                                <!-- menu 2 -->
                                <div class="hc-top-menu">
                                    <a href="order_tracking_page.php">
                                        訂單查詢
                                    </a>
                                </div>
                                <!-- menu 3 -->
                                <div class="hc-top-menu">
                                    <a class="hc-top-menu-active" href="#">
                                        優惠卷
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- 左側頁面內容 -->
                    <div class="hc-left-side-content">
                        <div class="hc-left-side-container">
                            <div class="hc-bean-menu">
                                <!-- menu list -->
                            </div>
                        </div>
                    </div>
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
                <div class="hc-coupons-products">
                    <!-- box -->
                    <div class="hc-coupon-box-title" style="background: url(./img/bg-gold.jpg);">
                    </div>
                    <!-- coupons products -->
                    <div class="hc-coupons-products-container hc-shopping-bg">
                        <!-- page title -->
                        <div class="hc-page-title">
                            <a href="javascript:;" class="hc-page-title-menu">
                                <span>會員中心</span>
                            </a>
                            <span>/</span>
                            <a href="javascript:;" class="hc-page-title-menu">
                                <span>優惠卷</span>
                            </a>
                        </div>
                        <!-- coupons products -->
                        <div class="hc-coupons-products-content">
                            <div class="hc-coupons-products-content-container">
                                <div class="hc-main-title-control d-flex justify-content-between">
                                    <!-- title -->
                                    <div class="hc-main-title-en d-flex mb-4">COUPONS</div>
                                    <!-- filter -->
                                </div>
                                <!-- products content -->
                                <div class="hc-products-grp">
                                    <!-- product grp 1 -->
                                    <div class="hc-coupons d-flex align-items-center flex-column">
                                        <!-- ticket card 動態生成 -->
                                        <?php
                                        if(isset($_SESSION)){
                                            $sql = "SELECT`code` FROM`coupon` WHERE`email` = '{$_SESSION['email']}'";
                                            $stmt = $pdo->query($sql);
                                            if($stmt->rowCount() > 0){
                                                foreach($stmt->fetchAll() as $obj){
                                        ?>
                                        <div class="hc-coupon-list">
                                            <div class="hc-coupon-ticket">
                                                <div class="hc-coupon-ticket-bg">
                                                    <h5 class="hc-ticket-title">折扣<span>20%</span>OFF
                                                    </h5>
                                                    <p>優惠碼<?= $obj['code'] ?></p>
                                                </div>
                                            </div>
                                            <div class="hc-coupon-content">
                                                <p>使用期限</p>
                                                <div>111年12月31日</div>
                                                <button class="hc-coupon-btn">領取</button>
                                            </div>
                                        </div>
                                        <?php
                                            }
                                            }
                                         }
                                        ?>
                                    </div>
                                </div>
                                <!-- show more -->
                                <!-- <div class="hc-showMore">
                                    <button class="hc-showMore-btn">Show
                                        More
                                    </button>
                                    <div class="hc-icon-down"><i class="fas fa-chevron-down"></i></div>
                                </div> -->
                            </div>
                        </div>
                        <!-- button -->
                        <div class="hc-coupons-button">
                            <a type="button" class="btn btn-outline-warning px-5" href="javascript:;">繼續購物</a>
                        </div>
                    </div>

                    <!-- page number -->
                </div>
                <!-- ================================================= -->
            </div>
            <?php require_once 'tpl/foot.inc.php' ?>