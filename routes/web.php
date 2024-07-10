<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\DashboardController;


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
    return view('layouts.public.home');
});

Route::get('/contact', function () {
    return view('layouts.public.contact');
});

Route::get('/about', function () {
    return view('layouts.public.about');
});

Route::get('/services', function () {
    return view('layouts.public.services');
});

Route::get('/skills', function () {
    return view('layouts.public.skills');
});

Route::get('/client', function () {
    return view('layouts.public.client');
});
// Route::get('/client/{id}', [ClientsController::class, 'show'])->name('client.show');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// routes/web.php
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/clients', [ClientsController::class, 'index'])->middleware('auth')->name('clients');

Route::resource('clients', ClientsController::class)->middleware('auth');
