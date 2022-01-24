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
    <!-- classpage-detail css -->
    <link rel="stylesheet" href="./css/classpage-detail.css">
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
                                    <a class="hc-top-menu-active" href="classpage.php">
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
                                    <!--細節內容  -->
                                    <div class="mybox">
                                        <div class="myboxx">
                                            <h3 class="right-title">手沖咖啡學｜搞懂原理，成為咖啡職人</h3>
                                            <p class="right-info">手沖咖啡，最普及的咖啡沖煮手法，讓我們從課程中，了解如果用不同的水，會不會沖出來的咖啡，就是不一樣呢？
                                                跟著我們一起分享生活，分享咖啡!</p>
                                            <p class="right-info">課程時間</p>
                                            <p class="right-info">2021.11.20
                                                14:00pm ~ 17:00pm</p>
                                            <p class="right-info">上課地點</p>
                                            <p class="right-info">台北市大安區復興南路一段OOO號1樓</p>
                                            <p class="right-info">課程售價</p>
                                            <p class="right-info">NT$1,599</p>
                                            <button class="btn btn-warning">送出表單</button>
                                        </div>
                                    </div>
                                    <div class="teacher">
                                        <div class="t-left">
                                            <p class="right-info">講師</p>
                                            <p class="right-info-botton">Ryan Ho</p>
                                            <div class="t-img">
                                                <img src="./img/teacher.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="t-right">
                                            <p class="right-info">Ryan Ho 老師，手沖咖啡經歷10年
                                                露易莎咖啡店長</p>
                                            <p class="right-info-botton">熱衷於手沖咖啡的教學，讓想嘗試手沖咖啡的人快速上手，體驗手沖咖啡的樂趣!</p>
                                        </div>
                                    </div>
                                    <div class="right-side-title">
                                        顧客評價
                                    </div>
                                    <div class="more" style="max-width: 540px;">
                                        評價 ★★★★☆ 4.2分 / 20個評價
                                    </div>
                                    <div class="starbox">
                                        <div class="star-number">
                                            <p>5星</p>
                                        </div>
                                        <div class="star-progress">
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="star-percent">
                                            <p>80%</p>
                                        </div>
                                    </div>
                                    <div class="starbox">
                                        <div class="star-number">
                                            <p>4星</p>
                                        </div>
                                        <div class="star-progress">
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="star-percent">
                                            <p>15%</p>
                                        </div>
                                    </div>
                                    <div class="starbox">
                                        <div class="star-number">
                                            <p>3星</p>
                                        </div>
                                        <div class="star-progress">
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 2%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="star-percent">
                                            <p>2%</p>
                                        </div>
                                    </div>
                                    <div class="starbox">
                                        <div class="star-number">
                                            <p>2星</p>
                                        </div>
                                        <div class="star-progress">
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 2%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="star-percent">
                                            <p>2%</p>
                                        </div>
                                    </div>
                                    <div class="starbox">
                                        <div class="star-number">
                                            <p>1星</p>
                                        </div>
                                        <div class="star-progress">
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="star-percent">
                                            <p>1%</p>
                                        </div>
                                    </div>
                                    <div class="evaluation">
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row no-gutters">
                                                <div class="col-md-4 card-l">
                                                    <div class="card-body">
                                                        <p>aurongjo</p>
                                                        <p>2021.11.21</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 card-r">
                                                    <div class="card-body">
                                                        <h5 class="card-title">★★★★</h5>
                                                        <p class="card-text">好喝</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row no-gutters">
                                                <div class="col-md-4 card-l">
                                                    <div class="card-body">
                                                        <p>aurongjo</p>
                                                        <p>2021.11.21</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 card-r">
                                                    <div class="card-body">
                                                        <h5 class="card-title">★★★★</h5>
                                                        <p class="card-text">太好喝了</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row no-gutters">
                                                <div class="col-md-4 card-l">
                                                    <div class="card-body">
                                                        <p>aurongjo</p>
                                                        <p>2021.11.21</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 card-r">
                                                    <div class="card-body">
                                                        <h5 class="card-title">★★★★</h5>
                                                        <p class="card-text">十分滿意，會再回購!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="more" style="max-width: 540px;">
                                            <button class="btn btn-warning ">查看更多評價</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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