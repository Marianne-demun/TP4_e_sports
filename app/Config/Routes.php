<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home');
$routes->get('/login', 'Connection::index');
$routes->post('/login', 'Connection::attemptLogin'); 

