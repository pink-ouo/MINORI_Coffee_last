<?php
//匯入資料庫
require_once 'db.inc.php';
session_start();

$obj = [];
$obj['success'] = false;
$obj['info'] = '會員資料更新失敗';



//確認所有傳過來的表單資料是否完整
if (
    isset($_POST['name']) &&
    isset($_POST['email']) &&
    isset($_POST['pwd'] )
) {
    $pwd = $_POST['pwd'];
    
    try {
        //更新會員資料
        $sql = "UPDATE `users` 
                SET `name` = '{$_POST['name']}',
                    `birthdate` = '{$_POST['birthdate']}',
                    `phone_number` = '{$_POST['phone_number']}',
                    `address` = '{$_POST['address']}',
                    `email` = '{$_POST['email']}',
                    `pwd` = '{$pwd}'
                WHERE `email` = '{$_SESSION['email']}'";
        //執行SQL語法
        $stmt = $pdo->query($sql);
        
        //判斷是否寫入資料
        if ($stmt->rowCount() > 0) {
            //修改預設訊息
            $obj['success'] = true;
            $obj['info'] = '會員資料更新成功';

            //更新成功執行
            // 用POST的email做判斷，如果更改email就會跳轉到領優惠券頁，雖然會有更改email就可以領的bug，但因為沒有會員id做判斷所以只能先這樣

            $sql="SELECT `code` FROM `coupon` WHERE `email` = '{$_POST['email']}'";
            $stmt=$pdo->query($sql);
            if($stmt->rowCount() > 0){
                $arr = $pdo->query($sql)->fetchAll();
                //選取第一個code出來做判斷，若不存在則代表沒有優惠碼
                $_SESSION['code'] = $arr[0]['code'];
            }else{
                //領取優惠碼
                $coupon_code = "WELCOME20OFF";
                $sqlCoupon = "INSERT INTO `coupon` (`email`, `code`, `percentage`)
                    VALUE('{$_POST['email']}', '{$coupon_code}', 0.8)";
                $pdo->query($sqlCoupon);
                //讓js頁面做調整
                $obj['coupon'] = true;
                $_SESSION['code'] = $coupon_code;
            } 

            //建立session資料
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['birthdate'] = $_POST['birthdate'];
            $_SESSION['address'] = $_POST['address'];
            $_SESSION['phone_number'] = $_POST['phone_number'];
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
                $obj['info'] = '更新失敗';
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
