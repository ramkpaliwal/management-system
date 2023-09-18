<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



$routes->get('course', 'Home::course');
$routes->post('course', 'Home::course');

$routes->get('department', 'DepartmentController::index');
$routes->get('adddepartment', 'DepartmentController::adddepartment');
$routes->post('adddepartment', 'DepartmentController::adddepartment');
$routes->get('editdepartment/(:num)','DepartmentController::editdepartment/$1');
$routes->post('editdepartment','DepartmentController::editdepartment');
$routes->get('deletedepartment/(:num)', 'DepartmentController::deletedepartment/$1');


