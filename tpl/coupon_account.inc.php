<?php
//優惠後總額
$amountTotal_m = 0;


// 總額與優惠後總額
// $total = 0;
// $total_m = 0;

// foreach ($_SESSION['cart'] as $key => $obj) {
//     $total += $obj['prod_price'] * $obj['prod_qty'];
// };

/**
 * 先讓 總額 跟 優惠後總額一樣，
 * 之後看看是否使用優惠代碼，來決定實際的優惠後總額
 */
// $total_m = $total;

//檢查印出
// echo $total_m;

//判斷優惠代碼是否存在，有的話則計算優惠後總額
if ($_SESSION['form']['coupon_code'] != '') {
    $sqlCoupon = "SELECT * FROM `coupon` WHERE `code` = '{$_SESSION['form']['coupon_code']}' AND `isUsed` = 0";
    $stmt = $pdo->query($sqlCoupon);
    if ($stmt->rowCount() > 0) {
        //取得優惠資訊
        $obj = $stmt->fetch();

        //計算優惠後總額
        $amountTotal_m = ceil($amountTotal * $obj['percentage']);

        //將優惠券設定為已使用
        $sqlUpdate = "UPDATE`coupon` SET`isUsed` = 1 WHERE `code` = '{$_SESSION['form']['coupon_code']}' ";
        $pdo->query($sqlUpdate);
    }
}else{
    $amountTotal_m = $amountTotal;
}
// echo $total;
// echo "<br>";
// echo $total_m;