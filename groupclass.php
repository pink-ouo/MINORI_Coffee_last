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
    <link rel="stylesheet" href="./css/groupclass.css">
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
                                    <a class="hc-top-menu-active" href="javascript:;">
                                        團體課程
                                    </a>
                                </div>
                                <!-- menu 3 -->
                                <div class="hc-top-menu">
                                    <a href="classpage.php">
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
                                    <h3 class="left-side-title">團體課程</h3>
                                    <p class="left-side-text">
                                        可10人以上成團並且另享有優惠價格!</p>
                                    <p class="left-side-text">請於右側填寫報名表單，表單送出後系統會發送報名完成通知。
                                    </p>
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
                <div class="yi-bean-products">
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
                                <span>團體課程</span>
                            </a>
                        </div>
                        <!-- bean products -->
                        <div class="hc-coffee-products-content">
                            <div class="hc-coffee-products-content-container">
                                <div class="hc-main-title-control justify-content-between">
                                    <!-- title -->
                                    <div class="hc-main-title-en d-flex mb-4">COURSE</div>
                                    <!--細節內容  -->
                                    <div class="row myrow">
                                        <form class="form-r">
                                            <p class="right-side-title">團體課程洽詢表單 </p>
                                            <p>請填寫以下報名表單內容，三個工作日內會由專人與您聯繫。</p>
                                            <p>如三個工作內日未收到聯繫，煩請撥打0912-345-678詢問。謝謝！</p>
                                            <div class="form-group">
                                                <p>課程名稱</p>
                                                <input type="text" class="form-control" id="input" placeholder="請選擇課程">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <p>姓</p>
                                                    <input type="email" class="form-control" id="input" placeholder="請輸入姓">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <p>名字</p>
                                                    <input type="password" class="form-control" id="請輸入名字" placeholder="請輸入名字">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <p>電子郵件</p>
                                                <input type="text" class="form-control" id="inputAddress" placeholder="請輸入聯絡窗口的電子信箱">
                                            </div>
                                            <div class="form-group">
                                                <p>聯絡電話</p>
                                                <input type="text" class="form-control" id="inputAddress2" placeholder="請輸入聯絡窗口的聯絡電話">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <p>上課人數</p>
                                                    <input type="email" class="form-control" id="inputEmail4">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <p>上課時間</p>
                                                    <input type="password" class="form-control" id="inputPassword4">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <p>上課地點</p>
                                                <input type="text" class="form-control" id="inputAddress" placeholder="請輸入期望上課地點">
                                            </div>
                                            <div class="form-group">
                                                <p>課程需求</p>
                                                <input type="text" class="form-control" id="inputAddress" placeholder="請輸入課程的需求或是主題內容">
                                            </div>

                                            <button type="button" class="btn btn-warning mybtn" data-toggle="modal" data-target="#staticBackdrop">送出表單
                                            </button>
                                        </form>
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
            </div>

            <!--彈跳視窗-->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            企業課程確認
                            <!-- <h5 class="modal-title" id="staticBackdropLabel">企業包班確認</h5> -->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="thanks">感謝您購買本課程!</p>
                            <p>訂單已建立，系統將發送確認信件至您的信箱。</p>
                            <p>課程名稱</p>
                            <p>手沖咖啡學｜搞懂原理，成為咖啡職人</p>
                            <p>本訂單將寄送至</p>
                        </div>
                        <div class="modal-footer">
                            <div class="footerbox">
                                <div class="fone">
                                    <p>收件人姓名:</p>
                                    <p>XXX有限公司</p>
                                </div>
                                <div class="fone">
                                    <p>收件地址:</p>
                                    <p>106台北市大安區復興南路一段390號2樓</p>
                                </div>
                                <div class="fone">
                                    <p>報名人數:</p>
                                    <p>45人</p>
                                </div>
                                <div class="fone">
                                    <p>開課日期:</p>
                                    <p>2021.11.30</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--//////////////////////////////////////// script -->
            <!-- fontawesome -->
            <script src="./lib/awesome.all.min.js"></script>
            <!-- jQ -->
            <script src="./lib/jquery-3.6.0.min.js"></script>
            <!-- bootstrap@4.6 -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
            <!-- js -->
            <script src="./js/index.js"></script>
            <script src="./js/login-and-signup.js"></script>

            <script>
                $('#myModal').on('shown.bs.modal', function() {
                    $('#myInput').trigger('focus')
                })
            </script>

            </body>

</html>