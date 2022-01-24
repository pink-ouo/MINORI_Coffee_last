// 選擇生日
//放在try裡面就算失敗也不會報錯讓功能被卡住
try{
    $('input#birthdate').datepicker({
        dateFormat: 'yy-mm-dd'
    });
}
catch{

}
  
//註冊
$('button#btn_register').click(function (event) {
    //避免元素的預設事件觸發
    event.preventDefault();

    //各自將 input 帶到變數中
    let input_name = $('input#name');
    let input_birthdate = $('input#birthdate');
    let input_phone_number = $('input#phone_number');
    let input_address = $('input#address');
    let input_email = $('input#email');
    let input_pwd = $('input#pwd');

     //檢查姓名是否輸入
     if (input_name.val() == '') {
        input_name
        .addClass("border border-danger border-2")
        .tooltip({
            title:"請輸入姓名",
            placement: "top"
        })
        .tooltip('show');
        return false;
    } else{
        input_name
        .removeClass("border border-danger border-2")
        .tooltip()
        .tooltip('dispose');
    }

    //判斷email 是否符合自訂格式
    let re = /\S+@\S+(\.\S+)+/;   // \S 代表非空格
    if (!re.test(input_email.val())) {
        input_email
            .addClass("border border-danger border-2")
            .tooltip({
                title: "請填寫完整的E-mail",
                placement: "top"
            })
            .tooltip('show');
        return false;
    } else {
        input_email
            .removeClass("border border-danger border-2")
            .tooltip()
            .tooltip('dispose');
    }

    //檢查密碼是否輸入
    if (input_pwd.val() == '') {
        // alert(`請輸入密碼`);
        // return false;
        input_pwd
        .addClass("border border-danger border-2")
        .tooltip({
            title:"請輸入密碼",
            placement: "top"
        })
        .tooltip('show');
        return false;
    } else{
        input_pwd
        .removeClass("border border-danger border-2")
        .tooltip()
        .tooltip('dispose');
    }

    //檢查生日是否輸入
    if (input_birthdate.val() == '') {
        alert(`請輸入生日`);
        return false;
    }

    //檢查手機是否輸入
    if (input_phone_number.val() == '') {
        alert(`請輸入手機號碼`);
        return false;
    }

    //檢查地址是否輸入
    if (input_address.val() == '') {
        alert(`請輸入通訊地址`);
        return false;
    }

    //送出POST請求， 註冊帳號
    let objUser = {
        name: input_name.val(),
        birthdate: input_birthdate.val(),
        phonenum: input_phone_number.val(),
        address: input_address.val(),
        email: input_email.val(),
        pwd: input_pwd.val()
    };

    //header("Content-Type: application/json");因為有header所以直接傳回物件不需要再轉換
    $.post("insertUser.php", objUser, function (obj) {
        if (obj['success']) {
            //成功訊息
            alert(`${obj['info']}`);

            //當成功訊息執行時，等1秒後，執行自訂程式
            setTimeout(function(){
                // location.reload();
                location.href = 'signupFinish.php';
            }, 1000);
        } else {
            alert(`${obj['info']}`);
        }
        console.log(obj);
    }, 'json');
});

