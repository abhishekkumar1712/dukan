<?php
// HTTP
define('HTTP_SERVER', 'http://192.168.56.101/apps/ecommerce/admin/');
define('HTTP_CATALOG', 'http://192.168.56.101/apps/ecommerce/');

// HTTPS
define('HTTPS_SERVER', 'http://192.168.56.101/apps/ecommerce/admin/');
define('HTTPS_CATALOG', 'http://192.168.56.101/apps/ecommerce/');

// DIR
define('DIR_APPLICATION', '/var/www/main/apps/ecommerce/admin/');
define('DIR_SYSTEM', '/var/www/main/apps/ecommerce/system/');
define('DIR_IMAGE', '/var/www/main/apps/ecommerce/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_CATALOG', '/var/www/main/apps/ecommerce/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'edifyn');
define('DB_PORT', '3306');
define('DB_PREFIX', 'ecommerce');

// OpenCart API
define('OPENCART_SERVER', '');
