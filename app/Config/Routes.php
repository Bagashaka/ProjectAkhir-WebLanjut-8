<?php

use App\Controllers\DashPasienController;
use App\Controllers\Home;
use App\Controllers\PasienController;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\AdminController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('pasien/(:any)', [DashPasienController::class, 'show']);
$routes->get('/dashdok', 'Home::dashdok');
$routes->get('/admin', 'AdminController::admin');
$routes->get('/signin', 'Home::signin');
$routes->get('/register', 'Home::register');