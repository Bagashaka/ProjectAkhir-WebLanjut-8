<?php

use App\Controllers\DashPasienController;
use App\Controllers\Home;
use App\Controllers\PasienController;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\AdminController;
use App\Controllers\ManageUser;
use App\Controllers\UserController;
 
/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class,'index']);

$routes->get('/dokter/profile', [UserController::class,'index'], ['filter' => 'role:dokter']);
$routes->get('/dokter/profile/edit', [UserController::class, 'edit'], ['filter' => 'role:dokter']);
$routes->put('/dokter/profile/edit/(:any)', [UserController::class, 'updateProfile'], ['filter' => 'role:dokter']);

$routes->get('/admin/profile', [AdminController::class, 'index'], ['filter' => 'role:admin']);
$routes->get('/admin/profile/edit', [AdminController::class, 'edit'], ['filter' => 'role:admin']);
$routes->put('/admin/profile/edit/(:any)', [AdminController::class, 'updateProfile'], ['filter' => 'role:admin']);


$routes->get('/users', [ManageUser::class, 'index'], ['filter' => 'role:admin']);
$routes->get('/users/pasien/edit/(:any)', [ManageUser::class, 'editPasien'], ['filter' => 'role:admin']);
$routes->put('/users/pasien/(:any)', [ManageUser::class, 'updatePasien'], ['filter' => 'role:admin']);
$routes->get('/users/dokter/edit/(:any)', [ManageUser::class, 'editDokter'], ['filter' => 'role:admin']);
$routes->put('/users/dokter/(:any)', [ManageUser::class, 'updateDokter'], ['filter' => 'role:admin']);
$routes->get('/users/create', [ManageUser::class, 'create'], ['filter' => 'role:admin']);
$routes->post('/users/create', [ManageUser::class, 'save'], ['filter' => 'role:admin']);

$routes->delete('/users/delete/(:any)', [ManageUser::class, 'delete/$1'], ['filter' => 'role:admin']);
$routes->post('/users/reset/(:any)', [ManageUser::class, 'resetPassword/$1'], ['filter' => 'role:admin']);

$routes->get('/pasien/profile', [DashPasienController::class, 'index'], ['filter' => 'role:pasien']);
$routes->get('/pasien/profile/edit', [DashPasienController::class, 'edit'], ['filter' => 'role:pasien']);
$routes->put('/pasien/profile/edit/(:any)', [DashPasienController::class, 'updateProfile'], ['filter' => 'role:pasien']);
$routes->get('pasien/(:any)', [DashPasienController::class, 'show']);

