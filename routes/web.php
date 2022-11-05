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

Route::get('registrarjuegos', 'App\Http\Controllers\micontrolador@registrarjuegos')->name('registrarjuegos');
Route::post('guardarjuegos', 'App\Http\Controllers\micontrolador@guardarjuegos')->name('guardarjuegos');

Route::get('consultajuegos', 'App\Http\Controllers\micontrolador@consultajuegos')->name('consultajuegos');
Route::get('eliminar/{id}', 'App\Http\Controllers\micontrolador@eliminarjuego')->name('eliminarjuego');

Route::get('muestra/{id}', 'App\Http\Controllers\micontrolador@muestrajuego')->name('muestrajuego');
Route::POST('editar/{id}', 'App\Http\Controllers\micontrolador@editajuego')->name('editarjuego');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
