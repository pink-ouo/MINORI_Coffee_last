<!-- footer -->
<div class="footer" style="background: url(./img/footer_bg.jpg) no-repeat; background-size:cover">
    <div class="footer_container">
        <div div class="col-lg-12 footer-content">
            <div class="footer-logo" style="width:20%">
                <a href="landing_page.php"><img src="./img/logo.png" alt="" style="width: 100%;"></a>
            </div>
            <ul class="text-center d-flex flex-column ">
                <li class="link_list">
                    <a href="about_page.php">關於我們</a>
                </li>
                <li class="link_list">
                    <a href="javascript:;">最新消息</a>
                </li>
                <?php if (!isset($_SESSION['name'])) { ?>
                    <li class="link_list">
                        <a href='loginSignup.php'>會員中心</a>
                    </li>
                <?php } else { ?>
                    <li class="link_list">
                        <a href='memberData.php'>會員中心</a>
                    </li>
                <?php } ?>
                <li class="link_list">
                    <a href="coffeemap.php">咖啡地圖</a>
                </li>
                <li class="link_list">
                    <a href="faq.php">常見問題</a>
                </li>
            </ul>
            <ul class="text-center d-flex flex-column ">
                <li class="link_list">
                    <a href="javascript:;">所有商品</a>
                </li>
                <li class="link_list" style="font-size:12px;">
                    <a href='http://localhost/MINORI_Coffee_last/beanList_page.php?cat_id=1'>豆單</a>
                </li>
                <li class="link_list" style="font-size:12px;">
                    <a href="featured.php">嚴選商品</a>
                </li>
                <li class="link_list" style="font-size:12px;">
                    <a href="beans_hot.php">熱銷排行</a>
                </li>
                <li class="link_list" style="font-size:12px;">
                    <a href="coffeeAccessories_page.php">咖啡器材</a>
                </li>
            </ul>
            <ul class="text-center d-flex flex-column ">
                <li class="link_list">
                    <a href="javascript:;">課程資訊</a>
                </li>
                <li class="link_list" style="font-size:12px;">
                    <a href="companyclass.php">企業包班</a>
                </li>
                <li class="link_list" style="font-size:12px;">
                    <a href="groupclass.php">團體課程</a>
                </li>
                <li class="link_list" style="font-size:12px;">
                    <a href="classpage.php">個人課程</a>
                </li>
            </ul>
        </div>
        <div class="footer-bottom" style="font-size:10px;">
            <p>版權所有 © minori. All Rights Reserved.</p>
        </div>
    </div>
</div>
<!-- footer-m -->
<footer class="footer-m" style="background: url(./img/footer_bg.jpg) no-repeat;">
    <div class="footer-m-content">
        <div class="col-md-6 col-12 footer-img pt-5 pb-5">
            <div class="img-container" style="width: 25%; margin: 0 auto;">
                <a href="landing_page.php"><img src="./img/logo.png" alt="" style="width: 100%;"></a>
            </div>
        </div>
        <div class="col-md-6 col-12 d-flex text-center pb-5">
            <div class="col">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="about_page.php" class="nav-link p-0 text-white">關於我們</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-white">最新消息</a>
                    </li>
                    <?php if (!isset($_SESSION['name'])) { ?>
                        <li class="nav-item mb-2">
                            <a href="loginSignup.php" class="nav-link p-0 text-white">會員中心</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item mb-2">
                            <a href="memberData.php" class="nav-link p-0 text-white">會員中心</a>
                        </li>
                    <?php } ?>
                    <li class="nav-item mb-2">
                        <a href="coffeemap.php" class="nav-link p-0 text-white">咖啡地圖</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="faq.php" class="nav-link p-0 text-white">常見問題</a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">所有商品</a></li>
                    <li class="nav-item mb-2"><a href="http://localhost/MINORI_Coffee_last/beanList_page.php?cat_id=1" class="nav-link p-0 text-white" style="font-size: 12px;">豆單</a></li>
                    <li class="nav-item mb-2"><a href="featured.php" class="nav-link p-0 text-white" style="font-size: 12px;">嚴選商品</a></li>
                    <li class="nav-item mb-2"><a href="beans_hot.php" class="nav-link p-0 text-white" style="font-size: 12px;">熱銷排行</a></li>
                    <li class="nav-item mb-2"><a href="coffeeAccessories_page.php" class="nav-link p-0 text-white" style="font-size: 12px;">咖啡器材</a></li>
                </ul>
            </div>
            <div class="col">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">課程資訊</a></li>
                    <li class="nav-item mb-2"><a href="companyclass.php" class="nav-link p-0 text-white" style="font-size: 12px;">企業包班</a></li>
                    <li class="nav-item mb-2"><a href="groupclass.php" class="nav-link p-0 text-white" style="font-size: 12px;">團體課程</a></li>
                    <li class="nav-item mb-2"><a href="classpage.php" class="nav-link p-0 text-white" style="font-size: 12px;">個人課程</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-m-bottom d-flex justify-content-center" style="color: #fff; font-size: 12px;">
        <p>版權所有 © minori. All Rights Reserved.</p>
    </div>
</footer>
</div>
</div>
</div>
<!--//////////////////////////////////////// script -->
<!-- jQ -->
<script src="./lib/jquery-3.6.0.min.js"></script>
<!-- animate -->
<script src="./lib/anime.min.js"></script>
<!-- jquery UI-->
<script src="./lib/jquery-ui.min.js"></script>
<!-- fontawesome -->
<script src="./lib/awesome.all.min.js"></script>
<!-- bootstrap@4.6 -->
<script src="./lib/bootstrap.bundle.min.js"></script>
<!-- swiper -->
<script src="./lib/swiper-bundle.min.js"></script>
<!-- splide 3.6.9 js -->
<script src="./lib/splide.min.js"></script>
<!-- vanilla js -->
<script src="./lib/vanilla-tilt.js"></script>
<!-- sweetalert2 -->
<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<script src="./lib/sweetalert2.all.min.js"></script>


<!-- js -->
<script src="./js/index.js"></script>
<script src="./js/login-and-signup.js"></script>
<script src="./js/coffeeAccessories_page.js"></script>
<script src="./js/beanList_page.js"></script>
<script src="./js/beanList_detail.js"></script>
<script src="./js/shoppingCart_page.js"></script>
<!-- <script src="./js/coupons_page.js"></script> -->
<script src="./js/landing_page.js"></script>
<script src="./js/news_page.js"></script>
<script src="./js/about_page.js"></script>
<script src="./js/renew.js"></script>

</body>

</html>