<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('user_view.pages.yayasan');
})->name('home');

// Pendaftaran
Route::get('/form_pendaftaran', function () {
    return view('user_view.pages.ppdb');
})->name('ppdb');

// Form
Route::get('/form_smait', function () {
    return view('user_view.pages.formulir.form_smait');
})->name('ppdb_smait');

Route::get('/form_smpit', function () {
    return view('user_view.pages.formulir.form_smpit');
})->name('ppdb_smpit');

Route::get('/form_sdit', function () {
    return view('user_view.pages.formulir.form_sdit');
})->name('ppdb_sdit');

// Admin
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Table
Route::get('/table_smp', function () {
  return view('admin_view.pages.table_smpit');
})->name('smpit');

Route::get('/table_sd', function () {
  return view('admin_view.pages.table_sdit');
})->name('sdit');

Route::get('/student', [StudentController::class, 'smait'])->name('smait');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
