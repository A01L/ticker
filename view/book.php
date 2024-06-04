<?php
if($_GET['type']=='add'){
    $data['fio']    = $_POST['fio'];
    $data['group']  = $_POST['group'];
    $data['person'] = $_POST['person'];
    $data['event']  = DBC::select('events', 'id', $_POST['event'], 'title');
    $data['eid']    = $_POST['event'];
    DBC::insert('book', $data);
    Router::redirect('/book');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title> Ticker - Booking</title>
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
            <div class="page-content">
                <center><a href="/" class="logo"><i class="mdi mdi-album"></i>
                        <span>Ticker</span>
                    </a></center>
                    
                    <div class="container-fluid">

                        <!-- end page title -->

                        <div class="row">

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                    
                                    <h4 class="card-title">Резервировать место</h4>
                                    <p class="card-subtitle mb-4">Заполните форму для резервировании месты.</p>

                                    <form action="/book?type=add" method="post">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">ФИО</label>
                                            <input type="text" name="fio" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите ФИО">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Группа</label>
                                            <input type="text" name="group" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите группу">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Персон</label>
                                            <select class="form-control" name="person" id="exampleFormControlSelect1">
                                                <option value="Студент">Студент</option>
                                                <option value="Учитель">Учитель</option>
                                                <option value="Родитель">Родитель</option>
                                                <option value="Другое">Другое</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">События</label>
                                            <select class="form-control" name="event" id="exampleFormControlSelect1">
                                                <?php
                                                    $result = DBC::show('events');
                                                    foreach($result as $row){
                                                        ?>
                                                        <option value="<?=$row['id']?>"><?=$row['title']?></option>
                                                        <?
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                        <button class="btn btn-primary waves-effect waves-light">Резервировать место</button>
                                    </form>
                    
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div>

                             <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Список событии</h4>
                                        <p class="card-subtitle mb-4"> Все что в списке актульный список событией</p>

                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>События</th>
                                                        <th>Дата</th>
                                                        <th>Время</th>
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

                <center>
                <div>
                                2024 © Ticker Developed by Kenjalin Didar Kasenuly
                                </div>
                </center>

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