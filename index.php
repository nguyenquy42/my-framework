<?php
session_start(); 
require_once 'autoload.php';
// lấy để new +
$slug = Request::get(1);
$alias_modules = new Alias();
$alias_modules = $alias_modules->getAlias($slug);
// ddd($alias_modules);
if(isset($alias_modules['module']))
{
    $modules = $alias_modules['module'];
    $id = $alias_modules['module_id'];
} else {
    $modules = Request::modules();
}
$view =    Request::view();
if(empty($modules))
{
// This's Home page
    include 'view/index.php';
    die();
} else {
    // Check file controller is exist;
    $controller_path = 'controller'. DS. $modules. '.php';
    if(file_exists($controller_path))
    {
        require_once $controller_path;
        $contorller = new $modules;
        
        if (is_null($view)) $view = 'index';
        if($view && method_exists( $contorller, $view))
        {
            $contorller->$view();
        } else {
            $contorller->notfound();
        }
    } else {
        header('Location: http://local.my-framework/login/notfound');
    }
}
