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
    <link rel="stylesheet" href="./css/shoppingCart_page.css">
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
                                    <a class="hc-top-menu-active" href="order_tracking_page.php">
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
                <?php
                if (isset($_GET['order_id'])) {
                    $sql = "SELECT * FROM`orders` WHERE `order_id` = '{$_GET['order_id']}'";

                    $stmt = $pdo->query($sql);

                    if ($stmt->rowCount() > 0) {
                        foreach ($stmt->fetchAll() as $obj) {
                ?>
                            <div class="hc-shopping-cart">
                                <div class="hc-shopping-cart-container hc-shopping-bg">
                                    <!-- page title -->
                                    <div class="hc-page-title">
                                        <a href="javascript:;" class="hc-page-title-menu">
                                            <span>會員中心</span>
                                        </a>
                                        <span>/</span>
                                        <a href="order_tracking_page.php" class="hc-page-title-menu">
                                            <span>訂單查詢</span>
                                        </a>
                                        <span>/</span>
                                        <a href="javascript:;" class="hc-page-title-menu">
                                            <span>訂單編號:<?=  $obj['order_id']?></span>
                                        </a>
                                    </div>
                                    <!-- table form -->
                                    <div class="hc-content-form">
                                        <!-- order list  -->
                                        <table class="hc-table">
                                            <thead>
                                                <tr class="hc-table-title">
                                                    <th colspan="3">
                                                        <h5>訂單資訊</h5>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="hc-table-lists hc-tbody-orderDone">
                                                <tr>
                                                    <td>訂單成立時間:</td>
                                                    <td><?= $obj['created_at']?></td>
                                                </tr>
                                                <tr>
                                                    <td>付款金額:</td>
                                                    <td>
                                                        <div class="hc-total">NT$<span><?= number_format($obj['total_m']) ?></span>
                                                    </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>優惠券代碼:</td>
                                                    <td>
                                                    <?php
                                                    if( $obj['coupon_code'] != ""){
                                                        echo $obj['coupon_code'];
                                                    }else{
                                                        echo "未使用優惠券";
                                                    }
                                                    ?>
                                                    </td>
                                                </tr>
                                        </table>
                                        <!-- Recipient Information  -->
                                        <table class="hc-table">
                                            <thead>
                                                <tr class="hc-table-title hc-control-table">
                                                    <th colspan="2">
                                                        <h5>收件人資訊</h5>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="hc-table-lists hc-tbody-credit hc-table-size" id="hc-credit">
                                                <tr>
                                                    <td>收件人姓名:</td>
                                                    <td>
                                                        <div class="col-sm-12 p-0">
                                                            <?= $obj['recipient_name'] ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Email:</td>
                                                    <td>
                                                        <div class="col-sm-12 p-0">
                                                        <?= $obj['recipient_email'] ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>電話:</td>
                                                    <td>
                                                        <div class="col-sm-12 p-0">
                                                        <?= $obj['recipient_phone_number'] ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>地址:</td>
                                                    <td>
                                                        <div class="col-sm-12 p-0">
                                                        <?= $obj['recipient_address'] ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="hc-table">
                                            <thead>
                                                <!-- 表單切換 -->
                                                <tr class="hc-table-title">
                                                    <th>
                                                        <h5>商品名稱</h5>
                                                    </th>
                                                    <th class="hc-hidden-xs">
                                                        <h5>重量</h5>
                                                    </th>
                                                    <th class="hc-hidden-xs">
                                                        <h5>磨豆</h5>
                                                    </th>
                                                    <th class="hc-hidden-xs">
                                                        <h5>數量</h5>
                                                    </th>
                                                    <th class="hc-hidden-xs">
                                                        <h5>單價</h5>
                                                    </th>
                                                    <th class="hc-hidden-xs">
                                                        <h5>總價</h5>
                                                    </th>
                                                    <th class="hc-show-xs">
                                                        <h5>細項</h5>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $sqlDetail = "SELECT * FROM`orders_detail` WHERE`order_id` = '{$obj['order_id']}'";
                                            $stmt = $pdo->query($sqlDetail);
                                            if($stmt->rowCount() > 0){
                                                foreach($stmt->fetchAll() as $obj2 ){
                                            ?>
                                            <tbody class="hc-table-lists orders-detail-td" id="hc-lists">
                                                <!-- 表單切換 -->
                                                <?php
                                                $prod_price_m = $obj2['prod_price'] * $obj2['prod_times']
                                                ?>
                                                <tr>
                                                    <td><?= $obj2['prod_name'] ?></td>
                                                    <td class="hc-hidden-xs"><?= $obj2['prod_size'] ?></td>
                                                    <td class="hc-hidden-xs"><?= $obj2['prod_grind'] ?></td>
                                                    <td class="hc-hidden-xs"><?= $obj2['prod_qty'] ?></td>
                                                    <td class="hc-hidden-xs">NT$<span><?= number_format($prod_price_m) ?></span></td>
                                                    <td class="hc-hidden-xs">NT$<span><?= number_format($obj2['prod_subtotal']) ?></span></td>
                                                    <td class="hc-show-xs">
                                                        <div class="hc-show-item"><?= $obj2['prod_size'] ?></div>
                                                        <div class="hc-show-item"><?= $obj2['prod_grind'] ?></div>
                                                        <div class="hc-show-item"><?= $obj2['prod_qty'] ?></div>
                                                        <div class="hc-show-item"><?= number_format($prod_price_m) ?></div>
                                                        <div class="hc-show-item"><?= number_format($obj2['prod_subtotal']) ?></div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <?php
                                                }
                                            }
                                            ?>
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
                <?php
                        }
                    }
                }
                ?>
                <!-- ================================================= -->

                <?php require_once 'tpl/foot.inc.php' ?>