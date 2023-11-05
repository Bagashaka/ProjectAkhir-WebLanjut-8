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
$routes->get('/dokter', [UserController::class,'index'], ['filter' => 'role:dokter']);
$routes->get('/dokter/index', [UserController::class,'index'], ['filter' => 'role:dokter']);

$routes->get('/admin', [AdminController::class, 'index'], ['filter' => 'role:admin']);
$routes->get('/admin/index', [AdminController::class, 'index'], ['filter' => 'role:admin']);

$routes->get('/pasien', [DashPasienController::class, 'index']);
$routes->get('pasien/(:any)', [DashPasienController::class, 'show']);
$routes->get('/signin', 'Home::signin');
$routes->get('/register', 'Home::register');