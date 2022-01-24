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
</head>

<?php require_once 'tpl/header.inc.php' ?>
<!-- main page -->
<div class="container-fluid main-page">
    <div class="row">
        <!-- leftSide page -->
        <div class="left-side">
            <!-- ================================================= 新頁面加入 -->
            <div class="left-side-push100">
                <div class="hc-left-side-bg" style="background: url(./img/main_left.jpg) no-repeat; background-size: cover; background-position: center">
                    <!-- ======================================================================================= add content -->
                    <!-- head -->
                    <div class="hc-top-menus">
                        <div class="hc-top-menu-container-pushTop">
                            <div class="hc-top-menu-control">
                                <!-- menu 1 -->
                                <div class="hc-top-menu">
                                    <a class="hc-top-menu-active" href="#">
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
                                    <a href="coupons_page.php">
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
            <div class="right-side-content">
                <!-- right header -->
                <div class="right-side-header">
                    <!-- main icon -->
                    <?php require_once 'tpl/mainicon.inc.php' ?>
                    <!-- sign out -->
                    <?php require_once 'tpl/signout.inc.php' ?>
                </div>
                <!-- ================================================= 新頁面加入 -->
                <div class="pc-memberCenter d-flex flex-column justify-content-center pc-bg-logo">
                    <div class="pc-memberCenter-content container">
                        <!-- page title -->
                        <div class="hc-page-title">
                            <a href="javascript:;" class="hc-page-title-menu text-center">
                                <h2>個人資料</h2>
                            </a>
                        </div>
                        <!-- <h2 class="pc-page-title text-center">個人資料</h2> -->
                        <form class="row g-3" id="myForm" accept="./renew.php" method="POST">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label" style="color: #CC9A06;">姓名</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?= $_SESSION['name'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label" style="color: #CC9A06;">生日</label>
                                <input type="text" class="form-control" id="birthdate" name="birthdate" value="<?= isset($_SESSION['birthdate'])?$_SESSION['birthdate']:'' ?>">
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="inputEmail4" class="form-label" style="color: #CC9A06;">手機號碼</label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?= isset($_SESSION['phone_number'])?$_SESSION['phone_number']:'' ?>">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="inputAddress" class="form-label" style="color: #CC9A06;">通訊地址</label>
                                <input type="text" class="form-control" id="address" name="address" value="<?= isset($_SESSION['address'])?$_SESSION['address']:'' ?>">
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="inputEmail4" class="form-label" style="color: #CC9A06;">Email(設定為帳號)</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?= $_SESSION['email'] ?>">
                            </div>
                            <!-- 因為和填寫完整資料的設定一樣，若沒有密碼的值將會報錯 -->
                            <input type="password" id="pwd" name="pwd" value="<?= $_SESSION['pwd'] ?>" hidden>
                            <div class="col-12 mt-3 text-center">
                                <button type="submit" class="btn btn-outline-warning px-5" id="btn-renew">儲存</button>
                                <!-- id不能用跟其他btn一樣 -->
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ================================================= -->

                <?php require_once 'tpl/foot.inc.php' ?>

                