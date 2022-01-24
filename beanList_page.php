<?php require_once 'db.inc.php'; ?>
<?php session_start(); ?>

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
    <link rel="stylesheet" href="./css/beanList_page.css">
</head>

<?php
$sql = "SELECT `id`, `cat_name`  FROM`categories` WHERE `parent_id` = 0";
$arr = $pdo->query($sql)->fetchAll();
?>

<?php
//整合特定商品類別分頁的$sql字串
$where = "";
if (isset($_GET['sub_cat_id']) && $_GET['sub_cat_id'] != '') {
    $where = "WHERE `relative`.`cat_id` = {$_GET['sub_cat_id']}";
}

//取得products資料表總筆數(對cat_id = 3的products做count聚合成一筆)
$sqlTotal = "SELECT COUNT(1) AS `count`
FROM `relative` 
INNER JOIN `categories` 
ON`relative`.`cat_id` = `categories`.`id`
INNER JOIN`products`
ON`relative`.`prod_id`=`products`.`id`
{$where}";
$totalRows = $pdo->query($sqlTotal)->fetch()['count']; //取回來是個$obj['count']可以印出200筆

//設定每頁幾筆
$numPerPage = 6;

//總頁數ceil()
$totalPages = ceil($totalRows / $numPerPage);


//目前第幾頁(存在且大於給予頁數，否則設為第一頁)
$page = (isset($_GET['page']) && $_GET['page'] > 0) ? $_GET['page'] : 1;


//計算分頁偏移量
$offset = ($page - 1) * $numPerPage;
?>

<?php require_once 'tpl/header.inc.php' ?>

