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

Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('dash.dash');
})->name('dash');

Route::resource('articulos','app\Http\Controllers\ArticuloController');

Route::get('/dash/crud', function () {
    return view('crud.index');
});

Route::get('/dash/create', function () {
    return view('crud.create');
});
