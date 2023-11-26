<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('user.index');
// });

Route::resource('/', \App\Http\Controllers\HomeController::class);

Route::get('/admins', function () {
    return view('adminlayouts.index');
});

Route::resource('/home', \App\Http\Controllers\HomesController::class);

Route::resource('/tentangs', \App\Http\Controllers\TentangController::class);

Route::resource('/galeris', \App\Http\Controllers\GaleriController::class);

Route::resource('/services', \App\Http\Controllers\ServiceController::class);

Route::resource('/contact', \App\Http\Controllers\ContactController::class);

Route::resource('/contact-us', \App\Http\Controllers\ContactUsController::class);

Route::resource('/testimonies', \App\Http\Controllers\TestimoniController::class);

Route::get('index/search', [GaleriController::class, 'search']);

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admins', function () {
        return view('adminlayouts.index');
    });
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});


// Route::resource('/users', \App\Http\Controllers\UserController::class);

// Route::get('/gale', function() {
//     return view('admins.galeri.galeri');
// });

// Route::get('/galeri', function() {
//     return view('admins.galeri.galeri');
// });

Route::get('/articles', function() {
    return view('admins.artikel.articles');
});

Route::get('/tech', function () {
    return view('admins.artikel.tech');
});