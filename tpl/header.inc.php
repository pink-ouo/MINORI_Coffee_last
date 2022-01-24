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
                    <a class="list-title" href="coffeemap.php">咖啡地圖</a>
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
                            <a href='beans_hot.php'>熱銷排行</a>
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
                            <a href='companyclass.php'>企業包班</a>
                        </li>
                        <li class="second-list">
                            <a href='groupclass.php'>團體課程</a>
                        </li>
                        <li class="second-list">
                            <a href='classpage.php'>個人課程</a>
                        </li>
                    </ul>
                </div>
                <div class="list list-drop">
                    <div class="first-list">
                        <a href="faq.php">常見問題</a>
                        <div class="icon list-icon"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    <ul class="list-drop-menu">
                        <li class="second-list">
                            <a href='faq.php#yi_guide'>購物流程</a>
                        </li>
                        <li class="second-list">
                            <a href='faq.php#yi_return'>退換貨</a>
                        </li>
                        <li class="second-list">
                            <a href='faq.php#yi_qa'>Q&A</a>
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
                        <div class="nums">0</div> <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="main-icon search">
                        <!-- input -->
                        <input type="text" class="input search-m-input" placeholder="請輸入商品名稱">
                        <!-- button -->
                        <button class="icon-btn search-m-btn">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
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
                    <a class="list-title" href="coffeemap.php">咖啡地圖</a>
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
                            <a href='beans_hot.php'>熱銷排行</a>
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
                            <a href='companyclass.php'>企業包班</a>
                        </li>
                        <li class="second-list">
                            <a href='groupclass.php'>團體課程</a>
                        </li>
                        <li class="second-list">
                            <a href='classpage.php'>個人課程</a>
                        </li>
                    </ul>
                </div>
                <div class="list list-drop">
                    <div class="first-list">
                        <a href="faq.php">常見問題</a>
                        <div class="icon list-icon"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    <ul class="list-drop-menu">
                        <li class="second-list">
                            <a href='faq.php#yi_guide'>購物流程</a>
                        </li>
                        <li class="second-list">
                            <a href='faq.php#yi_return'>退換貨</a>
                        </li>
                        <li class="second-list">
                            <a href='faq.php#yi_qa'>Q&A</a>
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
                        <a href="memberData.php">
                            <?= $_SESSION['name'] ?></a>
                        <span class="pl-2" style="color: white;">您好</span>
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