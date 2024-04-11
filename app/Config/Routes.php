<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/formulario', 'Home::formulario');
$routes->post('/guarda', 'Home::guarda');


$routes->get('/index.php/mundo', 'Holamundo');
$routes->get('/index.php/mundo/otra', 'Holamundo::desdeOtraCarpeta');


