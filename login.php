<?php
//匯入資料庫
require_once 'db.inc.php';

//預設訊息
$obj['success'] = false;
$obj['info'] = '登入失敗';

//確認傳遞變數
if( isset($_POST['email']) && isset($_POST['pwd']) ){
    //設定密碼雜湊值
    $pwd = sha1($_POST['pwd']);

    try{
        //查詢使用者
        $sql = "SELECT `email`,`name` , `birthdate` , `address`, `phone_number`
                FROM `users` 
                WHERE `email` = '{$_POST['email']}' 
                AND `pwd` = '{$pwd}' 
                AND `isActivated` = 1 " ;

        //執行sql
        $stmt = $pdo->query($sql);

        //判斷是否有資料
        if($stmt->rowCount() > 0){
            //修改預設值
            $obj['success'] = true;
            $obj['info'] = '登入成功';

            //取得使用者資料 (obj 型態)
            $objUser= $stmt->fetch();

            //開啟 session
            session_start();

            //建立 session 資料
            $_SESSION['email'] = $objUser['email']; 
            $_SESSION['name'] = $objUser['name']; 
            $_SESSION['birthdate'] = $objUser['birthdate'];
            $_SESSION['address'] = $objUser['address'];
            $_SESSION['phone_number'] = $objUser['phone_number'];
            $_SESSION['pwd'] = $pwd;


        }
    }catch (PDOException $e){ //資料庫的關係加上PDO
        switch ($pdo->errorInfo()[1]) {  //[1]為上面陣列中的1062
            case 1062:
                $obj['info'] = '此帳號已經註冊';
            break;

            case 1064:
                $obj['info'] = 'SQL語法錯誤';
            break;
        }
    }
}



//告訴前端，回傳格式為 json
header("Content-Type: application/json");

//輸出 json 格式，供 ajax 取得 response 的資訊
echo json_encode($obj, JSON_UNESCAPED_UNICODE);