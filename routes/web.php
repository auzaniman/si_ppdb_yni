<?php

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

Route::get('/form_pendaftaran', function () {
    return view('user_view.pages.ppdb');
})->name('ppdb');

Route::get('/dashboard', function () {
    return view('admin_view.pages.dashboard');
})->name('dashboard');

Route::get('/table_sma', function () {
    return view('admin_view.pages.table_sma');
})->name('smait');
