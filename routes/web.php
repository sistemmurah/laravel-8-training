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
    return view('welcome');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/vehicle', [App\Http\Controllers\VehicleController::class, 'index'])->name('vehicle.index');

Route::get('/vehicle/tambah', [App\Http\Controllers\VehicleController::class, 'tambah'])->name('vehicle.tambah');
