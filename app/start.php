<?php

ini_set('display_errors', 'on');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('BASE_URL', 'http://localhost:8080/myPHP');

$db = new PDO('mysql:host=127.0.0.1;dbname=mycms', 'root', '');

require 'functions.php';