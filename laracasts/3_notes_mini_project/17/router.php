<?php



$url = parse_url($_SERVER['REQUEST_URI'])['path'];

dd(parse_url($_SERVER['REQUEST_URI']));

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes.php',
    '/contact' => 'controllers/contact.php',
];

function routeToController($url, $routes)
{
    if (array_key_exists($url, $routes)) {
        require $routes[$url];
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);

    require "views/$code.view.php";

    exit();
}

routeToController($url, $routes);
