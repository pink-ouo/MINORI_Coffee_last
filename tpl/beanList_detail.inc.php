<div class="hc-bean-products">
    <!-- box -->
    <div class="hc-box-title" style="background: url(./img/bg-gold.jpg);">
    </div>
    <!-- bean products -->
    <div class="hc-bean-products-container hc-shopping-bg">
        <!-- page title -->
        <div class="hc-page-title">
            <a href="landing_page.php" class="hc-page-title-menu">
                <span>首頁</span>
            </a>
            <span>/</span>
            <a href="javascript:;" class="hc-page-title-menu">
                <span>豆單</span>
            </a>
            <span>/</span>
            <a href="javascript:;" class="hc-page-title-menu">
                <span><?= $obj['prod_name'] ?></span>
            </a>
        </div>
        <!-- bean products -->
        <div class="hc-coffee-products-content">
            <div class="hc-coffee-products-content-container">
                <div class="hc-main-title-control d-flex justify-content-between">
                    <!-- title -->
                    <div class="hc-main-title-en d-flex mb-4">COFFEE</div>
                </div>
                <!-- products content -->
                <div class="hc-products-detail-grp hc-products-push-pd">
                    <div class="hc-products-detail-control">
                        <div class="hc-products-name">
                            <h3 class="hc-name"><?= $obj['prod_name'] ?></h3>
                        </div>
                        <h4 class="hc-products-price">
                            <input type="hidden" name="detail_prod_price" value="<?= number_format($obj['prod_price']) ?>">
                            NT$<span id="detailProdPrice"><?= number_format($obj['prod_price']) ?></span>
                        </h4>
                        <div class="hc-products-list-grp-f hc-flavor d-flex">
                            <div class="hc-products-list-secondTitle">
                                <h5>風味</h5>
                            </div>
                            <p><?= $obj['prod_description'] ?></p>
                        </div>
                        <div class="hc-products-content hc-products-bottomLine">
                            <div class="hc-products-content-title">
                                <h5>咖啡豆分類</h5>
                            </div>
                            <div class="hc-products-list-grp d-flex">
                                <div class="hc-products-list-secondTitle">
                                    <h5>烘培</h5>
                                </div>
                                <div class="hc-process-control d-flex">
                                    <p>淺培</p>
                                    <div class="hc-process d-flex align-items-center">
                                        <div class="hc-process-box hc-process-active"></div>
                                        <div class="hc-process-box hc-process-active"></div>
                                        <div class="hc-process-box hc-process-active"></div>
                                        <div class="hc-process-box"></div>
                                        <div class="hc-process-box"></div>
                                    </div>
                                    <p>中深培</p>
                                </div>
                            </div>
                            <div class="hc-products-list-grp d-flex">
                                <div class="hc-products-list-secondTitle">
                                    <h5>酸度</h5>
                                </div>
                                <div class="hc-process-control d-flex">
                                    <p>不酸</p>
                                    <div class="hc-process d-flex align-items-center">
                                        <div class="hc-process-box hc-process-active"></div>
                                        <div class="hc-process-box hc-process-active"></div>
                                        <div class="hc-process-box"></div>
                                        <div class="hc-process-box"></div>
                                        <div class="hc-process-box"></div>
                                    </div>
                                    <p>明亮酸</p>
                                </div>
                            </div>
                            <div class="hc-products-list-grp d-flex">
                                <div class="hc-products-list-secondTitle">
                                    <h5>產地</h5>
                                </div>
                                <p><?= $obj['prod_area'] ?></p>
                            </div>
                            <div class="hc-products-list-grp d-flex">
                                <div class="hc-products-list-secondTitle">
                                    <h5>處理法</h5>
                                </div>
                                <p><?= $obj['prod_process'] ?></p>
                            </div>
                            <!-- process btn -->
                            <div class="hc-btn-grp">
                                <div class="hc-products-list-grp hc-process-part2-grp d-flex">
                                    <div class="hc-products-list-secondTitle">
                                        <h5>重量</h5>
                                    </div>
                                    <?php
                                    $sql = "SELECT `id`, `prod_size`, `prod_times`  FROM`products_size` WHERE `prod_id` = {$_GET['prod_id']}";
                                    $arr2 = $pdo->query($sql)->fetchAll();
                                    foreach ($arr2 as $index => $obj2) {
                                        $strClass = "";
                                        if ($index == 0) $strClass = "checked";
                                    ?>
                                        <div class="hc-process-control d-flex">
                                            <label class="btn btn-outline-warning btn-size">
                                                <input class="pc-radio prod_size" type="radio" name="prod_size" id="pc-size" data-prod-times="<?= $obj2['prod_times'] ?>" <?= $strClass ?> value="<?= $obj2['prod_size'] ?>">
                                                <?= $obj2['prod_size'] ?>
                                            </label>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="hc-products-list-grp hc-process-part2-grp d-flex">
                                    <div class="hc-products-list-secondTitle">
                                        <h5>磨豆</h5>
                                    </div>
                                    <?php
                                    $sql = "SELECT `id`, `prod_grind`  FROM`products_grind` WHERE `prod_id` = {$_GET['prod_id']}";
                                    $arr3 = $pdo->query($sql)->fetchAll();
                                    foreach ($arr3 as $obj3) {
                                    ?>
                                        <div class="hc-process-control d-flex">
                                            <label class="btn btn-outline-warning">
                                                <input class="pc-radio" type="radio" name="prod_grind" id="pc-grind" value="<?= $obj3['prod_grind'] ?>"> <?= $obj3['prod_grind'] ?>
                                            </label>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="hc-products-list-grp hc-process-part2-grp d-flex">
                                    <div class="hc-products-list-secondTitle">
                                        <h5>數量</h5>
                                    </div>
                                    <div class="hc-process-control">
                                        <button class="hc-num-btn hc-minus" type="button" id="pc_minus">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <div class="hc-input-num">
                                            <input type="text" class="form-control text-center" id="qty" value="1">
                                        </div>
                                        <button class="hc-num-btn hc-plus" type="button" id="pc_plus">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="hc-products-list-grp hc-process-part2-grp d-flex hc-buy">
                                    <div class="hc-products-list-secondTitle">
                                        <h5>結帳</h5>
                                    </div>
                                    <div class="hc-process-control">
                                        <!-- 立即購買 -->
                                        <button type="button" class="btn btn-outline-warning px-4" id="pc-asapBuy" data-prod-id="<?= $obj['id'] ?>" data-prod-name="<?= $obj['prod_name'] ?>" data-prod-price="<?= $obj['prod_price'] ?>">立即購買</button>
                                        <!-- 加入購物車 -->
                                        <button type="button" class="btn btn-outline-warning px-4 ml-2" id="btn_set_cart" data-prod-id="<?= $obj['id'] ?>" data-prod-name="<?= $obj['prod_name'] ?>" data-prod-price="<?= $obj['prod_price'] ?>">加入購物車</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- relate products -->
        <div class="hc-products-relate">
            <div class="hc-products-relate-title">
                <h5>相關商品</h5>
            </div>
            <!-- products -->
            <div class="hc-products-grp swiper mySwiper">
                <!-- product grp -->
                <div class="hc-products-grp2-control swiper-wrapper">
                    <?php
                    if (isset($_GET['sub_cat_id']) && $_GET['sub_cat_id'] != '') {
                        $sql =
                            "SELECT `prod_id`, `prod_name`,  `prod_thumbnail`, `prod_price`
                                           FROM `relative` 
                                           INNER JOIN `categories` 
                                           ON`relative`.`cat_id` = `categories`.`id`
                                           INNER JOIN`products`
                                           ON`relative`.`prod_id`=`products`.`id`
                                           WHERE `relative`.`cat_id` = {$_GET['sub_cat_id']}";
                        $stmt = $pdo->query($sql);
                        foreach ($stmt as $obj) {
                    ?>
                            <!-- product card 1 -->
                            <div class="hc-pds-card-control swiper-slide">
                                <div class="hc-pds-card ">
                                    <div class="hc-pds-img">
                                        <a href="beanList_detail_page.php?cat_id=<?= $_GET['cat_id'] ?>&sub_cat_id=<?= $_GET['sub_cat_id'] ?>&prod_id=<?= $obj['prod_id'] ?>">
                                            <img src="<?= $obj['prod_thumbnail'] ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="hc-card-content-container">
                                        <div class="hc-card-content-title">
                                            <h6><?= $obj['prod_name'] ?></h6>
                                        </div>
                                        <div class="hc-card-content-price">
                                            <span>NT$<?= number_format($obj['prod_price']) ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>