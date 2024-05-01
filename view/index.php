<?php
if(isset($_POST['follow'])){
    $ch = DBC::select('followers', 'email', $_POST['follow'], 'id');
    if(!$ch){
        DBC::insert('followers', array('email'=>$_POST['follow']));
    }
    Router::redirect('/');
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Globe Trekk - HTML Traveling Template">

    <title>Ticker | Ваша карманная касса</title>

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
                <?php
                require_once "view/block/nav.php";
                ?>

                <!-- Hero Section Start -->
                <section class="hero-banner-1 banner-content-parallax" id="hero">
                    <div class="container-fluid">
                        <h1 class="title banner-caption-title ph-appear">TICKER</h1>
                        <div class="content">
                            <div class="text-center sub-title">
                                <h3 class="font-sec color-white">Take your ticket too!</h3>
                            </div>
                            <form action="grid" method="get">
                                <input type="text" readonly hidden value="true" name="filter">
                                <div class="find-banner-row">
                                    <div class="form-group white-input">
                                        <select name="type" class="has-nice-select cus-form-control">
                                            <option selected="selected" disabled="disabled">Куда?</option>
                                            <option value="concert">Концерт</option>
                                            <option value="sport">Спорт</option>
                                            <option value="film">Фильм</option>
                                        </select>
                                    </div>
                                    <div class="form-group white-input">
                                        <select name="age" class="has-nice-select cus-form-control">
                                            <option selected="selected" disabled="disabled">Возраст?</option>
                                            <option value="7">7</option>
                                            <option value="12">12</option>
                                            <option value="16">16</option>
                                            <option value="18">18</option>
                                            <option value="21">21</option>
                                        </select>
                                    </div>
                                    <div class="form-group white-input">
                                        <select name="price" class="has-nice-select cus-form-control">
                                            <option selected="selected" disabled="disabled">Цена?</option>
                                            <option value="5000">до 5000</option>
                                            <option value="10000">до 10000</option>
                                            <option value="30000">до 30000</option>
                                            <option value="60000">до 60000</option>
                                            <option value="10000000">Неограничено</option>
                                        </select>
                                    </div>
                                    <div class="ui-btn ui-btn-primary">
                                        <button type="submit" data-hover="НАЙТИ">НАЙТИ</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <img src="public/assets/media/banner/mask-layer.png" alt="" class="mask-layer mask-layer-desktop">
                    <img src="public/assets/media/banner/tabmask.png" alt="" class="mask-layer mask-layer-tab">
                    <img src="public/assets/media/banner/mobilemask.png" alt="" class="mask-layer mask-layer-phone">
                </section>
                <!-- Hero Section End --> 

                <div class="about-trigger-1" id="page-content">
                    <!-- About Section Start -->
                    <section class="about-features-1 about-1 position-relative z-2">
                        <div class="container-fluid">
                            <div class="all-content">
                                <div class="row align-items-center">
                                    <div class="col-xl-6 col-md-7">
                                        <div class="text-block text-md-start text-center">
                                            <h3 class="mb-8 font-sec color-primary">Цитата :</h3>
                                            <h3 class="mb-24">
                                            Билет — это не просто кусочек бумаги, это ключ к приключению, путешествию в мир возможностей и новых открытий!</h3>
                                            <div class="ui-btn ui-btn-primary mx-auto ms-md-0">
                                                <a href="grid" data-hover="КУПИТЬ БИЛЕТЫ">КУПИТЬ БИЛЕТЫ</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-5">
                                        <div class="images-area">
                                            <div class="images-block">
                                                <div class="about-img-card box-blur-bg v-1">
                                                    <img src="public/assets/media/about/about-img-1.png" alt="" class="b-radius-20">
                                                </div>
                                                <div class="about-img-card box-blur-bg v-2">
                                                    <img src="public/assets/media/about/about-img-2.png" alt="" class="b-radius-20">
                                                </div>
                                                <div class="about-img-card box-blur-bg v-3">
                                                    <img src="public/assets/media/about/about-img-3.png" alt="" class="b-radius-20">
                                                </div>
                                                <div class="about-img-card box-blur-bg v-4">
                                                    <img src="public/assets/media/about/about-img-4.png" alt="" class="b-radius-20">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- About Section End -->

                    <!-- Tour List Start -->
                    <section class="position-relative z-2 py-64">
                        <div class="container-fluid">
                            <div class="heading mb-48">
                                <h3 class="font-sec color-primary">Список мероприятии :</h3>
                                <h2>Для вас</h2>
                            </div>
                            <div class="row mb-16">
                                <?php
                                $events = DBC::show('events');
                                $i = 0;
                                foreach($events as $event){
                                    if($i<4){
                                    ?>
                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
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
                                    <?php
                                    }
                                    $i++;
                                }
                                ?>
                            </div>
                            <div class="text-center">
                                <div class="ui-btn ui-btn-primary">
                                    <a href="grid" data-hover="ПОЛНЫЙ СПИСОК">ПОЛНЫЙ СПИСОК</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Tour List End -->

                    <!-- Discount Banner Start -->
                    <section class=" position-relative z-2 py-64">
                        <div class="container-fluid">
                            <div class="box-blur-bg">
                                <div class="discount-banner b-radius-20">
                                    <div class="row">
                                        <div class="col-lg-6 order-lg-1 order-2">
                                            <div class="img-block text-center">
                                                <img src="public/assets/media/banner/dicount-banner/main-object.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 order-lg-2 order-1">
                                            <div class="content">
                                                <div class="text-block">
                                                    <div class="title-block">
                                                        <div class="discount-tag">
                                                            <h2 class="color-white">30%</h2>
                                                            <h4 class="color-white">СКИДКА</h4>
                                                        </div>
                                                        <h1 class="mb-16 color-white position-relative z-3">ИНТЕРЕСНО?</h1>
                                                    </div>
                                                    <h5 class="mb-16 color-primary">СКИДКА ЕСЛИ ЗАБРОНИРУЕТЕ СЕЙЧАС</h5>
                                                    <p class="mb-48 color-white">Купите билет прямо сейчас на любое мероприятие и вам будет скидка до 30%. <br> Данная акция действует до 20 августа.</p>
                                                    <div class="ui-btn ui-btn-primary">
                                                        <a href="grid" data-hover="СЕЙЧАС">КУПИТЬ БИЛЕТ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Discount Banner End -->

                    <!-- Gallery Start -->
                    <section class="py-64">
                        <div class="heading mb-48">
                            <h2>Наша Галлерея</h2>
                        </div>
                        <div class="gallery-slider">
                            <a href="#" class="gallery-img-block"><img src="public/assets/media/gallery/gallery_1.png" alt=""></a>
                            <a href="#" class="gallery-img-block"><img src="public/assets/media/gallery/gallery_2.png" alt=""></a>
                            <a href="#" class="gallery-img-block"><img src="public/assets/media/gallery/gallery_3.png" alt=""></a>
                            <a href="#" class="gallery-img-block"><img src="public/assets/media/gallery/gallery_4.png" alt=""></a>
                            <a href="#" class="gallery-img-block"><img src="public/assets/media/gallery/gallery_5.png" alt=""></a>
                            <a href="#" class="gallery-img-block"><img src="public/assets/media/gallery/gallery_6.png" alt=""></a>
                            <a href="#" class="gallery-img-block"><img src="public/assets/media/gallery/gallery_1.png" alt=""></a>
                            <a href="#" class="gallery-img-block"><img src="public/assets/media/gallery/gallery_2.png" alt=""></a>
                            <a href="#" class="gallery-img-block"><img src="public/assets/media/gallery/gallery_3.png" alt=""></a>
                            <a href="#" class="gallery-img-block"><img src="public/assets/media/gallery/gallery_4.png" alt=""></a>
                            <a href="#" class="gallery-img-block"><img src="public/assets/media/gallery/gallery_5.png" alt=""></a>
                            <a href="#" class="gallery-img-block"><img src="public/assets/media/gallery/gallery_6.png" alt=""></a>
                        </div>
                    </section>
                    <!-- Gallery End -->
                </div>

                <?php
                    require_once "view/block/footer.php";
                ?>

    
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