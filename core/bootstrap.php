<?php

// Use is similar to an import statement where we can import all the classes in a given namespace
use App\Core\App;

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($name, $data = [])
{
    // With extract: ['name' => 'joe', 'age' => 25] becomes
    // $name = 'joe'
    // $age = 25
    extract($data);

    return require "app/views/{$name}.php";
}

function redirect($path)
{
    header("Location: /{$path}");

}
