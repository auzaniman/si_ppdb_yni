<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SMAITController;
use App\Http\Controllers\SMPITController;
use App\Http\Controllers\SDITController;
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
Route::resource('ppdb_smait', SMAITController::class);
Route::resource('ppdb_smpit', SMPITController::class);
Route::resource('ppdb_sdit', SDITController::class);

// Admin
Route::prefix('admin')
->namespace('Admin')
->middleware(['auth', 'admin'])
->group(function() {

  // Dashboard
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

  // Table
  Route::get('/smait', [AdminController::class, 'smait'])->name('smait');

  Route::get('/smpit', [AdminController::class, 'smpit'])->name('smpit');

  Route::get('/sdit', [AdminController::class, 'sdit'])->name('sdit');
});

Auth::routes();
