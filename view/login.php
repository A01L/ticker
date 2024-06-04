<?php
if(isset($_POST['login']) && isset($_POST['password'])){
    $check = DBC::select('users', 'login',$_POST['login']);
    if($check['password'] == md5($_POST['password'])){
        Session::new('user', $check['id']);
    }
    Router::redirect('/');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Ticker - Login</title>
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
 
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center min-vh-100">
                        <div class="w-100 d-block bg-white shadow-lg rounded my-5">
                            <div class="row">
                                <!-- <div class="col-lg-5 d-none d-lg-block bg-login rounded-left"></div> -->
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center mb-5">
                                            <a href="index.html" class="text-dark font-size-22 font-family-secondary">
                                                <i class="mdi mdi-alpha-x-circle"></i> <b>Ticker</b>
                                            </a>
                                        </div>
                                        <h1 class="h5 mb-1">Добро пожаловать!</h1>
                                        <p class="text-muted mb-4">Введите данные для входа.</p>
                                        <form class="user" action="/" method="post">
                                            <div class="form-group">
                                                <input type="text" name="login" class="form-control form-control-user" id="exampleInputEmail" placeholder="Логин">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Пароль">
                                            </div>
                                            <button class="btn btn-success btn-block waves-effect waves-light">Авторизоваться</button>
                                
                                        </form>
                                        <!-- end row -->
                                    </div> <!-- end .padding-5 -->
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div> <!-- end .w-100 -->
                    </div> <!-- end .d-flex -->
                </div> <!-- end col-->
            </div> <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- jQuery  -->
    <script src="public/assets/js/jquery.min.js"></script>
    <script src="public/assets/js/bootstrap.bundle.min.js"></script>
    <script src="public/assets/js/metismenu.min.js"></script>
    <script src="public/assets/js/waves.js"></script>
    <script src="public/assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="public/assets/js/theme.js"></script>

</body>

</html>