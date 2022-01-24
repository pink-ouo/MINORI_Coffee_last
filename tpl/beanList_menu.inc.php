<div class="hc-left-side-content">
    <div class="hc-left-side-container">
        <?php if (isset($_GET['cat_id'])) { ?>
            <div class="hc-bean-menu">
                <!-- menu list -->
                <?php $sql = "SELECT `id`, `cat_name` FROM `categories`WHERE`parent_id`= {$_GET['cat_id']}";
                $arr1 = $pdo->query($sql);
                foreach ($arr1 as $obj1) {
                ?>
                    <!-- 分類 -->
                    <div class="list list-drop hc-bean-menu-drop">
                        <div class="hc-bean-menu-list">
                            <?= $obj1['cat_name'] ?>
                        </div>
                        <ul class="list-drop-menu" style="display: block;">
                            <!-- 分類子層  -->
                            <?php $sql = "SELECT `id`, `cat_name`
                                                          FROM `categories`
                                                          WHERE `parent_id` = {$obj1['id']}";
                            $arr2 = $pdo->query($sql);
                            foreach ($arr2 as $obj2) {
                            ?>
                                <!-- 從資料庫取出分類子層內容(sub_cat_id) -->
                                <li class="second-list">
                                    <a href="beanList_page.php?cat_id=<?= $_GET['cat_id'] ?>&sub_cat_id=<?= $obj2['id'] ?>"><?= $obj2['cat_name'] ?></a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>