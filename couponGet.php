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
    <link rel="stylesheet" href="./css/login-and-signup.css">
    <link rel="stylesheet" href="./css/couponGet.css">
</head>

<?php require_once 'tpl/header.inc.php' ?>
<!-- main page -->
<div class="container-fluid main-page">
    <div class="row">
        <!-- leftSide page -->
        <div class="left-side">
            <div class="left-side-bg" style="background: url(./img/main_left.jpg) no-repeat; background-size: cover; background-position: center">
                <!-- ======================================================================================= add content -->
            </div>
        </div>
        <!-- rightSide page -->
        <div class="right-side">
            <div class="right-side-content">
                <!-- right header -->
                <div class="right-side-header">
                    <!-- main icon  每一頁都要放不更動-->
                    <?php require_once 'tpl/mainicon.inc.php' ?>
                    <!-- sign out  每一頁都要放不更動-->
                    <?php require_once 'tpl/signout.inc.php' ?>
                </div>
                <!-- ================================================= 新頁面加入 -->
                <div class="pc-couponGet pc-bg-logo">
                        <div class="pc-coupon-container">
                            <div class="pc-coupon-title">
                                <span>MINORI</span>
                            </div>
                            <!-- card -->
                            <div class="pc-couponGet-content">
                                <div class="pc-gradient-card">
                                    <div class="pc-bean-img">
                                        <img src="./img/coffee-beans-icon.png" alt="">
                                    </div>
                                    <h4 class="pc-card-title">登錄完成</h4>
                                    <h5 class="pc-card-second-title">歡迎加入!</h5>
                                    <div class="pc-ticket-img">
                                        <span class="pc-discount">折扣<h1 class="pc-20">20%</h1>OFF</span>
                                        <p class="pc-text">給所有商品使用</p>
                                    </div>
                                </div>

                            </div>
                            <!-- button -->
                            <div class="pc-btn-starShop">
                                <a type="button" class="btn btn-outline-warning px-5" href="http://localhost/MINORI_Coffee_last/beanList_page.php?cat_id=1">開始購物</a>
                            </div>
                        </div>
                    </div>
                <!-- ================================================= -->

                <?php require_once 'tpl/foot.inc.php' ?>