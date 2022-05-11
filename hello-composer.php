<?php

require __DIR__ .'/vendor/autoload.php';

dump($_GET);
dump($_POST);
dump($_SERVER);
dump(__DIR__);
dumpt(__FILE__);

session_start();

dump($_SESSION);
$_SESSION['foo'] = 123;
dump($_SESSION);