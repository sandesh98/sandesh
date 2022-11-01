<?php

$url = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/projecten' => 'controllers/projecten.php',
    '/over-mij' => 'controllers/over-mij.php',
    '/contact' => 'controllers/contact.php',
    '/wecollect' => 'controllers/wecollect.php',
    '/superspeurders' => 'controllers/superspeurders.php',
    '/abc-hulplijn' => 'controllers/abc-hulplijn.php',
    '/pscateringservices' => 'controllers/pscateringservices.php',
    '/sportmaatje' => 'controllers/sportmaatje.php',
    '/de-cafe-koers' => 'controllers/de-cafe-koers.php',
    '/guess-and-win' => 'controllers/guess-and-win.php',
    '/natraj-flyer' => 'controllers/natraj-flyer.php',
    '/dutchdiner' => 'controllers/dutchdiner.php',
    '/cv' => 'controllers/cv.php',
    '/bubba' => 'controllers/bubba.php',
    '/multipurpose' => 'controllers/multipurpose.php',
];

if (array_key_exists($url, $routes)) {
    require $routes[$url];
} else {
    abort();
}
