<?php

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

Route::get('/', function () {
    return view('app.dashboard');
})->name('dashboard');

Route::get('/profile', function () {
    return view('app.profile');
})->name('profile');

Route::get('/kepengurusan', function () {
    return view('app.kepengurusan');
})->name('kepengurusan');

Route::get('/kegiatan', function () {
    return view('app.kegiatan');
})->name('kegiatan');
