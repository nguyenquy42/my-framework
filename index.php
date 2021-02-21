<?php
session_start();
require_once 'autoload.php';

// get Request to parse module
$modules = isset($_GET['module']) ? $_GET['module'] : NULL;
$view = isset($_GET['view']) ? $_GET['view'] : 'index';

if (empty($modules)) {
    // This's Home page
    include 'view/index.php';
    die();
} else {
    // Check file controller is exist;
    $controller_path = 'controllers' . DS . $modules . '.php';
    if (file_exists($controller_path)) {
        require_once $controller_path;
        $contorller = new $modules;
        if ($view && method_exists($contorller, $view)) {
            $contorller->$view();
        } else {
            $contorller->notfound();
        }
    } else {
        header('Location: index.php?module=login&view=notfound');
    }
}
