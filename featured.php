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
    <link rel="stylesheet" href="./css/jquery.multiscroll.css">
    <link rel="stylesheet" href="./css/featured.css">
</head>

<?php require_once 'tpl/header.inc.php' ?>
    <!-- right header -->
    <div class="right-side-header">
        <!-- main icon  每一頁都要放不更動-->
        <?php require_once 'tpl/mainicon.inc.php' ?>
        <!-- sign out  每一頁都要放不更動-->
        <?php require_once 'tpl/signout.inc.php' ?>
    </div>
    <!-- ================================================= 新頁面加入 -->
    <!-- js視差滑動套件 -->
    <div id="myContainer">
        <div class="ms-left">
            <div class="ms-section" id="left1">
                <a href="javascript" class="a-light">
                    <img class="scrollimg" src="./img/beans_select_009.jpg" alt="">
                </a>
            </div>

            <div class="ms-section" id="left2">
                <h1>碧雅莊園 藝妓</h1>
                <h6>玫瑰花、荔枝、豐富的熱帶水果、奶油厚實的口感。</h6>
                <p>NT$1,399~</p>
                <a type="button" href="http://localhost/MINORI_Coffee_last/beanList_detail_page.php?cat_id=1&sub_cat_id=9&prod_id=5" class="btn btn-warning yc-btn">點我看更多</a>
            </div>


            <div class="ms-section" id="left3">
                <a href="javascript" class="a-light">
                    <img class="scrollimg" src="./img/beans_select_034.jpg" alt="">
                </a>
            </div>
        </div>

        <div class="ms-right">
            <div class="ms-section" id="right1">
                <h1>巨石莊園 藝妓</h1>
                <h6>成熟蘋果、黑醋栗等深色水果、些許肉桂、奶油和香檳的尾韻。</h6>
                <p>NT$599~</p>
                <a type="button" href="http://localhost/MINORI_Coffee_last/beanList_detail_page.php?cat_id=1&sub_cat_id=13&prod_id=9" class="btn btn-warning yc-btn">點我看更多</a>
            </div>

            <div class="ms-section" id="left3">
                <a class="a-light" href="javascript">
                    <img class="scrollimg" src="./img/beans_select_005.jpg" alt="">
                </a>
            </div>

            <div class="ms-section" id="right3">
                <h1>凱薩路易斯 火山藝伎</h1>
                <h6>在溫度稍微下降，哈密瓜精緻的風味出現，整體清爽、酸值迷人。</h6>
                <p>NT$1,198~</p>
                <a type="button" href="http://localhost/MINORI_Coffee_last/beanList_detail_page.php?cat_id=1&sub_cat_id=16&prod_id=34" class="btn btn-warning yc-btn">點我看更多</a>
            </div>
        </div>
    </div>

    <!-- ================================================= -->

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

    <script type="text/javascript" src="./js/jquery.multiscroll.js"></script>


    <!-- js -->
    <script src="./js/index.js"></script>
    <script src="./js/login-and-signup.js"></script>
    <script src="./js/coffeeAccessories_page.js"></script>
    <script src="./js/beanList_page.js"></script>
    <script src="./js/beanList_detail.js"></script>
    <script src="./js/shoppingCart_page.js"></script>
    <script src="./js/coupons_page.js"></script>
    <script src="./js/landing_page.js"></script>
    <script src="./js/news_page.js"></script>

</body>

</html>