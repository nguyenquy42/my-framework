<?php
session_start();
require_once 'autoload.php';

$author = null;
$none = null;

if (isset($_SESSION['username']) && $_SESSION['username']) {
    $author = '<p class="nav-link dropdown-toggle m-0" data-toggle="dropdown">' . $_SESSION['username'] . '</p>';
    $_SESSION['author'] = $author ;
} else {
    $none = '<a class="" href="' . BASE_URL . '/index.php?module=login">đăng nhập</a>';
    $_SESSION['none'] = $none ;
}

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