<!-- main page -->
<div class="container-fluid main-page">
    <div class="row">
        <!-- leftSide page -->
        <div class="left-side">
            <!-- ================================================= 新頁面加入 -->
            <div class="left-side-push100">
                <div class="hc-left-side-bg" style="background: url(./img/beans_bg.jpg) no-repeat; background-size: cover; background-position: center center;">
                    <!-- ======================================================================================= add content -->
                    <!-- head -->
                    <div class="hc-top-menus">
                        <div class="hc-top-menu-container-pushTop">
                            <div class="hc-top-menu-control">
                                <div class="hc-top-menu">
                                    <a class="hc-top-menu-active" href="beanList_page.php?cat_id=<?= $arr[0]['id'] ?>"><?= $arr[0]['cat_name'] ?></a>
                                </div>

                                <div class="hc-top-menu">
                                    <a class="hc-top-menu" href="featured.php"><?= $arr[1]['cat_name'] ?></a>
                                </div>

                                <div class="hc-top-menu">
                                    <a class="hc-top-menu" href="beans_hot.php"><?= $arr[2]['cat_name'] ?></a>
                                </div>

                                <div class="hc-top-menu">
                                    <a class="hc-top-menu" href="coffeeAccessories_page.php"><?= $arr[3]['cat_name'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 左側頁面內容 -->
                    <?php require_once 'tpl/beanList_menu.inc.php' ?>
                </div>
            </div>
            <!-- ================================================= -->
        </div>
        <!-- rightSide page -->
        <div class="right-side">
            <div class="right-side-content" style="background: url(./img/bg-dark.png) repeat;">
                <!-- right header -->
                <div class="right-side-header">
                    <!-- main icon -->
                    <?php require_once 'tpl/mainicon.inc.php' ?>
                    <!-- sign out -->
                    <?php require_once 'tpl/signout.inc.php' ?>
                </div>
                <!-- ================================================= 新頁面加入 -->
                <div class="hc-bean-products">
                    <!-- box -->
                    <div class="hc-bean-box" style="background: url(./img/bg-gold.jpg);">
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
                                <span>所有商品</span>
                            </a>
                            <span>/</span>
                            <a href="javascript:;" class="hc-page-title-menu">
                                <span>豆單</span>
                            </a>
                        </div>
                        <!-- bean products -->
                        <div class="hc-coffee-products-content">
                            <div class="hc-coffee-products-content-container">
                                <div class="hc-main-title-control d-flex justify-content-between">
                                    <!-- title -->
                                    <div class="hc-main-title-en d-flex mb-4">COFFEE</div>
                                    <!-- filter -->
                                    <div class="hc-main-filter-control">
                                        <!-- <div class="hc-main-filter d-flex">
                                            <h6>商品排序</h6>
                                            <div class="icon list-icon hc-filter-icon"><i class="fas fa-chevron-down"></i></div>
                                        </div> -->
                                        <select class="custom-select" id="beanList_select">
                                            <option class="hc-drop-list" value="&field=prod_price&orderby=desc">價格 高-低</option>
                                            <option class="hc-drop-list" value="&field=prod_price&orderby=asc">價格 低-高</option>
                                            <option class="hc-drop-list" value="&field=created_at&orderby=desc" selected>日期 新-舊</option>
                                            <option class="hc-drop-list" value="&field=created_at&orderby=asc">日期 舊-新</option>
                                        </select>
                                        <!-- <ul class="hc-drop-lists">
                                            <li class="hc-drop-list" id="price_HtoL">價格 高-低</li>
                                            <li class="hc-drop-list" id="price_LtoH">價格 低-高</li>
                                            <li class="hc-drop-list" id="price_NtoO">日期 新-舊</li>
                                            <li class="hc-drop-list" id="price_OtoN">日期 舊-新</li>
                                        </ul> -->
                                    </div>
                                </div>
                                <!-- products content -->
                                <div class="hc-products-grp">
                                    <!-- product grp 1 -->
                                    <div class="hc-products-grp-control">
                                        <!-- product card 1 -->
                                        <?php
                                        $sql =
                                            "SELECT `prod_id`, `prod_name`,  `prod_thumbnail`, `prod_price`
                                           FROM `relative` 
                                           INNER JOIN `categories` 
                                           ON`relative`.`cat_id` = `categories`.`id`
                                           INNER JOIN`products`
                                           ON`relative`.`prod_id`=`products`.`id` ";
                                        if (isset($_GET['sub_cat_id']) && $_GET['sub_cat_id'] != '') {
                                            $sql .= "WHERE `relative`.`cat_id` = {$_GET['sub_cat_id']} ";
                                        }

                                        if (isset($_GET['field']) && isset($_GET['orderby'])) {
                                            $sql .= "ORDER BY `products`.`{$_GET['field']}` {$_GET['orderby']} ";
                                            // $sql. = "WHERE `relative`.`pr` = {$_GET['prod_price']} ORDER BY DESC ";
                                        }

                                        $sql .= "LIMIT {$offset}, {$numPerPage}";

                                        $stmt = $pdo->query($sql);
                                        if ($stmt->rowCount() > 0) {
                                            $arr = $stmt->fetchAll();
                                            foreach ($arr as $obj) {
                                        ?>
                                                <div class="hc-pds-card-control col-lg-4 col-sm-6">
                                                    <div class="hc-pds-card">
                                                        <div class="hc-pds-img">
                                                            <a href="beanList_detail_page.php?cat_id=<?= $_GET['cat_id'] ?>&sub_cat_id=<?= @$_GET['sub_cat_id'] ?>&prod_id=<?= $obj['prod_id'] ?>">
                                                                <img src="<?= $obj['prod_thumbnail'] ?>" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="hc-card-content-container">
                                                            <div class="hc-card-content-title">
                                                                <h6><?= $obj['prod_name'] ?></h6>
                                                            </div>
                                                            <div class="hc-card-content-price">
                                                                NT$<span value="$obj['prod_price']"><?= number_format($obj['prod_price']) ?></span>~
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php require_once 'tpl/pageNumber.inc.php' ?>
                </div>
                <!-- ================================================= -->
            </div>


            <?php require_once 'tpl/foot.inc.php' ?>