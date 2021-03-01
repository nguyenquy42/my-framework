<?php
class Request
{
    public function __construct()
    {
    }

    public static function get($index = 0)
    {
        $request = $_SERVER['REQUEST_URI'];
        $parse_request = explode("/", $request);
        return $parse_request[$index];
    }

    public static function modules()
    {
        return self::get(1);
    }

    public static function view()
    {
        return self::get(2);
    }

    public static function id()
    {
        return self::get(3);
    }
}
