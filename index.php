<?php

require 'vendor/autoload.php';
require'core/bootstrap.php';

// In PHP 7, we can import multiple classes in one "use" statement like below
use App\Core\{Router, Request};

// returns a router variable and then chains the direct method off of it
Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());