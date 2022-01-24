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
    <link rel="stylesheet" href="./css/login-and-signup.css">
    <link rel="stylesheet" href="./css/beanList_page.css">
    <link rel="stylesheet" href="./css/beanList_detail_page.css">
</head>

<?php
$sql = "SELECT `id`, `cat_name`  FROM`categories` WHERE `parent_id` = 0";
$arr = $pdo->query($sql)->fetchAll();
?>

<?php
//整合特定商品類別分頁的$sql字串
$where = "";
if (isset($_GET['sub_cat_id'])) {
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
                <div class="hc-left-side-bg" style="background: url(./img/beans_l_034.jpg) no-repeat; background-size: cover;">
                    <!-- ======================================================================================= add content -->
                    <!-- head -->
                    <div class="hc-top-menus">
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
                    <!-- 左側頁面內容 -->
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
                    <div class="hc-box-title" style="background: url(./img/bg-gold.jpg);">
                    </div>
                    <!-- bean products -->
                    <div class="hc-bean-products-container hc-shopping-bg">
                        <!-- page title -->
                        <div class="hc-page-title">
                            <a href="javascript:;" class="hc-page-title-menu">
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
                                </div>
                                <!-- products content -->
                                <div class="hc-products-grp">
                                    <!-- product grp 1 -->
                                    <div class="hc-products-grp-control">
                                        <div class="hc-pds-card-control col-lg-4 col-md-6 ">
                                            <?php
                                            //將搜尋關鍵字當中有空白的字元，改成百分比
                                            $keyword = str_replace(" ", "%", $_GET['keyword']);

                                            //搜尋結果
                                            $sql = "SELECT * FROM `products` WHERE `prod_name` LIKE '%{$keyword}%'";
                                            $stmt = $pdo->query($sql);
                                            if ($stmt->rowCount() > 0) {
                                                foreach ($stmt->fetchAll() as $obj) {
                                            ?>
                                                    <div class="hc-pds-card">
                                                        <div class="hc-pds-img">
                                                            <a href="beanList_detail_page.php?prod_id=<?= $obj['id'] ?>">
                                                                <img src="<?= $obj['prod_thumbnail'] ?>" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="hc-card-content-container">
                                                            <div class="hc-card-content-title">
                                                                <h5><?= $obj['prod_name'] ?></h5>
                                                            </div>
                                                            <div class="hc-card-content-price">
                                                                <span>NT$<?= $obj['prod_price'] ?>~</span>
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