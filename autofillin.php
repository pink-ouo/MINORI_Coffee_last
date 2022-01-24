<?php require_once 'db.inc.php';
session_start();

$obj = [];
$obj['success'] = false;
$obj['info'] = '填入失敗';

if(isset($_SESSION['email'])){
    $sql = "SELECT`name`, `email`, `address`, `phone_number` FROM`users` WHERE`email` = '{$_SESSION['email']}' ";
    $stmt = $pdo->query($sql);
    if($stmt->rowCount() > 0){
        $arr = $stmt->fetch();
        $obj['data'] = $arr;
        $obj['success'] = true;
        $obj['info'] = '填入會員資料成功';
    };
};

//告訴前端，回傳格式為 json
header("Content-Type: application/json");

//輸出 json 格式，供 ajax 取得 response 的資訊
echo json_encode($obj, JSON_UNESCAPED_UNICODE);

