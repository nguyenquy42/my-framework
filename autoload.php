<?php
define('CLASS_DIR', './inc');
define('DS', DIRECTORY_SEPARATOR);
$scan = scandir(CLASS_DIR);

foreach ($scan as $file) {
    if (!is_dir($file)) {
        require_once CLASS_DIR . DS . $file;
    }
}


define('THEME', 'View/');
define('PHP', '.php');
$url = $_SERVER['REQUEST_URI'];
$path_url = explode('/', $url);
// define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/' . $path_url[1]) . '/';
define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] ) . '/';
