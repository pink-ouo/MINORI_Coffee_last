<!-- page number -->
<!-- 做分頁參考老師php影片1214-001最後一分半開始 -->
<?php if (isset($_GET['cat_id'])) { ?>
    <div class="hc-page-number">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <!-- 第1頁 -->
                <li class="page-item <?php if ($page == 1) echo "pc-disabled"; ?>">
                    <a class="page-link" href="beanList_page.php?cat_id=<?= $_GET['cat_id'] ?>&sub_cat_id=<?= @$_GET['sub_cat_id'] ?>&page=1">
                        <i class="fas fa-backward"></i>
                    </a>
                </li>
                <!-- 上一頁 -->
                <li class="page-item <?php if ($page == 1) echo "pc-disabled"; ?>">
                    <a class="page-link" href="beanList_page.php?cat_id=<?= $_GET['cat_id'] ?>&sub_cat_id=<?= @$_GET['sub_cat_id'] ?>&page=<?= ($page - 1) ?>">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                </li>
                <?php
                //列出所有分頁連結
                for ($i = 1; $i <= $totalPages; $i++) {
                    //當目前第幾頁($page)等於顯示在網頁上的分頁號碼($i)，就加上class
                    $strClass = "";
                    if ($page == $i) $strClass = "page-link-active";
                    //$i 列出的數字範圍，會大於「目前第幾頁」($page)減 4，以及小於「目前第幾頁」($page)加4
                    if ($i > $page - 4 && $i < $page + 4){
                ?>
                    <!-- 中間頁 -->
                    <li class="page-item <?= $strClass ?>">
                        <a class="page-link " href="beanList_page.php?cat_id=<?= $_GET['cat_id'] ?>&sub_cat_id=<?= @$_GET['sub_cat_id'] ?>&page=<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php
                    }
                }
                ?>

                <!-- 下一頁 -->
                <li class="page-item <?php if ($page == $totalPages) echo "pc-disabled"; ?>">
                    <a class="page-link" href="beanList_page.php?cat_id=<?= $_GET['cat_id'] ?>&sub_cat_id=<?= @$_GET['sub_cat_id'] ?>&page=<?= ($page + 1) ?>">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </li>
                <!-- 最後1頁 -->
                <li class="page-item <?php if ($page == $totalPages) echo "pc-disabled"; ?>">
                    <a class="page-link" href="beanList_page.php?cat_id=<?= $_GET['cat_id'] ?>&sub_cat_id=<?= @$_GET['sub_cat_id'] ?>&page=<?= $totalPages ?>">
                        <i class="fas fa-forward"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
<?php } ?>