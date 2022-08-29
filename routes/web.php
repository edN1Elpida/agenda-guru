<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AgendaguruController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

// login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/postlogin',[LoginController::class, 'postlogin']);
Route::get('/logout',[LoginController::class, 'logout']);
Route::get('/register', [LoginController::class, 'register'])->name('register');


// admin

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/tambah/admin', function () {
    return view('tambah.admin');
});

Route::post('/insertadmin', [AdminController::class, 'create']);
Route::get('/viewadmin/{id}', [AdminController::class, 'view']);
Route::post('/updateadmin/{id}', [AdminController::class, 'update']);
Route::get('/viewadmin/{id}', [AdminController::class, 'view']);
Route::get('/deleteadmin/{id}', [AdminController::class, 'destroy']);

// guru

Route::get('/guru', [GuruController::class, 'index'])->name('guru');

Route::get('/tambah/guru', function () {
    return view('tambah.guru');
});

Route::post('/insertguru', [GuruController::class, 'create']);
Route::get('/viewguru/{id}', [GuruController::class, 'view']);
Route::post('/updateguru/{id}', [GuruController::class, 'update']);
Route::get('/viewguru/{id}', [GuruController::class, 'view']);
Route::get('/deleteguru/{id}', [GuruController::class, 'destroy']);

// kelas
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');

Route::get('/tambah/kelas', function () {
    return view('tambah.kelas');
});

Route::post('/insertkelas', [KelasController::class, 'create']);
Route::get('/viewkelas/{id}', [KelasController::class, 'view']);
Route::post('/updatekelas/{id}', [KelasController::class, 'update']);
Route::get('/viewkelas/{id}', [KelasController::class, 'view']);
Route::get('/deletekelas/{id}', [KelasController::class, 'destroy']);

// agenda
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');

Route::get('/tambah/agenda', function () {
    return view('tambah.agenda');
});

Route::post('/insertagenda', [AgendaController::class, 'create']);
Route::get('/viewagenda/{id}', [AgendaController::class, 'view']);
Route::post('/updateagenda/{id}', [AgendaController::class, 'update']);
Route::get('/viewagenda/{id}', [AgendaController::class, 'view']);
Route::get('/deleteagenda/{id}', [AgendaController::class, 'destroy']);

// agenda
Route::get('/agendaguru', [AgendaguruController::class, 'index'])->name('agendag');

Route::get('/tambah/agendaguru', function () {
    return view('tambah.agendaguru');
});

Route::post('/insertagendaguru', [AgendaguruController::class, 'create']);
Route::get('/viewagendaguru/{id}', [AgendaguruController::class, 'view']);
Route::post('/updateagendaguru/{id}', [AgendaguruController::class, 'update']);
Route::get('/viewagendaguru/{id}', [AgendaguruController::class, 'view']);
Route::get('/deleteagendaguru/{id}', [AgendaguruController::class, 'destroy']);