<?php
if(isset($_GET['id'])){
    $event = DBC::select('events', 'id', $_GET['id']);
}
else{
    Router::redirect('/');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Globe Trekk - HTML Traveling Template">

    <title><?=$event['title']?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/media/favicon.png">

    <!-- All CSS files -->
    <link rel="stylesheet" href="public/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/vendor/all.min.css">
    <link rel="stylesheet" href="public/assets/css/vendor/ion.rangeSlider.css">
    <link rel="stylesheet" href="public/assets/css/vendor/slick.css">
    <link rel="stylesheet" href="public/assets/css/vendor/nice-select.css">
    <link rel="stylesheet" href="public/assets/css/app.css">

</head>

<body id="body" class="x-hidden ui-transition">
    <!-- Preloader-->
    <div id="preloader">
        <div class="loader">
            <div class="plane">
                <img src="public/assets/media/icons/loader-plane.png" class="plane-img" alt="">
            </div>
            <div class="earth-wrapper">
                <div class="earth"></div>
            </div>
        </div>
    </div>
    
    <!--  Begin scroll container -->
    <div id="scroll-wrapper">
        <div id="smooth-content">
            <main>
                <!-- Header start -->
                
                <?php
                    require_once "view/block/nav.php";
                ?>
                <!-- Header End -->

                <!-- Page Header Start-->
                <section class="page-header">
                    <h1 class="color-white">Информация</h1>
                </section>
                <!-- Page Header End-->
                
                <!-- Blogs Start -->
                <section class="py-64">
                    <div class="container-fluid">
                        <div class="tour-detail">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h2 class="mb-16"><?=$event['title']?></h2>
                                    <div class="price-rating mb-24">
                                        <h5 class="color-primary"><?=$event['price']?> ₸ за 1 персон</h5>
                                    </div>
                                    <p class="mb-32"><?=$event['desc']?></p>
                                    <div class="box-blur-bg mb-64">
                                        <div class="b-radius-20 tour-detail-features">
                                            <div class="row justify-content-between">
                                                <div class="col-xl-6 col-lg-7 col-sm-7 mb-24 mb-sm-0">
                                                    <h5 class="mb-16">Детали</h5>
                                                    <ul class="unstyled">
                                                        <li class="mb-16"><p>Адрес: <?=$event['addres']?></p></li>
                                                        <li class="mb-16"><p>Дата: <?=$event['date']?> </p></li>
                                                        <li class="mb-16"><p>Время: <?=$event['time']?></p></li>
                                                        <li class="mb-16"><p>Возрастное ограничение: <?=$event['age']?>+</p></li>
                                                    </ul>
                                                </div>
                                                <div class="col-xl-6 col-lg-5 col-sm-5">
                                                    <h5 class="mb-16">Билет</h5>
                                                    <ul class="unstyled">
                                                        <li class="d-flex align-items-center mb-16"><i class="color-primary me-2 fa-light fa-calendar"></i><p>10 дней срок</p></li>
                                                        <li class="d-flex align-items-center mb-16"><i class="color-primary me-2 fa-light fa-user"></i><p>1 персон</p></li>
                                                        <li class="d-flex align-items-center mb-16"><i class="color-primary me-2 fa-light fa-map-location-dot"></i><p>Гид</p></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box-blur-bg mb-64">
                                        <div class="ui-btn ui-btn-primary" style="width: 100%; color: white;" onclick="window.location.href='<?=GEN::wame($GLOBALS['phone'], 'Здраствуйте хочу заказать билет `'.$event['title'].'`, Дата: '.$event['date'].' на сайте Ticker по ссылке '.Router::host('/tour-detail?id='.$event['id']).'.')?>'">
                                            <a data-hover="ЗАКАЗАТЬ БИЛЕТ">ЗАКАЗАТЬ БИЛЕТ</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="box-blur-bg mb-48">
                                        <img src="public/assets/uploads/<?=$event['img']?>" alt="" class="b-radius-20">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xxl-9 col-xl-10 col-md-11">
                                    <h2 class="mb-24">ДОПОЛНИТЕЛЬНАЯ ИНФОРМАЦИЯ</h2>
                                    <p class="mb-24">Возврат билета можно если еще есть 3 дня до начало мероприятии. Возврат средств нельзя делать после использование билета (Например: если не понравиться мероприятие). </p>
                                </div>
                            </div>
                     
                        </div>
                    </div>
                </section>
                <!-- Blogs End -->
                
               <!-- Footer Start -->
                
               <?php
                    require_once "view/block/footer.php";
                ?>
                <!-- Footer End -->
                
            </main>
        </div>
        <!-- End content wrap -->
    </div>
    <!-- End scroll container -->

    <!-- Search Popup Start -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <div class="search-popup__content text-center">
            <form role="search" method="get" class="search-popup__form" action="grid">
                <div class="blur-layer">
                    <input type="text" id="search" name="search" autocomplete="off" placeholder="Введите запрос...">
                </div>
                <button type="submit"><i class="fal fa-search"></i></button>
            </form>
        </div>
    </div>
    <!-- Search Popup End -->
  
    <!-- Jquery Js -->
    <script src="public/assets/js/vendor/jquery-3.6.3.min.js"></script>
    <script src="public/assets/js/vendor/bootstrap.min.js"></script>
    <script src="public/assets/js/vendor/gsap.min.js"></script>
    <script src="public/assets/js/vendor/scrollTrigger.min.js"></script>
    <script src="public/assets/js/vendor/ScrollToPlugin.min.js"></script>
    <script src="public/assets/js/vendor/ScrollSmoother.min.js"></script>
    <script src="public/assets/js/vendor/jquery-appear.js"></script>
    <script src="public/assets/js/vendor/ion.rangeSlider.js"></script>
    <script src="public/assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="public/assets/js/vendor/slick.min.js"></script>
    <script src="public/assets/js/app.js"></script>

</body>

</html>