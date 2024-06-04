<?php
if($_GET['type']=='add'){
    $data['title']  = $_POST['title'];
    $data['date']   = $_POST['date'];
    $data['time']   = $_POST['time'];
    DBC::insert('events', $data);
    Router::redirect('/');
}
elseif(isset($_GET['dell'])){
    DBC::delete('book', 'eid', $_GET['dell']);
    DBC::delete('events', 'id', $_GET['dell']);
    Router::redirect('/');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title> Ticker - Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="MyraStudio" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="public/assets/images/favicon.ico">

        <!-- App css -->
        <link href="public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="public/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">
            <div class="header-border"></div>
            <header id="page-topbar">
                <div class="navbar-header">

                    <div class="d-flex align-items-left">
                        <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect"
                            id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                    
                    </div>

                    <div class="d-flex align-items-center">

                
                        <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn header-item waves-effect"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="public/assets/images/users/avatar-2.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-sm-inline-block ml-1"><?=DBC::select('users', 'id', $_SESSION['user']['id'], 'name')?></span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="?logout=true">
                                    <span>Выйти</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <div class="navbar-brand-box">
                        <a href="/" class="logo">
                            <i class="mdi mdi-album"></i>
                            <span>
                                Ticker
                            </span>
                        </a>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Панель   </li>

                            <li>
                                <a href="/" class="waves-effect"><i class="mdi mdi-home-analytics"></i><span>Событии</span></a>
                            </li>

                            <li>
                                <a href="list" class="waves-effect"><i
                                        class="mdi mdi-format-list-bulleted-type"></i><span>Резерв</span></a>
                            </li>

                            <li class="menu-title">Превью</li>


                            <li>
                                <a href="book" target="_blank" class=" waves-effect"><i
                                        class="mdi mdi-calendar-range-outline"></i><span>Резервирование</span>
                                </a>
                            </li>

                

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Главная</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ticker</a></li>
                                            <li class="breadcrumb-item active">Главная</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                    
                                    <h4 class="card-title">Новая события</h4>
                                    <p class="card-subtitle mb-4">Заполните форму для создании новой событии.</p>

                                    <form action="/?type=add" method="post">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Заголовок</label>
                                            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите заголовок">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Дата</label>
                                            <input type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите заголовок">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Время</label>
                                            <input type="time" name="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите заголовок">
                                        </div>
                                        <button class="btn btn-primary waves-effect waves-light">Добавить событию</button>
                                    </form>
                    
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div>

                             <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Список событии</h4>
                                        <p class="card-subtitle mb-4"> Все событии в списке счтиаются актуальными до момента удалении.</p>

                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>События</th>
                                                        <th>Дата</th>
                                                        <th>Время</th>
                                                        <th>Действия</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $result = DBC::show('events');
                                                    $i      = 1;
                                                    foreach($result as $row){
                                                        ?>
                                                    <tr>
                                                        <th scope="row"><?=$i++?></th>
                                                        <td><?=$row['title']?></td>
                                                        <td><?=$row['date']?></td>
                                                        <td><?=$row['time']?></td>
                                                        <td><a href="?dell=<?=$row['id']?>">Удалить</a></td>
                                                    </tr>
                                                        <?
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->
                                    </div>
                                    <!-- end card-body-->
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <!-- end row-->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                2024 © Ticker.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                Developed by Kenjalin Didar Kasenuly
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Overlay-->
        <div class="menu-overlay"></div>


        <!-- jQuery  -->
        <script src="public/assets/js/jquery.min.js"></script>
        <script src="public/assets/js/bootstrap.bundle.min.js"></script>
        <script src="public/assets/js/metismenu.min.js"></script>
        <script src="public/assets/js/waves.js"></script>
        <script src="public/assets/js/simplebar.min.js"></script>


        <!-- Sparkline Js-->
        <script src="public/../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Chart Js-->
        <script src="public/../plugins/jquery-knob/jquery.knob.min.js"></script>

        <!-- Chart Custom Js-->
        <script src="public/assets/pages/knob-chart-demo.js"></script>


        <!-- Morris Js-->
        <script src="public/../plugins/morris-js/morris.min.js"></script>

        <!-- Raphael Js-->
        <script src="public/../plugins/raphael/raphael.min.js"></script>

        <!-- Custom Js -->
        <script src="public/assets/pages/dashboard-demo.js"></script>

        <!-- App js -->
        <script src="public/assets/js/theme.js"></script>

    </body>

</html>