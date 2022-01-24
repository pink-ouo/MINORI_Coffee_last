<?php
session_start();
require_once 'db.inc.php';

//預設訊息
$obj['success'] = false;
$obj['info'] = '取得代碼失敗';



//確認代碼是否存在
if(isset($_POST['code'])) {
    if(!isset($_SESSION['email'])){
        $obj['info'] = '請登入帳號';
        // return false;
    }

    try {
        //查詢代碼
        $sql = "SELECT `percentage`
                FROM `coupon`
                WHERE `email` = '{$_SESSION['email']}'
                AND `code` = '{$_POST['code']}'
                AND `isUsed` = 0";

        //執行$sql
        $stmt = $pdo->query($sql);

         //判斷代碼是否存在
         if( $stmt->rowCount() > 0){
            //修改預設訊息
            $obj['success'] = true;
            $obj['info'] = "確認成功";
            $obj['percentage'] = $stmt->fetch()['percentage'];
            
        }else {
            $obj['info'] = "此代碼無法使用";
        }
        
    }catch(PDOException $e) {
        switch($pdo->errorInfo()[1]) {
            case 1062:
                $obj['info'] = '此帳號已註冊';
                break;

            case 1064:
                $obj['info'] = 'SQL 語法錯誤';
                break;
        }
    }
}




//告訴前端，回傳格式為 json
header("Content-Type: application/json");

//輸出 json 格式，供 ajax 取得 response 的資訊
echo json_encode($obj, JSON_UNESCAPED_UNICODE);
