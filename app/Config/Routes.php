<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->setDefaultnamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();


$routes->get('/', 'DashboardController::index');
//route to be displayed when root diretory is accessed

$routes->get('dashboard','DashboardController::index');
$routes->post('offices/list','OfficeController::list');
$routes->get('tickets/list','TicketController::list');

$routes->resource('offices',['controller' => 'OfficeController', 'except' => 'new, edit', 'filter' => 'auth']);
$routes->resource('tickets',['controller' => 'TicketController', 'except' => 'new, edit']);

service('auth')->routes($routes);
