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
</head>

<?php require_once 'tpl/header.inc.php' ?>
<!-- main page -->
<div class="container-fluid main-page">
    <div class="row">
        <!-- leftSide page -->
        <div class="left-side">
            <div class="left-side-bg" style="background: url(./img/shoppingCart_1.jpg) no-repeat; background-size: cover; background-position: center">
                <!-- ======================================================================================= add content -->
                <div class="container">

                </div>
            </div>
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
                <div class="hc-shopping-cart">
                    <div class="hc-shopping-cart-container hc-shopping-bg">
                        <!-- page title -->
                        <div class="hc-page-title">
                            <a href="landing_page.php" class="hc-page-title-menu">
                                <span>首頁</span>
                            </a>
                            <span>/</span>
                            <a href="javascript:;" class="hc-page-title-menu">
                                <span>購物車</span>
                            </a>
                        </div>
                        <!-- process -->
                        <div class="hc-process d-flex">
                            <div class="hc-process-container d-flex justify-content-between hc-process-bg">
                                <div class="hc-process-list hc-process-active">商品確認</div>
                                <div class="hc-process-list">填寫資料</div>
                                <div class="hc-process-list">訂單完成</div>
                            </div>
                        </div>
                        <!-- table form -->
                        <form name="myForm" method="post" action="shoppingCart_fillIn_page.php">
                            <div class="hc-content-form">
                                <!-- bought -->
                                <table class="hc-table">
                                    <thead>
                                        <!-- 表單切換 -->
                                        <tr class="hc-table-title">
                                            <th>
                                                <h5>項目</h5>
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
                                                <h5>價格</h5>
                                            </th>
                                            <th class="hc-show-xs">
                                                <h5>細項</h5>
                                            </th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="hc-table-lists" id="hc-lists">
                                        <?php
                                        //購物車商品數量、小計、總計
                                        $count = 0;
                                        $total = 0;
                                        $cartage = 0;
                                        $difference = 0;

                                        //判斷購物車是否存在
                                        if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                                            // 更新商品數量
                                            $count = count($_SESSION['cart']);
                                            //這邊是將每項商品各自取出，所以要用索引值$key => 變數值$obj
                                            foreach ($_SESSION['cart'] as $key => $obj) {
                                                // 計算小計
                                                $total += $obj['prod_price'] * $obj['prod_qty'] * $obj['prod_times'];
                                        ?>
                                                <!-- 表單切換 -->
                                                <tr>
                                                    <td><?= $obj['prod_name'] ?></td>
                                                    <td class="hc-hidden-xs" style="white-space: nowrap;"><?= $obj['prod_size'] ?></td>
                                                    <td class="hc-hidden-xs" style="white-space: nowrap;"><?= $obj['prod_grind'] ?></td>
                                                    <td class="hc-hidden-xs d-flex justify-content-center align-items-center">
                                                        <!-- 將購物車中的商品索引，透過 form 帶到下一頁去 -->
                                                        <input type="hidden" name="index[]" value="<?= $key ?>">
                                                        <!-- 減少商品 -->
                                                        <button class="hc-hidden-xs btn_minus" type="button" data-index="<?= $key ?>" data-prod-price="<?= $obj['prod_price'] ?>" data-prod-times="<?= $obj['prod_times'] ?>"><i class="fas fa-minus"></i>
                                                        </button>
                                                        <!-- 數量 -->
                                                        <input type="text" class="hc-hidden-xs form-control qty table-checkout-quantity-input mx-2" name="qty[]" placeholder="" data-index="<?= $key ?>" data-prod-price="<?= $obj['prod_price'] ?>" data-prod-times="<?= $obj['prod_times'] ?>" value="<?= $obj['prod_qty'] ?>">
                                                        <!-- 增加商品 -->
                                                        <button class="hc-hidden-xs btn_plus" type="button" data-index="<?= $key ?>" data-prod-price="<?= $obj['prod_price'] ?>" data-prod-times="<?= $obj['prod_times'] ?>"><i class="fas fa-plus"></i>
                                                        </button>
                                                    </td>
                                                    <td class="hc-hidden-xs pc-cartNT" width="25%" style="white-space: nowrap;">
                                                        <span data-index="<?= $key ?>">
                                                            <?= number_format($obj['prod_price'] * $obj['prod_qty'] * $obj['prod_times']) ?>
                                                        </span>
                                                    </td>
                                                    <td class="hc-show-xs">
                                                        <div class="hc-show-item"><?= $obj['prod_size'] ?></div>
                                                        <div class="hc-show-item"><?= $obj['prod_grind'] ?></div>
                                                        <div class="hc-show-item">
                                                            <input type="hidden" name="index[]" value="<?= $key ?>">
                                                            <button><i class="fas fa-minus"></i></button>
                                                            <span><?= $obj['prod_qty'] ?></span>
                                                            <button><i class="fas fa-plus"></i></button>
                                                        </div>
                                                        <div class="hc-show-item pc-cartNT">
                                                            <span data-index="<?= $key ?>">
                                                                <?= number_format($obj['prod_price'] * $obj['prod_qty'] * $obj['prod_times']) ?>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="hc-td-trash">
                                                        <a href="javascript:;" class="hc-trash delete" data-index="<?= $key ?>"><i class="fas fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                        <?php
                                            }
                                            if ($total < 1300) {
                                                $cartage = 120;
                                            } else {
                                                $cartage = 0;
                                            }
                                            if ($total < 1300) {
                                                $difference = 1300 - $total;
                                            } else {
                                                $difference = 0;
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <!-- credit card  -->
                                <table class="hc-table">
                                    <thead>
                                        <tr class="hc-table-title">
                                            <th colspan="2">
                                                <h5>訂單金額</h5>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="hc-table-lists hc-tbody-credit" id="hc-credit">
                                        <tr>
                                            <td>商品總計:</td>
                                            <td>NT$<span id="total"><?= number_format($total) ?></span></td>
                                        </tr>
                                        <tr>
                                            <td>運送方式:</td>
                                            <td>宅配</td>
                                        </tr>
                                        <tr>
                                            <td>運費:</td>
                                            <td><span class="pc-cartage" id="cartage"><?= $cartage ?></span>
                                                <input type="hidden" name="cartage" value="<?= $cartage ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="colFormLabel">優惠代碼:</label>
                                            </td>
                                            <td class="d-flex">
                                                <div class="col-8 p-0">
                                                    <input type="text" class="form-control" name="coupon_code" placeholder="(請輸入優惠代碼)">
                                                </div>
                                                <div class="col-4">
                                                    <a href="#" class="btn btn-outline-warning" id="check_coupon_code">確認</a>
                                                    <!-- 判斷是否登入帳號 -->
                                                    <input type="hidden" id="check_session" value="<?= isset($_SESSION['email']) ? 1 : 0; ?>">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="height:100px">
                                            <td>結帳金額:</td>
                                            <td>
                                                <?php $amountTotal = $total + $cartage; ?>
                                                <div class="hc-total">NT$<span id="amountTotal"><?= number_format($amountTotal) ?></span>
                                                    <input type="hidden" name="amountTotal" id="inputAmountTotal" value="<?= $amountTotal ?>">
                                                </div>
                                                <?php
                                                // 建立$_SESSION將總金額傳到下一頁
                                                $_SESSION['amountTotal'] = $amountTotal;
                                                ?>
                                                <div>消費滿1,300元免運費</div>
                                                <div>
                                                    <?php
                                                    $strClass = "pc-hide";
                                                    if ($total < 1300) $strClass = "";
                                                    ?>
                                                    <span class="pc-difference <?= $strClass ?>" id="difference"><?= $difference ?></span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- send button -->
                            <div class="hc-hc-shopping-btn-grp d-flex justify-content-between">
                                <div class="hc-payment">
                                    <button type="button" onclick="history.back()" class="btn btn-outline-warning px-5">回上一頁</button>
                                </div>
                                <div class="hc-payment">
                                    <!-- 此button不在螢幕上顯示主要為傳值到下一頁 -->
                                    <button id="paymentSubmit" type="submit" class="d-none btn btn-outline-warning px-5">前往結帳</button>
                                    <button type="button" class=" btn btn-outline-warning px-5" id="paymentCheck">前往結帳</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ================================================= -->
            </div>
            <?php require_once 'tpl/foot.inc.php' ?>