<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('department', 'DepartmentController::index');
$routes->get('adddepartment', 'DepartmentController::adddepartment');
$routes->post('adddepartment', 'DepartmentController::adddepartment');
$routes->get('editdepartment/(:num)','DepartmentController::editdepartment/$1');
$routes->post('editdepartment','DepartmentController::editdepartment');
$routes->get('deletedepartment/(:num)', 'DepartmentController::deletedepartment/$1');



$routes->get('course','CourseController::index');
$routes->get('addcourse','CourseController::addcourse');
$routes->post('addcourse','CourseController::addcourse');
$routes->get('editcourse/(:num)','CourseController::editcourse/$1');
$routes->post('editcourse','CourseController::editcourse');
$routes->get('deletecourse/(:num)', 'CourseController::deletecourse/$1');
$routes->get('getCourseByDepartment/(:num)','CourseController::getCourseByDepartment/$1');

$routes->get('student','StudentController::index');
$routes->get('addstudent','StudentController::addstudent');
$routes->post('addstudent','StudentController::addstudent');







