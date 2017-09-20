<?php

// Designates that this is the Request class in the App/Core/Request.php directory
namespace App\Core;


class Request
{
    protected $PROPERTY;

    public function __construct($PROPERTY)
    {
        $this->PROPERTY = $PROPERTY;
    }

    public static function uri()
    {
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
//      return trim($_SERVER['REQUEST_URI'], '/');
    }
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD']; // Gives us GET or POST
    }
}
