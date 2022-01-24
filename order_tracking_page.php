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
    <link rel="stylesheet" href="./css/card.css">
    <link rel="stylesheet" href="./css/order_tracking_page.css">
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
                                    <a href="memberData.php">
                                        個人資料
                                    </a>
                                </div>
                                <!-- menu 2 -->
                                <div class="hc-top-menu">
                                    <a class="hc-top-menu-active" href="#">
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
            <div class="right-side-content" style="min-height: 800px;">
                <!-- right header -->
                <div class="right-side-header">
                    <!-- main icon -->
                    <?php require_once 'tpl/mainicon.inc.php' ?>
                    <!-- sign out -->
                    <?php require_once 'tpl/signout.inc.php' ?>
                </div>
                <!-- ================================================= 新頁面加入 -->
                <div class="hc-shopping-cart">
                    <div class="hc-shopping-cart-container hc-shopping-bg">
                        <!-- page title -->
                        <div class="hc-page-title">
                            <a href="javascript:;" class="hc-page-title-menu">
                                <span>會員中心</span>
                            </a>
                            <span>/</span>
                            <a href="javascript:;" class="hc-page-title-menu">
                                <span>訂單查詢</span>
                            </a>
                        </div>
                        <!-- table form -->
                        <div class="hc-content-form">
                            <!-- order list  -->
                            <table class="hc-table">
                                <thead>
                                    <tr class="hc-table-title">
                                        <th>
                                            <h5>訂單編號</h5>
                                        </th>
                                        <th class="hc-hidden-xs">
                                            <h5>狀態</h5>
                                        </th>
                                        <th class="hc-hidden-xs">
                                            <h5>建立時間</h5>
                                        </th>
                                        <th class="hc-hidden-xs">
                                            <h5>總計</h5>
                                        </th>
                                        <th class="hc-hidden-xs">
                                            <h5>評價</h5>
                                        </th>
                                        <th class="hc-show-xs">
                                            <h5>細項</h5>
                                        </th>
                                        <th>
                                            <!-- trash -->
                                        </th>
                                    </tr>
                                </thead>
                                <?php
                                //訂單數量
                                $count_orders = 0;

                                //判斷是否登入
                                if (isset($_SESSION['email'])) {
                                    //取得所有與會員相關的訂單
                                    $sql = "SELECT * FROM `orders` WHERE `email` = '{$_SESSION['email']}' ORDER BY `created_at` DESC, `order_id` DESC";
                                    $stmt = $pdo->query($sql);

                                    if ($stmt->rowCount() > 0) {
                                        //記錄訂單數量
                                        $count_orders = $stmt->rowCount();

                                        //取得訂單資料
                                        foreach ($stmt->fetchAll() as $obj) {
                                ?>
                                            <tbody class="hc-table-lists" id="hc-order-track">
                                                <!-- order 1-->
                                                <tr>
                                                    <td><a class="track-num" href="orders_detail.php?order_id=<?= $obj['order_id'] ?>"><?= $obj['order_id'] ?></a></td>
                                                    <!-- hide -->
                                                    <td class="hc-hidden-xs text-success">發送中</td>
                                                    <td class="hc-hidden-xs"><?= $obj['created_at'] ?></td>
                                                    <td class="hc-hidden-xs">NT$<?= number_format($obj['total_m']) ?></td>
                                                    <td class="hc-hidden-xs"><a class="comment-pc" href="comment_page.php?order_id=<?= $obj['order_id'] ?>">未填寫</a></td>
                                                    <!-- /////////// -->
                                                    <td class="hc-show-xs">
                                                        <div class="hc-show-item text-success">發送中</div>
                                                        <div class="hc-show-item"><?= $obj['created_at'] ?></div>
                                                        <div class="hc-show-item">NT$<?= number_format($obj['total']) ?></div>
                                                        <div class="hc-show-item"><a href="comment_page.php?order_id=<?= $obj['order_id'] ?>">未填寫</a></div>
                                                    </td>
                                                    <td class="hc-td-trash"><a href="javascript:;" class="hc-trash"><i class="fas fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                <?php
                                        }
                                    }
                                }
                                ?>
                                <tfoot>
                                    <tr>
                                        <td colspan="6" class="order-count" style="color: white;">共 <?= $count_orders ?> 筆訂單</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- send button -->
                        <div class="hc-hc-shopping-btn-grp d-flex justify-content-center">
                            <div class="hc-payment">
                                <a href="landing_page.php" type="button" class="btn btn-outline-warning px-5">回首頁</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ================================================= -->

                <?php require_once 'tpl/foot.inc.php' ?>