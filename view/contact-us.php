<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Globe Trekk - HTML Traveling Template">

    <title>Ticker | Контакты</title>

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

                <!-- Page Header Start-->
                <section class="page-header">
                    <h1 class="color-white">Контакты</h1>
                </section>
                <!-- Page Header End-->
                
                <!-- Blogs Start -->
                <section class="py-64">
                    <div class="container-fluid">
                        <div class="contact-us">
                            <div class="box-blur-bg">
                                <div class="b-radius-20 bg-white p-24 contact-block">
                                    <div class="contact-info">
                                        <div class="mb-48">
                                            <h5 class="mb-12">КОНТАКТНАЯ ИНФОРМАЦИЯ</h5>
                                            <p>P: <a href="tel:+77007770077">+7 (700) 777 00 77</a></p>
                                            <p>E: <a href="mailto:support@ticker.com">support@ticker.com</a></p>
                                        </div>
                                        <div class="mb-48">
                                            <h5 class="mb-12">АДРЕС ОФИСА</h5>
                                            <p>L: Назарбаева 117, Алматы, Казахстан</p>
                                            <p>L: Тень-чжоу 15/1, Гуанжоу, Китай</p>
                                        </div>
                                        <div>
                                            <h5 class="mb-12">ГРАФИК РАБОТЫ</h5>
                                            <p><span class="me-5">Пн-Пт</span>09-17<span></span></p>
                                            <p><span class="me-5">Сб-Вс</span>10-17<span></span></p>
                                        </div>
                                    </div>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2238291.857749356!2d19.545467107182017!3d56.780190963882944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e930677b8a9afd%3A0xcfcd68f2fc10!2sLatvia!5e0!3m2!1sen!2s!4v1709014880485!5m2!1sen!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Blogs End -->

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