//登錄完整資料
$('a#btn_setting').click(function (event) {

    //避免元素的預設事件觸發
    event.preventDefault();

    //各自將 input 帶到變數中
    let input_name = $('input#name');
    let input_birthdate = $('input#birthdate');
    let input_phone_number = $('input#phone_number');
    let input_address = $('input#address');
    let input_email = $('input#email');
    let input_pwd = $('input#pwd');

    //檢查姓名是否輸入
    if (input_name.val() == '') {
        // alert(`請輸入姓名`);
        // return false;
        input_name
        .addClass("border border-danger border-2")
        .tooltip({
            title:"請輸入姓名",
            placement: "top"
        })
        .tooltip('show');
        return false;
    } else{
        input_name
        .removeClass("border border-danger border-2")
        .tooltip()
        .tooltip('dispose');
    }

    //檢查生日是否輸入
    if (input_birthdate.val() == '') {
        input_birthdate
        .addClass("border border-danger border-2")
        .tooltip({
            title:"請輸入生日",
            placement: "top"
        })
        .tooltip('show');
        return false;
    } else{
        input_birthdate
        .removeClass("border border-danger border-2")
        .tooltip()
        .tooltip('dispose');
    }

    //檢查手機是否輸入
    if (input_phone_number.val() == '') {
        input_phone_number
        .addClass("border border-danger border-2")
        .tooltip({
            title:"請輸入手機號碼",
            placement: "top"
        })
        .tooltip('show');
        return false;
    } else{
        input_phone_number
        .removeClass("border border-danger border-2")
        .tooltip()
        .tooltip('dispose');
    }

    //檢查地址是否輸入
    if (input_address.val() == '') {
        input_address
        .addClass("border border-danger border-2")
        .tooltip({
            title:"請輸入地址",
            placement: "top"
        })
        .tooltip('show');
        return false;
    } else{
        input_address
        .removeClass("border border-danger border-2")
        .tooltip()
        .tooltip('dispose');
    }

    //判斷email 是否符合自訂格式
    let re = /\S+@\S+(\.\S+)+/;   // \S 代表非空格
    if (!re.test(input_email.val())) {
        input_email
            .addClass("border border-danger border-2")
            .tooltip({
                title: "請填寫完整的E-mail",
                placement: "top"
            })
            .tooltip('show');
        return false;
    } else {
        input_email
            .removeClass("border border-danger border-2")
            .tooltip()
            .tooltip('dispose');
    }

    // 檢查密碼是否輸入
    if (input_pwd.val() == '') {
        // alert(`請輸入密碼`);
        // return false;
        input_pwd
        .addClass("border border-danger border-2")
        .tooltip({
            title:"請輸入密碼",
            placement: "top"
        })
        .tooltip('show');
        return false;
    } else{
        input_pwd
        .removeClass("border border-danger border-2")
        .tooltip()
        .tooltip('dispose');
    }

    
    //送出POST請求， 登錄帳號
    let objUser = {
        name: input_name.val(),
        birthdate: input_birthdate.val(),
        phone_number: input_phone_number.val(),
        address: input_address.val(),
        email: input_email.val(),
        pwd: input_pwd.val()
    };

    //header("Content-Type: application/json");因為有header所以直接傳回物件不需要再轉換
    $.post("insertUserSetting.php", objUser, function (obj) {
        if (obj['success']) {
            //成功訊息
            alert(`${obj['info']}`);

            //當成功訊息執行時，等1秒後，執行自訂程式
            setTimeout(function(){
                // location.reload();
                location.href = 'couponGet.php';
            }, 1000);
        } else {
            alert(`${obj['info']}`);
        }
        console.log(obj);
    }, 'json');
});


//登入  
//要先fn+ctrl+F5 清除快取
$('button#btn_login').click(function (event) {
    event.preventDefault();

    // 各自將 input 帶入變數中
    let input_email = $('input#email_login');
    let input_pwd = $('input#pwd_login');

    //檢查 email 是否輸入
    let re = /\S+@\S+(\.\S+)+/;   // \S 代表非空格
    if (!re.test(input_email.val())) {
        input_email
            .addClass("border border-danger border-2")
            .tooltip({
                title: "請填寫完整的E-mail",
                placement: "top"
            })
            .tooltip('show');
        return false;
    } else {
        input_email
            .removeClass("border border-danger border-2")
            .tooltip()
            .tooltip('dispose');
    }

    //檢查 pwd 是否輸入
    if (input_pwd.val() == '') {
       // alert(`請輸入密碼`);
        // return false;
        input_pwd
        .addClass("border border-danger border-2")
        .tooltip({
            title:"請輸入密碼",
            placement: "top"
        })
        .tooltip('show');
        return false;
    } else{
        input_pwd
        .removeClass("border border-danger border-2")
        .tooltip()
        .tooltip('dispose');
    }

    //送出post請求 payload
    let objUser = {
        email: input_email.val(),
        pwd: input_pwd.val()
    };

    $.post("login.php", objUser, function (obj) {
        console.log('button#btn_login post');
        if (obj['success']) {
            //成功訊息
            alert(`${obj['info']}`);
            //當成功訊息執行時，等數秒，執行自訂程式
            setTimeout(function () {
                //回到登入前的上一頁
                history.back();
                // location.reload();
            }, 500);
        } else {
            alert(`${obj['info']}`);
        }
        console.log(obj);
    }, 'json');
});

//isActivated 要改為1 才可以成功登入

//登出
$('a#logout').on('click',function(event){
    event.preventDefault();

    $.get('logout.php', function(obj){
        if(obj['success']){
            alert(`${obj['info']}`);

            setTimeout(function() {
                location.href = 'landing_page.php';
                // location.reload();
            }, 500);
        }
    }, 'json');
});

// loginSignup頁進入註冊頁面
$('a#pc-signup').click(function(event){
    location.href = 'signupPage.php';
});
