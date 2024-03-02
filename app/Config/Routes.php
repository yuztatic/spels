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

//-------------------------------
$routes->get('/offices_index','OfficesController::index');
$routes->get('/offices_index/create','OfficesController::createOffice');
$routes->post('/offices_index/store','OfficesController::storeOffice');
$routes->get('/offices_index/edit/(:num)','OfficesController::editOffice/$1');
$routes->post('/offices_index/update/(:num)','OfficesController::updateOffice/$1');
$routes->get('/offices_index/delete/(:num)','OfficesController::deleteOffice/$1');

service('auth')->routes($routes);
