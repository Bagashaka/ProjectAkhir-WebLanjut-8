<?php

use App\Controllers\DashPasienController;
use App\Controllers\Home;
use App\Controllers\PasienController;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\AdminController;
use App\Controllers\AuthController;
use App\Controllers\JadwalPrak;
use App\Controllers\ManageJadwalPraktik;
use App\Controllers\ManageKunjungan;
use App\Controllers\ManageUser;
use App\Controllers\ManageRekamedis;
use App\Controllers\PenyakitController;
use App\Controllers\UserController;
 
/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class,'index']);
$routes->get('/login', [AuthController::class,'login']);
$routes->get('/register', [AuthController::class,'register']);


$routes->get('/cari/penyakit', [PenyakitController::class,'index']); 
$routes->post('/cari/penyakit', [PenyakitController::class,'proses']); 

$routes->get('/dokter/profile', [UserController::class,'index'], ['filter' => 'role:dokter']);
$routes->get('/dokter/profile/edit', [UserController::class, 'edit'], ['filter' => 'role:dokter']);
$routes->put('/dokter/profile/edit/(:any)', [UserController::class, 'updateProfile'], ['filter' => 'role:dokter']);

$routes->get('/dokter/pasien/view', [UserController::class,'showPasien'], ['filter' => 'role:dokter']);

$routes->get('/dokter/rekamedis', [ManageRekamedis::class,'index'], ['filter' => 'role:dokter']);
$routes->get('/dokter/rekamedis/create', [ManageRekamedis::class,'create'], ['filter' => 'role:dokter']);
$routes->post('/dokter/rekamedis/create', [ManageRekamedis::class,'save'], ['filter' => 'role:dokter']);
$routes->get('/dokter/rekamedis/edit/(:any)', [ManageRekamedis::class,'edit'], ['filter' => 'role:dokter']);
$routes->put('/dokter/rekamedis/(:any)', [ManageRekamedis::class,'update'], ['filter' => 'role:dokter']);
$routes->delete('/dokter/rekamedis/delete/(:any)', [ManageRekamedis::class,'delete/$1'], ['filter' => 'role:dokter']);

$routes->get('/dokter/jad', [JadwalPrak::class, 'index']);
$routes->post('/dokter/jad', [JadwalPrak::class, 'create']);
$routes->put('/dokter/jad/(:any)', [JadwalPrak::class, 'update/$1']);
$routes->delete('/dokter/jad/(:any)', [JadwalPrak::class, 'delete/$1']);
$routes->get('/dokter/jad/(:any)', [JadwalPrak::class, 'show/$1']);

$routes->get('/dokter/jadwal', [ManageJadwalPraktik::class,'index'], ['filter' => 'role:dokter']);
$routes->get('/dokter/jadwal/create', [ManageJadwalPraktik::class,'create'], ['filter' => 'role:dokter']);
$routes->post('/dokter/jadwal/create', [ManageJadwalPraktik::class,'save'], ['filter' => 'role:dokter']);
$routes->get('/dokter/jadwal/edit/(:any)', [ManageJadwalPraktik::class,'edit'], ['filter' => 'role:dokter']);
$routes->put('/dokter/jadwal/(:any)', [ManageJadwalPraktik::class,'update'], ['filter' => 'role:dokter']);
$routes->delete('/dokter/jadwal/delete/(:any)', [ManageJadwalPraktik::class,'delete/$1'], ['filter' => 'role:dokter']);

$routes->get('/dokter/jadwal/kunjungan', [ManageKunjungan::class, 'jadwalKunjunganDokter'] , ['filter' => 'role:dokter']);
$routes->get('/dokter/kunjungan', [ManageKunjungan::class, 'KunjunganTerselesaikanDokter'] , ['filter' => 'role:dokter']);
$routes->get('/dokter/kunjungan/edit/(:any)', [ManageKunjungan::class, 'editDokter'] , ['filter' => 'role:dokter']);
$routes->put('/dokter/kunjungan/(:any)', [ManageKunjungan::class, 'updateDokter'] , ['filter' => 'role:dokter']);

$routes->get('/admin/profile', [AdminController::class, 'index'], ['filter' => 'role:admin']);
$routes->get('/admin/profile/edit', [AdminController::class, 'edit'], ['filter' => 'role:admin']);
$routes->put('/admin/profile/edit/(:any)', [AdminController::class, 'updateProfile'], ['filter' => 'role:admin']);

$routes->get('/admin/kunjungan', [ManageKunjungan::class, 'daftarKunjungan'] , ['filter' => 'role:admin']);
$routes->delete('/admin/kunjungan/delete/(:any)', [ManageKunjungan::class, 'deleteAdmin/$1'] , ['filter' => 'role:admin']);

$routes->get('/admin/jadwalpraktik', [ManageJadwalPraktik::class, 'showJadwal'], ['filter' => 'role:admin']);
$routes->delete('/admin/jadwalpraktik/delete/(:any)', [ManageJadwalPraktik::class,'deleteAdmin/$1'], ['filter' => 'role:admin']);

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

$routes->get('/pasien/jadwalpraktik', [ManageJadwalPraktik::class, 'showJadwalPasien'], ['filter' => 'role:pasien']);

$routes->get('/pasien/jadwal/kunjungan', [ManageKunjungan::class, 'jadwalKunjungan'] , ['filter' => 'role:pasien']);
$routes->get('/pasien/kunjungan', [ManageKunjungan::class, 'KunjunganTerselesaikanPasien'] , ['filter' => 'role:pasien']);
$routes->get('/pasien/kunjungan/create', [ManageKunjungan::class, 'create'] , ['filter' => 'role:pasien']);
$routes->post('/pasien/kunjungan/create', [ManageKunjungan::class, 'save'] , ['filter' => 'role:pasien']);
$routes->get('/pasien/kunjungan/edit/(:any)', [ManageKunjungan::class, 'edit'] , ['filter' => 'role:pasien']);
$routes->put('/pasien/kunjungan/(:any)', [ManageKunjungan::class, 'update'] , ['filter' => 'role:pasien']);
$routes->delete('/pasien/kunjungan/delete/(:any)', [ManageKunjungan::class, 'delete/$1'] , ['filter' => 'role:pasien']);
