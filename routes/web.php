<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\LaporanController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [ListController::class, 'getViewDash'])->middleware('auth');
Route::get('/dashboard', [ListController::class, 'getViewDash'])->middleware('auth');
Route::get('/tables', [SiswaController::class, 'getViewList'])->middleware('auth');
Route::get('/absen', [SiswaController::class, 'getViewLista'])->middleware('auth');
Route::get('/user', [UserController::class, 'getViewUser'])->middleware('auth');
Route::get('/tambah', [ListController::class, 'getViewtambah'])->middleware('auth');
Route::get('/login', [UserController::class, 'getViewLogin'])->name('login')->middleware('guest');
Route::get('/postlogin', [UserController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'getViewRegister'])->middleware('guest');
Route::get('/postregister', [RegisterController::class, 'store']);
Route::get('/logout', [UserController::class, 'logout']);



Route::get('/form/addsiswa', [SiswaController::class, 'getAddSiswa']);
Route::post('/addsiswa', [SiswaController::class, 'postAddSiswa']);
Route::get('/form/editsiswa/{id}', [SiswaController::class, 'getEditSiswa']);
Route::get('hapussiswa/{id}', [SiswaController::class, 'getDeletedSiswa']);
Route::post('/editsiswa', [SiswaController::class, 'postEditsiswa']);


Route::post('/addabsen', [SiswaController::class, 'postAddAbsen']);
Route::get('hapusabsen/{id}', [SiswaController::class, 'getDeletedAbsen']);
Route::get('/form/absen', [SiswaController::class, 'getViewAbsen']);
Route::get('/cari/absen', [SiswaController::class, 'getCariAbsen'])->name('cari');

Route::get('/laporan', [LaporanController::class, 'getViewLaporan']);
Route::get('/cetak', [LaporanController::class, 'getViewCetak']);