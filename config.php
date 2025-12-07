<?php

/**
 * I Dont know is it allow or not to modify the app directly,
 * but i need change some config to properly run the app. 
 */

$host =  getenv("DB_HOST");
$user =  getenv("DB_USER");
$password = getenv("DB_PASS");
$db_name = getenv("DB_NAME");

if (is_null($host) == 0 && is_null($user) == 0 && is_null($password) == 0 && is_null($db_name) == 0) {
    define('DB_HOST', $host);
    define('DB_USER', $user);
    define('DB_PASS', $password);
    define('DB_NAME', $db_name);
} else {
    define('DB_HOST', 'localhost');
    define('DB_USER', '');
    define('DB_PASS', '');
    define('DB_NAME', 'restaurant_db');
}