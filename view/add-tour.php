<?php
$username = 'admin';
$password = 'admin';

// Проверка, был ли отправлен пользователем логин и пароль
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) ||
    $_SERVER['PHP_AUTH_USER'] != $username || $_SERVER['PHP_AUTH_PW'] != $password) {
    
  // Если логин и пароль не были отправлены или не совпадают,
  // отправляем заголовок 401 и запрашиваем аутентификацию
  header('WWW-Authenticate: Basic realm="Запрашиваемая страница"');
  header('HTTP/1.0 401 Unauthorized');
  echo 'Доступ запрещен';
  exit;
}

if(isset($_POST['title'])&&isset($_POST['price'])){
    $img = get_file('public/assets/uploads/', 'img');
    $data = array(  
        'title' => $_POST['title'],
        'price' => $_POST['price'],
        'img' => $img,
        'desc' => $_POST['desc'],
        'age' => $_POST['age'],
        'date' => $_POST['date'],
        'addres' => $_POST['addres'],
        'time' => $_POST['time'],
        'type' => $_POST['type']
    );

    DBC::insert('events', $data);
    Router::redirect('/add');
}
elseif(isset($_GET['dell'])){
    DBC::delete('events', 'id', $_GET['dell']);
    Router::redirect('/add');
}
elseif(isset($_GET['download'])){
    // Извлечение данных из таблицы events
    $result = DBC::back('followers');

    // Создание списка данных
    $list = "";
    if ($result->num_rows > 0) {
        foreach($result as $row){
            $list .= $row["id"] . " | " . $row["email"] . "\n";
        }
    } else {
        $list = "Нет данных для отображения";
    }

    // Создание текстового файла и запись в него списка данных
    $file = 'Cписок email подписчиков.txt';
    file_put_contents($file, $list);

    // Предоставление пользователю возможности загрузить файл
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    header('Content-Length: ' . filesize($file));
    readfile($file);
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Globe Trekk - HTML Traveling Template">

    <title>Билеты в системе</title>

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
                    <h1 class="color-white">Билеты в системе</h1>
                </section>
                <!-- Page Header End-->
                
                <!-- Blogs Start -->
                <section class="py-64">
                    <div class="container-fluid">
                        <div class="tour-booking">
                            <div class="row">
                                <div class="col-xl-12 mb-48 mb-xl-0">
                                    <h3 class="text-uppercase mb-48">Заполните форму (детали событии) </h3>
                                    <form enctype="multipart/form-data" action="add" method="post" >
                                        <div class="row booking-from">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="title" required placeholder="Название событии">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <input type="number" name="price" required placeholder="Цена билета">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <select name="type" class="has-nice-select cus-form-control">
                                                        <option selected="selected" disabled="disabled">Тип событии</option>
                                                        <option value="sport">Спорт</option>
                                                        <option value="concert">Концерт</option>
                                                        <option value="film">Фильм</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <select name="age" class="has-nice-select cus-form-control">
                                                                <option selected="selected" disabled="disabled">Возраст </option>
                                                                <option value="7">7+</option>
                                                                <option value="12">12+</option>
                                                                <option value="16">16+</option>
                                                                <option value="18">18+</option>
                                                                <option value="21">21+</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <input type="text" name="addres" required placeholder="Адрес">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <input type="date" name="date" required placeholder="Дата">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <input type="time" name="time" required placeholder="Время">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="file" name="img" required placeholder="Изображение">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <textarea name="desc" rows="5" placeholder="Описание событии"></textarea>
                                                </div>
                                            </div>
                                            <div class="ui-btn ui-btn-primary w-100">
                                                <button data-hover="Добавить">Добавить</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-xl-6 mt-48 mb-xl-0 ui-btn w-100" style="background-color: green;" onclick="window.location.href='add?download=list'">
                                    <button data-hover="Скачать список .txt" style=" color: white;">Скачать email подписчиков</button>
                                </div>

                                <div class="col-xl-12 mt-48 mb-xl-0 ui-btn w-100" style="border: 3px solid orange;">
                                    <button data-hover="Список опубликованных билетов" style=" color: orange;">Список опубликованных билетов</button>
                                </div>

                                <?php
                                $tickets = DBC::show('events');
                                foreach($tickets as $ticket){
                                    ?>
                                        <div class="col-xl-12 mt-24 mb-xl-0 ui-btn ui-btn-primary w-100" onclick="window.location.href='add?dell=<?=$ticket['id']?>'">
                                            <button data-hover="Вы хотите удалить билет '<?=$ticket['title']?>' ?">Снять с продажи билет "<?=$ticket['title']?>"</button>
                                        </div>
                                    <?
                                }
                                ?>  
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