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
            <div class="left-side-bg">
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
                    <!-- sign out -->
                    <?php require_once 'tpl/signout.inc.php' ?>
                </div>
                <!-- ================================================= 新頁面加入 -->
                <div class="container login-and-signup  pc-bg-logo d-flex flex-column justify-content-center">
                    <h2 class="pc-page-title text-center">MINORI</h2>
                    <div class="d-flex justify-content-md-center">
                        <form class="col-md-auto">
                            <div class="form-group col-12">
                                <label for="eamil_login" class="col-sm-2 col-form-label" style="color: #CC9A06;">帳號</label>
                                <div class="col-12">
                                    <input type="email" class="form-control" id="email_login" placeholder="請輸入您的Email">
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <label for="pwd_login" class="col-sm-2 col-form-label" style="color: #CC9A06;">密碼</label>
                                <div class="col-12">
                                    <input type="password" class="form-control" id="pwd_login" placeholder="請輸入您的密碼">
                                    <a href="password_forget.php" style="text-decoration: none;">
                                        <p class="text-right text-secondary mt-2">忘記密碼</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <div class="form-group">
                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-outline-warning px-5" id="btn_login">登入</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="mt-2">
                                        <a type="button" style="text-decoration: none;" class="text-warning px-5" href='signupPage.php' id="pc-signup">立即註冊</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ================================================= -->

                <?php require_once 'tpl/foot.inc.php' ?>