<?php
session_start();

// print_r($_POST);

//預設訊息
$obj['success'] = false;
$obj['info'] = "加入購物車失敗";

//判斷變數是否存在
if(
    isset($_POST['prod_id']) &&
    isset($_POST['prod_name']) &&
    isset($_POST['prod_price']) &&
    isset($_POST['prod_times']) &&
    isset($_POST['prod_size']) &&
    isset($_POST['prod_grind']) &&
    isset($_POST['prod_qty'])
) {
    //假如先前沒有建立購物車，就直接初始化(建立)
    if(!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

    //判斷購物車裡面的商品，是否有重複，若有，則將數量更新
    $hasProductId = false;
    foreach($_SESSION['cart'] as $index => $o){
        if(
            $o['prod_id'] == (int)$_POST['prod_id'] &&
            $o['prod_name'] == $_POST['prod_name'] &&
            $o['prod_size'] == $_POST['prod_size'] &&
            $o['prod_times'] == $_POST['prod_times'] &&
            $o['prod_grind'] == $_POST['prod_grind']
        ){

            //更新商品數量
            $_SESSION['cart'][$index]['prod_qty'] += (int)$_POST['prod_qty'];

            //更新 bool 值，代表購物車內有重複的商品
            $hasProductId = true;
        }
    }


    //將主要資料放到購物車當中
    if( $hasProductId == false){
        $_SESSION['cart'][] = [
            "prod_id" => (int)$_POST['prod_id'],
            "prod_name" => $_POST['prod_name'],
            "prod_price" => (int)$_POST['prod_price'],
            "prod_size" => $_POST['prod_size'],
            "prod_times" => $_POST['prod_times'],
            "prod_grind" => $_POST['prod_grind'],
            "prod_qty" => $_POST['prod_qty']
        ];
    };


    //設定訊息
    $obj['success'] = true;
    $obj['info'] = "商品已加入購物車";
    $obj['count_products'] = count($_SESSION['cart']);
}


//告訴前端，回傳格式為 json
header("Content-Type: application/json");

//輸出 json 格式，供 ajax 取得 response 的資訊
echo json_encode($obj, JSON_UNESCAPED_UNICODE);
