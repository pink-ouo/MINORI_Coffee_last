<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINORI coffee</title>
    <!-- bootstrap@4.6 -->
    <link rel="stylesheet" href="./lib/bootstrap.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="./lib/awesome.all.min.css">
    <!--jquery UI-->
    <link rel="stylesheet" href="./lib/jquery-ui.css">
    <!-- swiper -->
    <link rel="stylesheet" href="./lib/swiper-bundle.min.css">
    <!-- splide 3.6.9 js -->
    <link rel="stylesheet" href="./lib/splide.min.css">
    <!-- css -->
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/login-and-signup.css">
    <link rel="stylesheet" href="./css/beanList_page.css">
    <link rel="stylesheet" href="./css/coffeeAccessories_page.css">
    <link rel="stylesheet" href="./css/couponGet.css">
    <link rel="stylesheet" href="./css/beanList_detail_page.css">
    <link rel="stylesheet" href="./css/shoppingCart_page.css">
    <link rel="stylesheet" href="./css/card.css">
    <link rel="stylesheet" href="./css/coupons_page.css">
    <link rel="stylesheet" href="./css/classpage.css">
    <link rel="stylesheet" href="./css/order_tracking_page.css">
    <link rel="stylesheet" href="./css/landing_page.css">
    <link rel="stylesheet" href="./css/news_page.css">
    <link rel="stylesheet" href="./css/about_page.css">
</head>



