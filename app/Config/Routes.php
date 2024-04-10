<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/index.php/mundo', 'Holamundo');
$routes->get('/index.php/mundo/otra', 'Holamundo::desdeOtraCarpeta');


