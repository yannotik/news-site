<?php
session_start();

//header( 'Content-Type: image/png' );
ini_set('display_errors',1);
error_reporting(E_ALL);

define('ROOT', dirname(__FILE__));
include (ROOT.'/components/Autoload.php');

$router = new Router();
$router->run();