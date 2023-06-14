<?php
// (A) ERROR HANDLING
error_reporting(E_ALL & ~E_NOTICE);
ini_set("display_errors", 1);
ini_set("log_errors", 0);
ini_set("error_log", "PATH/error.log");

// (B) DATABASE SETTINGS - CHANGE TO YOUR OWN
define("DB_HOST", "localhost");
define("DB_NAME","");
define("DB_CHARSET","");
define("DB_USER","");
define("DB_PASSWORD","");

// (C) AUTO FILE PATHS
define("PATH_LIB", __DIR__ . DIRECTORY_SEPARATOR);
define("PATH_BASE", dirname(PATH_LIB) . DIRECTORY_SEPARATOR);

// (D) START SESSION
session_start();

// (E) INIT SYSTEM CORE
require PATH_LIB . "LIB-Core.php";
$_CORE = new Core();
