$('#btn-renew').click(function (event) {
    //避免元素的預設事件觸發
    event.preventDefault();

    //各自將 input 帶到變數中
    let input_name = $('input#name');
    let input_birthdate = $('input#birthdate');
    let input_phone_number = $('input#phone_number');
    let input_address = $('input#address');
    let input_email = $('input#email');
    let input_pwd = $('input#pwd');
    //送出POST請求， 更新會員資料
    let objUser = {
        name: input_name.val(),
        birthdate: input_birthdate.val(),
        phone_number: input_phone_number.val(),
        address: input_address.val(),
        email: input_email.val(),
        pwd: input_pwd.val()
    };

    //header("Content-Type: application/json");因為有header所以直接傳回物件不需要再轉換
    $.post("renew.php", objUser, function (obj) {
        if (obj['success']) {
            //成功訊息
            alert(`${obj['info']}`);

            //當成功訊息執行時，等1秒後，執行自訂程式
            if (obj['coupon']) {
                setTimeout(function () {
                    // location.reload();
                    location.href = 'couponGet.php';
                }, 1000);
            }
        } else {
            alert(`${obj['info']}`);
        }
        console.log(obj);
    }, 'json');
})
