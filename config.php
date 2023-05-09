<?php

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

define('DB_NAME', $_ENV['DBNAME']);
define('DB_USER', $_ENV['DBNAME']);
define('DB_PASSWORD', $_ENV['DBPASS']);
define('DB_HOST', $_ENV['REMOTEHOST']);
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('WP_HOME', $_ENV['LOCALURL']);
define('WP_SITEURL', $_ENV['LOCALURL']);

define('WP_TEMPLATE', 'parenttheme');
define('WP_STYLESHEET', 'parenttheme');

if (!defined('WP_DEBUG')) {
    define('WP_DEBUG', false);
}
