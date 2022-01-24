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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/1392152695.js" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" href="./css/index.css">
    <!-- leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <!--googleapis  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/coffeemap.css">

</head>

<?php require_once 'tpl/header.inc.php' ?>

<!-- right header -->
<div class="right-side-header">
    <!-- main icon -->
    <?php require_once 'tpl/mainicon.inc.php' ?>
    <!-- sign out -->
    <?php require_once 'tpl/signout.inc.php' ?>
</div>
<!-- 地圖 -->
<div class="mainDiv">
    <div class="oooDIV"></div>
    <div class="mapDiv col-sm-6">
        <div id="map">
            <a href="https://www.maptiler.com" style="position:absolute;left:10px;bottom:10px;z-index:999;"><img src="https://api.maptiler.com/resources/logo.svg" alt="MapTiler logo"></a>
        </div>
    </div>
    <div class="infomation col-sm-6" id="content">
        <div class="shopCard">
            <!-- <div class="shop">
                    <div class="shopImg">
                    </div>
                    <div class="shopInfo">
                    </div>
                </div> -->
        </div>
        <!-- card -->
        <div class="card mb-3 bigcard">
            <!-- <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="./img/beans_select_034.jpg" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body cardbody">

                        </div>
                    </div>
                </div> -->
        </div>
        <div class="yifooter" style="background: url(./img/footer_bg.jpg) no-repeat;background-size: 100%;">

        </div>
    </div>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script>
        var CartoDB_Positron = L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
            subdomains: 'abcd',
            maxZoom: 20
        });
    </script>

    <script>
        let map = L.map('map').setView([25.031813, 121.543592], 18);

        L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png', {
            maxZoom: 20,
            attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
        }).addTo(map);

        let myIcon = L.icon({
            iconUrl: './coffeeimg/coffee_icon_2.png',
            iconSize: [40, 40],
        })

        let layerGroup = null;
        let arrLayers = [];
        document.addEventListener("DOMContentLoaded", function(event) {
            fetch('http://localhost/web_api_coffee.php', {
                    method: 'GET'
                })
                .then(function(response) {
                    return response.json();
                })

                .then(function(arr) {
                    let shopInfo = document.querySelector('shop > shopInfo');
                    for (let o of arr) {
                        let marker = L.marker([o['latitude'], o['longitude']], {
                                icon: myIcon
                            })
                            .bindPopup(o['name'])
                            .openPopup()
                        marker.addEventListener('click', function(event) {
                            let divv = document.querySelector("div.shopCard")
                            divv.innerHTML = `
                                    <div class="title ">首頁 / 咖啡地圖 / 店家</div>
                                    <div class="row no-gutters yimyrow">
                                        <div class="col-md-6">
                                            <img class="myimg" src="./coffeeimg/${o['id']}.jpg" alt="...">
                                            </div>
                                        <div class="col-md-6">
                                            <div class="card-body cardbody">
                                                <a href="${o['url']}" target="_new"><h5>${o['name']}</h5></a>
                                                <p class="yip">★★★★☆</p>
                                                <p class="yip">${o['address']}</p>
                                                <p class="yip">${o['open_time']}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-md-6">
                                        <div class="yi-card-body cardbody">
                                            <p class="yi-sold-title">店家販售豆種</p>
                                        </div>
                                    </div>
                                    <div class="yi-sold-img">
                                        <div>
                                            <a href=""><img class="yi-img" src="./img/beans_s_001.jpg" alt="..."></a>
                                            <a href=""><p class="yi-sold">耶加雪菲</p></a>
                                        </div>
                                        <div>
                                            <a href=""><img class="yi-img" src="./img/beans_s_002.jpg" alt="..."></a>
                                            <a href=""><p class="yi-sold">花神</p></a>
                                        </div>
                                        <div>
                                            <a href=""><img class="yi-img" src="./img/beans_s_012.jpg" alt="..."></a>
                                            <a href=""><p class="yi-sold">藝妓</p></a>
                                        </div>
                                        <div>
                                            <a href=""><img class="yi-img" src="./img/beans_s_004.jpg" alt="..."></a>
                                            <a href=""><p class="yi-sold">吉格薩</p></a>
                                        </div>
                                    </div>
                                    `;
                            console.log(o);
                        });


                        marker.addEventListener('click', function(event) {
                            let divvv = document.querySelector("div.yifooter")
                            divvv.innerHTML = `
                    <div class="footer_container ">
                        <div div class="col-lg-12 footer-content">
                            <div class="footer-logo" style="width:20%">
                                <a href=""><img src="./img/logo.png" alt="" style="width: 100%;"></a>
                            </div>
                            <ul class="text-center d-flex flex-column ">
                                <li class="link_list">
                                    <a href="javascript:;">關於我們</a>
                                </li>
                                <li class="link_list">
                                    <a href="javascript:;">最新消息</a>
                                </li>
                                <li class="link_list">
                                    <a href="javascript:;">會員中心</a>
                                </li>
                                <li class="link_list">
                                    <a href="javascript:;">常見問題</a>
                                </li>
                            </ul>
                            <ul class="text-center d-flex flex-column ">
                                <li class="link_list">
                                    <a href="javascript:;">所有商品</a>
                                </li>
                                <li class="link_list" style="font-size:12px;">
                                    <a href="javascript:;">豆單</a>
                                </li>
                                <li class="link_list" style="font-size:12px;">
                                    <a href="javascript:;">嚴選商品</a>
                                </li>
                                <li class="link_list" style="font-size:12px;">
                                    <a href="javascript:;">熱銷排行</a>
                                </li>
                                <li class="link_list" style="font-size:12px;">
                                    <a href="javascript:;">咖啡器材</a>
                                </li>
                            </ul>
                            <ul class="text-center d-flex flex-column ">
                                <li class="link_list">
                                    <a href="javascript:;">課程資訊</a>
                                </li>
                                <li class="link_list" style="font-size:12px;">
                                    <a href="javascript:;">企業包班</a>
                                </li>
                                <li class="link_list" style="font-size:12px;">
                                    <a href="javascript:;">團體課程</a>
                                </li>
                                <li class="link_list" style="font-size:12px;">
                                    <a href="javascript:;">個人課程</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-bottom" style="font-size:10px;">
                            <p>版權所有 © minori. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
                <footer class="footer-m" style="background: url(./img/footer_bg.jpg) no-repeat;">
                    <div class="footer-m-content">
                        <div class="col-md-6 col-12 footer-img pt-5 pb-5">
                            <div class="img-container" style="width: 25%; margin: 0 auto;">
                                <a href=""><img src="./img/logo.png" alt="" style="width: 100%;"></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 d-flex text-center pb-5">
                            <div class="col">
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">關於我們</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">最新消息</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">會員中心</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">常見問題</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">所有商品</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white"
                                            style="font-size: 12px;">豆單</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white"
                                            style="font-size: 12px;">嚴選商品</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white"
                                            style="font-size: 12px;">熱銷排行</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white"
                                            style="font-size: 12px;">咖啡器材</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">課程資訊</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white"
                                            style="font-size: 12px;">企業包班</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white"
                                            style="font-size: 12px;">團體課程</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white"
                                            style="font-size: 12px;">個人課程</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-m-bottom d-flex justify-content-center" style="color: #fff; font-size: 12px;">
                        <p>版權所有 © minori. All Rights Reserved.</p>
                </footer>
                                    `;
                        });

                        marker.addEventListener('click', function deleteChild(event) {
                            var e = document.querySelector("div.card");
                            var first = e.firstElementChild;
                            while (first) {
                                first.remove();
                                first = e.firstElementChild;
                            }
                        });
                        arrLayers.push(marker)
                    }

                    layerGroup = L.layerGroup(arrLayers);
                    layerGroup.addTo(map);
                    for (let o of arr) {
                        let card = document.querySelector('div.bigcard');
                        let cardbody = document.createElement("div.card");
                        cardbody.innerHTML = `
                                <div class="row no-gutters ">
                                    <div class="col-md-4">
                                        <img src="./coffeeimg/${o['id']}.jpg" alt="...">
                                        </div>
                                    <div class="col-md-8">
                                        <div class="card-body cardbody">
                                            <a href="${o['url']}" target="_new"><h5>${o['name']}</h5></a>
                                            <p>★★★★☆</p>
                                            <p>${o['address']}</p>
                                            <p>${o['open_time']}</p>
                                        </div>
                                    </div>
                                </div>`;
                        card.appendChild(cardbody);
                    }
                    console.log(arr);
                });
        });
    </script>
    <!--//////////////////////////////////////// script -->
    <!-- jQ -->
    <script src="./lib/jquery-3.6.0.min.js"></script>
    <!-- bootstrap@4.6 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <!-- js -->
    <script src="./js/index.js"></script>
    <script src="./js/login-and-signup.js"></script>

    </body>

</html>