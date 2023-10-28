<?php

use App\Controllers\DashPasienController;
use App\Controllers\Home;
use App\Controllers\PasienController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('pasien/(:any)', [DashPasienController::class, 'show']);
