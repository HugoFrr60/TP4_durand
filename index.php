<?php
require "../includes/flight-master/flight/Flight.php";
require "./routes/routes.php";
require "../includes/smarty-4.2.1/libs/Smarty.class.php";
require "../includes/pdo.php";

// Register Smarty as the view class
// Also pass a callback function to configure Smarty on load
Flight::register('view', 'Smarty', array(), function($smarty){
    $smarty->template_dir = './templates/';
    $smarty->compile_dir = './templates_c/';
    $smarty->config_dir = './config/';
    $smarty->cache_dir = './cache/';    
});

Flight::map('render', function($template, $data){
    Flight::view()->assign($data);
    Flight::view()->display($template);
});

Flight::start();