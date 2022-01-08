<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KBITController;
use App\Http\Controllers\TKIT1Controller;
use App\Http\Controllers\TKIT2Controller;
use App\Http\Controllers\SDITController;
use App\Http\Controllers\SMPITController;
use App\Http\Controllers\SMAITController;
use App\Http\Controllers\PPDBController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Yayasan
Route::get('/', function () {
    return view('user_view.pages.yayasan');
  })->name('home');

// PPDB Home
Route::get('/ppdb', [PPDBController::class, 'index'])->name('ppdb');

// PPDB Form
Route::resource('ppdb_kbit', KBITController::class);
Route::resource('ppdb_tkit1', TKIT1Controller::class);
Route::resource('ppdb_tkit2', TKIT2Controller::class);
Route::resource('ppdb_sdit', SDITController::class);
Route::resource('ppdb_smpit', SMPITController::class);
Route::resource('ppdb_smait', SMAITController::class);

// PPDB Checkout
Route::get('success', function () {
    return view('user_view.pages.success');
  })->name('success');

Route::get('success_smpit', function () {
  return view('user_view.pages.success_smpit');
})->name('success_smpit');

// Route::get('success_list', function () {
//   return view('user_view.pages.cetak_kartu.list');
// })->name('success_list');

// Route::get('success_cetak', function () {
//   return view('user_view.pages.cetak_kartu.cetak');
// })->name('success_cetak');

// Admin
Route::prefix('admin')
->namespace('Admin')
->middleware(['auth', 'admin'])
->group(function() {

  // Dashboard
  Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

  // Table
  Route::get('/kbit', [AdminController::class, 'kbit'])->name('kbit');

  Route::get('/tkit1', [AdminController::class, 'tkit1'])->name('tkit1');

  Route::get('/tkit2', [AdminController::class, 'tkit2'])->name('tkit2');

  Route::get('/sdit', [AdminController::class, 'sdit'])->name('sdit');

  Route::get('/smpit', [AdminController::class, 'smpit'])->name('smpit');

  Route::get('/smait', [AdminController::class, 'smait'])->name('smait');
});

Auth::routes();
