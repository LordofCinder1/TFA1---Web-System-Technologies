<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Pages::landing');


$routes->get('/landing', 'Pages::landing');
$routes->get('/about', 'Pages::about');
$routes->get('/customers', 'Customers::index');
$routes->get('/users', 'Users::index');
