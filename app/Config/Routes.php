<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/registration','Home::registration_form');
$routes->post('/register','Registration::register');
$routes->get('/pay','Home::payment');
$routes->get('/3af0ec57083c23b5485599e028bd46e8','Registration::listOccupations');
