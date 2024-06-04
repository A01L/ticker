<?php
require_once "ectr/main.php";

if(isset($_GET['logout'])){
    Session::close('user');
}
   
Router::get('/', 'login.php');
if($_SESSION['user']['id']){
    Router::get('/', 'index.php');
    Router::get('/list', 'list.php');
}

Router::get('/book', 'book.php');

// Activate routing 
Router::on();
?>