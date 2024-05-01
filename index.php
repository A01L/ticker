<?php
require_once "ectr/main.php";

Router::get('/', 'index.php');
Router::get('/contact', 'contact-us.php');
Router::get('/grid', 'tour-grid.php');
Router::get('/tour-detail', 'detail.php');
Router::get('/add', 'add-tour.php');

// Activate routing 
Router::on();
?>