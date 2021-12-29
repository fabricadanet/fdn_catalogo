<?php
session_start();
ob_start();

define('ROOT_PATH', dirname(__FILE__));
define('BASE_URL', 'http://localhost/fabricadanet/fdn_catalogo/public/');
define('DEFAULT_MODULE', 'Site');
define('DEFAULT_CONTROLLER', 'HomeController');
define('DEFAULT_METHOD', 'index');

define('DEFAULT_LAYOUT', 'default');
define('SITE_TITLE', 'MVC Framework');
define('SITE_DESCRIPTION', 'MVC Framework');
define('SITE_KEYWORDS', 'MVC Framework');

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'fdn_catalogo');
define('DB_PREFIX', 'fdn_');
define('DB_CHARSET', 'utf8');
define('DB_DRIVER', 'mysql');
define('DB_PORT', '3306');