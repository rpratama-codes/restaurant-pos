<?php

/**
 * I Dont know is it allow or not to modify the app directly,
 * but i need change some config to properly run the app. 
 */
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$host =  $_ENV["DB_HOST"];
$user =  $_ENV["DB_USER"];
$password = $_ENV["DB_PASS"];
$db_name = $_ENV["DB_NAME"];

// var_dump([$host, $user, $password, $db_name]);

if (isset($host) && isset($user) && isset($password) && isset($db_name)) {
    define('DB_HOST', $host);
    define('DB_USER', $user);
    define('DB_PASS', $password);
    define('DB_NAME', $db_name);
} else {
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'restaurant_db');
}
