<?php
function ddd($var)
{
    echo '<pre style="background:gray; color:white;">';
    var_dump($var);
    echo '</pre>';
    die;
}

function dateMDY($date)
{
    $myDateTime = DateTime::createFromFormat('Y-m-d', $date);
    return $myDateTime->format('d-m-Y');
}
