<?php require_once 'db.inc.php'; ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="./lib/awesome.all.min.css">
    <!-- bootstrap@4.6 -->
    <link rel="stylesheet" href="./lib/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" href="./css/index.css">
    <!-- news css -->
    <link rel="stylesheet" href="./css/faq.css">
</head>

<?php require_once 'tpl/header.inc.php' ?>
    <!-- main page -->
    <div class="container-fluid main-page">
        <div class="row">
            <!-- leftSide page -->
            <div class="left-side">
                <!-- ================================================= 新頁面加入 -->
                <div class="left-side-push100">
                    <div class="hc-left-side-bg"
                        style="background: url(./img/coffee-class_01.jpg) no-repeat; background-size: cover;">
                        <!-- ======================================================================================= add content -->
                        <div class="left-div">
                            <a class="yi-p" href="#yi_guide">
                                <p>購物流程</p>
                            </a>
                            <a class="yi-p" href="#yi_return">
                                <p>退換貨</p>
                            </a>
                            <a class="yi-p" href="#yi_qa">
                                <p>Q&A</p>
                            </a>
                        </div>
                        <!-- ============================= -->
                    </div>
                </div>
                <!-- ================================================= -->
            </div>
            <!-- rightSide page -->
            <div class="right-side">
                <div class="right-side-content" style="background: url(./img/bg-dark.png) repeat;">
                    <!-- right header -->
                    <div class="right-side-header">
                    <!-- main icon  每一頁都要放不更動-->
                    <?php require_once 'tpl/mainicon.inc.php' ?>
                    <!-- sign out  每一頁都要放不更動-->
                    <?php require_once 'tpl/signout.inc.php' ?>
                </div>
                    <!-- ================================================= 新頁面加入 -->
                    <div class="hc-news-products">
                        <!-- box -->
                        <div class="hc-box-title" style="background: url(./img/bg-gold.jpg);">
                        </div>
                        <!-- news products -->
                        <div class="hc-news-products-container hc-shopping-bg">
                            <!-- page title -->
                            <div class="hc-page-title">
                                <a href="javascript:;" class="hc-page-title-menu">
                                    <span>首頁</span>
                                </a>
                                <span>/</span>
                                <a href="javascript:;" class="hc-page-title-menu">
                                    <span>常見問題</span>
                                </a>
                            </div>
                            <!-- bean products -->
                            <div class="hc-coffee-products-content">
                                <div class="hc-coffee-products-content-container">
                                    <div class="hc-main-title-control d-flex justify-content-between">
                                        <!-- title -->
                                        <div class="hc-main-title-en d-flex mb-4">Q&A</div>
                                        <!-- back -->
                                        <!-- <div class="hc-back">
                                            <div class="hc-back-icon-control">
                                                <a href="landing_page.html">
                                                    <div>
                                                        <span class="hc-back-text">BACK to MINORI</span>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="hc-back-line"></div>
                                                        <div class="icon hc-back-icon">
                                                            <i class="fas fa-chevron-right"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div> -->
                                    </div>
                                    <!-- products content -->
                                    <div class="hc-products-grp">
                                        <!-- product grp 1 -->
                                        <div class="hc-products-grp-control d-flex justify-content-center">
                                            <!-- 購物流程 -->
                                            <div class="hc-news-section">
                                                <div class="hc-products-title">
                                                    <h5 id="yi_guide">購物流程</h5>
                                                </div>
                                                <div class="yi-shopping">
                                                    <img src="./img/icon_shopping_bag.png" alt="">
                                                </div>
                                                <p class="yi-shopping-p">選擇商品加入購物車</p>
                                                <div class="yi-shopping-row">
                                                    <div class="yishop">
                                                        <div class="yi-shopping">
                                                            <img src="./img/icon_login.png" alt="">
                                                        </div>
                                                        <p class="yi-shopping-p">選擇商品加入購物車</p>
                                                    </div>
                                                    <div class="yishop">
                                                        <img class="yi-right-icon" src="./img/icons8-right-48.png"
                                                            alt="">
                                                    </div>
                                                    <div class="yishop">
                                                        <div class="yi-shopping">
                                                            <img src="./img/icon_checklist.png" alt="">
                                                        </div>
                                                        <p class="yi-shopping-p">選擇商品加入購物車</p>
                                                    </div>
                                                    <div class="yishop">
                                                        <img class="yi-right-icon" src="./img/icons8-right-48.png"
                                                            alt="">
                                                    </div>
                                                    <div class="yishop">
                                                        <div class="yi-shopping">
                                                            <img src="./img/icon_credit_card.png" alt="">
                                                        </div>
                                                        <p class="yi-shopping-p">選擇商品加入購物車</p>
                                                    </div>
                                                    <div class="yishop">
                                                        <img class="yi-right-icon" src="./img/icons8-right-48.png"
                                                            alt="">
                                                    </div>
                                                    <div class="yishop">
                                                        <div class="yi-shopping">
                                                            <img src="./img/icon_done_list.png" alt="">
                                                        </div>
                                                        <p class="yi-shopping-p">選擇商品加入購物車</p>
                                                    </div>

                                                </div>

                                                <div class="hc-news-section">
                                                    <div class="hc-products-title">
                                                        <h5 id="yi_return">退換貨</h5>
                                                    </div>
                                                    <div class="yi-products-h6">
                                                        <p>【退換貨須知】</p>
                                                        <p class="yi-shopping-p">
                                                            一、根據消費者保護法之規定，您享有商品七天猶豫期的權益(由您收到貨的次日起起算,
                                                            含國定例假日)，猶豫期非試用期，商品本身需要全新未開封，且包裝完整的狀態，才能辦理退換貨。若商品已開封，恕無法辦理退換貨手續。超過七天亦不接受退換貨(包含貨品如有短少，亦無法為您補寄)，護唇膏相關產品依消保法屬個人衛生產品，拆封後恕不接受退貨。
                                                        </p>
                                                        </br>
                                                        <p class="yi-shopping-p">
                                                            二、不接受部分退貨，欲退貨訂單中任一商品本身一經開封，恕無法辦理退貨，退貨商品必須保持完整性，將所有商品、贈品、附件、包裝、隨附文件或資料、實體發票、出貨單一併退回，以確保您的退貨的權益。若退貨商品與訂單有所出入，未將此筆訂單的所有商品(含贈品)等妥善包裝並完整寄回，需請您自費郵資補件。
                                                        </p>
                                                        </br>
                                                        <p class="yi-shopping-p">三、若原訂單達免運優惠，退貨後訂單金額未達免運門檻，需扣除原運費(郵寄$55
                                                            ; 7-11取貨$60) 。</p>
                                                        </br>
                                                        <p class="yi-shopping-p">
                                                            四、當您填妥以下退換貨資料並送出後，即代表同意我們的退換貨原則，並接受我們代為處理發票作廢及相關的後續處理事宜。</p>
                                                        <p>【退換貨步驟說明】</p>
                                                        <p class="yi-shopping-p"> 一、 請填寫以下退換貨資料，填寫完畢後即完成退貨申請。</p>
                                                        <div class="row yi-myrow">
                                                            <form class="form-r">
                                                                <div class="form-group">
                                                                    <p class="yi-forn-p">訂單編號</p>
                                                                    <input type="text" class="form-control" id="input"
                                                                        placeholder="請輸入訂單編號">
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <p class="yi-forn-p">姓</p>
                                                                        <input type="email" class="form-control"
                                                                            id="input" placeholder="請輸入姓">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <p class="yi-forn-p">名字</p>
                                                                        <input type="password" class="form-control"
                                                                            id="請輸入名字" placeholder="請輸入名字">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <p class="yi-forn-p">地址</p>
                                                                    <input type="text" class="form-control"
                                                                        id="inputAddress" placeholder="請輸入地址">
                                                                </div>
                                                                <div class="form-group">
                                                                    <p class="yi-forn-p">聯絡電話</p>
                                                                    <input type="text" class="form-control"
                                                                        id="inputAddress2" placeholder="請輸入聯絡窗口的聯絡電話">
                                                                </div>
                                                                <div class="form-group">
                                                                    <p class="yi-forn-p">退換貨原因</p>
                                                                    <input type="text" class="form-control"
                                                                        id="inputAddress" placeholder="請輸入退換貨貨原因">
                                                                </div>
                                                                <button type="button" class="btn btn-warning yi-mybtn"
                                                                    data-toggle="modal" data-target="#staticBackdrop">送出
                                                                </button>
                                                            </form>
                                                        </div>
                                                        </br>
                                                        <p class="yi-shopping-p"> 二、完整包裝退換貨商品：退貨 –
                                                            請將商品(包含所有贈品)、出貨單及紙本發票(如您有索取)等所有資料一併包裝。換貨 –
                                                            請將商品及出貨單完整包裝。(不須附回發票)。</p>
                                                        </br>
                                                        <p class="yi-shopping-p">
                                                            三、本公司將與您聯繫確認退換貨包裹之收取時間，或請您寄送至：(106)台北市大安區復興南路一段390號2樓 MINORI coffee
                                                            收。</p>
                                                        </br>
                                                        <p class="yi-shopping-p">四、待本公司確認貨品已取回，並檢視無誤後，會立即為您辦理後續的退款或換貨。
                                                        </p>
                                                        <p>【退款說明】</p>
                                                        <p class="yi-shopping-p">
                                                            一、一旦完成所有的退貨手續，我們也確實收到您退回的所有商品，且商品是完整無損的狀態，我們將會進行線上刷退；退款實際入帳日期，依各發卡銀行入帳日不同有所差異，請您洽詢發卡銀行確認實際入帳日。
                                                        </p>
                                                        </br>
                                                        <p class="yi-shopping-p">
                                                            二、若您使用其他方式付款，必須請您提供正確的匯款帳號，我們將於15天內將款項退到您的帳戶。若您提供之匯款帳號填寫有誤，將無法辦理退款。
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="yi-section">
                                        <div class="yi-news-section">
                                            <div class="hc-products-title">
                                                <h5 id="yi_qa">Q&A</h5>
                                            </div>
                                            <div class="accordion" id="accordionExample">
                                                <div class="card">
                                                    <div class="card-header yi-card-header" id="headingOne">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left yi-btn-link"
                                                                type="button" data-toggle="collapse"
                                                                data-target="#collapseOne" aria-expanded="true"
                                                                aria-controls="collapseOne">
                                                                ▼ Q：請問有實體店面嗎?
                                                            </button>
                                                        </h2>
                                                    </div>

                                                    <div id="collapseOne" class="collapse show"
                                                        aria-labelledby="headingOne"
                                                        data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            A：目前咖啡豆販售皆以線上門市販售，若您對商品有興趣，可逕洽咖啡地圖上所示之合作店家，品嘗您喜歡的口味後，再進行購買。
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header yi-card-header" id="headingTwo">
                                                        <h2 class="mb-0">
                                                            <button
                                                                class="btn btn-link btn-block text-left collapsed yi-btn-link"
                                                                type="button" data-toggle="collapse"
                                                                data-target="#collapseTwo" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                ▼ Q：可以合併訂單嗎?
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse"
                                                        aria-labelledby="headingTwo"
                                                        data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            A：由於系統無法合併付款與合併訂單出貨，如要訂購多樣商品，請於同一購物車結帳，若分開結帳將產生二筆以上之訂單及運費，請務必留意。
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header yi-card-header" id="headingThree">
                                                        <h2 class="mb-0">
                                                            <button
                                                                class="btn btn-link btn-block text-left collapsed yi-btn-link"
                                                                type="button" data-toggle="collapse"
                                                                data-target="#collapseThree" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                ▼ Q：可以取消已經付款之訂單嗎?
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseThree" class="collapse"
                                                        aria-labelledby="headingThree"
                                                        data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            A：若要取消已付款完成之訂單，請至會員中心->訂單查詢->訂單詳細資訊頁面按取消訂單。
                                                            若商品已經在出貨中狀態則無法直接取消訂單，請在收到商品後辦理退貨服務。
                                                            若對於取消訂單有疑問可以直接來信Minori@gmail.com或撥打客服電話09123456789，由專人來協助您。
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header yi-card-header" id="headingFour">
                                                        <h2 class="mb-0">
                                                            <button
                                                                class="btn btn-link btn-block text-left collapsed yi-btn-link"
                                                                type="button" data-toggle="collapse"
                                                                data-target="#collapseFour"
                                                                aria-expanded="false"
                                                                aria-controls="collapseFour">
                                                                ▼ Q：請問有哪些付款方式可選擇?
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseFour" class="collapse"
                                                        aria-labelledby="headingFour"
                                                        data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            A：目前我們僅提供信用卡方式結帳。
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header yi-card-header" id="headingFive">
                                                        <h2 class="mb-0">
                                                            <button
                                                                class="btn btn-link btn-block text-left collapsed yi-btn-link"
                                                                type="button" data-toggle="collapse"
                                                                data-target="#collapseFive"
                                                                aria-expanded="false"
                                                                aria-controls="collapseFive">
                                                                ▼ Q：請問有哪些出貨方式可選擇?
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseFive" class="collapse"
                                                        aria-labelledby="headingFive"
                                                        data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            A：為確保咖啡豆品質，目前僅有宅配運送方式。
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header yi-card-header" id="headingSix">
                                                        <h2 class="mb-0">
                                                            <button
                                                                class="btn btn-link btn-block text-left collapsed yi-btn-link"
                                                                type="button" data-toggle="collapse"
                                                                data-target="#collapseSix"
                                                                aria-expanded="false"
                                                                aria-controls="collapseSix">
                                                                ▼ Q：請問已報名之課程要怎麼辦理取消報名?
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseSix" class="collapse"
                                                        aria-labelledby="headingSix"
                                                        data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            A：
                                                            若要取消已報名之課程，請來信Minori@gmail.com或是撥打客服電話0912345678，並告知報名的課程名稱以及報名者的姓名和電話，會有專人協助您辦理取消課程。
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- ================================================= -->
                </div>
                <?php require_once 'tpl/foot.inc.php' ?>