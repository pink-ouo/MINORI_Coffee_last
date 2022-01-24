<?php require_once 'db.inc.php'; ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINORI coffee</title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="./lib/awesome.all.min.css">
    <!-- bootstrap@4.6 -->
    <link rel="stylesheet" href="./lib/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" href="./css/index.css">
    <!-- beanList css -->
    <link rel="stylesheet" href="./css/classpage.css">
</head>

<?php require_once 'tpl/header.inc.php' ?>
<!-- main page -->
<div class="container-fluid main-page">
    <div class="row">
        <!-- leftSide page -->
        <div class="left-side">
            <!-- ================================================= 新頁面加入 -->
            <div class="left-side-push100">
                <div class="yi-left-side-bg" style="background: url(./img/coffee-class_05.jpg) no-repeat; background-size: cover; background-position: center center;">
                    <!-- ======================================================================================= add content -->
                    <!-- head -->
                    <div class="hc-top-menus">
                        <div class="hc-top-menu-container-pushTop">
                            <div class="hc-top-menu-control">
                                <!-- menu 1 -->
                                <div class="hc-top-menu">
                                    <a href="companyclass.php">
                                        企業包班
                                    </a>
                                </div>
                                <!-- menu 2 -->
                                <div class="hc-top-menu">
                                    <a href="groupclass.php">
                                        團體課程
                                    </a>
                                </div>
                                <!-- menu 3 -->
                                <div class="hc-top-menu">
                                    <a class="hc-top-menu-active" href="javascript:;">
                                        個人課程
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 左側頁面內容 -->
                    <div class="hc-left-side-content">
                        <div class="hc-left-side-container">
                            <div class="yi-bean-menu">
                                <!-- menu list -->
                                <div class="left-info">
                                    <h3 class="left-side-title">熱愛精進咖啡知識的您絕不能錯過！</h3>
                                    <p class="left-side-text">MINORI開設各種咖啡相關課程</p>
                                    <p class="left-side-text">入門課程 : 簡易咖啡入門、拉花，到學習烘焙咖啡豆技巧與認識烘焙曲線圖，理解烘焙過程中的化學反應與物理變化。
                                    </p>
                                    <p class="left-side-text">進階課程 : 聞香瓶訓練與杯測分析，讓您喝懂咖啡，也在烘焙世界裡更游刃有餘。</p>
                                    <p class="left-side-text">豐富多樣的課程供您選擇，點選右邊資訊欄了解更多。</p>
                                </div>

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
                <div class="hc-bean-products">
                    <!-- box -->
                    <div class="hc-box-title" style="background: url(./img/bg-gold.jpg);">
                    </div>
                    <!-- bean products -->
                    <div class="hc-bean-products-container hc-shopping-bg">
                        <!-- page title -->
                        <div class="hc-page-title">
                            <a href="javascript:;" class="hc-page-title-menu">
                                <span>首頁</span>
                            </a>
                            <span>/</span>
                            <a href="javascript:;" class="hc-page-title-menu">
                                <span>個人課程</span>
                            </a>
                        </div>
                        <!-- bean products -->
                        <div class="hc-coffee-products-content">
                            <div class="hc-coffee-products-content-container">
                                <div class="hc-main-title-control justify-content-between">
                                    <!-- title -->
                                    <div class="hc-main-title-en d-flex mb-4">COURSE</div>
                                    <!-- class content -->
                                    <div class="container">
                                        <div class="right-side-title">
                                            入門課程
                                        </div>
                                        <div class="card mb-3 " style="max-width: 740px;">
                                            <div class="row no-gutters ">
                                                <div class="col-md-6 yiimg">
                                                    <img src="./img/course_001-min.jpg" alt="...">
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card-body">
                                                        <a href="classpage-detail.php">
                                                            <h5 class="card-title">手沖咖啡學｜成為咖啡職人</h5>
                                                        </a>
                                                        <p class="card-text">讓講究的手沖咖啡儀式融入你我的生活中

                                                            手沖咖啡，是一個充滿藝術的科學，從咖啡豆挑選(淺、中、深焙)、水溫、磨豆、沖煮手法，即使是同一款豆子，不同沖煮，就會因為些微的因子改變，呈現出迥然不同的味道。
                                                        </p>
                                                        <p class="card-text">NT$1,599</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-3" style="max-width: 740px;">
                                            <div class="row no-gutters">
                                                <div class="col-md-6 yiimg">
                                                    <img src="./img/course_002-min.jpg" alt="...">
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card-body">
                                                        <a href="">
                                                            <h5 class="card-title">咖啡豆烘焙｜實務課程</h5>
                                                        </a>
                                                        <p class="card-text">
                                                            根據人類飲食文明的經驗法則，烹調食物的原則，不外就是為了易消化、好吸收以及創造美味口感，咖啡烘焙也是如此。不當的烘焙，使人無法吸收，也將美味破壞殆盡，適當的烘焙，不但不會引起身體的不適，還能將營養成分以迷人的風味樣貌呈現。
                                                        </p>
                                                        <p class="card-text">NT$1,599</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="right-side-title">
                                            進階課程
                                        </div>
                                        <div class="card mb-3" style="max-width: 740px;">
                                            <div class="row no-gutters">
                                                <div class="col-md-6 yiimg">
                                                    <img src="./img/course_004-min.jpg" alt="...">
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card-body">
                                                        <a href="">
                                                            <h5 class="card-title">咖啡匠人｜手沖咖啡技法精華</h5>
                                                        </a>
                                                        <p class="card-text">有多久沒有靜下心來，好好為自己沖一杯咖啡？
                                                            燒一壺水，研磨咖啡。溫過壺，細細地沖落。有如和自己約會，聞著咖啡的香氣，享受一杯咖啡的時光。
                                                            在所有的咖啡沖煮方式裡，手沖咖啡有著他自己最獨特的魅力。</p>
                                                        <p class="card-text">NT$1,599</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-3" style="max-width: 740px;">
                                            <div class="row no-gutters">
                                                <div class="classimg col-md-6 yiimg">
                                                    <img src="./img/course_003-min.jpg" alt="...">
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card-body">
                                                        <a href="">
                                                            <h5 class="card-title">感官品鑑｜實務課程</h5>
                                                        </a>
                                                        <p class="card-text">你曾在喝下一口咖啡時，感到喜悅嗎? 那份喜悅可能來自記憶中的某段連結。
                                                            感官是一項很神奇的能力，讓我們分辨好壞，或是享受樂趣。
                                                            感官除了自我記憶連結外，也可作為溝通的橋樑，不論是購買、介紹還是分享，都適合建立起良好的感官能力。</p>
                                                        <p class="card-text">NT$1,599</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- ================================================= -->
                        </div>
                    </div>
                </div>
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
            </div>

            <!--//////////////////////////////////////// script -->
            <!-- fontawesome -->
            <script src="./lib/awesome.all.min.js"></script>
            <!-- jQ -->
            <script src="./lib/jquery-3.6.0.min.js"></script>
            <!-- bootstrap@4.6 -->
            <script src="./lib/bootstrap.bundle.min.js"></script>
            <!-- js -->
            <script src="./js/index.js"></script>
            <script src="./js/login-and-signup.js"></script>
            <!-- bean js -->
            <script src="./js/beanList_page.js"></script>

            </body>

</html>