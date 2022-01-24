<?php
//匯入資料庫
require_once 'db.inc.php';

//預設訊息
$obj = [];
$obj['success'] = false;
$obj['info'] = '註冊失敗';


//確認所有傳過來的表單資料是否完整
if (
    isset($_POST['name']) &&
    isset($_POST['email']) &&
    isset($_POST['pwd']) 
) {
    
    //設定密碼雜湊值
    $pwd = sha1($_POST['pwd']);

    //產生驗證碼
    $verified_code = md5(date("YmdHis"));

    
    try {
        //新增使用者(先不新增地址)
        $sql = "INSERT INTO `users` (`name`, `email`, `pwd`, `verified_code`) 
            VALUES (
                '{$_POST['name']}',
                '{$_POST['email']}',
                '{$pwd}',
                '{$verified_code}'
            ) ";
        
        //執行SQL語法
        $stmt = $pdo->query($sql);
        
        //判斷是否寫入資料
        if ($stmt->rowCount() > 0) {
            //修改預設訊息
            $obj['success'] = true;
            $obj['info'] = '註冊成功';

            /**
             * 開啟 session，準備在註冊成功時，建立 email 在 session 當中，
             * 之後會透過 $_SESSION['email'] 作為訂單成立 (寫入訂單資料表) 前的判斷，
             * 有 $_SESSION['email'] 就可以新增訂單和訂單明細，
             * 沒有就請你登入，或是註冊帳號。
             */

            session_start();

            //建立session資料
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['pwd'] = $pwd;
          

        }
        
    } catch (PDOException $e) { //$e為錯誤訊息
        /**
         * $pdo->errorInfo() 內容
         * [
         *     "23000", 
         *     1062, 
         *     "Duplicate entry 'abc@abc.abc' for key 'PRIMARY'"
         * ]
         * 
         * 參考連結
         * https://mariadb.com/kb/en/mariadb-error-codes/
         */

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
