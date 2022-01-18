<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SonglistController;
use App\Http\Controllers\TopartistController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OutletWaralabaController;
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
Route::get('/news-detail', function () {
    return view('news-detail');
});
//login
Route::get('/login',[LoginController::class, 'index']);
Route::post('/login',[LoginController::class, 'login']);
Route::get('/logout', [loginController::class,'logout']);

//news-admin
Route::get('/news-admin',[NewsController::class, 'index']);
Route::get('/news-admin/delete/{id}',[NewsController::class, 'destroy']);
Route::put('/news-admin/update/{id}',[NewsController::class, 'update']);
Route::post('/news-admin/store',[NewsController::class, 'store']);

//songlist-admin
Route::get('/songlist-admin',[SonglistController::class, 'index']);
Route::get('/songlist-admin/delete/{id}',[SonglistController::class, 'destroy']);
Route::put('/songlist-admin/update/{id}',[SonglistController::class, 'update']);
Route::post('/songlist-admin/store',[SonglistController::class, 'store']);

//top artis
Route::get('/topartist-admin',[TopartistController::class, 'index']);
Route::get('/topartist-admin/delete/{id}',[TopartistController::class, 'destroy']);
Route::post('/topartist-admin/store',[TopartistController::class, 'store']);
Route::put('/topartist-admin/update/{id}',[TopartistController::class, 'update']);

//Outlet
Route::get('/outlet-admin',[OutletWaralabaController::class, 'index']);

//users

Route::get('/users-admin',[UsersController::class, 'index']);
Route::get('/users-admin/delete/{id}',[UsersController::class, 'destroy']);
Route::post('/users-admin/store',[UsersController::class, 'store']);
Route::put('/users-admin/update/{id}',[UsersController::class, 'update']);
