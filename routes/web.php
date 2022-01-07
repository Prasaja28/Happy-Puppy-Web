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
    return view('home');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/daftar-lagu', function () {
    return view('daftar-lagu');
});
Route::get('/lokasi', function () {
    return view('lokasi');
});
Route::get('/karir', function () {
    return view('karir');
});
Route::get('/waralaba', function () {
    return view('waralaba');
});
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/formkarir', function () {
    return view('formkarir');
});
Route::get('/lokasi-not-found', function () {
    return view('lokasi-not-found');
});
Route::get('/lokasi-outlet', function () {
    return view('lokasi-outlet');
});
Route::get('/form-waralaba', function () {
    return view('formwaralaba');
});

