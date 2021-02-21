<?php
define('CLASS_DIR', './inc');
define('DS', DIRECTORY_SEPARATOR);
$scan = scandir(CLASS_DIR);

foreach($scan as $file)
{
    if (!is_dir($file))
    {
        require_once CLASS_DIR .DS. $file;
    }
}
