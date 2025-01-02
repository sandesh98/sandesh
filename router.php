<?php

$url = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/projecten' => 'controllers/projecten.php',
    '/contact' => 'controllers/contact.php',
    '/wecollect' => 'controllers/wecollect.php',
    '/cv' => 'controllers/cv.php',
    '/bubba' => 'controllers/bubba.php',
    '/multipurpose' => 'controllers/multipurpose.php',
    '/globetrotters' => 'controllers/globetrotters.php',
    '/customerjourney' => 'controllers/uren-customerjourney.php',
    '/opdrachtgeversportaal' => 'controllers/opdrachtgeversportaal.php',
    '/research-repository' => 'controllers/research-repository.php',
    '/rs' => 'controllers/rs.php'
];

if (array_key_exists($url, $routes)) {
    require $routes[$url];
} else {
    abort();
}