<body>
    <!-- header -->
    <header class="header">
        <!-- head-ly-top -->
        <div class="header-layerTop">
            <div class="header-container">
                <!-- icon top -->
                <div class="header-top-icon">
                    <div class="logo-img top-icon" style="width: 50px;">
                        <a href="landing_page.php">
                            <img src="./img/logo-m.png" alt="" style="width:100%;">
                        </a>
                    </div>
                    <div class="logo-btn top-icon" style="width: 50px; height: 50px;">
                        <!-- hamburger effect-->
                        <div class="hamburger-menu">
                            <input type="checkbox" id="menu-btn-check" style="display: none;" class="humburger">
                            <label for="menu-btn-check" class="menu-btn "><span></span></label>
                        </div>
                    </div>
                </div>
                <!-- icon bottom -->
                <div class="header-bottom-icon">
                    <div class="logo-img bottom-icon link-icon">
                        <a href="javascript:;"><i class="fab fa-facebook"></i></a>
                    </div>
                    <div class="logo-img bottom-icon link-icon">
                        <a href="javascript:;"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="logo-img bottom-icon link-icon">
                        <a href="javascript:;"><i class="fab fa-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- head-ly-bottom -->
        <div class="header-layerBottom menu">
            <div class="menu_container">
                <!-- list -->
                <div class="list">
                    <a class="list-title" href="about_page.php">關於我們</a>
                </div>
                <div class="list">
                    <a href="javascript:;">最新消息</a>
                </div>
                <?php if (!isset($_SESSION['name'])) { ?>
                    <div class="list">
                        <a href="loginSignup.php" id="memberCenter">會員中心</a>
                    </div>
                <?php } else { ?>
                    <div class="list">
                        <a href="memberData.php" id="memberCenter">會員中心</a>
                    </div>
                <?php } ?>
                <div class="list">
                    <a class="list-title" href="javascript:;">咖啡地圖</a>
                </div>
                <div class="list list-drop">
                    <div class="first-list">
                        <a href="javascript:;">所有商品</a>
                        <div class="icon list-icon"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    <ul class="list-drop-menu">
                        <li class="second-list">
                            <a href='http://localhost/MINORI_Coffee_last/beanList_page.php?cat_id=1'>豆單</a>
                        </li>
                        <li class="second-list">
                            <a href='featured.php'>嚴選商品</a>
                        </li>
                        <li class="second-list">
                            <a href='beanList_page.php'>熱銷排行</a>
                        </li>
                        <li class="second-list">
                            <a href='coffeeAccessories_page.php'>咖啡器材</a>
                        </li>
                    </ul>
                </div>
                <div class="list list-drop">
                    <div class="first-list">
                        <a href="javascript:;">課程資訊</a>
                        <div class="icon list-icon"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    <ul class="list-drop-menu">
                        <li class="second-list">
                            <a href='beanList_page.php'>企業包班</a>
                        </li>
                        <li class="second-list">
                            <a href='beanList_page.php'>團體課程</a>
                        </li>
                        <li class="second-list">
                            <a href='beanList_page.php'>個人課程</a>
                        </li>
                    </ul>
                </div>
                <div class="list list-drop">
                    <div class="first-list">
                        <a href="javascript:;">常見問題</a>
                        <div class="icon list-icon"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    <ul class="list-drop-menu">
                        <li class="second-list">
                            <a href='beanList_page.php'>購物流程</a>
                        </li>
                        <li class="second-list">
                            <a href='beanList_page.php'>退換貨</a>
                        </li>
                        <li class="second-list">
                            <a href='beanList_page.php'>課程募資</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- header-m -->
    <header class="header-m">
        <!-- head-m-ly-top -->
        <div class="header-m-layerTop">
            <div class="header-m-container">
                <div class="header-m-control d-flex align-items-center">
                    <!-- hamburger effect-->
                    <div class="hamburger-m-menu">
                        <input type="checkbox" id="menu-btn-check" class="humburger-m">
                        <label for="menu-btn-check" class="menu-m-btn"><span></span></label>
                    </div>
                    <!-- logo -->
                    <div class="logo-img " style="width: 50px;">
                        <a href="landing_page.php"><img src="./img/logo-m.png" alt="" style="width:100%;"></a>
                    </div>
                    <!-- user -->
                    <div class="main-icon"><button class="icon-btn user-m-btn"><i class="fas fa-user"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- head-m-ly-bottom -->
        <div class="header-m-layerBottom menu-m">
            <div class="menu_m_container">
                <!-- main icon -->
                <div class="main-m-icons d-flex mb-4 pb-2">
                    <div class="main-icon"><i class="fas fa-gift"></i></div>
                    <div class="main-icon shopping-card">
                        <div class="nums">1</div> <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="main-icon search">
                        <!-- input -->
                        <input type="text" class="input search-m-input" placeholder="Search...">
                        <!-- button -->
                        <button class="icon-btn search-m-btn">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                <!-- list -->
                <div class="list">
                    <a class="list-title" href="javascript:;">關於我們</a>
                </div>
                <div class="list">
                    <a href="javascript:;">最新消息</a>
                </div>
                <?php if (!isset($_SESSION['name'])) { ?>
                    <div class="list">
                        <a href="loginSignup.php" id="memberCenter">會員中心</a>
                    </div>
                <?php } else { ?>
                    <div class="list">
                        <a href="memberData.php" id="memberCenter">會員中心</a>
                    </div>
                <?php } ?>
                <div class="list">
                    <a class="list-title" href="javascript:;">咖啡地圖</a>
                </div>
                <div class="list list-drop">
                    <div class="first-list">
                        <a href="javascript:;">所有商品</a>
                        <div class="icon list-icon"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    <ul class="list-drop-menu">
                        <li class="second-list">
                            <a href='http://localhost/MINORI_Coffee_last/beanList_page.php?cat_id=1'>豆單</a>
                        </li>
                        <li class="second-list">
                            <a href='featured.php'>嚴選商品</a>
                        </li>
                        <li class="second-list">
                            <a href='beanList_page.php'>熱銷排行</a>
                        </li>
                        <li class="second-list">
                            <a href='coffeeAccessories_page'>咖啡器材</a>
                        </li>
                    </ul>
                </div>
                <div class="list list-drop">
                    <div class="first-list">
                        <a href="javascript:;">課程資訊</a>
                        <div class="icon list-icon"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    <ul class="list-drop-menu">
                        <li class="second-list">
                            <a href='beanList_page.php'>企業包班</a>
                        </li>
                        <li class="second-list">
                            <a href='beanList_page.php'>團體課程</a>
                        </li>
                        <li class="second-list">
                            <a href='beanList_page.php'>個人課程</a>
                        </li>
                    </ul>
                </div>
                <div class="list list-drop">
                    <div class="first-list">
                        <a href="javascript:;">常見問題</a>
                        <div class="icon list-icon"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    <ul class="list-drop-menu">
                        <li class="second-list">
                            <a href='beanList_page.php'>購物流程</a>
                        </li>
                        <li class="second-list">
                            <a href='beanList_page.php'>退換貨</a>
                        </li>
                        <li class="second-list">
                            <a href='beanList_page.php'>課程募資</a>
                        </li>
                    </ul>
                </div>
                <!-- link -->
                <div class="link-icons d-flex">
                    <div class="logo-img link-icon link-m">
                        <a href="javascript:;"><i class="fab fa-facebook"></i></a>
                    </div>
                    <div class="logo-img link-icon link-m">
                        <a href="javascript:;"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="logo-img link-icon link-m">
                        <a href="javascript:;"><i class="fab fa-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- head-m-sign out -->
        <div class="signOut-menu-m">
            <div class="signOut-menu-container">
                <?php if (isset($_SESSION['name'])) { ?>
                    <div class="pc-user signOut-list">
                        <a href="javascript:;">
                            <?= $_SESSION['name'] ?></a>
                    </div>
                <?php } ?>
                <?php if (!isset($_SESSION['name'])) { ?>
                    <div class="signOut-list">
                        <a href='loginSignup.php'>登入/註冊</a>
                    </div>
                <?php } ?>
                <?php if (isset($_SESSION['name'])) { ?>
                    <div class="signOut signOut-list">
                        <a href="#" id="logout">登出</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </header>