<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsUserController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\SonglistController;
use App\Http\Controllers\TopartistController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\KontakUserController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfilUserController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\RequestLaguController;
use App\Http\Controllers\RequestLaguUserController;
use App\Http\Controllers\KeluhanUserController;
use App\Http\Controllers\OutletWaralabaController;
use App\Http\Controllers\WaralabaController;
use App\Http\Controllers\JobEkspertiseController;
use App\Http\Controllers\SettingsController;
use App\Models\Settings;

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

//Home User
Route::get('/', [LandingController::class, 'index']);

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

//News User
Route::get('/news', [NewsUserController::class, 'index']);

//Profil User
Route::get('/profile', [ProfilUserController::class, 'index']);

Route::get('/daftar-lagu', function () {
    $settings = Settings::select('*')
    ->whereNotNull('value')
    ->get()
    ->pluck('value','key')
    ->toArray();
    return view('daftar-lagu',compact('settings'));
});
Route::get('/lokasi', function () {
    $settings = Settings::select('*')
    ->whereNotNull('value')
    ->get()
    ->pluck('value','key')
    ->toArray();
    return view('lokasi',compact('settings'));
});
// Route::get('/karir', function () {
//     return view('karir');
// });
Route::get('/waralaba', function () {
    $settings = Settings::select('*')
    ->whereNotNull('value')
    ->get()
    ->pluck('value','key')
    ->toArray();
    return view('waralaba',compact('settings'));
});
// Route::get('/kontak', function () {
//     return view('kontak');
// });
// Route::get('/formkarir', function () {
//     return view('formkarir');
// });
Route::get('/lokasi-not-found', function () {
    $settings = Settings::select('*')
    ->whereNotNull('value')
    ->get()
    ->pluck('value','key')
    ->toArray();
    return view('lokasi-not-found',compact('settings'));
});
Route::get('/lokasi-outlet', function () {
    $settings = Settings::select('*')
    ->whereNotNull('value')
    ->get()
    ->pluck('value','key')
    ->toArray();
    return view('lokasi-outlet',compact('settings'));
});


Route::get('/news/detail/{id}', [NewsUserController::class, 'detailIndex'])->name('detailNews');

//login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [loginController::class, 'logout']);

//news-admin
Route::get('/news-admin', [NewsController::class, 'index']);
Route::get('/news-admin/delete/{id}', [NewsController::class, 'destroy']);
Route::put('/news-admin/update/{id}', [NewsController::class, 'update']);
Route::post('/news-admin/store', [NewsController::class, 'store']);

//songlist-admin
Route::get('/songlist-admin', [SonglistController::class, 'index']);
Route::get('/songlist-admin/delete/{id}', [SonglistController::class, 'destroy']);
Route::put('/songlist-admin/update/{id}', [SonglistController::class, 'update']);
Route::post('/songlist-admin/store', [SonglistController::class, 'store']);

//top-artist
Route::get('/topartist-admin', [TopartistController::class, 'index']);
Route::get('/topartist-admin/delete/{id}', [TopartistController::class, 'destroy']);
Route::post('/topartist-admin/store', [TopartistController::class, 'store']);
Route::put('/topartist-admin/update/{id}', [TopartistController::class, 'update']);

//outlet
Route::get('/outlet-admin', [OutletWaralabaController::class, 'index']);
Route::get('/outlet-admin/delete/{id}', [OutletWaralabaController::class, 'destroy']);
Route::post('/outlet-admin/store', [OutletWaralabaController::class, 'store']);
Route::put('/outlet-admin/update/{id}', [OutletWaralabaController::class, 'update']);
Route::get('/search', [OutletWaralabaController::class, 'search'])->name('search');
Route::post('/getKotaById', [OutletWaralabaController::class, 'getKotaById'])->name('getKotaById');
Route::post('/getKecamatanById', [OutletWaralabaController::class, 'getKecamatanById'])->name('getKecamatanById');

//Karir
Route::get('/career-admin', [CareerController::class, 'adminIndex'])->name('career-admin');
Route::post('/career-admin/store', [CareerController::class, 'store'])->name('career.store');
Route::get('/career-admin/delete/{id}', [CareerController::class, 'destroy']);
Route::get('/karir', [JobsController::class, 'index']);
Route::get('/formkarir/{jobvacancy_id}', [CareerController::class, 'index'])->name('karirForm');
Route::post('/karir', [JobsController::class, 'filter'])->name('jobs.filter');
Route::get('/career-admin/{id}', [CareerController::class, 'detail'])->name('career.detail');

//waralaba
Route::get('/form-waralaba',[WaralabaController::class, 'form'])->name('formwaralaba');
Route::get('/getKota/{id}', [WaralabaController::class, 'GetKota']);
Route::get('/form-waralaba/store', [WaralabaController::class, 'store'])->name('waralaba.store');

//profil-admin
Route::get('/profil-admin', [ProfilController::class, 'index']);
Route::get('/profil-admin/delete/{id}', [ProfilController::class, 'destroy']);
Route::post('/profil-admin/store', [ProfilController::class, 'store']);
Route::put('/profil-admin/update/{id}', [ProfilController::class, 'update']);

//Kontak User
Route::get('/kontak', [KontakUserController::class, 'index']);
Route::post('/kontak/store', [KontakUserController::class, 'store']);
Route::post('/request/store', [RequestLaguUserController::class, 'store']);
Route::post('/keluhan/store', [KeluhanUserController::class, 'store']);

//KontakAdmin
Route::get('/kontak-admin', [KontakController::class, 'index']);

//Keluhan
Route::get('/keluhan-admin', [KeluhanController::class, 'index']);

//Request Admin Lagu
Route::get('/request-admin', [RequestLaguController::class, 'index']);

//users
Route::get('/users-admin', [UsersController::class, 'index']);
Route::get('/users-admin/delete/{id}', [UsersController::class, 'destroy']);
Route::post('/users-admin/store', [UsersController::class, 'store']);
Route::put('/users-admin/update/{id}', [UsersController::class, 'update']);

//jobvacancy
Route::get('/jobvacancy-admin', [JobsController::class, 'adminIndex']);
Route::get('/jobvacancy-admin/delete/{id}', [JobsController::class, 'destroy']);
Route::post('/jobvacancy-admin/store', [JobsController::class, 'store'])->name('jobvacancy.store');
Route::put('/jobvacancy-admin/update/{id}', [JobsController::class, 'update']);

//waralaba
Route::get('/waralaba-admin', [WaralabaController::class, 'index']);
Route::get('/waralaba-admin/delete/{id}', [WaralabaController::class, 'destroy']);

//settings social media
Route::get('/settings-admin', [SettingsController::class, 'index']);
Route::put('/settings-admin/update/{id}', [SettingsController::class, 'update']);
