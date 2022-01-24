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
            <div class="left-side-bg" style="background: url(./img/main_left.jpg) no-repeat; background-size: cover; background-position: center">
                <!-- ======================================================================================= add content -->

            </div>
        </div>
        <!-- rightSide page -->
        <div class="right-side">
            <div class="right-side-content">
                <!-- right header -->
                <div class="right-side-header">
                    <!-- main icon -->
                    <?php require_once 'tpl/mainicon.inc.php' ?>
                    <!-- sign out-->
                    <?php require_once 'tpl/signout.inc.php' ?>
                </div>
                <!-- ================================================= 新頁面加入 -->
                <div class="signupPage d-flex flex-column justify-content-center pc-bg-logo">
                    <div class="signupPage-content container ">
                        <h2 class="pc-page-title text-center">MINORI</h2>
                        <form class="row g-3" id="myForm">
                            <div class="col-md-12">
                                <label for="inputEmail4" class="form-label" style="color: #95720C;">姓名</label>
                                <input type="text" class="form-control" id="name" placeholder="請填寫您的姓名">
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="inputEmail4" class="form-label" style="color: #95720C;">Email(設定為帳號)</label>
                                <input type="email" class="form-control" id="email" placeholder="請填寫您的Email">
                            </div>
                            <div class="col-12 mt-5 text-center">
                                <button type="submit" class="btn btn-outline-warning px-5" id="btn_pwdForget">送出</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ================================================= -->

                <?php require_once 'tpl/foot.inc.php' ?>