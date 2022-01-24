<div class="r-side-header-container main-icons">
    <div class="main-icon"><button class="icon-btn user-btn"><i class="fas fa-user"></i></button></div>
    <div class="main-icon shopping-card">
        <!-- 計算購物車內容 -->
        <div class="nums" id="count_products">
            <?php
            if (isset($_SESSION['cart'])) {
                echo count($_SESSION['cart']);
            } else {
                echo 0;
            }
            ?>
        </div>
        <i class="fas fa-shopping-bag"></i>
    </div>
    <div class="main-icon" id="get_gift"><i class="fas fa-gift"></i></div>
    <div class="main-icon search">
        <form method="get" action="search.php">
            <!-- input -->
        <input type="search" class="input search-input" placeholder="請輸入商品名稱" name="keyword">
        </form>
        <!-- button -->
        <button class="icon-btn search-btn">
            <i class="fas fa-search"></i>
        </button>
    </div>
</div>