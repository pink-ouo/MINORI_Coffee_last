//讓數字加入千分位,
function formatPrice(price) {
    return String(price)
        .split('')
        .reverse()
        .reduce((prev, next, index) => {
            return (index % 3 ? next : next + ',') + prev;
        });
}

//增加商品數量(購物車)(同時對加減btn做判斷)
$('button.btn_plus, button.btn_minus').click(function (event) {
    // 計算數量
    let btn = $(this);
    let index = btn.attr('data-index');
    let prod_price = btn.attr('data-prod-price');
    let input_qty = $(`input.qty[data-index="${index}"]`);
    let prod_times = btn.attr('data-prod-times');
    //透過btn的長度作為判斷true 或是false，btn_plus的順序為最後一個next()為0，所以length為0當作false判斷
    if (btn.next().length) {
        if (parseInt(input_qty.val()) - 1 < 1) return false;
        input_qty.val(parseInt(input_qty.val()) - 1);
    }
    else {
        input_qty.val(parseInt(input_qty.val()) + 1);
    }
    console.log(input_qty);

    //修改商品金額
    $(`span[data-index="${index}"]`).text(formatPrice(parseInt(input_qty.val()) * prod_price * prod_times));

    let total = 0;
    let cartage = 0;

    // 更新總計  取得每一個index的element
    $(`input.qty`).each(function (index, element) {
        total += (parseInt($(element).val()) * $(element).attr('data-prod-price') * $(element).attr('data-prod-times'));
        // console.log(total);
    });


    if (total > 1300) {
        cartage = 0
    } else {
        cartage = 120;
    }

    $('span#total').text(formatPrice(total));
    $('span#cartage').text(cartage);

    let difference = 0;
    if (total > 1300) {
        $('span#difference').addClass('pc-hide');
    } else {
        $('span#difference').removeClass('pc-hide');
        difference = 1300 - total;
    }
    $('span#difference').text(difference);

    let amountTotal = total + cartage;
    $('span#amountTotal').text(formatPrice(amountTotal));
    $('#inputAmountTotal').val(amountTotal);
});

//減少商品數量(購物車)(原始德倫老師版)
// $('button.btn_minus').click(function (event) {
// let btn = $(this);
// let index = btn.attr('data-index');
// let prod_price = btn.attr('data-prod-price');
// let input_qty = $(`input.qty[data-index="${index}"]`);
// let prod_times = btn.attr('data-prod-times');
// if (parseInt(input_qty.val()) - 1 < 1) return false;
// input_qty.val(parseInt(input_qty.val()) - 1);

// //修改商品金額
// $(`span[data-index="${index}"]`).text(parseInt(input_qty.val()) * prod_price * prod_times);

// let total = 0;
// let cartage = 0;

// // 更新總計
// $(`input.qty`).each(function (index, element) {
//     total += (parseInt($(element).val()) * $(element).attr('data-prod-price') * $(element).attr('data-prod-times'));
// });

// if (total > 1300) {
//     cartage = 0
// } else {
//     cartage = 120;
// }

// $('span#total').text(total);
// $('span#cartage').text(cartage);

// let difference = 0;

// if (total > 1300) {
//     $('span#difference').addClass('pc-hide');
// } else {

//     $('span#difference').removeClass('pc-hide');
//     difference = 1300 - total;
// }
// $('span#difference').text(difference);

// let amountTotal = total + cartage;
// $('span#amountTotal').text(amountTotal);
// });

//刪除購物車內商品
$('a.delete').click(function (event) {
    event.preventDefault();

    //取得刪除用的購物車索引
    let index = $(this).attr('data-index');

    $.get('deleteItem.php', { index: index }, function (obj) {
        if (obj['success']) {
            location.reload();
        } else {
            alert(`${obj['info']}`);
        }
        console.log(obj);
    }, 'json');

});


//確認優惠代碼是否可用
$('a#check_coupon_code').click(function (event) {
    event.preventDefault();

    //判斷是否登入帳號
    let session_check = $('#check_session').val();
    console.log(session_check);

    if (session_check === '0') {
        alert(`請先登入帳號`);
        return false;
    }

    //取得優惠代碼
    let code = $('input[name="coupon_code"]').val();



    //如果代碼為空，就不往下執行
    if (code == '') {
        alert(`請輸入優惠代碼`);
        return false;
    };

    $.post("checkCoupon.php", { code: code }, function (obj) {
        alert(`${obj['info']}`);
        // alert(`${obj['percentage']}`);

        //判斷優惠券是否正確，如果失敗就存取原本的總計(total)價格(目前是德倫老師版下一頁的php會計算，如果是eason老師版需要php也計算才可以把值拿到下一頁)
        if (obj['success']) {
            let amountTotal = $('span#amountTotal').text();
            amountTotal = amountTotal.replace(',', '');
            amountTotal_m = Math.ceil(parseInt(amountTotal) * obj['percentage']);
            $('span#amountTotal').text(formatPrice(amountTotal_m));
        } else {
            $('span#amountTotal').text($('span#total').text());
            // $('#inputAmountTotal').val(amountTotal);

        }

        console.log(obj['success']);
        // console.log(formatPrice(amountTotal_m));
        // $('#inputAmountTotal').val(amountTotal_m);

        // alert(amountTotal_m);
    }, 'json')
});

//填入收件人資訊
$('input#member_info').click(function (event) {
    // console.log('hi');

    $.get('autofillin.php', function (obj) {

        $('input#r-email').val(obj.data.email);
        $('input#r-name').val(obj.data.name);
        $('input#r-phnum').val(obj.data.phone_number);
        $('input#r-address').val(obj.data.address);

        if (obj['success']) {
            // alert(`填入會員資料成功`);
        } else {
            alert(`${obj['info']}`);
        }
    }, 'json');
});

$('button#paymentCheck').on('click', function () {
    
    let prod_check = $('#total').text();

    if (prod_check == 0) {
        Swal.fire({
            icon: 'warning',
            title: '購物車目前沒有商品',
            text: '請先將商品加入購物車',
            confirmButtonColor: '#CC9A06',
            footer: '<a href="http://localhost/MINORI_Coffee_last/beanList_page.php?cat_id=1&sub_cat_id=9">立刻挑選商品</a>'
        })
        return;
    }
         //判斷是否登入帳號
    let session_check = $('#check_session').val();
    if (session_check === '1') {
        //登入帳號的情況下點擊送值的btn
        $('#paymentSubmit').click();
        return;
    }
        Swal.fire({
            icon: 'warning',
            title: '尚未登入帳號',
            text: '請先登入帳號或註冊帳號',
            confirmButtonColor: '#CC9A06',
            footer: '<a href="loginSignup.php">登入/註冊</a>'
        })
});




