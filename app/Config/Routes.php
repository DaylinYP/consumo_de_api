<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('planes', 'PlanesController::verPlanes');
$routes->get('nuevo', 'PlanesController::nuevo');
$routes->post('agregar', 'PlanesController:agregar');
$routes->get('editar/(:num)', 'PlanesController::editar/$1');
$routes->post('modificar', 'PlanesController::modificar');
$routes->get('eliminar/(:num)', 'PlanesController::eliminar/$1');
