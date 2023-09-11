<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/visitor/lists', 'VisitorRegistration::lists');
$routes->get('/visitor/create', 'VisitorRegistration::create');
$routes->get('/visitor/view/(:num)', 'VisitorRegistration::view/$1');
$routes->get('/visitor/delete/(:num)', 'VisitorRegistration::delete/$1');
$routes->get('/visitor/update/(:num)', 'VisitorRegistration::update/$1');
$routes->post('/visitor/save', 'VisitorRegistration::store');

service('auth')->routes($routes);
