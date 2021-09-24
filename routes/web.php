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


if (View::exists('vista1')){
    Route::get('/', function () {
        return view('vista1');
    });
}else{
    Route::get('/', function () {
        return 'La vista no existe';
    });
}

Route::get('/texto', function(){
    return 'esto es un texto de prueba';
});

Route::get('/arreglo', function(){
    $arreglo = ['lunes', 'martes', 'miercoles'];
    return $arreglo;
});

Route::get('/nombre/{nombre}', function($nombre){
    return '<h1>el nombre es>'.$nombre.'</h1>';
});

//ejemplo 4
Route::get('/cliente/{cliente?}', function($cliente='Cliente general'){
    return '<h1>el nombre es>'.$cliente.'</h1>';
});

//ejemplo 5
Route::get('/ruta1', function(){
    return '<h1>Esta es la ruta numero 1</h1>';
})->name('rutaNro1');

Route::get('/ruta2', function(){
   // return '<h1>Esta es la ruta numero 2</h1>';
   return redirect()->route('rutaNro1');
})->name('rutaNro2');

//ejemplo 6
Route::get('/usuario/{id}', function ($id) {
    return 'El id del usuario es '.$id;
})->where('id', '[0-9]+');//Aqui se validan con expresiones regulares (googlear)
//otra expresion regular seria solo texto [A-Za-z] solo mayusculas y minusculas
//otra seria [A-Z] solo mayusculas



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
