<?php
function ddd($var)
{
    echo '<pre style="background:gray; color:white;">';
    var_dump($var);
    echo '</pre>';
    die;
}