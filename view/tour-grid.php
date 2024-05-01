<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Globe Trekk - HTML Traveling Template">

    <title>Ticker | Список билетов</title>

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
                    <h1 class="color-white">Сисок Событии</h1>
                </section>
                <!-- Page Header End-->

                <!-- Blogs Start -->
                <section class="py-64">
                    <div class="container-fluid">
                        <div class="row">
                            <?php
                            if(isset($_GET['search'])){
                                $q = $_GET['search'];
                                $events = mysqli_query($GLOBALS['connect'], "SELECT * FROM `events` WHERE `title` LIKE '%$q%' ORDER BY `id` DESC");
                            }
                            elseif(isset($_GET['filter']) && $_GET['filter']=='true'){
                                $type = $_GET['type'];
                                $age = $_GET['age'];
                                $price = $_GET['price'];
                                $events = mysqli_query($GLOBALS['connect'], "SELECT * FROM `events` WHERE `type` = '$type' AND `age` = '$age' AND `price`<'$price' ORDER BY `id` DESC");
                            }
                            else{
                                $events = DBC::show('events');
                            }

                            foreach($events as $event){
                                ?>
                            <div class="col-xxl-3 col-lg-4 col-sm-6" style="display: <?=(isset($_GET['type']) && $_GET['type']==$event['type']? 'block':(isset($_GET['type'])?'none':'block'))?>;">
                                <div class="tour-card mb-32">
                                    <img src="public/assets/uploads/<?=$event['img']?>" alt="" class="tour-img">
                                    <div class="card-info">
                                        <a href="tour-detail?id=<?=$event['id']?>" class="h5"><?=$event['title']?></a>
                                        <div class="location"><i class="fa-light fa-location-crosshairs"></i><h6><?=$event['addres']?></h6></div>
                                        <div class="info-detail">
                                            <ul class="unstyled">
                                                <li><i class="fa-light fa-calendar"></i><p><?=$event['date']?></p></li>
                                                <li><i class="fa-solid fa-period dot"></i></li>
                                            </ul>
                                            <div class="right-block">
                                                <h6><?=$event['price']?> ₸</h6>
                                                <a href="tour-detail?id=<?=$event['id']?>" class="ui-link-arrow"><i class="fa-light fa-arrow-right arrow" ></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <?
                                }
                            ?>
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