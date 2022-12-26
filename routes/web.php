<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SuperAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::middleware(['beforeauth'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login', [LoginController::class, 'login'])->name('login.authenticate');
});



Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    //SuperAdmin
    Route::get('/ProfileSuperAdmin', [SuperAdminController::class, 'profile'])->name('ProfileSuperAdmin');
    Route::get('/SettingSuperAdmin', [SuperAdminController::class, 'setting'])->name('SettingSuperAdmin');
    Route::get('/DashboardSuperAdmin', [SuperAdminController::class, 'index'])->name('DashboardSuperAdmin');
    // Route::get('/Profile', [SuperAdminController::class, 'DaftarUserAdmin'])->name('DaftarUserAdmin');
    Route::get('/DaftarUserAdmin', [SuperAdminController::class, 'DaftarUserAdmin'])->name('DaftarUserAdmin');
    Route::get('/DaftarUserAdmin', [SuperAdminController::class, 'tampilDaftarUserAdmin'])->name('DaftarUserAdmin');
    Route::get('/DaftarUserPegawai', [SuperAdminController::class, 'DaftarUserPegawai'])->name('DaftarUserPegawai');
    Route::get('/DaftarUserPegawai', [SuperAdminController::class, 'tampilDaftarUserPegawai'])->name('DaftarUserPegawai');
    Route::get('/TambahUserAdmin/add', [SuperAdminController::class, 'TambahUserAdmin'])->name('TambahUserAdmin');
    Route::post('/TambahUserAdmin/add', [SuperAdminController::class, 'TambahUserAdminProcess'])->name('TambahUserAdmin.submit');
    Route::get('/TambahUserPegawai/add', [SuperAdminController::class, 'TambahUserPegawai'])->name('TambahUserPegawai');
    Route::post('/TambahUserPegawai/add', [SuperAdminController::class, 'TambahUserPegawaiProcess'])->name('TambahUserPegawai.submit');
    Route::get('/viewAdmin/{id}', [SuperAdminController::class, 'LihatDaftarUserAdmin'])->name("LihatDaftarUserAdmin");
    Route::get('/editdataAdmin/{id}', [SuperAdminController::class, 'EditDataAdmin'])->name("EditDataAdmin");
    Route::post('/updatedataAdmin/{user}', [SuperAdminController::class, 'UpdateDataAdmin'])->name("UpdateDataAdmin.submit");
    Route::get('/viewPegawai/{id}', [SuperAdminController::class, 'LihatDaftarUserPegawai'])->name("LihatDaftarUserPegawai");
    Route::get('/editdataPegawai/{id}', [SuperAdminController::class, 'EditDataPegawai'])->name("EditDataPegawai");
    Route::post('/updatedataPegawai/{user}', [SuperAdminController::class, 'UpdateDataPegawai'])->name("UpdateDataPegawai.submit");
    

    //Admin
    Route::get('/DashboardAdmin', [AdminController::class, 'index'])->name('DashboardAdmin');
    Route::get('/ProfileAdmin', [AdminController::class, 'profile'])->name('ProfileAdmin');
    Route::get('/SettingAdmin', [AdminController::class, 'setting'])->name('SettingAdmin');
  
    //Pegawai
    Route::get('/DashboardPegawai', [PegawaiController::class, 'index'])->name('DashboardPegawai');
    Route::get('/ProfilePegawai', [PegawaiController::class, 'profile'])->name('ProfilePegawai');
    Route::get('/SettingPegawai', [PegawaiController::class, 'setting'])->name('SettingPegawai');
});


// Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Route::group(['middleware' => ['auth', 'ceklevel:SuperAdmin']], function() {
//     //SuperAdmin
//     Route::get('/ProfileSuperAdmin', [SuperAdminController::class, 'profile'])->name('ProfileSuperAdmin');
//     Route::get('/SettingSuperAdmin', [SuperAdminController::class, 'setting'])->name('SettingSuperAdmin');
//     Route::get('/DashboardSuperAdmin', [SuperAdminController::class, 'index'])->name('DashboardSuperAdmin');
//     // Route::get('/Profile', [SuperAdminController::class, 'DaftarUserAdmin'])->name('DaftarUserAdmin');
//     Route::get('/DaftarUserAdmin', [SuperAdminController::class, 'DaftarUserAdmin'])->name('DaftarUserAdmin');
//     Route::get('/DaftarUserAdmin', [SuperAdminController::class, 'tampilDaftarUserAdmin'])->name('DaftarUserAdmin');
//     Route::get('/DaftarUserPegawai', [SuperAdminController::class, 'DaftarUserPegawai'])->name('DaftarUserPegawai');
//     Route::get('/DaftarUserPegawai', [SuperAdminController::class, 'tampilDaftarUserPegawai'])->name('DaftarUserPegawai');
//     Route::get('/TambahUserAdmin/add', [SuperAdminController::class, 'TambahUserAdmin'])->name('TambahUserAdmin');
//     Route::post('/TambahUserAdmin/add', [SuperAdminController::class, 'TambahUserAdminProcess'])->name('TambahUserAdmin.submit');
//     Route::get('/TambahUserPegawai/add', [SuperAdminController::class, 'TambahUserPegawai'])->name('TambahUserPegawai');
//     Route::post('/TambahUserPegawai/add', [SuperAdminController::class, 'TambahUserPegawaiProcess'])->name('TambahUserPegawai.submit');
//     Route::get('/viewAdmin/{id}', [SuperAdminController::class, 'LihatDaftarUserAdmin'])->name("LihatDaftarUserAdmin");
//     Route::get('/editdataAdmin/{id}', [SuperAdminController::class, 'EditDataAdmin'])->name("EditDataAdmin");
//     Route::post('/updatedataAdmin/{user}', [SuperAdminController::class, 'UpdateDataAdmin'])->name("UpdateDataAdmin.submit");
//     Route::get('/viewPegawai/{id}', [SuperAdminController::class, 'LihatDaftarUserPegawai'])->name("LihatDaftarUserPegawai");
//     Route::get('/editdataPegawai/{id}', [SuperAdminController::class, 'EditDataPegawai'])->name("EditDataPegawai");
//     Route::post('/updatedataPegawai/{user}', [SuperAdminController::class, 'UpdateDataPegawai'])->name("UpdateDataPegawai.submit");
// });   
    
// Route::group(['middleware' => ['auth', 'ceklevel:Admin']], function() {
//     //Admin
//     Route::get('/DashboardAdmin', [AdminController::class, 'index'])->name('DashboardAdmin');
//     Route::get('/ProfileAdmin', [AdminController::class, 'profile'])->name('ProfileAdmin');
//     Route::get('/SettingAdmin', [AdminController::class, 'setting'])->name('SettingAdmin');
// });

// Route::group(['middleware' => ['auth', 'ceklevel:Pegawai']], function() {
//     //Pegawai
//     Route::get('/DashboardPegawai', [PegawaiController::class, 'index'])->name('DashboardPegawai');
//     Route::get('/ProfilePegawai', [PegawaiController::class, 'profile'])->name('ProfilePegawai');
//     Route::get('/SettingPegawai', [PegawaiController::class, 'setting'])->name('SettingPegawai');
// });



Route::fallback(function () {
    abort(404);
});