<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/registration','Home::registration_form');
$routes->post('/register','Registration::register');
$routes->get('/pay','Home::payment');
