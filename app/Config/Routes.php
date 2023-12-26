<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//register
$routes->get('/register', 'Auth\RegisterController::index');
$routes->post('/register', 'Auth\RegisterController::register');
//login
$routes->get('/login', 'Auth\LoginController::index');
$routes->post('/login', 'Auth\LoginController::login');
//logout
$routes->get('/logout', 'Auth\LogoutController::index');

//dashboard
$routes->get('/dashboard', 'DashboardController::index');

