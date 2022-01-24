$(document).on('change', 'select#beanList_select', function(event){
    // window.location.search取從問號 (?) 開始的 URL的值
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    //get()是取得經由URLSearchParams將網頁變成物件後的值
    let url = `./beanList_page.php?cat_id=${urlParams.get('cat_id')}&sub_cat_id=${urlParams.get('sub_cat_id')}${$(this).find('option:selected').val()}`;
    location.href = url;
});

$(document).ready(function(){
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);

    if(urlParams.get('field') !== "" &&  urlParams.get('orderby') !== ""){
        let url = `&field=${urlParams.get('field')}&orderby=${urlParams.get('orderby')}`;
        $(`select#beanList_select option[value="${url}"]`).attr('selected', "");
        // alert(url);
    }
});



