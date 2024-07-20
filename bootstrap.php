<?php
define("_DIR_ROOT", str_replace("\\", "/", __DIR__));
//Xử lí http root
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    $web_root = 'https://' . $_SERVER['HTTP_HOST'];
} else {
    $web_root = 'http://' . $_SERVER['HTTP_HOST'];
}

$dirRoot = str_replace('\\', '/', _DIR_ROOT);

$documentRoot = str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']);

$folder = str_replace(strtolower($documentRoot), '', strtolower($dirRoot));

$web_root = $web_root . $folder;

define('_WEB_ROOT', $web_root);
define('_ADMIN_DEFAULT', _WEB_ROOT . '/admin');
define('_MANAGE_DEFAULT', _WEB_ROOT . '/admin/manage');
define('_PRODUCT_DEFAULT', _WEB_ROOT . '/client/product/product');
define('_POST_DEFAULT', _WEB_ROOT . '/client/post/post');

// Tự động load configs
$configs_dir = scandir('configs');
if (isset($configs_dir)) {
    foreach ($configs_dir as $item) {
        if ($item != '.' && $item != '..' && file_exists('configs/' . $item)) {
            require_once 'configs/' . $item; // Load routes config
        }
    }
}
// Load all service
if (!empty($config['app']['service'])) {
    $allServices = $config['app']['service'];
    if (!empty($allServices)) {
        foreach ($allServices as $serviceName) {
            if (file_exists('app/core/' . $serviceName . '.php')) {
                require_once 'app/core/' . $serviceName . '.php';
            }
        }
    }
}
// Load ServiceProvider Class
require_once 'core/ServiceProvider.php';
// Load view class
require_once 'core/View.php';
require_once 'core/Load.php';
// Middleware
require_once 'core/Middlewares.php';
require_once 'core/Route.php'; // Load Route class
// Kiểm tra config và load database
if (!empty($config['database'])) {
    $db_config = array_filter($config['database']);
    if (!empty($db_config)) {
        require_once 'core/Connection.php';
        require_once 'core/QueryBuilder.php';
        require_once 'core/Database.php';
        require_once 'core/DB.php';
    }
}
require_once "app/App.php"; //Load app
require_once 'core/Session.php'; //Load Session class
require_once 'core/Helper.php';
$allHelper = scandir('app/helpers');
if (isset($allHelper)) {
    foreach ($allHelper as $item) {
        if ($item != '.' && $item != '..' && file_exists('app/helpers/' . $item)) {
            require_once 'app/helpers/' . $item; // Load routes config
        }
    }
}
require_once "core/Model.php"; //Load Base Model
// require_once "core/Template.php"; //Load template
require_once "core/Controller.php"; //Load base controller
require_once 'core/Request.php'; //Load Request
require_once 'core/Response.php'; //Load Response
