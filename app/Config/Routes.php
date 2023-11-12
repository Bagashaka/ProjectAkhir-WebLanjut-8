<?php

use App\Controllers\DashPasienController;
use App\Controllers\Home;
use App\Controllers\PasienController;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\AdminController;
use App\Controllers\UserController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class,'index']);

$routes->get('/dokter/profile', [UserController::class,'index'], ['filter' => 'role:dokter']);

$routes->get('/admin/profile/', [AdminController::class, 'index'], ['filter' => 'role:admin']);

$routes->get('/pasien/profile', [DashPasienController::class, 'index'], ['filter' => 'role:pasien']);
$routes->get('pasien/(:any)', [DashPasienController::class, 'show']);
