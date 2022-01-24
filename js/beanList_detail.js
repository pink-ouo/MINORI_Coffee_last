//讓數字加入千分位, 要再轉成數字，避免無法計算
function formatPrice(price){
  //方法一
  // return String(price)
  // .split('')
  // .reverse()
  // .reduce((prev, next, index) =>{
  //     return(index % 3 ? next : next + ',') + prev;
  // });

  //方法二
  return String(price).replace(/\B(?=(\d{3})+(?!\d))/g, ',');
}

//減少商品數量
$('button#pc_minus').click(function (event) {
  let input_qty = $('input#qty');
  if (parseInt(input_qty.val()) - 1 < 1) return false;
  input_qty.val(parseInt(input_qty.val()) - 1);
});

//增加商品數量
$('button#pc_plus').click(function (event) {
  let input_qty = $('input#qty');
  input_qty.val(parseInt(input_qty.val()) + 1);
});

//加入商品至購物車
$('button#btn_set_cart').click(function (event) {

  // 取得btn的jq物件
  let btn = $(this);
  // 送出POST請求，加入購物車
  let objProduct = {
    prod_id: btn.attr('data-prod-id'),
    prod_name: btn.attr('data-prod-name'),
    prod_price: btn.attr('data-prod-price'),
    //要送最後被選擇的
    prod_times: $('input#pc-size:checked').attr('data-prod-times'),
    prod_size: $('input#pc-size:checked').val(),
    prod_grind: $('input#pc-grind:checked').val(),
    prod_qty: $('input#qty').val()
  };
  $.post('setCart.php', objProduct, function (obj) {
    if (obj['success']) {
      alert(`商品已加入購物車`);

      //之後會回傳 obj['count_products']，放到網頁上
      $('span#count_products').text(obj['count_products']);

      //重新整理讓count_products可以計算
      location.reload();
    }
    console.log(obj);
  }, 'json');

});

// 立即購買
$('button#pc-asapBuy').click(function (event) {
  // 取得btn的jq物件
  let btn = $(this);
  // 送出POST請求，加入購物車
  let objProduct = {
    prod_id: btn.attr('data-prod-id'),
    prod_name: btn.attr('data-prod-name'),
    prod_price: btn.attr('data-prod-price'),
    prod_times: $('input#pc-size:checked').attr('data-prod-times'),
    prod_size: $('input#pc-size:checked').val(),
    prod_grind: $('input#pc-grind:checked').val(),
    prod_qty: $('input#qty').val(),
     
  };
  // console.log(objProduct);
  
  $.post('setCart.php', objProduct, function (obj) {
    if (obj['success']) {
      alert(`商品已加入購物車`);

      //之後會回傳 obj['count_products']，放到網頁上
      $('span#count_products').text(obj['count_products']);

      //重新整理讓count_products可以計算
      location.href='shoppingCart_page.php';
    }
    console.log(obj);
  }, 'json');

});

//重量的active(checked在php裡)  磨豆的checked和active 彼此不互相衝突可以寫在一起
$(document).ready(function(){
  $('input#pc-size:eq(0)').parent().addClass("active",'');

  $('input[name="prod_size"]').click(function(event){
    // removeClass('active');
    $(this).parent().addClass('active');
    $(this).parent().parent().siblings().children().removeClass('active');
    // console.log('hi'); 
  })


  $('input#pc-grind:eq(0)').attr("checked",'');
  // 檢查是否有選到
  // alert($('input#pc-grind').length);

  //針對input的父層的label的class加入active
  $('input#pc-grind:eq(0)').parent().addClass("active",true);

  $('input[name="prod_grind"]').click(function(event){
    // console.log('hi');
    $(this).parent().addClass('active');
    //先回到上兩層的div，選取siblings的div中的所有label(children)
    $(this).parent().parent().siblings().children().removeClass('active');
  });

});

//相關商品
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  spaceBetween: 0,
  slidesPerGroup: 1,
  loop: true,
  loopFillGroupWithBlank: true,

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});


//選擇磅數更改價格
let input_prod_price = $('input[name="detail_prod_price"]');
// console.log(input_prod_price);

//從name進行選取而非id
$('input.prod_size').click(function(event){
  // console.log($(this).closest('.hc-process-control').index());
  //無法直接從$(this)裡進行選擇，因為labal裡面只有一個值所以出來都只會是0，要從最接近的div的.hc-process-control選擇，這時btn出來的順序就會是1,2,3(0是hc-products-list-secondTitle)
  let times = $(this).closest('.hc-process-control').index();
  //times的值需將原本為3的值定義為4，其餘1,2就按照index()取出的值就好
  // ?是if :是else
  times = (times === 3)? 4: times;
  
  num=input_prod_price.val().toString();
  num=num.replace(/,/gi, '');
  num=parseInt(num);
  $('span#detailProdPrice').text( formatPrice(num* times));

  // console.log(a);
})



//直接將button寫死

// $('input#pc-size:eq(2)').click(function(event){
//   $('span#detailProdPrice').text( input_prod_price.val() * 4);
// })

// $('input#pc-size:eq(1)').click(function(event){
//   $('span#detailProdPrice').text( input_prod_price.val() * 2);
// })


// $('input#pc-size:eq(0)').click(function(event){
//   $('span#detailProdPrice').text( input_prod_price.val());
// })






