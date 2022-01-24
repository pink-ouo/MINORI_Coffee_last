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
    <link rel="stylesheet" href="./css/beanList_page.css">
    <link rel="stylesheet" href="./css/coffeeAccessories_page.css">
</head>

<?php
$sql = "SELECT `id`, `cat_name`  FROM`categories` WHERE `parent_id` = 0";
$arr = $pdo->query($sql)->fetchAll();
?>

<?php require_once 'tpl/header.inc.php' ?>

<!-- main page -->
<div class="container-fluid main-page">
    <div class="row">
        <!-- leftSide page -->
        <div class="left-side">
            <!-- ================================================= 新頁面加入 -->
            <div class="left-side-push100">
                <div class="hc-left-side-bg" style="background: url(./img/coffeeAccessories_bg.jpg) no-repeat; background-size: cover;">
                    <!-- ======================================================================================= add content -->
                    <!-- head -->
                    <div class="hc-top-menus">
                        <div class="hc-top-menu-container-pushTop">
                            <div class="hc-top-menu-control">
                                <div class="hc-top-menu">
                                    <a class="hc-top-menu" href="beanList_page.php?cat_id=<?= $arr[0]['id'] ?>"><?= $arr[0]['cat_name'] ?></a>
                                </div>

                                <div class="hc-top-menu">
                                    <a class="hc-top-menu" href="featured.php"><?= $arr[1]['cat_name'] ?></a>
                                </div>

                                <div class="hc-top-menu">
                                    <a class="hc-top-menu" href="beanList_page.php?cat_id=<?= $arr[2]['id'] ?>"><?= $arr[2]['cat_name'] ?></a>
                                </div>

                                <div class="hc-top-menu">
                                    <a class="hc-top-menu-active" href="#"><?= $arr[3]['cat_name'] ?></a>
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
                <div class="hc-coffee-products">
                    <!-- box -->
                    <div class="hc-box-title" style="background: url(./img/bg-gold.jpg);">
                    </div>
                    <!-- coffee products -->
                    <div class="hc-coffee-products-container hc-shopping-bg">
                        <!-- page title -->
                        <div class="hc-page-title">
                            <a href="landing_page.php" class="hc-page-title-menu">
                                <span>首頁</span>
                            </a>
                            <span>/</span>
                            <a href="javascript:;" class="hc-page-title-menu">
                                <span>咖啡器材</span>
                            </a>
                        </div>
                        <!-- coffee products -->
                        <div class="hc-coffee-products-content">
                            <div class="hc-coffee-products-content-container">
                                <div class="hc-main-title-control d-flex justify-content-between">
                                    <!-- title -->
                                    <div class="hc-main-title-en d-flex mb-4">DRIPPER</div>
                                    <!-- filter -->
                                    <div class="hc-main-filter-control">
                                        <div class="hc-main-filter d-flex">
                                            <h6>商品排序</h6>
                                            <div class="icon list-icon hc-filter-icon"><i class="fas fa-chevron-down"></i></div>
                                        </div>
                                        <ul class="hc-drop-lists">
                                            <li class="hc-drop-list">價格 高-低</li>
                                            <li class="hc-drop-list">價格 低-高</li>
                                            <li class="hc-drop-list">日期 新-舊</li>
                                            <li class="hc-drop-list">日期 舊-新</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- products content -->
                                <div class="hc-products-grp">
                                    <!-- product grp 1 -->
                                    <div class="hc-products-grp-control">
                                        <!-- product card 1 -->
                                        <div class="hc-pds-card-control col-lg-4 col-md-6">
                                            <div class="hc-pds-card">
                                                <div class="hc-pds-img">
                                                    <a href="javascript:;">
                                                        <img src="./img/product_coffeeMaker_001.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="hc-card-content-container">
                                                    <div class="hc-card-content-title">
                                                        <h5>日本Kalita手沖壺(SSW 1000)</h5>
                                                    </div>
                                                    <div class="hc-card-content-price">
                                                        <span>NT$1,600</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product card 2 -->
                                        <div class="hc-pds-card-control col-lg-4 col-md-6">
                                            <div class="hc-pds-card">
                                                <div class="hc-pds-img">
                                                    <a href="http://localhost/MINORI_Coffee_last/coffeeAccessories_detail_page.php">
                                                        <img src="./img/product_coffeeMaker_002.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="hc-card-content-container">
                                                    <div class="hc-card-content-title">
                                                        <h5>日本Kalita手沖壺(SSW 1000)</h5>
                                                    </div>
                                                    <div class="hc-card-content-price">
                                                        <span>NT$2,000</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product card 3 -->
                                        <div class="hc-pds-card-control col-lg-4 col-md-6">
                                            <div class="hc-pds-card">
                                                <div class="hc-pds-img">
                                                    <a href="javascript:;">
                                                        <img src="./img/product_coffeeMaker_003.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="hc-card-content-container">
                                                    <div class="hc-card-content-title">
                                                        <h5>日本Kalita手沖壺(SSW 500)</h5>
                                                    </div>
                                                    <div class="hc-card-content-price">
                                                        <span>NT$1,800</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product card 4 -->
                                        <div class="hc-pds-card-control col-lg-4 col-md-6">
                                            <div class="hc-pds-card">
                                                <div class="hc-pds-img">
                                                    <a href="javascript:;">
                                                        <img src="./img/product_coffeeCup_001.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="hc-card-content-container">
                                                    <div class="hc-card-content-title">
                                                        <h5>日本kalita濾杯</h5>
                                                    </div>
                                                    <div class="hc-card-content-price">
                                                        <span>NT$800</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product card 5 -->
                                        <div class="hc-pds-card-control col-lg-4 col-md-6">
                                            <div class="hc-pds-card">
                                                <div class="hc-pds-img">
                                                    <a href="javascript:;">
                                                        <img src="./img/product_coffeeCup_002.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="hc-card-content-container">
                                                    <div class="hc-card-content-title">
                                                        <h5>日本kalita濾杯</h5>
                                                    </div>
                                                    <div class="hc-card-content-price">
                                                        <span>NT$900</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product card 6 -->
                                        <div class="hc-pds-card-control col-lg-4 col-md-6">
                                            <div class="hc-pds-card">
                                                <div class="hc-pds-img">
                                                    <a href="javascript:;">
                                                        <img src="./img/product_coffeeCup_003.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="hc-card-content-container">
                                                    <div class="hc-card-content-title">
                                                        <h5>日本kalita濾杯</h5>
                                                    </div>
                                                    <div class="hc-card-content-price">
                                                        <span>NT$850</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product card 7 -->
                                        <div class="hc-pds-card-control col-lg-4 col-md-6">
                                            <div class="hc-pds-card">
                                                <div class="hc-pds-img">
                                                    <a href="javascript:;">
                                                        <img src="./img/product_filterPaper_001.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="hc-card-content-container">
                                                    <div class="hc-card-content-title">
                                                        <h5>日本katalita濾紙</h5>
                                                    </div>
                                                    <div class="hc-card-content-price">
                                                        <span>NT$99~NT$150</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product card 8 -->
                                        <div class="hc-pds-card-control col-lg-4 col-md-6">
                                            <div class="hc-pds-card">
                                                <div class="hc-pds-img">
                                                    <a href="javascript:;">
                                                        <img src="./img/product_filterPaper_002.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="hc-card-content-container">
                                                    <div class="hc-card-content-title">
                                                        <h5>日本katalita濾紙</h5>
                                                    </div>
                                                    <div class="hc-card-content-price">
                                                        <span>NT$99~NT$150</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product card 9 -->
                                        <div class="hc-pds-card-control col-lg-4 col-md-6">
                                            <div class="hc-pds-card">
                                                <div class="hc-pds-img">
                                                    <a href="javascript:;">
                                                        <img src="./img/product_filterPaper_003.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="hc-card-content-container">
                                                    <div class="hc-card-content-title">
                                                        <h5>日本katalita濾紙</h5>
                                                    </div>
                                                    <div class="hc-card-content-price">
                                                        <span>NT$99~NT$150</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php require_once 'tpl/pageNumber.inc.php' ?>
                </div>
                <!-- ================================================= -->
            </div>
            <!-- footer -->
            <?php require_once 'tpl/foot.inc.php' ?>