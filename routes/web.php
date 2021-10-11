<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
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
    return view('auth.login');
});

Route::get('/jojo', function () {
    return view('vista1');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('dash.dash');
})->name('dash');

Route::resource('/dash/crud','App\Http\Controllers\ArticuloController');


Route::middleware(['auth:sanctum', 'verified'])->resource('/dash/mascotas', 'App\Http\Controllers\MascotaController');
/*
Route::resource('/dash/mascotas','App\Http\Controllers\MascotaController');
*/

/*
Route::get('/dash/crud', function () {
    return view('crud.index');
});
*/
Route::get('/dash/create', function () {
    return view('crud.create');
});
